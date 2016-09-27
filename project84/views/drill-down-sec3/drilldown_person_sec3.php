<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\project84\controllers\DrillDownSec3Controller;
if($status=="no"){
echo "ไม่พบข้อมูลผู้ป่วยในหน่วยงานคุณ";
exit();
}
$checkyes='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:blue"></i>';
$checkno='<i class="glyphicon glyphicon-minus" aria-hidden="true" style="color:blue"></i>';
$num=1;
?>
<div id="report84-ajax-report-div">
<div style="overflow-x:auto;">
<table class="table table-striped">
<thead>
<tr>
<th>
ลำดับที่
</th>
<th>
ชื่อ สกุล
</th>
<th>
รักษา
</th>
<th>รวมผ่าตัด</th>
<th>ผ่าตัดให้หายขาด</th>
<th>ผ่าตัดเพื่อประคับประคอง</th>
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
foreach ($dataProvider as $value3) {
  $target=base64_encode($value3[target]);
$p_surgery1=($value3[surgery]-$value3[c_surgery]);
$treat=DrillDownSec3Controller::GetIcon($value3[treat]);
$surgery=DrillDownSec3Controller::GetIcon($value3[surgery]);
$c_surgery=DrillDownSec3Controller::GetIcon($value3[c_surgery]);
$p_surgery=DrillDownSec3Controller::GetIcon($p_surgery1);
$livrec=DrillDownSec3Controller::GetIcon($value3[livrec]);
$livhilar=DrillDownSec3Controller::GetIcon($value3[livhilar]);
$whipple=DrillDownSec3Controller::GetIcon($value3[whipple]);
$hilar=DrillDownSec3Controller::GetIcon($value3[hilar]);
$bypass=DrillDownSec3Controller::GetIcon($value3[bypass]);
$biopsy=DrillDownSec3Controller::GetIcon($value3[biopsy]);
$needle_biopsy=DrillDownSec3Controller::GetIcon($value3[needle_biopsy]);
$ptbd=DrillDownSec3Controller::GetIcon($value3[ptbd]);
$endoscopic=DrillDownSec3Controller::GetIcon($value3[endoscopic]);
$chemo_all=DrillDownSec3Controller::GetIcon($value3[chemo_all]);
$chemo_adjuvant=DrillDownSec3Controller::GetIcon($value3[chemo_adjuvant]);
$medication=DrillDownSec3Controller::GetIcon($value3[medication]);
$nameperson=$value3[title]." ".$value3[name]." ".$value3[surname];
?>
  <tr>
  <td>
<?= $num?>
  </td>
  <td>
<a href="https://cloudbackend.cascap.in.th/inputdata/step4?comp_id_target=1374400536010&ezf_id=1454041742064651700&target=<?= $target ?>" target="_blank"><?= $nameperson ?></a>
  </td>
  <td>
<?= $treat ?>
  </td>
  <td>
<?= $surgery ?>
  </td>
  <td>
<?= $c_surgery ?>
  </td>
  <td>
<?= $p_surgery ?>
  </td>
  <td>
<?= $livrec  ?>
  </td>
  <td>
<?= $livhilar ?>
  </td>
  <td>
<?= $whipple  ?>
  </td>
  <td>
<?= $hilar ?>
  </td>
  <td>
<?= $bypass ?>
  </td>
  <td>
<?= $biopsy ?>
  </td>
  <td>
<?= $needle_biopsy ?>
  </td>
  <td>
<?= $ptbd ?>
  </td>
  <td>
<?= $endoscopic ?>
  </td>
  <td>
<?= $chemo_all ?>
  </td>
  <td>
<?= $chemo_adjuvant ?>
  </td>
  <td>
<?= $medication ?>
  </td>
  </tr>
<?php
$num++;
}
?>
</tbody>
</table>
</div>
</div>
