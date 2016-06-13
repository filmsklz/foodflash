
<!DOCTYPE HTML>
<title>Delivery food | take away food  | foodflash Ubonratchathani</title>

<html>
	<head>
    <link href='https://fonts.googleapis.com/css?family=Kanit:200&subset=thai' rel='stylesheet' type='text/css'>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="{{URL::asset('js/jquery.min.js') }}"></script>
		<script src="{{URL::asset('js/skel.min.js')}}"></script>
		<script src="{{URL::asset('js/skel-layers.min.js') }}"></script>
		<script src="{{('js/init.js')}}"></script>
		            <link rel="icon" href="//asia-public.foodpanda.com/assets/production/th/layout/themes/capricciosa_foodpanda/images/th/favicon-32x32.png?v=1459547564" sizes="32x32"  />
		            <link rel="icon" href="//asia-public.foodpanda.com/assets/production/th/layout/themes/capricciosa_foodpanda/images/th/favicon-192x192.png?v=1459547564" sizes="192x192"  />
		            <link rel="icon" href="//asia-public.foodpanda.com/assets/production/th/layout/themes/capricciosa_foodpanda/images/th/favicon-96x96.png?v=1459547564" sizes="96x96"  />
		            <link rel="icon" href="//asia-public.foodpanda.com/assets/production/th/layout/themes/capricciosa_foodpanda/images/th/favicon-16x16.png?v=1459547564" sizes="16x16"  />
		<noscript>
			<link rel="stylesheet" href="{{URL::asset('/css/skel.css')}}" />
			<link rel="stylesheet" href="{{URL::asset('/css/style.css') }}" />
			<link rel="stylesheet" href="{{URL::asset('/css/style-xlarge.css') }}" />

		</noscript>

	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">FOOD FLASH UBONRATCHATHANI</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="/Restr">Home</a></li>
						<li><a href="left-sidebar.html">About</a></li>
						<!--<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="no-sidebar.html">No Sidebar</a></li> -->
						<li><a href="/" class="button special">Sign Out</a></li>
					</ul>
				</nav>
			</header>


	</body>
<?php $i=0 ?>
@foreach ($odr as $data)
<?php $i+=1 ?>
@endforeach
<div style="margin-top:-18%;text-align:center;">
  <img src = {{asset('images/banner.jpg')}}>
</div>
<h3 style="margin-top:2%;text-align:center;">Order from {{$i}} Custumers. </h3>

  <div class="container" style="font-family: 'Kanit', sans-serif;margin-top:4%;">
  <div class="table-responsive">
  <table id="myTable" class="display table" width="100%" >
          <thead>
            <tr>
  			<th>No.</th>
  			<th>ชื่อร้าน</th>
  			<th>ชื่อลูกค้า</th>
  			<th>หมายเลขโทรศัพท์</th>
  			<th>รายการอาหาร</th>
        <th>ที่อยู่</th>
        <th>สถานะ</th>
        <th>manage</th>
  		    </tr>
          </thead>
        <tbody>
           	<tr>
             @foreach ($odr as $data)
          <td >
            {{$data->id}}
          </td>
           <td>
            {{$data->restrna}}
           </td>
  		 <td>
             {{$data->cusname}}
           </td>
  		  <td>
             {{$data->custel}}
           </td>
  		 <td>
             {{$data->menulist}}
           </td>
           <td>
                <a href="{{ URL::to('maps='.$data->id) }}">ดูแผนที่</a>
           </td>
           <td>
                  {{$data->stat}}
                </td>
                <td>
                <a href="{{ URL::to('manag='.$data->id) }}">ส่งแล้ว</a>
                </td>
           </tr>

          @endforeach
          </tbody>
          </table>

     </div>
     </div>
     {{$data->latitude}}
     {{$data->longitude}}

<script>
$(document).ready(function(){
  $('#myTable').dataTable();
});
</script>
