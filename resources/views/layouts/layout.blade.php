<!DOCTYPE html>
<html>
  <head>
<title>@yield('title')</title>
  </head>
<body>
  @include('layouts.menu')

  @yield('body')
  <!-- Footer -->
    <footer id="footer">
      <div class="container"style="font-family: 'Kanit', sans-serif;">
        <div class="row double">
          <div class="6u">
            <div class="row collapse-at-2">
              <div class="6u">
                <h3>ประเภทอาหารยอดฮิต</h3>
                <ul class="alt">
                  <a href="#">เมนู อาหารฝรั่งเศส อาหารสวิส อาหารเยอรมัน</a>
                <a href="#">เมนู ปลา</a>
                  <a href="#">เมนูอาหารอเมริกัน</a>
                <a href="#">เมนูอาหารเวียดนาม</a>
                </ul>
              </div>
            </div>
          </div>
          <div class="6u">
            <h3>delivery food in Ubonratchathani through foodflash</h3>
            <p>Providing convenience at your fingertips, foodflash Ubonratchathani enables you to have food and beverages delivered from top restaurants and local favourites in your area.</p>
            <ul class="icons">
              <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
              <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
              <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
            </ul>
          </div>
        </div>
        <ul class="copyright">
          <li>&copy; Untitled. All rights reserved.</li>
          <li>Design: <a href="">FilMz</a></li>
          <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
        </ul>
      </div>
    </footer>
</body>
</html>
