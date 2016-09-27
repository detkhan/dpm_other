<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<!-- section2-->
<div id="table_secshow2"></div>
<div id="table_sec2">
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
        ผลงานในช่วงวันที่ 1 ตุลาคม 2558 ถึงวันที่ 19 กันยายน 2559 จำนวน
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
<tr><th class="kv-align-center kv-align-middle" style="width:80px;">#</th>
<th class="kv-align-center kv-align-middle" style="width:80px;"><a href="#table_secshow2" id='sort1' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='zone'>เขต</a></th>
<th class="kv-align-middle"><a href="#table_secshow2" id='sort2' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='2' colum='a.provincecode'>จังหวัด</a></th>
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
<tbody>
  <!-- TABLE DATA -->

    <?php
    $num=1;
    foreach ($dataProviderSec2 as $keysec2) {
     ?>
    <tr data-key="0">
    <td class="kv-align-center kv-align-middle" style="width:80px;"><?php  echo $num  ?></td>
    <td class="kv-align-center kv-align-middle" style="width:80px;"><?php echo $keysec2[zone]   ?></td>
    <td class="kv-align-middle"><a id="drilldown" report_id="<?php  echo $report_id  ?>" provincecode="<?php echo $keysec2[provincecode]   ?>" title="<?php echo $keysec2[province]   ?>" sec="2" sumtotal="<?= $keysec2[cca02] ?>" data-toggle="modal" data-target="#myModal"><?php echo $keysec2[province]   ?></a></td>
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

<tr class="kv-page-summary warning"><td class="kv-align-center kv-align-middle" style="width:80px;">&nbsp;</td><td class="kv-align-center kv-align-middle" style="width:80px;">&nbsp;</td><td class="kv-align-middle">รวม
</td><td class="kv-align-center kv-align-middle" style="width:10%;">&nbsp;</td><td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(nall)"]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(target)"]   ?></td>
    <td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(cca02)"]   ?></td><td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(abnormal)"]   ?></td><td class="kv-align-right kv-align-middle" style="width:130px;"><?php echo $dataReportSumSec2[0]["sum(ctmri)"]   ?> (<?php echo number_format(($dataReportSumSec2[0]["sum(ctmri)"]/$dataReportSumSec2[0]["sum(cca02)"])*100,2)   ?> %)</td><td class="kv-align-right kv-align-middle">236</td><td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(cca)"]   ?></td><td class="kv-align-right kv-align-middle"><?php echo $dataReportSumSec2[0]["sum(treated)"]   ?> (<?php echo number_format(($dataReportSumSec2[0]["sum(treated)"]/$dataReportSumSec2[0]["sum(cca)"])*100,2)   ?>%)</td></tr>
</tfoot></table></div></div>
</div></div>
</div>
 </div>


<!-- section3-->
<div id="table_secshow3"></div>
<div id="table_sec3">
  <div class="container">
  <div class="alert alert-info" role="alert"><h4>ส่วนที่ 3 : รายงาน Tertiary care (รักษามะเร็งท่อน้ำดีด้วยการผ่าตัด)</h4></div>
  <h5 title="เป้าหมายผ่าตัดรวมทั้งประเทศ 600  รายนับเฉพาะ Liver resection, Hilar resection, Bypass, Exploratory laparotomy ± biopsy และ Whipple’s operation">
      ผลงานผ่าตัด
      <label class="label label-primary"><?php echo $dataReportSumAllSec3[0]["sum(surgery)"]   ?></label>  ราย คิดเป็น
      <label class="label label-primary"><?php echo number_format((($dataReportSumAllSec3[0]["sum(surgery)"])/600)*100,2)   ?> %</label> จากเป้าหมายรวมทั้งประเทศ 600 ราย

  </h5>
  <div class="progress overall-progress" onmouseover="$(this).popover('show')" onmouseout="$(this).popover('hide')" data-toggle="popover" data-html="true" data-placement="top" data-content="444 (74.0 %)" data-original-title="" title="">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="600" style="width:<?php echo number_format((($dataReportSumAllSec3[0]["sum(surgery)"])/600)*100)   ?>%">
  </div>
  </div>
  <h5 title="เป้าหมายผ่าตัดรวมทั้งประเทศ 600 รายนับเฉพาะ Liver resection, Hilar resection, Bypass, Exploratory laparotomy ± biopsy และ Whipple’s operation">
      ผลงานในช่วงวันที่ 1 ตุลาคม 2558 ถึงวันที่ 19 กันยายน 2559 จำนวน
      <label class="label label-primary"><?php echo $dataReportSumSec3[0]["sum(surgery)"]   ?></label>ราย คิดเป็น
      <label class="label label-primary"><?php echo number_format((($dataReportSumSec3[0]["sum(surgery)"])/600)*100,2)   ?>  %</label>
  </h5>
  <div class="progress overall-progress" onmouseover="$(this).popover('show')" onmouseout="$(this).popover('hide')" data-toggle="popover" data-html="true" data-placement="top" data-content="444 (74.0 %)" data-original-title="" title="">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="600" style="width: <?php echo number_format((($dataReportSumSec3[0]["sum(surgery)"])/600)*100)   ?>%">
              </div>
  </div>
  <div id="report84-cca-desc" class="alert alert-warning report84-desc" >
      ผลงานการรักษาทั้งหมด <?php echo $dataReportSumSec3[0]["sum(treat)"]   ?> ราย จำแนกเป็นผ่าตัด <?php echo $dataReportSumSec3[0]["sum(surgery)"]   ?> ราย คิดเป็น <?php echo number_format((($dataReportSumSec3[0]["sum(surgery)"])/$dataReportSumSec3[0]["sum(treat)"])*100,2)   ?> % ของทั้งหมด และคิดเป็น <?php echo number_format((($dataReportSumSec3[0]["sum(surgery)"])/600)*100,2)   ?> %
      จากเป้าหมายผ่าตัด 600 คน ในจำนวนที่ผ่าตัดนี้ เป็นผ่าตัดให้หายขาด <?php echo $dataReportSumSec3[0]["sum(c_surgery)"]   ?> ราย
      และผ่าตัดเพื่อการประคับประคอง <?php echo ($dataReportSumSec3[0]["sum(surgery)"]-$dataReportSumSec3[0]["sum(c_surgery)"])   ?> ราย สำหรับการรักษาแบบประคับประคองทั้งสิ้น <?php echo $dataReportSumSec3[0]["sum(chemo_all)"]+$dataReportSumSec3[0]["sum(chemo_adjuvant)"]+$dataReportSumSec3[0]["sum(medication)"]   ?> ราย
      คิดเป็น <?php echo number_format((($dataReportSumSec3[0]["sum(chemo_all)"]+$dataReportSumSec3[0]["sum(chemo_adjuvant)"]+$dataReportSumSec3[0]["sum(medication)"])/$dataReportSumSec3[0]["sum(treat)"])*100,2)   ?>  % ของผู้ป่วยทั้งหมด ทั้งนี้ ได้รวมการผ่าตัดเพื่อการประคับประคองไว้ในจำนวนนี้ด้วยแล้ว</div>

  <div style="overflow-x:auto;">
  <div id="report84-dynagrid-3-container" class="table-responsive kv-grid-container">
<table>
  <tr>
<th rowspan="2" style="width:50px;text-align:center; ">#</th>
<th style="text-align:center; font-size:12px;" rowspan="2"><a href="#table_secshow3" id='sort12' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='hosname'>ชื่อโรงพยาบาล</a></th>
<th style="text-align:center; font-size:12px;" rowspan="2"><a href="#table_secshow3" id='sort13' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='resgis'>ลงทะเบียน</a></th>
<th style="text-align:center; font-size:12px;" rowspan="2"><a href="#table_secshow3" id='sort14' data-sort='desc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='treat'>รักษารวม</a></th>
<th colspan="3" style="text-align:center;font-size:12px;">ผ่าตัด</th>
<th colspan="6" style="text-align:center;font-size:12px;">ประเภทผ่าตัด</th>
<th colspan="3" style="text-align:center;font-size:12px;">หัตถการอื่นๆ</th>
<th colspan="3" style="text-align:center;font-size:14px;">การรักษาอื่นๆ</th>

  </tr>
<tr style="font-weight:bold; text-align:center; font-size:12px;" >
<td><a href="#table_secshow3" id='sort15' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='surgery'>รวมผ่าตัด</a></td>
<td><a href="#table_secshow3" id='sort16' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='c_surgery'>ผ่าตัดให้หายขาด</a></td>
<td><a href="#table_secshow3" id='sort17' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='c_surgery'>ผ่าตัดเพื่อประคับประคอง</a></td>
<td><a href="#table_secshow3" id='sort18' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='livrec'>Liver resection</a></td>
<td><a href="#table_secshow3" id='sort19' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='livhilar'>Liver + Hilar</a></td>
<td><a href="#table_secshow3" id='sort20' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='whipple'>Whipple's opeation</a></td>
<td><a href="#table_secshow3" id='sort21' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='hilar'>Hilar resection</a></td>
<td><a href="#table_secshow3" id='sort22' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='bypass'>Bypass</a></td>
<td><a href="#table_secshow3" id='sort23' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='biopsy'>Biopsy(EL+Bx)</a></td>
<td><a href="#table_secshow3" id='sort24' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='needle_biopsy'>Needle Biopsy</a></td>
<td><a href="#table_secshow3" id='sort25' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='ptbd'>PTBD</a></td>
<td><a href="#table_secshow3" id='sort26' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='endoscopic'>Endoscopic Stent</a></td>
<td><a href="#table_secshow3" id='sort27' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='chemo_all'>Chemotheraphy(All)</a></td>
<td><a href="#table_secshow3" id='sort28' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='chemo_adjuvant'>Chemotheraphy(Adjuvant)</a></td>
<td><a href="#table_secshow3" id='sort29' data-sort='asc'  fromDate='<?php echo $datadate[fromDate] ?>'  toDate='<?php echo $datadate[toDate] ?>' sec='3' colum='medication'>Medication</a></td>


</tr>

<?php
$num=1;
foreach ($dataProviderSec3 as $key) {
 ?>
<tr style="width:auto;">
<td style="text-align:center;"><?php  echo $num  ?></td>
<td id="hospital"><a id="drilldown" report_id="<?php  echo $report_id  ?>" hsitecode="<?php echo $key[sitecode]   ?>" title="<?php echo $key[hosname]   ?>" treat="<? echo  $key[treat]  ?>" surgery="<? echo  $key[surgery]  ?>" c_surgery="<? echo  $key[c_surgery]  ?>" p_surgery="<? echo  ($key[surgery]-$key[c_surgery])  ?>"  sec="3" data-toggle="modal" data-target="#myModal"><?php echo $key[hosname]   ?></a></td>
<td id="register" style="text-align:center;"><?php echo $key[resgis]   ?></td>
<td style="text-align:center;"><?php echo $key[treat]   ?></td>
<td style="text-align:center;"><?php echo $key[surgery]   ?></td>
<td style="text-align:center;"><?php echo ($key[c_surgery])   ?></td>
<td style="text-align:center;"><?php echo ($key[surgery]-$key[c_surgery])   ?></td>
<td style="text-align:center;"><?php echo $key[livrec]   ?></td>
<td style="text-align:center;"><?php echo $key[livhilar]   ?></td>
<td style="text-align:center;"><?php echo $key[whipple]   ?></td>
<td style="text-align:center;"><?php echo $key[hilar]   ?></td>
<td style="text-align:center;"><?php echo $key[bypass]   ?></td>
<td style="text-align:center;"><?php echo $key[biopsy]   ?></td>
<td style="text-align:center;"><?php echo $key[needle_biopsy]   ?></td>
<td style="text-align:center;"><?php echo $key[ptbd]   ?></td>
<td style="text-align:center;"><?php echo $key[endoscopic]   ?></td>
<td style="text-align:center;"><?php echo $key[chemo_all]   ?></td>
<td style="text-align:center;"><?php echo $key[chemo_adjuvant]   ?></td>
<td style="text-align:center;"><?php echo $key[medication]   ?></td>

  </tr>
  <?php
  $sumregis+=$key[resgis];
  $sumtreat+=$key[treat];
  $sumsurgery+=$key[surgery];
  $sumc_surgery+=$key[c_surgery];
  $sumn_surgery+=($key[surgery]-$key[c_surgery]);
  $sumlivrec+=$key[livrec];
  $sumlivhilar+=$key[livhilar];
  $sumwhipple+=$key[whipple];
  $sumhilar+=$key[hilar];
  $sumbypass+=$key[bypass];
  $sumbiopsy+=$key[biopsy];
  $sumneedle_biopsy+=$key[needle_biopsy];
  $sumchemo_all+=$key[chemo_all];
  $sumchemo_adjuvant+=$key[chemo_adjuvant];
  $sumptbd+=$key[ptbd];
  $sumendoscopic+=$key[endoscopic];
  $summedication+=$key[medication];
  $num++;
}

   ?>

   <tr>
   <td colspan="2">  รวม </td>
   <td><?php echo  $sumregis ?></td>
   <td><?php echo  $sumtreat ?></td>
   <td><?php echo   $sumsurgery ?></td>
   <td> <?php echo   $sumc_surgery ?></td>
   <td> <?php echo   $sumn_surgery ?></td>
   <td> <?php echo   $sumlivrec ?></td>
   <td> <?php echo   $sumlivhilar ?></td>
   <td> <?php echo   $sumwhipple ?></td>
   <td><?php echo   $sumhilar ?> </td>
   <td> <?php echo   $sumbypass ?></td>
   <td> <?php echo   $sumbiopsy ?></td>
   <td> <?php echo   $sumneedle_biopsy ?></td>
   <td> <?php echo   $sumchemo_all ?></td>
   <td> <?php echo   $sumchemo_adjuvant ?></td>
   <td> <?php echo   $sumptbd ?></td>
   <td><?php echo   $sumendoscopic ?> </td>
   <td><?php echo   $summedication ?> </td>

   </tr>



</table>

</div>

</div>
</div>
   </div>





   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document" style="width:1000px">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel"></h4>
         </div>
         <div class="modal-body">

         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
   </div>
   <!-- Modal -->
<?php
$jsAdd =<<< JS
$(document).on("click", "*[id^=sort]", function() {
var data_sort=$(this).attr("data-sort");
var fromDate=$(this).attr("fromDate");
var toDate=$(this).attr("toDate");
var sec=$(this).attr("sec");
var colum=$(this).attr("colum");
var div=$(this).attr('id');


//alert("sort="+data_sort+" fromDate="+fromDate+" toDate="+toDate+" sec="+sec+" colum="+colum);
switch (data_sort) {
    case "asc":
  var data_sortadd=$(this).attr("data-sort","desc");
        break;
        case "desc":
var data_sortadd=$(this).attr("data-sort","asc");
}
var url = "$domain/project84/report/get-data-sort";
$.get(url, {
    sort:data_sort,
    fromDate:fromDate,
    toDate:toDate,
    sec:sec,
    colum:colum,
    div:div,
})
.done(function( data ) {
  switch (sec) {
      case "2":
    $("#table_sec2").empty();;
    $("#table_sec2").html(data);
          break;
      case "3":
  $("#table_sec3").empty();;
  $("#table_sec3").html(data);
  }
});



});


$(document).on("click", "#drilldown", function() {
  $(".modal-body").empty();
  $("#myModalLabel").empty();
  var report_id=$(this).attr("report_id");
  var title=$(this).attr('title');
  var sec=$(this).attr('sec');
  var sumtotal=$(this).attr('sumtotal');
  var treat=$(this).attr('treat');
  var surgery=$(this).attr('surgery');
  var c_surgery=$(this).attr('c_surgery');
  var p_surgery=$(this).attr('p_surgery');
  var url = "$domain/project84/drill-down-sec"+sec+"/ajax-data";
  var loading='<div class="row"><div class="col-lg-2 col-lg-offset-5"><button type="button" id="loading" data-loading-text="Loading..." class="btn btn-primary"></button></div></div>';
  $(".modal-body").html(loading);
  $("#loading").button('loading');
  switch (sec) {
      case "2":
      $("#myModalLabel").html("คัดกรองมะเร็งท่อน้ำดีด้วยการตรวจอัลตราซาวด์");
      var provincecode=$(this).attr("provincecode");
      var dataget={provincecode:provincecode,report_id:report_id,province_name:title,sumtotal:sumtotal};
          break;
      case "3":
      $("#myModalLabel").html("รักษามะเร็งท่อน้ำดีด้วยการผ่าตัด"+title);
      var hsitecode=$(this).attr("hsitecode");
      var dataget={hsitecode:hsitecode,report_id:report_id,treat:treat,surgery:surgery,c_surgery:c_surgery,p_surgery:p_surgery};
  }

  $.get(url,dataget)
  .done(function( data ) {
    $(".modal-body").empty();
    $(".modal-body").html(data);
  });

});



$(document).on("click", "#drilldownperson", function() {
  var report_id=$(this).attr("report_id");
  var title=$(this).attr('title');
  var sec=$(this).attr('sec');
  var div=$(this).attr('div');
  var sitecode=$(this).attr("sitecode");
  var hsitecode=$(this).attr("hsitecode");
  $(div).empty();
  var url = "$domain/project84/drill-down-sec"+sec+"/ajax-data-person";
  var loading='<div class="row"><div class="col-md-2 col-md-offset-5"><button type="button" id="loading" data-loading-text="Loading..." class="btn btn-primary"></button></div></div>';
  $(div).html(loading);
  $("#loading").button('loading');
  var dataget={sitecode:sitecode,report_id:report_id,hsitecode:hsitecode};
      //  $("#myModalLabel").html(title);


  $.get(url,dataget)
  .done(function( data ) {
    $(div).empty();
    $(div).html(data);
  });

});




JS;
$this->registerJs($jsAdd);
$css=<<< CSS
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    table-layout: auto;

}

th, td {
    border:1px solid #ddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
.containBody{
    height:500px;
    display:block;
    overflow:auto;
    border-bottom:1px solid #CCC;
}
.tbl_headerFix{
    border-bottom:0px;
}

CSS;
$this->registerCss($css);
?>
