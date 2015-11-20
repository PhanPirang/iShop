@extends('layout.master_front')

@section('title')
@stop

@section('content')
	<section id="main-slider">
		<div id="owl-main-slider" class="enable-owl-carousel owl-main-slider owl-carousel owl-theme" data-navigation="true" data-pagination="false" data-single-item="true" data-auto-play="7000" data-transition-style="fadeUp" data-main-text-animation="true" data-after-init-delay="4000" data-after-move-delay="500" data-stop-on-hover="true">
			@foreach($slides as $slide)
			<div class="item slide2">
				<img src="{{asset('admin/assets/uploads/slides') . '/' . $slide->image_url}}" alt="Slide 2">
				<div class="main-slider_content">
					<div class="main-slider_row">
						<div class="line-separator main-slider_zoomIn animated" style="visibility: hidden;">
							<img src="{{asset('front')}}/images/seperator.png" alt="seperator">
						</div>
					</div>
					<div class="main-slider_smalltitle color-main main-slider_fadeInRight animated" style="visibility: hidden;">{{$slide->caption}}</div>
					<h3 class="main-slider_title font-additional font-weight-bold text-shadow color-main main-slider_fadeInLeft animated" style="visibility: hidden;">{{$slide->description}}</h3>
				</div>
			</div>
			@endforeach
		</div>
	</section>

	<section id="collection" class="borderTopSeparator">
		<div class="container relative">
			
			<div class="isotopeBox">
				<h2 class="title font-additional font-weight-bold text-uppercase wow fadeInUp" data-wow-duration="2s">BEST SELLERS</h2>
				<span class="subTitle font-additional font-weight-normal text-uppercase wow fadeIn" data-wow-duration="2s">NEW ARRIVAL / TRENDY COLLECTION</span>
				<div class="line-seperatorBox clearfix">
					<div class="line-seperator">
						<img src="{{asset('front')}}/images/seperator.png" alt="seperator">
					</div>
					<ul id="filter" class="product-filter clearfix">
						<li>
							<a href="#" class="current btn font-additional font-weight-normal text-uppercase before-bg hvr-bounce-to-right" data-filter=".newproducts">ALL PRODUCTS</a>
						</li>
					</ul>
					<div class="isotope-frame">
						<div class="isotope-filter">
							@foreach($product as $pro)
							<div class="isotope-item  newproducts discount">
								<div class="product-item hvr-underline-from-center">
									<div class="product-item_body">
										<img class="product-item_image" src="{{asset('admin/assets/uploads/products' . '/' . $pro->image_path)}}" alt="Product">
										<a class="product-item_link" href="{{URL::to('single') . '/' . $pro->id}}">
											<span class="product-item_sale color-main font-additional customBgColor circle">-15%</span>
										</a>
										<div class="product-sidebar">
				                          <a href="{{URL::to('single') . '/' . $pro->id}}" class="info">
				                            <span>QUICK VIEW</span>
				                          </a>

				                          <a href="#" class="favorites">
				                            <span>ADD TO FAVORITE</span>
				                          </a>
				                        </div> 
									</div>
									<a href="{{URL::to('single') . '/' . $pro->id}}" class="product-item_footer">
										<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">{{$pro->name}}</div>
										<div class="product-item_price font-additional font-weight-normal customColor">${{$pro->price}} </div>
									</a>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="discount" class="discount background-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
					<img class="discount-image wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s" src="{{asset('front')}}/images/bags.png" alt="Discounts">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix text-center">
					<div class="discount-info">
						<span class="discount-info_small_txt customColor text-uppercase wow fadeInUp text-center" data-wow-delay="0.6s" data-wow-duration="2s">get upto 20% offer for order over $499!</span>
						<span class="discount-info_shadow_txt font-additional font-weight-bold text-uppercase wow fadeIn text-center" data-wow-delay="0.8s" data-wow-duration="2s" style="color:#000;">NEWEST FASHION <br> BAGS COLLECTION</span>
        <div class="line-separatorBox">
          <div class="line-separator" style="visibility: hidden; margin-top:15px; margin-bottom:30px;">
            <img src="{{asset('front')}}/images/seperator.png" alt="seperator">
          </div>
        </div>								
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="slider" class="slider-container">
		<div class="container">
  <div class="row">
			<h2 class="title font-additional font-weight-bold text-uppercase wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2s">NEW ARRIVALS</h2>
			<span class="subTitle font-additional font-weight-normal text-uppercase wow fadeIn" data-wow-duration="2s">TRENDY COLLECTION</span>
			  <div class="line-separatorBox text-center">
      <div class="line-separator animated" style="visibility: visible; margin-top:15px; margin-bottom:30px;">
          <img src="{{asset('front')}}/images/seperator.png" alt="seperator">
        </div>
    </div>
				<div id="owl-product-slider" class="enable-owl-carousel owl-product-slider owl-bottom-pagination owl-carousel owl-theme" data-navigation="true" data-pagination="false" data-single-item="false" data-auto-play="false" data-transition-style="false" data-main-text-animation="false" data-min600="2" data-min800="3" data-min1200="4">
					<div class="item">
						<div class="product-item hvr-underline-from-center">
							<div class="product-item_body product-border">
								<img alt="Product" src="{{asset('front')}}/images/products/12.jpg" class="product-item_image">
								<a href="product-details.html" class="product-item_link">
									<span class="product-item_sale color-main font-additional customBgColor circle">-10%</span>
								</a>
								<div class="product-sidebar">
                  <a href="#" class="buy">
                    <span>BUY ITEM</span>
                  </a>

                  <a href="product-details.html" class="info">
                    <span>QUICK VIEW</span>
                  </a>

                  <a href="#" class="favorites">
                    <span>ADD TO FAVORITE</span>
                  </a>
                </div>
							</div>
							<a class="product-item_footer" href="product-details.html">
								<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">PURE LEATHER BAG</div>
								<div class="product-item_price font-additional font-weight-normal customColor">$240.00</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-item hvr-underline-from-center">
							<div class="product-item_body product-border">
								<img alt="Product" src="{{asset('front')}}/images/products/13.jpg" class="product-item_image">
								<a href="product-details.html" class="product-item_link">
									<span class="product-item_new color-main font-additional text-uppercase circle">new</span>
								</a>
								<div class="product-sidebar">
                  <a href="#" class="buy">
                    <span>BUY ITEM</span>
                  </a>

                  <a href="product-details.html" class="info">
                    <span>QUICK VIEW</span>
                  </a>

                  <a href="#" class="favorites">
                    <span>ADD TO FAVORITE</span>
                  </a>
                </div>
							</div>
							<a class="product-item_footer" href="product-details.html">
								<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">SHOES</div>
								<div class="product-item_price font-additional font-weight-normal customColor">$260.00 <span>$300.00</span></div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-item hvr-underline-from-center">
							<div class="product-item_body product-border">
								<img alt="Product" src="{{asset('front')}}/images/products/14.jpg" class="product-item_image">
								<a href="product-details.html" class="product-item_link">
									<span class="product-item_outofstock color-main font-additional circle">OUT OF STOCK</span>
								</a>
								<div class="product-sidebar">
                  <a href="#" class="buy">
                    <span>BUY ITEM</span>
                  </a>

                  <a href="product-details.html" class="info">
                    <span>QUICK VIEW</span>
                  </a>

                  <a href="#" class="favorites">
                    <span>ADD TO FAVORITE</span>
                  </a>
                </div>
							</div>
							<a class="product-item_footer" href="product-details.html">
								<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">SPORTS SHOES</div>
								<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-item hvr-underline-from-center">
							<div class="product-item_body product-border">
								<img alt="Product" src="{{asset('front')}}/images/products/15.jpg" class="product-item_image">
								<a href="product-details.html" class="product-item_link">
									<span class="product-item_sale color-main font-additional customBgColor circle">-20%</span>
								</a>
								<div class="product-sidebar">
                  <a href="#" class="buy">
                    <span>BUY ITEM</span>
                  </a>

                  <a href="product-details.html" class="info">
                    <span>QUICK VIEW</span>
                  </a>

                  <a href="#" class="favorites">
                    <span>ADD TO FAVORITE</span>
                  </a>
                </div>
							</div>
							<a class="product-item_footer" href="product-details.html">
								<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">LEATHER JACKET</div>
								<div class="product-item_price font-additional font-weight-normal customColor">$300.00</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-item hvr-underline-from-center">
							<div class="product-item_body product-border">
								<img alt="Product" src="{{asset('front')}}/images/products/16.jpg" class="product-item_image">
								<a href="product-details.html" class="product-item_link">
									<span class="product-item_sale color-main font-additional customBgColor circle">-15%</span>
								</a>
								<div class="product-sidebar">
                  <a href="#" class="buy">
                    <span>BUY ITEM</span>
                  </a>

                  <a href="product-details.html" class="info">
                    <span>QUICK VIEW</span>
                  </a>

                  <a href="#" class="favorites">
                    <span>ADD TO FAVORITE</span>
                  </a>
            </div>
							</div>
							<a class="product-item_footer" href="product-details.html">
								<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">TRAVEL BAG</div>
								<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="subscribe" class="subscribe-row">
		<div class="container">
			<div class="subscribe-container clearfix wow fadeInUp text-center" data-wow-delay="0.3s">
				<div class="col-sm-12 subscribe-desc font-additional font-weight-bold">SIGN UP FOR OUR MONTHLY NEWSLETTER</div>
				<div id="mc_embed_signup" class="col-sm-9 col-sm-offset-3 subscribe-form">
					<form action="#" method="post">
        <div id="mc_embed_signup_scroll">
          <div class="mc-field-group subscribe-field">
            <input type="email" value="" name="sub-email" class="required email font-main color-third" id="sub-email" required>
          </div>                  
          <div class="subscribe-button">
            <button type="submit" value="Subscribe" name="subscribe" class="btn btn-primary font-additional hvr-bounce-to-right before-bg"> SUBSCRIBE </button>
          </div>
        </div>
      </form>
				</div>
			</div>
		</div>
	</section>
@stop