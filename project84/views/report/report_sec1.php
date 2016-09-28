<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\project84\controllers\ReportController;
Yii::$app->formatter->locale = 'th-TH';


?>
<div class="container">
<div class="alert alert-info" role="alert">
  <h4>ส่วนที่ 1 : รายงาน Primary prevention (คัดกรองพยาธิใบไม้ตับด้วยการตรวจอุจจาระและปัสสาวะ)</h4>
</div>
<h5>
        ผลงานตรวจอุจจาระและปัสสาวะ
        <label class="label label-primary"><?php echo number_format($dataReportSumAllSec1[0]["sum(treatov)"])   ?></label>ราย คิดเป็น
        <label class="label label-primary"><?php echo ReportController::calpercent($dataReportSumAllSec1[0]["sum(treatov)"],76000,"no") ?>%</label> จากเป้าหมายรวมทั้งประเทศ 76,000 ราย
</h5>
<div class="row">
  <div class="col-md-12">
<div class="progress-bar-success-head" role="progressbar" aria-valuenow="<?php   ?>" aria-valuemin="0" aria-valuemax="135000" style="width: <?php    ?>%"></div>
</div>
<div class="col-md-12">
<h5>
        ผลงานในช่วงวันที่ <? echo Yii::$app->formatter->asDate($datadate[fromDate], 'long')  ?> ถึงวันที่ <? echo Yii::$app->formatter->asDate($datadate[toDate], 'long')  ?> จำนวน
        <label class="label label-primary"><?php echo number_format($dataReportSumSec1[0]["sum(treatov)"])  ?></label>ราย คิดเป็น
        <label class="label label-primary"><?php echo ReportController::calpercent($dataReportSumSec1[0]["sum(treatov)"],76000,"no")  ?>%</label>
</h5>
</div>
<div class="col-md-12">
<div class="progress-bar-success-head" role="progressbar" aria-valuenow="<?php    ?>" aria-valuemin="0" aria-valuemax="135000" style="width: <?php   ?>%"></div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div id="report84-us-desc" class="alert alert-warning report84-desc">
ผลงานตรวจคัดกรองพยาธิใบไม้ตับ รวม <?php echo number_format($dataReportSumSec1[0]["sum(treatov)"])  ?> ราย ติดเชื้อ <?php echo number_format($dataReportSumSec1[0]["sum(ov)"])  ?> <?php echo ReportController::calpercent($dataReportSumSec1[0]["sum(ov)"],$dataReportSumSec1[0]["sum(treatov)"],"yes")  ?> ราย
</div>
</div>
</div>

 <div class="table-responsive">
<div id="report84-dynagrid-2-pjax"><div id="report84-dynagrid-2" data-krajee-grid="kvGridInit_adf683c2">
<div id="report84-dynagrid-2-container" class="table-responsive kv-grid-container">


<table  class="kv-grid-table table table-bordered table-striped"><thead>
<tr><th class="kv-align-center kv-align-middle" style="width:40px;">#</th>
<th class="kv-align-center kv-align-middle" style="width:50px;"><a href="#table_secshow1" id='sort30' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='zone'>เขต</a></th>
<th class="kv-align-middle" style="width:138px;"><a href="#table_secshow1" id='sort31' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='province'>จังหวัด</a></th>
<th class="kv-align-middle" style="width:138px;"><a href="#table_secshow1" id='sort31' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='amphur'>อำเภอ</a></th>
<th class="kv-align-middle" style="width:138px;"><a href="#table_secshow1" id='sort31' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='tambon'>ตำบล</a></th>
<th class="kv-align-center kv-align-middle" style="width:10%;"><a href="#table_secshow1" id='sort32' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum=''>ความก้าวหน้า</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort33' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='tccbot'>ประชากร</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort34' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='riskgroup'>เลือกกลุ่มเสี่ยง</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort35' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='icf'>มีใบยินยอม</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort36' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='register'>ลงทะเบียน</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort37' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='treatov'>ตรวจ OV</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort38' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='ov'>ติดเชื้อ OV</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort39' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='ov02'>ให้สุขศึกษา</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort40' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='1' colum='ov03'>ให้การรักษา</a></th></tr>

</thead>
<tbody>
  <!-- TABLE DATA -->

    <?php
    $num=1;
    foreach ($dataProviderSec1 as $keysec1) {
     ?>
    <tr data-key="0">
    <td class="kv-align-center kv-align-middle" style="width:40px;"><?php  echo $num  ?></td>
    <td class="kv-align-center kv-align-middle" style="width:50px;"><?php echo $keysec1[zone]   ?></td>
    <td class="kv-align-middle" style="width:138px;"><a id="drilldown" report_id="<?php  echo $report_id  ?>" tamboncode="<?php echo $keysec1[address]   ?>" title="<?php echo $keysec1[province]   ?>" sec="1"  data-toggle="modal" data-target="#myModal"><?php echo $keysec1[province]   ?></a></td>
    <td class="kv-align-middle" style="width:138px;"><a id="drilldown" report_id="<?php  echo $report_id  ?>" tamboncode="<?php echo $keysec1[address]   ?>" title="<?php echo $keysec1[province]   ?>" sec="1"  data-toggle="modal" data-target="#myModal"><?php echo $keysec1[amphur]   ?></a></td>
    <td class="kv-align-middle" style="width:138px;"><a id="drilldown" report_id="<?php  echo $report_id  ?>" tamboncode="<?php echo $keysec1[address]   ?>" title="<?php echo $keysec1[province]   ?>" sec="1"  data-toggle="modal" data-target="#myModal"><?php echo $keysec1[tambon]   ?></a></td>
    <td class="kv-align-center kv-align-middle" style="width:10%;"><div onmouseover="$(this).popover('show')" onmouseout="$(this).popover('hide')" data-toggle="popover" data-html="true" data-placement="top" data-content="<?php echo $keysec1[treatov]   ?><?php echo ReportController::calpercent($keysec1[treatov],905,"yes")    ?>">
    <div id="w88" class="progress"><div class="progress-bar-success progress-bar" role="progressbar" aria-valuenow="229.4" aria-valuemin="0" aria-valuemax="100" style="/*min-width: 2em;*/ max-width: 100%; width:<?php echo ReportController::calpercent($keysec1[treatov],905,"no")    ?>%;">
      <span class="sr-only"><?php    ?>% Complete</span></div>
    </div>
    </div>
    </td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec1[tccbot]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo$keysec1[riskgroup] ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec1[icf]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec1[register]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec1[treatov]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec1[ov]  ?><?php echo ReportController::calpercent($keysec1[ov],$keysec1[treatov],"yes")   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec1[ov02]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec1[ov03]   ?></td></tr>
    <?php
    $sumriskgroup+=$keysec1[riskgroup];
    $sumicf+=$keysec1[icf];
    $sumregister+=$keysec1[register];
    $sumtreatov+=$keysec1[treatov];
    $sumrovpos+=$keysec1[ov];
    $sumov02+=$keysec1[ov02];
    $sumov03+=$keysec1[ov03];
    $num++;
    }
    ?>

<tr class="kv-page-summary warning">
<td class="kv-align-center kv-align-middle" style="width:40px;">&nbsp;</td>
<td class="kv-align-center kv-align-middle" style="width:80px;">&nbsp;</td>
<td class="kv-align-center kv-align-middle" style="width:10%;">&nbsp;</td>
<td class="kv-align-center kv-align-middle" style="width:10%;">&nbsp;</td>
<td class="kv-align-center kv-align-middle" style="width:10%;">&nbsp;</td>
<td class="kv-align-middle">รวม</td>
<td class="kv-align-right kv-align-middle"><?php   ?></td>
<td class="kv-align-right kv-align-middle"><?= $sumriskgroup  ?></td>
<td class="kv-align-right kv-align-middle"><?= $sumicf    ?></td>
<td class="kv-align-right kv-align-middle"><?= $sumregister   ?></td>
<td class="kv-align-right kv-align-middle"><?= $sumtreatov    ?></td>
<td class="kv-align-right kv-align-middle"><?= $sumrovpos    ?><?php echo ReportController::calpercent($sumrovpos,$sumtreatov,"yes")   ?></td>
<td class="kv-align-right kv-align-middle"><?= $sumov02    ?></td>
<td class="kv-align-right kv-align-middle"><?= $sumov03    ?></td>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
<?php
$jsAdd =<<< JS
var sort="$sort";
switch (sort) {
    case "asc":
  var data_sortadd=$("#$div").attr("data-sort","desc");
        break;
        case "desc":
var data_sortadd=$("#$div").attr("data-sort","asc");
}

JS;
$this->registerJs($jsAdd);
?>
