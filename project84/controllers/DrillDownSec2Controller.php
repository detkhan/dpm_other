<?php

namespace backend\modules\project84\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;

/**
 * ForumTypeController implements the CRUD actions for ForumType model.
 */
class DrillDownSec2Controller extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ForumType models.
     * @return mixed
     */
     public function actionAjaxData($provincecode=null,$report_id=null,$province_name=null,$sumtotal=null)
     {
       $render="drilldown_sec2";
       $checkadmin=self::CheckAdmin();
       $url=$this->renderAjax($render, [
         'provincecode' => $provincecode,
         'report_id' => $report_id,
         'province_name' => $province_name,
         'sumtotal' => $sumtotal,
         'checkadmin'   => $checkadmin,
       ]);
       return  $url;
     }


     public function actionAjaxDataPerson($report_id=null,$sitecode=null,$hsitecode=null)
     {
       $checkadmin=self::CheckAdmin();
       if ($sitecode!="") {
     $data=$sitecode;
       }else{
       $sitecode=Yii::$app->user->identity->userProfile->sitecode;
     $data=$sitecode;
       }
       $hosname=self::GetHospitalName($data);
      $dataProvider=self::Getperson($report_id,$sitecode);
      $countdata=count($dataProvider);
      //VarDumper::dump($dataProvider,10,true);

      if($countdata>0){
      $status="yes";
       }else{
      $status="no";
       }
       $render="drilldown_person_sec2";
       $url=$this->renderAjax($render, [
         'dataProvider' => $dataProvider,
         'hosname' => $hosname,
         'status' => $status,
       ]);
       return  $url;

     }

     public function GetHospitalName($sitecode)
     {
       $sql="SELECT name,amphur,province FROM  `all_hospital_thai` WHERE hcode='$sitecode'";
       $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
       return $dataProvider;
     }


public function GetAmphur($report_id,$provincecode)
{
  $sql="SELECT provincecode,amphurcode,amphur,hcode,sitecode,report_id FROM `project84_tb2_data` a INNER JOIN `all_hospital_thai` b ON a.sitecode=b.hcode WHERE  report_id='$report_id' AND provincecode = '$provincecode'  GROUP BY amphurcode ORDER BY amphurcode ASC";
  $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
  return $dataProvider;
}


public function GetHospital($report_id,$provincecode,$amphurcode)
{
  $sql="SELECT provincecode,amphurcode,code9,`name`,hcode,sitecode,report_id,
  COUNT(DISTINCT ptid) AS nall,
  COUNT(DISTINCT IF(cca02=1,ptid,NULL)) AS cca02,
  COUNT(DISTINCT IF(abnormal=1,ptid,NULL)) AS abnormal,
  COUNT(DISTINCT IF(suspected=1,ptid,NULL)) AS suspected,
  COUNT(DISTINCT IF(cca02=2 AND ctmri=1,ptid,NULL)) AS ctmri,
  COUNT(DISTINCT IF(cca02=2 AND cca=1,ptid,NULL)) AS cca,
  COUNT(DISTINCT IF(cca02=2 AND cca=1 AND ctmri=1 AND treated=1,ptid,NULL)) AS treated
  FROM `project84_tb2_data` a INNER JOIN `all_hospital_thai` b ON a.sitecode=b.hcode WHERE  report_id='$report_id' AND provincecode = '$provincecode' AND amphurcode='$amphurcode'  GROUP BY `name` ORDER BY `code9` DESC";
  $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
  return $dataProvider;
}

public function ShortName($name)
{
$hospital_name=str_replace("โรงพยาบาล","รพ.",$name);
$hospital_name=str_replace("ส่งเสริมสุขภาพตำบล","สต.",$hospital_name);
$hospital_name=str_replace("สถานีอนามัย","สอ.",$hospital_name);
$hospital_name=str_replace("สำนักงานสาธารณสุขอำเภอ","สสอ.",$hospital_name);
$hospital_name=str_replace("สำนักงานสาธารณสุขจังหวัด","สสจ.",$hospital_name);
return $hospital_name;
}


public function Getperson($report_id,$sitecode)
{
  $checkadmin=self::CheckAdmin();
  if ($checkadmin=="yes") {
$data="AND a.sitecode='$sitecode'";
  }else{
  $sitecode=Yii::$app->user->identity->userProfile->sitecode;
$data="AND a.sitecode='$sitecode'" ;
  }
$sql="SELECT
DISTINCT(a.ptid),
title,
`name`,
surname,
a.target,
a.sitecode,
report_id,
cca02,
abnormal,
suspected,
IF(cca02=2 AND ctmri=1,1,0) AS ctmri,
IF(cca02=2 AND cca=1,1,0) AS cca,
IF(cca02=2 AND cca=1 AND ctmri=1 AND treated=1,1,0) AS treated
FROM `project84_tb2_data` a
INNER JOIN
`tb_data_1` b
ON a.ptid=b.ptid
WHERE  report_id='$report_id' $data  AND cca02 > '0' ORDER BY cca DESC";
  $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
  return $dataProvider;
}

public function CheckAdmin()
{
$user_id=Yii::$app->user->identity->userProfile->user_id;
$sqlControl = "SELECT
user_id
FROM
`rbac_auth_assignment`
WHERE
`item_name`
LIKE '%administrator%'
AND user_id='$user_id'
";
$dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
$countadmin=count($dataProvider);
if ($countadmin>0) {
  $admin ="yes";
}else{
  $admin ="no";
}
return $admin;
}

}//class
