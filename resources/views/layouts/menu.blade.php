
<!DOCTYPE HTML>
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
						<!--<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="no-sidebar.html">No Sidebar</a></li> -->
						@if(session()->has('admin'))
						<li><a href="/" class="button special">Sign Out</a></li>
				  	@else
						<li><a href="/adminpg" class="button special">manage</a></li>
						@endif
					</ul>
				</nav>
			</header>


	</body>
</html>
