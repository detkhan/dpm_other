<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\project84\controllers\DrillDownSec1Controller;
?>
<?php

foreach ($dataProvider as $value1) {
  $provincecode=$value1[provincecode];
  $dataAmphur=DrillDownSec1Controller::GetAmphur($report_id,$provincecode);
?>
<h3>จังหวัด <?= $value1[province]   ?></h3>
<table class="table table-striped">
<thead>
<tr>
<th>
</th>
<th>
จำนวน
</th>
</tr>
</thead>
<tbody>
  <?php
foreach ($dataAmphur as $value2) {
   ?>
  <tr>
  <td colspan="2">
อำเภอ <?= $value2[amphur]  ?>
</td>
</tr>
<?php
$dataTumbon=DrillDownSec1Controller::GetTumbon($report_id,$provincecode,$value2[amphurcode]);
foreach ($dataTumbon as $value3) {
 ?>
 <tr>
 <td>
ตำบล <?= $value3[tambon]  ?>
</td>
 <td>
<?= $value3[total]  ?>
</td>
</tr>
 <?php
 }//tumbon
}//amphur
  ?>
</tbody>
</table>
</br>
</br>
<?php
}
 ?>
