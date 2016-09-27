<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\project84\controllers\DrillDownSec3Controller;
if($status=="no"){
echo "ไม่พบข้อมูลผู้ป่วยในหน่วยงานคุณ";
exit();
}
$num=1;
$hospital_name=$hosname[0][name];
$amphur_name=$hosname[0][amphur];
$province_name=$hosname[0][province];
?>
<h3><?= $hospital_name  ?>   อำเภอ  <?= $amphur_name  ?>       จังหวัด <?= $province_name ?></h3>
<table class="table table-striped">
<thead>
<tr>
<th>
ลำดับที่
</th>
<th>
ชื่อ-สกุล
</th>
<th>อัลตร้าซาวด์</th>
<th>ผิดปกติอย่างใดอย่างหนึ่ง</th>
<th>สงสัย CCA</th>
<th>CT / MRI</th>
<th>พบเป็นมะเร็ง</th>
<th>ได้รับการรักษา</th>
</tr>
</thead>
<tbody>
<?php

foreach ($dataProvider as $value3) {
  $target=base64_encode($value3[target]);
  $nameperson=$value3[title]." ".$value3[name]." ".$value3[surname];
  $cca02=DrillDownSec3Controller::GetIcon($value3[cca02]);
  $abnormal=DrillDownSec3Controller::GetIcon($value3[abnormal]);
  $suspected=DrillDownSec3Controller::GetIcon($value3[suspected]);
  $ctmri=DrillDownSec3Controller::GetIcon($value3[ctmri]);
  $cca=DrillDownSec3Controller::GetIcon($value3[cca]);
  $treated=DrillDownSec3Controller::GetIcon($value3[treated]);
?>
  <tr>
  <td>
<?= $num ?>
  </td>
  <td>
<a href="https://cloudbackend.cascap.in.th/inputdata/step4?comp_id_target=1374400536010&ezf_id=1454041742064651700&target=<?= $target ?>" target="_blank"><?= $nameperson ?></a>
  </td>
  <td>
<?= $cca02 ?>
  </td>
  <td>
<?= $abnormal ?>
  </td>
  <td>
<?= $suspected ?>
  </td>
  <td>
<?= $ctmri ?>
  </td>
  <td>
<?= $cca ?>
  </td>
  <td>
<?= $treated ?>
  </td>
  </tr>
<?php
$num++;
}
?>
</tbody>
</table>
</br>
</br>
