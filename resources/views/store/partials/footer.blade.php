<footer class="container-fluid">

  
</div>


  <div class="col-xs-12 navbar-inverse navbar-fixed-bottom">
  <div class="row" id="bottomNav">
    <div class="col-xs-4 text-center"><a href="/cart/show" class="{{ Request::is('/cart/show') ? ' class="active"' : null }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i><br>Cart</a></div>
    <div class="col-xs-4 text-center"><a href="/" class="{{ Request::is('/') ? ' class="active"' : null }} "><i class="fa fa-home" aria-hidden="true"></i><br>Home</a></div>
    <div class="col-xs-4 text-center"><a href="/order-detail" class="{{ Request::is('/order-details') ? ' class="active"' : null }}	"><i class="fa fa-cc-paypal" aria-hidden="true"></i><br>Checkout</a></div>
  </div>
  </div>

	<div class="row" style="margin-bottom:8%;">
		<div class="col-md-4">
			<h3>My Laravel Store</h3>
			<p>Ab consectetur, quasi!</p>
		</div>
		<div class="col-md-4">
			<h3>Contacts:</h3>
			<div class="author-info">
			
			<i class="fa fa-at"></i> <a href="#">admin@admin.com</a>
			</div>
		</div>
		<div class="col-md-4">
			<h3>Socials</h3>
			<ul class="redes">
				<li>
					<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-youtube-square fa-2x"></i></a>
				</li>
			</ul>
			
		</div>
	</div>
</footer>