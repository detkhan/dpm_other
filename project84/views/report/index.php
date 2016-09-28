<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<!-- section1-->
<div id="table_secshow1"></div>
<div id="table_sec1">
 </div>
<!-- section2-->
<div id="table_secshow2"></div>
<div id="table_sec2">
 </div>
<!-- section3-->
<div id="table_secshow3"></div>
<div id="table_sec3">
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
getdata('1',"treatov","desc","","","sort18");
getdata('2',"cca02","desc","","","sort6");
getdata('3',"treat","desc","","","sort14");
function getdata(sec,colum,data_sort,fromDate,toDate,div)
{
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
    case "1":
  $("#table_sec1").empty();
  $("#table_sec1").html(data);
        break;
      case "2":
    $("#table_sec2").empty();
    $("#table_sec2").html(data);
        break;
      case "3":
  $("#table_sec3").empty();
  $("#table_sec3").html(data);
  }
});
}
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
    case "1":
  $("#table_sec1").empty();
  $("#table_sec1").html(data);
        break;
      case "2":
    $("#table_sec2").empty();
    $("#table_sec2").html(data);
          break;
      case "3":
  $("#table_sec3").empty();
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
    case "1":
    $("#myModalLabel").html("คัดกรองพยาธิใบไม้ตับด้วยการตรวจอุจจาระและปัสสาวะ");
    var tamboncode=$(this).attr("tamboncode");
    var dataget={tamboncode:tamboncode,report_id:report_id};
        break;
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
    $('#myTab a[href="#report2"]').tab('show');
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
