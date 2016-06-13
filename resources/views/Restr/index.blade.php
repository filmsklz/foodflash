@extends('layouts.layout')
@section('title')
Delivery food | take away food  | foodflash Ubonratchathani
@stop

@section('body')
<head>

  </head>

	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	    	  <div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>Login to Your Account</h1><br>
					  <form>
						<input type="password" name="pass" placeholder="Password">
						<input type="submit" name="login" class="login loginmodal-submit" value="Login">
					  </form>

					  <div class="login-help">
						<a href="#">Register</a> - <a href="#">Forgot Password</a>
					  </div>
					</div>
				</div>
			  </div>
<!-- Banner -->

			<section id="banner">
				<div class="inner">
					<h2>This is FOOD FLASH</h2>
					<p>Discover local restaurants that deliver to your doorstep</p>
					<ul class="actions">
						<li><a href="/showrestr" class="button big special">Show restaurants</a></li>

					</ul>
				</div>
			</section>
      <div style="margin-top:1%;text-align:center;">
        <img src = {{asset('images/howto.jpg')}}>
      </div>
		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2>Popular Restaurants</h2>
				</header>
				<div class="container" style="font-family: 'Kanit', sans-serif;">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<i class="icon fa-area-chart major"></i>
								<h3>ร้านบุญหลาย หมูกรอบ</h3>
								<p>หมูแดงนุ่ม หอม ไม่กระด้าง หมูกรอบ กรอบ 3 วัน กรอบ แต่ไม่แข็ง อร่อยที่สุดในสามโลก ฉ่ำน้ำราด กลมกล่อม...คุณต้องมาลองชิมครัช</p>
                <a href="{{ URL::to('orders=1') }}" class="button alt">Order Now</a>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<i class="icon fa-refresh major"></i>
								<h3>ร้าน ‪#‎ตามมายำ‬</h3>
								<p>- ยำมะม่วงปูม้า 80-150 บาท<br/>- ยำมะม่วงกุ้งสด 60-100 บาท<br/>- ยำมะม่วงหอยนางรม 60-100 บาท<br/></p>
                <a href="{{ URL::to('orders=3') }}"  class="button alt">Order Now</a>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<i class="icon fa-cog major"></i>
								<h3>ร้าน คุณหนุ่ยซีฟู้ด</h3>
								<p>‪ซีฟู้ดสดๆถูกๆราคาสบายกะเป๋า อาหารทะเลใหม่สด
‪#‎กุ้งขนาด 20 ตัวต่อ 1 กิโลราคา 400 บาท พร้อมน้ำจิ้มซีฟู้ดรสเด็ดจี๊ดจ๊าด</p>
                <a href="{{ URL::to('orders=4') }}"  class="button alt">Order Now</a>
							</section>
						</div>
					</div>
				</div>
			</section>


@stop
