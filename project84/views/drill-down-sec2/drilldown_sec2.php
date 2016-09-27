<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\project84\controllers\DrillDownSec2Controller;


$amphur=DrillDownSec2Controller::GetAmphur($report_id,$provincecode);
?>
<div class="table-responsive">
<ul class="nav nav-tabs">
<li class="active"><a href="#report1" data-toggle="tab">รายงาน</a></li>
<li><a id="drilldownperson" report_id="<?= $report_id  ?>"  div="#report2" sec="2" href="#report2" data-toggle="tab">รายงานรายบุคคล</a></li>
</ul>
<div class="tab-content">
  <div id="report1" class="tab-pane fade in active">
<div id="report84-ajax-report-div">
<h4>ก. จำนวนรวมอัลตร้าซาวด์ทั้งหมด
<label class="label label-primary"> <?= $sumtotal ?>  </label> ราย</h4>
<h4>ข. จำแนกตามหน่วยบริการที่ให้บริการ (Hospital-based) ดังนี้</h4>
</div>

<h3>จังหวัด <?= $province_name ?></h3>
<div style="overflow-x:auto;">
<table>
<thead>
<tr>
<th>
</th>
<th width="auto">
ลงทะเบียน
</th>
<th width="auto">อัลตร้าซาวด์</th>
<th width="auto">ผิดปกติอย่างใดอย่างหนึ่ง</th>
<th width="auto">สงสัย CCA</th>
<th width="auto">CT / MRI</th>
<th width="auto">พบเป็นมะเร็ง</th>
<th width="auto">ได้รับการรักษา</th>
</tr>
</thead>
<tbody>
<?php
foreach ($amphur as  $value2) {
$amphur_name=$value2[amphur];
$amphurcode=$value2[amphurcode];
$hospital=DrillDownSec2Controller::GetHospital($report_id,$provincecode,$amphurcode);
?>
<tr>
<td colspan="17">
<b>อำเภอ <?= $amphur_name ?></b>
</td>
</tr>
<?php
foreach ($hospital as $value3) {
$sitecode=$value3[sitecode];
$hospital_name=DrillDownSec2Controller::ShortName($value3[name]);

?>
  <tr>
  <td>
<?php
if($checkadmin=="yes")
{
?>
<a href="#report2" id="drilldownperson" report_id="<?= $report_id ?>" sitecode="<?= $sitecode ?>" hsitecode="<?= $hsitecode ?>" title="<?= $hospital_name ?>" sec="2" div="#report2" data-toggle="tab"><?= $hospital_name ?></a>
<?php
}
else
{
echo $hospital_name;
}
?>
  </td>
  <td>
<?= $value3[nall] ?>
  </td>
  <td>
<?= $value3[cca02] ?>
  </td>
  <td>
<?= $value3[abnormal] ?>
  </td>
  <td>
<?= $value3[suspected] ?>
  </td>
  <td>
<?= $value3[ctmri] ?>
  </td>
  <td>
<?= $value3[cca] ?>
  </td>
  <td>
<?= $value3[treated] ?>
  </td>
  </tr>
<?php
}
}
?>
</tbody>
</table>
</div>
</div>
</br>
</br>
<div id="report2" class="tab-pane fade">

</div>
</div>
</div>
</div>
