<?php

namespace backend\modules\project84\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ForumTypeController implements the CRUD actions for ForumType model.
 */
class ReportSec2Controller extends Controller
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
    public function GetDataTb2($report_id,$colum,$sort)
    {
      $datareport=self::GetDataTb2ByReportId($report_id,$colum,$sort);
      $datasum=self::GetDataSumTb2ByReportId($report_id);
      $data[datareport]=$datareport;
      if($report_id==1){
        $data[datasumall]=$datasum;
      }
      else{
        $data[datasumall]=self::GetDataSumTb2ByReportId(1);
      }
      $data[datasum]=$datasum;
      return $data;
    }
    public function GetDataTb2ByReportId($report_id,$colum,$sort)
    {
      $sqlControl = "SELECT * FROM   project84_report_sec2 a INNER JOIN project84_report_sec2_target b ON a.provincecode=b.provincecode  ORDER BY $colum $sort";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }//public function GetDataTb3ByReportId($report_id)

    public function GetDataSumTb2ByReportId($report_id)
    {
      $sql = "SELECT sum(nall),sum(cca02),sum(abnormal),sum(suspected),sum(ctmri),sum(cca),sum(treated),sum(target)  FROM  project84_report_sec2 a INNER JOIN project84_report_sec2_target b ON a.provincecode=b.provincecode where report_id='$report_id'";
      $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
      return $dataProvider;
    }//public function GetDataSumTb3ByReportId($report_id)
}//class
