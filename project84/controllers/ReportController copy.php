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
          $dataArraySec3 = ReportSec3Controller::GetDataTb3($fromDate,$toDate,'treat','DESC');
          $dataArraySec2 = ReportSec2Controller::GetDataTb2($dataArraySec3[report_id],'cca02','DESC');
      $dataProviderSec3=$dataArraySec3[datareport];
      $dataReportSumSec3=$dataArraySec3[datasum];
      $dataReportSumAllSec3=$dataArraySec3[datasumall];
      $dataProviderSec2=$dataArraySec2[datareport];
      $dataReportSumSec2=$dataArraySec2[datasum];
      $dataReportSumAllSec2=$dataArraySec2[datasumall];
      $datadate[fromDate]=$fromDate;
      $datadate[toDate]=$toDate;
      $report_id=$dataArraySec3[report_id];
          $url=$this->render($render, [
            'dataProviderSec2' => $dataProviderSec2,
            'dataReportSumSec2' => $dataReportSumSec2,
            'dataReportSumAllSec2' => $dataReportSumAllSec2,
              'dataProviderSec3' => $dataProviderSec3,
              'dataReportSumSec3' => $dataReportSumSec3,
              'dataReportSumAllSec3' => $dataReportSumAllSec3,
              'datadate' => $datadate,
              'report_id' => $report_id,
          ]);

        return  $url;
    }//public function actionIndex()


    public function actionGetDataSort($fromDate=null,$toDate=null,$colum=null,$sort=null,$sec=null,$div=null)
    {
      switch ($sec) {
        case '2':
          $render="report_sec2";
          $dataArraySec3 = ReportSec3Controller::GetDataTb3($fromDate,$toDate,'treat','DESC');
          $dataArraySec2 = ReportSec2Controller::GetDataTb2($dataArraySec3[report_id],$colum,$sort);
          break;
          case '3':
          $render="report_sec3";
          $dataArraySec3 = ReportSec3Controller::GetDataTb3($fromDate,$toDate,$colum,$sort);
          $dataArraySec2 = ReportSec2Controller::GetDataTb2($dataArraySec3[report_id],'cca02','DESC');
          break;
      }
      $dataProviderSec3=$dataArraySec3[datareport];
      $dataReportSumSec3=$dataArraySec3[datasum];
      $dataReportSumAllSec3=$dataArraySec3[datasumall];
      $dataProviderSec2=$dataArraySec2[datareport];
      $dataReportSumSec2=$dataArraySec2[datasum];
      $dataReportSumAllSec2=$dataArraySec2[datasumall];
      $datadate[fromDate]=$fromDate;
      $datadate[toDate]=$toDate;
          $url=$this->renderAjax($render, [
            'dataProviderSec2' => $dataProviderSec2,
            'dataReportSumSec2' => $dataReportSumSec2,
            'dataReportSumAllSec2' => $dataReportSumAllSec2,
              'dataProviderSec3' => $dataProviderSec3,
              'dataReportSumSec3' => $dataReportSumSec3,
              'dataReportSumAllSec3' => $dataReportSumAllSec3,
              'datadate' => $datadate,
              'div' => $div,
              'sort' => $sort,
          ]);
          return  $url;
    }

}//class
