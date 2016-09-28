<?php

use yii\helpers\Html;
use yii\grid\GridView;
Yii::$app->formatter->locale = 'th-TH';



?>
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
    ผลงานในช่วงวันที่ <? echo Yii::$app->formatter->asDate($datadate[fromDate], 'long')  ?> ถึงวันที่ <? echo Yii::$app->formatter->asDate($datadate[toDate], 'long')  ?>
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
