<?php

namespace backend\modules\project84\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ForumTypeController implements the CRUD actions for ForumType model.
 */
class ReportSec3Controller extends Controller
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
    public function GetDataTb3($fromDate=null,$toDate=null,$colum,$sort)
    {
      self::CreateTableReportId();
      $report_id=self::CheckControlTb3($fromDate,$toDate);
      $datareport=self::GetDataTb3ByReportId($report_id,$colum,$sort);
      $datasum=self::GetDataSumTb3ByReportId($report_id);
      $data[datareport]=$datareport;
      $data[report_id]=$report_id;
      if($report_id==1){
        $data[datasumall]=$datasum;
      }
      else{
        $data[datasumall]=self::GetDataSumTb3ByReportId(1);
      }
      $data[datasum]=$datasum;
      return $data;
    }
    public function CreateTableReportId()
    {
      $sqlAddTable = 'CREATE TABLE IF NOT EXISTS project84_report_control_tb3(
        report_id INT(5) NOT NULL AUTO_INCREMENT,
        fromDate  DATE DEFAULT NULL,
        toDate  DATE DEFAULT NULL,
        lastcal datetime DEFAULT NULL,
        PRIMARY KEY (report_id)
    );';
      \Yii::$app->db->createCommand($sqlAddTable)->execute();
    }//public function CreateTableReportId

    public function CheckControlTb3($fromDate=null,$toDate=null)
    {
      if($fromDate==null && $toDate==null){
        $sqlCeckReportControlLast = "SELECT * FROM project84_report_control_tb3 WHERE report_id='1'";
        $dataCeckReportControlLast = Yii::$app->db->createCommand($sqlCeckReportControlLast)->queryAll();
        $datacount=count($dataCeckReportControlLast);
        if($datacount>0){
          //$dayLast=date('Y-m-d',strtotime($dataCeckReportControlLast[lastcal]));
          //$dayNow=date('Y-m-d');
          $dayLast=1;
          $dayNow=1;
          if($dayLast==$dayNow){
            $report_id=1;
          }else{
            $sqlAction="update";
            $report_id=1;
            $fromDate='2015-10-01';
            $toDate=date('Y-m-d');
            $lastcal=date('Y-m-d G:i:s');
            self::sqlReportControl($sqlAction,$report_id,$fromDate,$toDate,$lastcal);
          } //if($dayLast==$dayNow)
        }else{
          $sqlAction="insert";
          $report_id=1;
          $fromDate='2015-10-01';
          $toDate=date('Y-m-d');
          $lastcal=date('Y-m-d G:i:s');
          self::sqlReportControl($sqlAction,$report_id,$fromDate,$toDate,$lastcal);
        }//if($datacount==1)
      }else{
        $sqlCeckReportControlfrist = "SELECT * FROM project84_report_control_tb3 WHERE fromDate='$fromDate' and toDate='$toDate'";
        $dataCeckReportControlfrist = Yii::$app->db->createCommand($sqlCeckReportControlfrist)->queryAll();
        $datacountfrist=count($dataCeckReportControlfrist);
        if($datacountfrist > 0){
          $report_id=$dataCeckReportControlfrist[0][report_id];
        }else{
          $sqlCeckReportControlLast = "SELECT * FROM project84_report_control_tb3";
          $dataCeckReportControlLast = Yii::$app->db->createCommand($sqlCeckReportControlLast)->queryAll();
          $datacount=count($dataCeckReportControlLast);
          $lastcal=date('Y-m-d G:i:s');
          $report_id=$datacount+1;
          $sqlAction="insert";
          self::sqlReportControl($sqlAction,$report_id,$fromDate,$toDate,$lastcal);
        }//if($datacountfrist>0)

      }//if($fromDate==null && $toDate==null)
return $report_id;
    }//public function CheckControlTb3($fromDate=null,$toDate=null)

    public function sqlReportControl($sqlAction=null,$report_id=null,$fromDate=null,$toDate=null,$lastcal=null)
    {
      switch ($sqlAction) {
        case 'insert':
          $sqlInsertReportControl = "INSERT INTO project84_report_control_tb3 (`report_id`, `fromDate`, `toDate`,`lastcal`) VALUES (NULL, '$fromDate', '$toDate', '$lastcal')";
          \Yii::$app->db->createCommand($sqlInsertReportControl)->execute();
          self::CallProcedure($report_id,$fromDate,$toDate);
          break;
          case 'update':
          $sqlUpdateReportControl = "UPDATE project84_report_control_tb3 SET fromDate ='$fromDate',toDate ='$toDate',lastcal='$lastcal'  WHERE report_id='$report_id'";
          \Yii::$app->db->createCommand($sqlUpdateReportControl)->execute();
          self::CallProcedure($report_id,$fromDate,$toDate);
            break;
      }//switch
    }//sqlReportControl
    public function CallProcedure($report_id=null,$fromDate=null,$toDate=null)
    {
      $sqlProcedure = "CALL project84_tb3('$fromDate','$toDate','$report_id')";
      Yii::$app->db->createCommand($sqlProcedure)->execute();
    }//public function CallProcedure

    public function GetDataTb3ByReportId($report_id,$colum,$sort)
    {
      $sqlControl = "SELECT * FROM  project84_zone_p3 a LEFT JOIN project84_report_sec3 b on a.sitecode=b.sitecode WHERE report_id='$report_id' GROUP BY a.sitecode ORDER BY $colum $sort";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }//public function GetDataTb3ByReportId($report_id)

    public function GetDataSumTb3ByReportId($report_id)
    {
      $sql = "SELECT sum(resgis),sum(treat),sum(surgery),sum(c_surgery),sum(livrec),sum(livhilar),sum(hilar),sum(bypass),sum(biopsy),sum(needle_biopsy),sum(whipple),sum(chemo_all),sum(chemo_adjuvant),sum(ptbd),sum(endoscopic),sum(medication)  FROM  project84_report_sec3  where report_id='$report_id'";
      $dataProvider = Yii::$app->db->createCommand($sql)->queryAll();
      return $dataProvider;
    }//public function GetDataSumTb3ByReportId($report_id)
}//class
