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
class ReportSec1Controller extends Controller
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
    public function GetDataTb1($report_id,$colum,$sort)
    {
      $datareport=self::GetDataTb1ByReportId($report_id,$colum,$sort);
      $datasum=self::GetDataSumTb1ByReportId($report_id);
      $data[datareport]=$datareport;
      if($report_id==1){
        $data[datasumall]=$datasum;
      }
      else{
        $data[datasumall]=self::GetDataSumTb1ByReportId($report_id);
      }
      $data[datasum]=$datasum;
      return $data;
    }
    public function GetDataTb1ByReportId($report_id,$colum,$sort)
    {
      $sqlControl = "SELECT * FROM   project84_report_sec1  ORDER BY $colum $sort";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }//public function GetDataTb3ByReportId($report_id)

    public function GetDataSumTb1ByReportId($report_id)
    {
      $sql = "SELECT sum(riskgroup),sum(icf),sum(register),sum(treatov),sum(ov),sum(ov02),sum(ov03) FROM  project84_report_sec1  where report_id='$report_id'";
      $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
      return $dataProvider;
    }//public function GetDataSumTb3ByReportId($report_id)

    public function actionTest()
    {
$dataProviderSec1=self::GetDataTb1ByReportId(1,"treatov","desc");
return $this->render('report_sec1', [
    'dataProviderSec1' => $dataProviderSec1
]);
    }//public function GetDataTb3ByReportId($report_id)

}//class
