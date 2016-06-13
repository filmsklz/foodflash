@extends('layouts.layout')

@section('title')
Delivery food | take away food  | foodflash Ubonratchathani
@stop
@section('body')

<head>
<link href="{{URL::asset('css/sweetalert.css')}}" rel="stylesheet">
<script src="{{ URL::asset('js/sweetalert.min.js') }}" type="text/javascript"></script>
<style type="text/css">
/* css กำหนดความกว้าง ความสูงของแผนที่ */
#map_canvas {
    width:500px;
    height:300px;
    margin:auto;
/*  margin-top:100px;*/
}
</style>


  </head>


<div style="margin-top:-18%;text-align:center;">
  <img src = {{asset('images/banner.jpg')}}>
</div>

<div class="container" style="font-family: 'Kanit', sans-serif;margin-top:4%;">
  <div class="row">
      <div class="4u">
        <section class="special box" style="height:1000px;width:730px;">
          <h3>ข้อมูลจัดส่ง!</h3>

          <label for="Name: " style="text-align:left">ชื่อร้านอาหาร: </label>
              <input name="restrna" type="text" id="restrna" value="{{$Restr->restrna}}"  style="width:320px;" />
              <label for="Name: " style="text-align:left">ชื่อลูกค้า: </label>
              <input placeholder="กรอกชื่อ" name="cusname" type="text" value="{{$Restr->cusname}}" style="width:320px;">
              <label for="รายการอาหาร: " style="text-align:left">รายการอาหาร: </label>
              <input  type="text" placeholder="" name="menulist"style="width:320px;" value="{{$Restr->menulist}}"></input>
              <label for="โทร: " style="text-align:left">หมายเลขโทรศัพท์: </label>
              <input type="text" name="custel" style="width:320px;" value="{{$Restr->custel}}"></input>
             <label for="dsd: " style="text-align:left">ที่อยู่ในการจัดส่ง : </label>
              <div id="map_canvas" style="text-align:left"></div>
              <input style="margin-top:-5%;margin-left:7%;width:320px;z-index: -1000;overflow: hidden;position: absolute;" name="lati" type="text" id="lati" value="{{$Restr->lati}}" style="width:280px;" />
              <input style="margin-top:-5%;margin-left:7%;width:320px;z-index: -1000;overflow: hidden;position: absolute;" name="longti" type="text" id="longti" value="{{$Restr->longti}}" style="width:280px;" />

              <a href="{{ URL::to('manag='.$Restr->id) }}" class="button special">ส่งเรียบร้อย</a>

        </section>
    </div>
    <div class="4u" style="height:380px;margin-top:11.2%;margin-left:-4.5%;">
        <section class="special box" >
          <h3>รายการอาหาร</h3>
          <p>{{$Restr->m1}}</p>
          <p>{{$Restr->m2}}</p>
          <p>{{$Restr->m3}}</p>
          <p>ค่าจัดส่ง 49 บาท</p>
        </section>
    </div>
</div>
</div>

<script src="{{URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
function initialize() { // ฟังก์ชันแสดงแผนที่
GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
// กำหนดจุดเริ่มต้นของแผนที่
var lati = document.getElementById('lati').value;
var longti = document.getElementById('longti').value;
var my_Latlng  = new GGM.LatLng(lati,longti);
var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
// กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
var my_DivObj=$("#map_canvas")[0];
// กำหนด Option ของแผนที่
var myOptions = {
    zoom: 13, // กำหนดขนาดการ zoom
    center: my_Latlng , // กำหนดจุดกึ่งกลาง
    mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่
};
map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map

var my_Marker = new GGM.Marker({ // สร้างตัว marker
    position: my_Latlng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
    map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
    draggable:false, // กำหนดให้สามารถลากตัว marker นี้ได้
    title:"{{$Restr->cusname}}" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ

});

// กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom
GGM.event.addListener(map, 'zoom_changed', function() {
    $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value
});

}
$(function(){
// โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
// ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
// v=3.2&sensor=false&language=th&callback=initialize
//  v เวอร์ชัน่ 3.2
//  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
//  language ภาษา th ,en เป็นต้น
//  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
$("<script/>", {
  "type": "text/javascript",
  src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"
}).appendTo("body");
});
</script>
@stop
