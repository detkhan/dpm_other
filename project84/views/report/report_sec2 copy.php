<?php

use yii\helpers\Html;
use yii\grid\GridView;




?>
<div class="container">
<div class="alert alert-info" role="alert">
  <h4>ส่วนที่ 2 : รายงาน Secondary prevention (คัดกรองมะเร็งท่อน้ำดีด้วยการตรวจอัลตราซาวด์)</h4>
</div>
<h5>
        ผลงานตรวจอัลตร้าซาวด์
        <label class="label label-primary"><?php echo $dataReportSumAllSec2[0]["sum(cca02)"]   ?></label>ราย คิดเป็น
        <label class="label label-primary"><?php echo number_format(($dataReportSumAllSec2[0]["sum(cca02)"]/135000)*100,2)   ?>%</label> จากเป้าหมายรวมทั้งประเทศ 135,000 ราย
</h5>
<div class="row">
  <div class="col-md-12">
<div class="progress-bar-success-head" role="progressbar" aria-valuenow="<?php echo number_format(($dataReportSumAllSec2[0]["sum(cca02)"]/135000)*100,2)   ?>" aria-valuemin="0" aria-valuemax="135000" style="width: <?php echo number_format(($dataReportSumAllSec2[0]["sum(cca02)"]/135000)*100,2)   ?>%"></div>
</div>
<div class="col-md-12">
<h5>
        ผลงานในช่วงวันที่ 1 ตุลาคม 2558 ถึงวันที่ 24 สิงหาคม 2559 จำนวน
        <label class="label label-primary"><?php echo $dataReportSumSec2[0]["sum(cca02)"]   ?></label>ราย คิดเป็น
        <label class="label label-primary"><?php echo number_format(($dataReportSumSec2[0]["sum(cca02)"]/135000)*100,2)   ?>%</label>
</h5>
</div>
<div class="col-md-12">
<div class="progress-bar-success-head" role="progressbar" aria-valuenow="<?php echo number_format(($dataReportSumSec2[0]["sum(cca02)"]/135000)*100,2)   ?>" aria-valuemin="0" aria-valuemax="135000" style="width: <?php echo number_format(($dataReportSumSec2[0]["sum(cca02)"]/135000)*100,2)   ?>%"></div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div id="report84-us-desc" class="alert alert-warning report84-desc">
        ผลงานตรวจคัดกรองมะเร็งท่อน้ำดี รวม <?php echo $dataReportSumSec2[0]["sum(cca02)"]   ?> ราย ผิดปกติจำนวน <?php echo $dataReportSumSec2[0]["sum(abnormal)"]   ?> (<?php echo number_format(($dataReportSumSec2[0]["sum(abnormal)"]/$dataReportSumSec2[0]["sum(cca02)"])*100,2)   ?> %) ราย สงสัย CCA จำนวน <?php echo $dataReportSumSec2[0]["sum(suspected)"] ?> (<?php echo number_format(($dataReportSumSec2[0]["sum(suspected)"]/$dataReportSumSec2[0]["sum(cca02)"])*100,2)   ?> %) ราย<br>เข้ารับ CT/MRI จำนวน <?php echo $dataReportSumSec2[0]["sum(ctmri)"] ?> (<?php echo number_format(($dataReportSumSec2[0]["sum(ctmri)"]/$dataReportSumSec2[0]["sum(cca02)"])*100,2)   ?> %) ราย ผลยืนยันเป็น CCA จำนวน <?php echo $dataReportSumSec2[0]["sum(cca)"] ?> ราย คิดเป็น <?php echo number_format(($dataReportSumSec2[0]["sum(cca)"]/$dataReportSumSec2[0]["sum(ctmri)"])*100,2)   ?> % ของผู้มาตรวจ CT/MRI และคิดเป็น <?php echo number_format(($dataReportSumSec2[0]["sum(cca)"]/$dataReportSumSec2[0]["sum(cca02)"])*100,2)   ?> % ของผู้มาตรวจอัลตร้าซาวด์
</div>
</div>
</div>

 <div class="table-responsive">
<div id="report84-dynagrid-2-pjax"><div id="report84-dynagrid-2" data-krajee-grid="kvGridInit_adf683c2">
<div id="report84-dynagrid-2-container" class="table-responsive kv-grid-container">


<table  class="kv-grid-table table table-bordered table-striped"><thead>
<tr><th class="kv-align-center kv-align-middle" style="width:40px;">#</th>
<th class="kv-align-center kv-align-middle" style="width:50px;"><a href="#table_secshow2" id='sort1' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='zone'>เขต</a></th>
<th class="kv-align-middle" style="width:138px;"><a href="#table_secshow2" id='sort2' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='a.provincecode'>จังหวัด</a></th>
<th class="kv-align-center kv-align-middle" style="width:10%;"><a href="#table_secshow2" id='sort3' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum=''>ความก้าวหน้า</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow2" id='sort4' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='nall'>ลงทะเบียน</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow2" id='sort5' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='target'>เป้าหมาย</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow2" id='sort6' data-sort='desc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='cca02'>อัลตร้าซาวด์</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow2" id='sort7' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='abnormal'>ผิดปกติอย่างใดอย่างหนึ่ง</a></th>
<th class="kv-align-right kv-align-middle" style="width:130px;"><a href="#table_secshow2" id='sort8' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='suspected'>สงสัย CCA</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow2" id='sort9' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='ctmri'>CT / MRI</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow2" id='sort10' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='cca'>พบเป็นมะเร็ง</a></th>
<th class="kv-align-right kv-align-middle"><a href="#table_secshow2" id='sort11' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='treated'>ได้รับการรักษา</a></th></tr>

</thead>
</table>
<div class="containBody">
<table  class="tbl_headerFix" border="1">
<tbody>
  <!-- TABLE DATA -->

    <?php
    $num=1;
    foreach ($dataProviderSec2 as $keysec2) {
     ?>
    <tr data-key="0">
    <td class="kv-align-center kv-align-middle" style="width:40px;"><?php  echo $num  ?></td>
    <td class="kv-align-center kv-align-middle" style="width:50px;"><?php echo $keysec2[zone]   ?></td>
    <td class="kv-align-middle" style="width:138px;"><a id="drilldown" report_id="<?php  echo $report_id  ?>" provincecode="<?php echo $keysec2[provincecode]   ?>" title="<?php echo $keysec2[province]   ?>" sec="2"  data-toggle="modal" data-target="#myModal"><?php echo $keysec2[province]   ?></a></td>
    <td class="kv-align-center kv-align-middle" style="width:10%;"><div onmouseover="$(this).popover('show')" onmouseout="$(this).popover('hide')" data-toggle="popover" data-html="true" data-placement="top" data-content="<?php echo $keysec2[nall]   ?>(<?php echo number_format(($keysec2[cca02]/$keysec2[target])*100,2)   ?> %)">
    <div id="w88" class="progress"><div class="progress-bar-success progress-bar" role="progressbar" aria-valuenow="229.4" aria-valuemin="0" aria-valuemax="100" style="/*min-width: 2em;*/ max-width: 100%; width: <?php echo number_format(($keysec2[cca02]/$keysec2[target])*100,2)   ?>%;">
      <span class="sr-only"><?php echo number_format(($keysec2[cca02]/$keysec2[target])*100,2)   ?>% Complete</span></div>
    </div>
    </div>
    </td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec2[nall]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo$keysec2[target] ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec2[cca02]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec2[abnormal]   ?>
    <div style="height: 41px; width: 82px; position: absolute; margin: -30px 0px 0px -8px;" onmouseover="$(this).popover('show')" onmouseout="$(this).popover('hide')" data-toggle="popover" data-html="true" data-placement="top" data-content="<?php echo $keysec2[abnormal]   ?>(<?php echo  ($keysec2[cca02]>0?number_format(($keysec2[abnormal]/$keysec2[cca02])*100,2):0) ;  ?>%)"></div></td>
    <td class="kv-align-right kv-align-middle" style="width:130px;"><?php echo $keysec2[suspected]   ?>(<?php echo  ($keysec2[cca02]>0? number_format(($keysec2[suspected]/$keysec2[cca02])*100,2):0);   ?>%)</td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec2[ctmri]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec2[cca]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $keysec2[treated]   ?> (<?php echo  ($keysec2[cca]>0 ? number_format(($keysec2[treated]/$keysec2[cca])*100,2):0); ?>%)</td></tr>
    <?php
    $num++;
    }
    ?>

<tr class="kv-page-summary warning"><td class="kv-align-center kv-align-middle" style="width:40px;">&nbsp;</td>
<td class="kv-align-center kv-align-middle" style="width:80px;">&nbsp;</td>
<td class="kv-align-middle">รวม</td>
<td class="kv-align-center kv-align-middle" style="width:10%;">&nbsp;</td>
<td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(nall)"]   ?></td>
<td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(target)"]   ?></td>
<td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(cca02)"]   ?></td>
<td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(abnormal)"]   ?></td>
<td class="kv-align-right kv-align-middle" style="width:130px;"><?php echo $dataReportSumSec2[0]["sum(ctmri)"]   ?> (<?php echo number_format(($dataReportSumSec2[0]["sum(ctmri)"]/$dataReportSumSec2[0]["sum(cca02)"])*100,2)   ?> %)</td>
<td class="kv-align-right kv-align-middle">236</td>
<td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(cca)"]   ?></td>
<td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(treated)"]   ?> (<?php echo number_format(($dataReportSumSec2[0]["sum(treated)"]/$dataReportSumSec2[0]["sum(cca)"])*100,2)   ?>%)</td>
</tr>
</tfoot>
</table>
</div>
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
