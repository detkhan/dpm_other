<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\project84\controllers\DrillDownSec3Controller;
$province=DrillDownSec3Controller::GetProvince($hsitecode,$report_id);
?>
<div class="table-responsive">
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a href="#report1" data-toggle="tab">รายงาน</a></li>
<li><a id="drilldownperson" report_id="$report_id"  div="#report2" sec="3" href="#report2" data-toggle="tab">รายงานรายบุคคล</a></li>
</ul>
<div class="tab-content">
  <div id="report1" class="tab-pane fade in active">
<div id="report84-ajax-report-div">
<h4>ก. จำนวนรวมรักษาทั้งหมด <label class="label label-primary"><?= $dataget[0][treat] ?></label> ราย</h4>
<h4>ข. จำนวนที่รับการรักษาด้วยการผ่าตัดทั้งหมด <label class="label label-primary"><?= $dataget[0][surgery] ?></label> ราย</h4>
<h4 style="padding-left: 22px;">จำนวนที่รับการผ่าตัดให้หายขาด <label class="label label-primary"><?= $dataget[0][c_surgery] ?></label> ราย</h4>
<h4 style="padding-left: 22px;">จำนวนที่รับการผ่าตัดเพื่อการประคับประคอง <label class="label label-primary"><?= $dataget[0][p_surgery] ?></label> ราย</h4>
<h4>ค. จำแนกตามหน่วยบริการที่ให้บริการ (Hospital-based) ดังนี้</h4><br>

<?php
foreach ($province as $value) {
$province_name=$value[province];
$provincecode=$value[provincecode];
$amphur=DrillDownSec3Controller::GetAmphur($hsitecode,$report_id,$provincecode);
?>
<h4>จังหวัด <?= $province_name ?></h4>
<div style="overflow-x:auto;">
<table>
<thead>
<tr>
<th>
</th>
<th>
รักษา
</th>
<th>รวมผ่าตัด</th>
<th>ผ่าตัด ให้หายขาด</th>
<th>ผ่าตัด เพื่อประคับประคอง</th>
<th>Liver resection</th>
<th>Liver + Hilar</th>
<th>Whipples opeation</th>
<th>Hilar resection</th>
<th>Bypass</th>
<th>Biopsy(EL+Bx)</th>
<th>Needle Biopsy</th>
<th>PTBD</th>
<th>Endoscopic Stent</th>
<th>Chemotheraphy(All)</th>
<th>Chemotheraphy(Adjuvant)</th>
<th>Medication</th>
</tr>
</thead>
<tbody>
<?php
foreach ($amphur as  $value2) {
$amphur_name=$value2[amphur];
$amphurcode=$value2[amphurcode];
$hospital=DrillDownSec3Controller::GetHospital($hsitecode,$report_id,$provincecode,$amphurcode);
?>
<tr>
<td colspan="17">
<b>อำเภอ <?= $amphur_name ?></b>
</td>
</tr>
<?php
foreach ($hospital as $value3) {
$sitecode=$value3[sitecode];
$hospital_name=DrillDownSec3Controller::ShortName($value3[name]);
$p_surgery=($value3[surgery]-$value3[c_surgery]);
?>
  <tr>
  <td>
    <?php
if ($checkadmin=="yes") {

     ?>
  <a href="#report2" data-toggle="tab"  id="drilldownperson" report_id="<?= $report_id ?>" sitecode="<?= $sitecode ?>" hsitecode="<?= $hsitecode ?>" title="<?= $hospital_name ?>" sec="3" div="#report2" ><?= $hospital_name ?></a>
  <?php
}else{
echo $hospital_name;
}
    ?>
  </td>
  <td>
<?= $value3[treat] ?>
  </td>
  <td>
<?= $value3[surgery] ?>
  </td>
  <td>
<?= $value3[c_surgery] ?>
  </td>
  <td>
<?= $p_surgery ?>
  </td>
  <td>
<?= $value3[livrec] ?>
  </td>
  <td>
<?= $value3[livhilar] ?>
  </td>
  <td>
<?= $value3[whipple] ?>
  </td>
  <td>
<?= $value3[hilar] ?>
  </td>
  <td>
<?= $value3[bypass] ?>
  </td>
  <td>
<?= $value3[biopsy] ?>
  </td>
  <td>
<?= $value3[needle_biopsy] ?>
  </td>
  <td>
<?= $value3[ptbd] ?>
  </td>
  <td>
<?= $value3[endoscopic] ?>
  </td>
  <td>
<?= $value3[chemo_all] ?>
  </td>
  <td>
<?= $value3[chemo_adjuvant] ?>
  </td>
  <td>
<?= $value3[medication] ?>
  </td>
  </tr>
<?php
}
}
?>
</tbody>
</table>
</br>
</br>
</div>
<?php
}
 ?>
 </div>
  </div>
 <div id="report2" class="tab-pane fade">


 </div>
 </div>
 </div>
