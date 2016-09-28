<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\project84\controllers\DrillDownSec1Controller;
use backend\modules\project84\controllers\ReportController;
?>
<div class="table-responsive">
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a href="#report1" data-toggle="tab">รายงาน</a></li>
<li><a id="drilldownperson" report_id="<?= $report_id  ?>"  div="#report2" sec="1" href="#report2" data-toggle="tab">รายงานตามพื้นที่อยู่อาศัย</a></li>
</ul>
<div class="tab-content">
  <div id="report1" class="tab-pane fade in active">

<h4>จังหวัด <?= $dataArrayDrillSec1[0][province] ?>  อำเภอ <?= $dataArrayDrillSec1[0][amphur] ?> ตำบล <?= $dataArrayDrillSec1[0][tambon] ?></h4>
<div style="overflow-x:auto;">
<table>
<thead>
<tr>
<th width="auto">ประเภทการตรวจ</th>
<th width="auto">จำนวนผู้รับบริการ (ราย)</th>
<th width="auto">จำนวนผู้ติดพยาธิ OV (ราย)</th>
<th width="auto">ร้อยละ</th>
<th width="auto">จำนวนผู้ติดพยาธิ mif (ราย)</th>
<th width="auto">ร้อยละ</th>
<th width="auto">จำนวนผู้ติดพยาธิ ss (ราย)</th>
<th width="auto">ร้อยละ</th>
<th width="auto">จำนวนผู้ติดพยาธิ ech (ราย)</th>
<th width="auto">ร้อยละ</th>
<th width="auto">จำนวนผู้ติดพยาธิ taenia (ราย)</th>
<th width="auto">ร้อยละ</th>
<th width="auto">จำนวนผู้ติดพยาธิ tt (ราย)</th>
<th width="auto">ร้อยละ</th>
<th width="auto">จำนวนผู้ติดพยาธิ other (ราย)</th>
<th width="auto">ร้อยละ</th>
</tr>
</thead>
<tbody>
<tr>
<td>Kato-Katz</td>
<td><?= $dataArrayDrillSec1[0][kpos] ?></td>
<td><?= $datakpos[0][ov] ?></td>
<td><?= ReportController::calpercent($datakpos[0][ov],$dataArrayDrillSec1[0][kpos],"yes") ?></td>
<td><?= $datakpos[0][mif] ?></td>
<td><?= ReportController::calpercent($datakpos[0][mif],$dataArrayDrillSec1[0][kpos],"yes") ?></td>
<td><?= $datakpos[0][ss] ?></td>
<td><?= ReportController::calpercent($datakpos[0][ss],$dataArrayDrillSec1[0][kpos],"yes") ?></td>
<td><?= $datakpos[0][ech] ?></td>
<td><?= ReportController::calpercent($datakpos[0][ech],$dataArrayDrillSec1[0][kpos],"yes") ?></td>
<td><?= $datakpos[0][taenia] ?></td>
<td><?= ReportController::calpercent($datakpos[0][taenia],$dataArrayDrillSec1[0][kpos],"yes") ?></td>
<td><?= $datakpos[0][tt] ?></td>
<td><?= ReportController::calpercent($datakpos[0][tt],$dataArrayDrillSec1[0][kpos],"yes") ?></td>
<td><?= $datakpos[0][other] ?></td>
<td><?= ReportController::calpercent($datakpos[0][other],$dataArrayDrillSec1[0][kpos],"yes") ?></td>
</tr>
<tr>
<td>Parasep</td>
<td><?= $dataArrayDrillSec1[0][ppos] ?></td>
<td><?= $datappos[0][ov] ?></td>
<td><?= ReportController::calpercent($datappos[0][ov],$dataArrayDrillSec1[0][ppos],"yes") ?></td>
<td><?= $datappos[0][mif] ?></td>
<td><?= ReportController::calpercent($datappos[0][mif],$dataArrayDrillSec1[0][ppos],"yes") ?></td>
<td><?= $datappos[0][ss] ?></td>
<td><?= ReportController::calpercent($datappos[0][ss],$dataArrayDrillSec1[0][ppos],"yes") ?></td>
<td><?= $datappos[0][ech] ?></td>
<td><?= ReportController::calpercent($datappos[0][ech],$dataArrayDrillSec1[0][ppos],"yes") ?></td>
<td><?= $datappos[0][taenia] ?></td>
<td><?= ReportController::calpercent($datappos[0][taenia],$dataArrayDrillSec1[0][ppos],"yes") ?></td>
<td><?= $datappos[0][tt] ?></td>
<td><?= ReportController::calpercent($datappos[0][tt],$dataArrayDrillSec1[0][ppos],"yes") ?></td>
<td><?= $datappos[0][other] ?></td>
<td><?= ReportController::calpercent($datappos[0][other],$dataArrayDrillSec1[0][ppos],"yes") ?></td>
</tr>
<tr>
<td>FECT</td>
<td><?= $dataArrayDrillSec1[0][fpos] ?></td>
<td><?= $datafpos[0][ov] ?></td>
<td><?= ReportController::calpercent($datafpos[0][ov],$dataArrayDrillSec1[0][fpos],"yes") ?></td>
<td><?= $datafpos[0][mif] ?></td>
<td><?= ReportController::calpercent($datafpos[0][mif],$dataArrayDrillSec1[0][fpos],"yes") ?></td>
<td><?= $datafpos[0][ss] ?></td>
<td><?= ReportController::calpercent($datafpos[0][ss],$dataArrayDrillSec1[0][fpos],"yes") ?></td>
<td><?= $datafpos[0][ech] ?></td>
<td><?= ReportController::calpercent($datafpos[0][ech],$dataArrayDrillSec1[0][fpos],"yes") ?></td>
<td><?= $datafpos[0][taenia] ?></td>
<td><?= ReportController::calpercent($datafpos[0][taenia],$dataArrayDrillSec1[0][fpos],"yes") ?></td>
<td><?= $datafpos[0][tt] ?></td>
<td><?= ReportController::calpercent($datafpos[0][tt],$dataArrayDrillSec1[0][fpos],"yes") ?></td>
<td><?= $datafpos[0][other] ?></td>
<td><?= ReportController::calpercent($datafpos[0][other],$dataArrayDrillSec1[0][fpos],"yes") ?></td>
</tr>
<tr>
<td>Urine</td>
<td><?= $dataArrayDrillSec1[0][upos] ?></td>
<td><?= $dataupos[0][ov] ?></td>
<td><?= ReportController::calpercent($dataupos[0][ov],$dataArrayDrillSec1[0][upos],"yes") ?></td>
<td><?= $dataupos[0][mif] ?></td>
<td><?= ReportController::calpercent($dataupos[0][mif],$dataArrayDrillSec1[0][upos],"yes") ?></td>
<td><?= $dataupos[0][ss] ?></td>
<td><?= ReportController::calpercent($dataupos[0][ss],$dataArrayDrillSec1[0][upos],"yes") ?></td>
<td><?= $dataupos[0][ech] ?></td>
<td><?= ReportController::calpercent($dataupos[0][ech],$dataArrayDrillSec1[0][upos],"yes") ?></td>
<td><?= $dataupos[0][taenia] ?></td>
<td><?= ReportController::calpercent($dataupos[0][taenia],$dataArrayDrillSec1[0][upos],"yes") ?></td>
<td><?= $dataupos[0][tt] ?></td>
<td><?= ReportController::calpercent($dataupos[0][tt],$dataArrayDrillSec1[0][upos],"yes") ?></td>
<td><?= $dataupos[0][other] ?></td>
<td><?= ReportController::calpercent($dataupos[0][other],$dataArrayDrillSec1[0][upos],"yes") ?></td>
</tr>
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
