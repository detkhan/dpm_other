<?php

namespace backend\modules\project84\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ForumTypeController implements the CRUD actions for ForumType model.
 */
class DrillDownSec3Controller extends Controller
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
     public function actionAjaxData($hsitecode=null,$report_id=null,$treat=null,$surgery=null,$c_surgery=null,$p_surgery=null)
     {
       $checkadmin=self::CheckAdmin();
       $render="drilldown_sec3";
       $dataget[]=array("treat"=>$treat,"surgery"=>$surgery,"c_surgery"=>$c_surgery,"p_surgery"=>$treat);
       $url=$this->renderAjax($render, [
         'hsitecode' => $hsitecode,
         'report_id' => $report_id,
         'dataget'   => $dataget,
         'checkadmin'   => $checkadmin,
       ]);
       return  $url;
     }

     public function actionAjaxDataPerson($report_id=null,$sitecode=null,$hsitecode=null)
     {
       $dataProvider=self::Getperson($report_id,$sitecode,$hsitecode);
       $countdata=count($dataProvider);
       //VarDumper::dump($dataProvider,10,true);

       if($countdata>0){
       $status="yes";
        }else{
       $status="no";
        }
       $render="drilldown_person_sec3";
       $url=$this->renderAjax($render, [
         'dataProvider' => $dataProvider,
         'status' => $status,
       ]);
       return  $url;
     }

public function GetProvince($hsitecode,$report_id)
{
  $sql="SELECT provincecode,province,hcode,sitecode,report_id,hsitecode,sum(treat) as treat FROM `project84_tb3_data` a INNER JOIN `all_hospital_thai` b ON a.sitecode=b.hcode WHERE hsitecode ='$hsitecode' AND report_id='$report_id' AND treat > '0' GROUP BY provincecode ORDER BY province ASC";
  $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
  return $dataProvider;
}

public function GetAmphur($hsitecode,$report_id,$provincecode)
{
  $sql="SELECT provincecode,amphurcode,amphur,hcode,sitecode,report_id,hsitecode,sum(treat) as treat FROM `project84_tb3_data` a INNER JOIN `all_hospital_thai` b ON a.sitecode=b.hcode WHERE hsitecode ='$hsitecode' AND report_id='$report_id' AND provincecode = '$provincecode' AND treat > '0' GROUP BY amphurcode ORDER BY amphurcode ASC";
  $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
  return $dataProvider;
}


public function GetHospital($hsitecode,$report_id,$provincecode,$amphurcode)
{
  $sql="SELECT provincecode,amphurcode,code9,`name`,hcode,sitecode,report_id,hsitecode,
  sum(treat) as treat,
  sum(surgery) as surgery,
  sum(c_surgery) as c_surgery,
  sum(livrec) as livrec,
  sum(livhilar) as livhilar,
  sum(hilar) as hilar,
  sum(bypass) as bypass,
  sum(biopsy) as biopsy,
  sum(needle_biopsy) as needle_biopsy,
  sum(whipple) as whipple,
  sum(chemo_all) as chemo_all,
  sum(chemo_adjuvant) as chemo_adjuvant,
  sum(ptbd) as ptbd,
  sum(endoscopic) as endoscopic,
  sum(medication) as medication
  FROM `project84_tb3_data` a INNER JOIN `all_hospital_thai` b ON a.sitecode=b.hcode WHERE hsitecode ='$hsitecode' AND report_id='$report_id' AND provincecode = '$provincecode' AND amphurcode='$amphurcode' AND treat > '0' GROUP BY `name` ORDER BY `code9` DESC";
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


public function Getperson($report_id,$sitecode=null,$hsitecode=null)
{
  $checkadmin=self::CheckAdmin();
  if ($checkadmin=="yes") {
$data="AND a.sitecode='$sitecode' AND a.hsitecode='$hsitecode'";
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
a.hsitecode,
a.sitecode,
report_id,
treat,
surgery,
c_surgery,
livrec,
livhilar,
hilar,
bypass,
biopsy,
needle_biopsy,
whipple,
chemo_all,
chemo_adjuvant,
ptbd,
endoscopic,
medication
  FROM `project84_tb3_data` a
INNER JOIN
`tb_data_1` b
ON a.ptid=b.ptid
    WHERE  report_id='$report_id' $data AND treat > '0' ORDER BY surgery DESC";
  $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
  //echo $sql;
  //exit();
  return $dataProvider;
}

public function GetIcon($data)
{
if($data>0){
  $checkicon='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:blue"></i>';
}else{
  $checkicon='';
}
return $checkicon;
}


public function actionCheckUserPermission()
{
$data=self::Getperson('1','13777');
$total=count($data);
echo $total;
exit();
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
