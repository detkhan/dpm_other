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
class DrillDownSec1Controller extends Controller
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
     public function actionAjaxData($tamboncode=null,$report_id=null)
     {
       $render="drilldown_sec1";
       $checkadmin=self::CheckAdmin();
       $dataArrayDrillSec1=self::Getdata($tamboncode,$report_id);
       $datakpos=self::Getdataov($tamboncode,$report_id,"kpos");
       $datappos=self::Getdataov($tamboncode,$report_id,"ppos");
       $datafpos=self::Getdataov($tamboncode,$report_id,"fpos");
       $dataupos=self::Getdataov($tamboncode,$report_id,"upos");
       $url=$this->renderAjax($render, [
         'tamboncode' => $tamboncode,
         'report_id' => $report_id,
         'checkadmin'   => $checkadmin,
         'dataArrayDrillSec1'   => $dataArrayDrillSec1,
         'datakpos'   => $datakpos,
         'datappos'   => $datappos,
         'datafpos'   => $datafpos,
         'dataupos'   => $dataupos,
       ]);
       return  $url;
     }


     public function actionAjaxDataPerson($report_id=null)
     {
       $dataProvider=self::GetProvince($report_id);
       $render="drilldown_person_sec1";
       $url=$this->renderAjax($render, [
         'dataProvider' => $dataProvider,
         'report_id' => $report_id,
       ]);
       return  $url;

     }

     public function Getdata($tamboncode,$report_id)
     {
       $sql="SELECT * FROM  project84_report_sec1  where report_id='$report_id' and address='$tamboncode'";
       $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
       return $dataProvider;
     }

     public function Getdataov($tamboncode,$report_id,$fill)
     {
       $sql="SELECT sum(ov) as ov,sum(mif) as mif,sum(ss) as ss,sum(ech) as ech,sum(taenia) as taenia,sum(tt) as tt,sum(other) as other FROM  project84_tb1_data  where report_id='$report_id' and tamboncode='$tamboncode' and $fill='1'";
       $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
       return $dataProvider;
     }


public function GetProvince($report_id)
{
  $sql="SELECT province,provincecode FROM `project84_tb1_data` a INNER JOIN `all_hospital_thai` b ON a.sitecode=b.hcode WHERE  report_id='$report_id'   GROUP BY province ORDER BY province ASC";
  $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
  return $dataProvider;
}

public function GetAmphur($report_id,$provincecode)
{
  $sql="SELECT province,provincecode,amphurcode,amphur FROM `project84_tb1_data` a INNER JOIN `all_hospital_thai` b ON a.sitecode=b.hcode WHERE  report_id='$report_id'  and provincecode='$provincecode'  GROUP BY amphur ORDER BY amphur ASC";
  $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
  return $dataProvider;
}

public function GetTumbon($report_id,$provincecode,$amphurcode)
{
  $sql="SELECT tambon,amphurcode,amphur,province,provincecode,COUNT(ptid) as total
FROM `project84_tb1_data` a
INNER JOIN `all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
report_id='$report_id'  and amphurcode='$amphurcode' and provincecode='$provincecode'
GROUP BY tambon ORDER BY tambon ASC";
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
