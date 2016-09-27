<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\project84\controllers\ReportController;



?>
<div class="container">
<div class="alert alert-info" role="alert">
  <h4>ส่วนที่ 1 : รายงาน Primary prevention (คัดกรองพยาธิใบไม้ตับด้วยการตรวจอุจจาระและปัสสาวะ)</h4>
</div>
<h5>
        ผลงานตรวจอุจจาระและปัสสาวะ
        <label class="label label-primary"><?php    ?></label>ราย คิดเป็น
        <label class="label label-primary"><?php  ?>%</label> จากเป้าหมายรวมทั้งประเทศ 76,000 ราย
</h5>
<div class="row">
  <div class="col-md-12">
<div class="progress-bar-success-head" role="progressbar" aria-valuenow="<?php   ?>" aria-valuemin="0" aria-valuemax="135000" style="width: <?php    ?>%"></div>
</div>
<div class="col-md-12">
<h5>
        ผลงานในช่วงวันที่ 1 ตุลาคม 2558 ถึงวันที่ 26 กันยายน 2559 จำนวน
        <label class="label label-primary"><?php   ?></label>ราย คิดเป็น
        <label class="label label-primary"><?php    ?>%</label>
</h5>
</div>
<div class="col-md-12">
<div class="progress-bar-success-head" role="progressbar" aria-valuenow="<?php    ?>" aria-valuemin="0" aria-valuemax="135000" style="width: <?php   ?>%"></div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div id="report84-us-desc" class="alert alert-warning report84-desc">
ผลงานตรวจคัดกรองพยาธิใบไม้ตับ รวม 75,068 ราย ติดเชื้อ 5,383 (7.2 %) ราย
</div>
</div>
</div>

 <div class="table-responsive">
<div id="report84-dynagrid-2-pjax"><div id="report84-dynagrid-2" data-krajee-grid="kvGridInit_adf683c2">
<div id="report84-dynagrid-2-container" class="table-responsive kv-grid-container">


<table  class="kv-grid-table table table-bordered table-striped"><thead>
<tr><th class="kv-align-center kv-align-middle" style="width:40px;">#</th>
<th class="kv-align-center kv-align-middle" style="width:50px;"><a href="#table_secshow1" id='sort1' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='zone'>เขต</a></th>
<th class="kv-align-middle" style="width:138px;"><a href="#table_secshow1" id='sort2' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='a.provincecode'>จังหวัด</a></th>
<th class="kv-align-middle" style="width:138px;"><a href="#table_secshow1" id='sort2' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='a.provincecode'>อำเภอ</a></th>
<th class="kv-align-middle" style="width:138px;"><a href="#table_secshow1" id='sort2' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='a.provincecode'>ตำบล</a></th>
<th class="kv-align-center kv-align-middle" style="width:10%;"><a href="#table_secshow1" id='sort3' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum=''>ความก้าวหน้า</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort4' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='nall'>ประชากร</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort5' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='target'>เลือกกลุ่มเสี่ยง</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort6' data-sort='desc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='cca02'>มีใบยินยอม</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort7' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='abnormal'>ลงทะเบียน</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort8' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='suspected'>ตรวจ OV</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort9' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='ctmri'>ติดเชื้อ OV</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort10' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='cca'>ให้สุขศึกษา</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow1" id='sort11' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='treated'>ให้การรักษา</a></th></tr>

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
    <td class="kv-align-middle" style="width:138px;"><a id="drilldown" report_id="<?php  echo $report_id  ?>" provincecode="<?php echo $keysec1[provincecode]   ?>" title="<?php echo $keysec1[province]   ?>" sec="2"  data-toggle="modal" data-target="#myModal"><?php echo $keysec1[province]   ?></a></td>
    <td class="kv-align-middle" style="width:138px;"><a id="drilldown" report_id="<?php  echo $report_id  ?>" provincecode="<?php echo $keysec1[provincecode]   ?>" title="<?php echo $keysec1[province]   ?>" sec="2"  data-toggle="modal" data-target="#myModal"><?php echo $keysec1[amphur]   ?></a></td>
    <td class="kv-align-middle" style="width:138px;"><a id="drilldown" report_id="<?php  echo $report_id  ?>" provincecode="<?php echo $keysec1[provincecode]   ?>" title="<?php echo $keysec1[province]   ?>" sec="2"  data-toggle="modal" data-target="#myModal"><?php echo $keysec1[tambon]   ?></a></td>
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
