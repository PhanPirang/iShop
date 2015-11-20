@extends('layout.master_front')

@section('content')
  <section id="pageTitleBox" class="paralax breadcrumb-container"  style="background-image: url('{{asset('front')}}/images/detail-heading-bg.jpg');">
    <div class="overlay"></div>
    <div class="container relative">
      <h1 class="title font-additional font-weight-normal color-main text-uppercase wow zoomIn" data-wow-delay="0.3s">Product Name</h1>
      <ul class="breadcrumb-list">
        <li>
          <a href="index-1.html" class="font-additional font-weight-normal color-main text-uppercase">HOME</a>
          <span><i class="fa fa-angle-double-right"></i> </span>
        </li>
        <li>
          <a href="#" class="font-additional font-weight-normal color-main text-uppercase">Bags</a>
          <span><i class="fa fa-angle-double-right"></i></span>
        </li>
        <li>
          <a href="product-detail-1.html" class="font-additional font-weight-normal color-main text-uppercase">Product detail</a>
        </li>
      </ul>
    </div>
  </section>

  <section id="productDetails" class="product-details">
    <div class="container">
      <div class="row narrow-content">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
          <div class="product-gallery vertical-pager">
            <div id="bx-pager" class="product-gallery_preview">
              <a data-slide-index="0" href="#"><img src="{{asset('front')}}/images/product-detail/detail-img-1-thumb.jpg" alt="product-image-thumb" /></a>
              <a data-slide-index="1" href="#"><img src="{{asset('front')}}/images/product-detail/detail-img-2-thumb.jpg" alt="product-image-thumb"/></a>
              <a data-slide-index="2" href="#"><img src="{{asset('front')}}/images/product-detail/detail-img-3-thumb.jpg" alt="product-image-thumb"/></a>
              <a data-slide-index="3" href="#"><img src="{{asset('front')}}/images/product-detail/detail-img-4-thumb.jpg" alt="product-image-thumb" /></a>
            </div>
            <ul class="bxslider" data-mode="fade" data-slide-margin="0" data-min-slides="1" data-move-slides="1" data-pager="true" data-pager-custom="#bx-pager" data-controls="false">
              <li><img src="{{asset('admin/assets/uploads/products' . '/' . $product->image_path)}}" alt="product-image" /></li>
              <li><img src="{{asset('front')}}/images/product-detail/detail-img-2.jpg" alt="product-image" /></li>
              <li><img src="{{asset('front')}}/images/product-detail/detail-img-3.jpg" alt="product-image" /></li>
              <li><img src="{{asset('front')}}/images/product-detail/detail-img-4.jpg" alt="product-image" /></li>
            </ul>
          </div>
        </div>
        <div class="product-cart product-details-narrow col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
          <div class="product-options_header clearfix wow fadeIn" data-wow-delay="0.3s">
            <h3 class="font-additional font-weight-bold text-uppercase">{{$product->name}}</h3>
            <div class="product-item_price font-additional font-weight-normal customColor">${{$product->price}}</div>
            <ul class="rating">
              <li><span aria-hidden="true" class="icon-star customColor"></span></li>
              <li><span aria-hidden="true" class="icon-star customColor"></span></li>
              <li><span aria-hidden="true" class="icon-star customColor"></span></li>
              <li><span aria-hidden="true" class="icon-star customColor"></span></li>
              <li><span aria-hidden="true" class="icon-star color-additional"></span></li>
            </ul>
          </div>
          <div class="product-options_body clearfix wow fadeIn" data-wow-delay="0.3s">
            <h4 class="font-additional font-weight-bold text-uppercase">PRODUCT DESCRIPTION</h4>
            <div class="product-options_desc font-main color-third">{{$product->description}}</div>
          </div>
          <div class="product-options_footer clearfix wow fadeIn" data-wow-delay="0.3s">
            <div class="product-options_row">
              <h4 class="font-additional font-weight-bold text-uppercase">Share this product</h4>
              <ul class="social-list">
                <li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_facebook" aria-hidden="true"></span></a></li>
                <li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_twitter" aria-hidden="true"></span></a></li>
                <li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_googleplus" aria-hidden="true"></span></a></li>
                <li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_pinterest" aria-hidden="true"></span></a></li>
                <li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_instagram" aria-hidden="true"></span></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section id="slider" class="slider-container product-detail-slider">
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
                <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">PURE LEATHER BAG</div>
                <div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$265.00</span></div>
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
                <div class="product-item_price font-additional font-weight-normal customColor">$560.00</div>
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

@stop