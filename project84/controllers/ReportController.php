<?php

namespace backend\modules\project84\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\modules\project84\controllers\ReportSec3Controller;

/**
 * ForumTypeController implements the CRUD actions for ForumType model.
 */
class ReportController extends Controller
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
    public function actionIndex($fromDate=null,$toDate=null)
    {

          $render="index";
          $url=$this->render($render);

        return  $url;
    }//public function actionIndex()


    public function actionGetDataSort($fromDate=null,$toDate=null,$colum=null,$sort=null,$sec=null,$div=null)
    {
      switch ($sec) {
        case '1':
          $render="report_sec1";
          $dataArraySec3 = ReportSec3Controller::GetDataTb3($fromDate,$toDate,'treat','DESC');
          $dataArraySec1 = ReportSec1Controller::GetDataTb1($dataArraySec3[report_id],$colum,$sort);
          break;
        case '2':
          $render="report_sec2";
          $dataArraySec3 = ReportSec3Controller::GetDataTb3($fromDate,$toDate,'treat','DESC');
          $dataArraySec2 = ReportSec2Controller::GetDataTb2($dataArraySec3[report_id],$colum,$sort);
          break;
          case '3':
          $render="report_sec3";
          $dataArraySec3 = ReportSec3Controller::GetDataTb3($fromDate,$toDate,$colum,$sort);
          break;
      }
      $dataProviderSec3=$dataArraySec3[datareport];
      $dataReportSumSec3=$dataArraySec3[datasum];
      $dataReportSumAllSec3=$dataArraySec3[datasumall];
      $dataProviderSec2=$dataArraySec2[datareport];
      $dataReportSumSec2=$dataArraySec2[datasum];
      $dataReportSumAllSec2=$dataArraySec2[datasumall];
      $dataProviderSec1=$dataArraySec1[datareport];
      $dataReportSumSec1=$dataArraySec1[datasum];
      $dataReportSumAllSec1=$dataArraySec1[datasumall];
      $datadate[fromDate]=$fromDate;
      $datadate[toDate]=$toDate;
      $report_id=$dataArraySec3[report_id];
          $url=$this->renderAjax($render, [
            'dataProviderSec1' => $dataProviderSec1,
            'dataReportSumSec1' => $dataReportSumSec1,
            'dataReportSumAllSec1' => $dataReportSumAllSec1,
            'dataProviderSec2' => $dataProviderSec2,
            'dataReportSumSec2' => $dataReportSumSec2,
            'dataReportSumAllSec2' => $dataReportSumAllSec2,
              'dataProviderSec3' => $dataProviderSec3,
              'dataReportSumSec3' => $dataReportSumSec3,
              'dataReportSumAllSec3' => $dataReportSumAllSec3,
              'datadate' => $datadate,
              'div' => $div,
              'sort' => $sort,
              'report_id' => $report_id,
          ]);
          return  $url;
    }


    public function calpercent($value1,$value2,$str)
    {
    if ($value1==0 || $value2==0) {
    $result1='';
    }else{
    $result1=number_format(($value1/$value2)*100,1);
    if ($str=="yes") {
    $result="(".$result1."%)";
    }else{
    $result=$result1;
    }
    }

    return $result;
    }

}//class
