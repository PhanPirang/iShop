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
              <li><img src="{{asset('front')}}/images/product-detail/detail-img-1.jpg" alt="product-image" /></li>
              <li><img src="{{asset('front')}}/images/product-detail/detail-img-2.jpg" alt="product-image" /></li>
              <li><img src="{{asset('front')}}/images/product-detail/detail-img-3.jpg" alt="product-image" /></li>
              <li><img src="{{asset('front')}}/images/product-detail/detail-img-4.jpg" alt="product-image" /></li>
            </ul>
          </div>
        </div>
        <div class="product-cart product-details-narrow col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
          <div class="product-options_header clearfix wow fadeIn" data-wow-delay="0.3s">
            <h3 class="font-additional font-weight-bold text-uppercase">{{$product->name}}</h3>
            <div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$265.00</span></div>
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
            <div class="product-options_desc font-main color-third">Proin est elentesque risus magna vulputate vitae sodales uam morbi non sem lacus porta mollis. Nunc condime ntum metus eud In molestie.</div>
          </div>
          <div class="product-options_cart clearfix wow fadeIn" data-wow-delay="0.3s">
            <div class="select pull-left">
              <select id="size" name="size" class="select-field font-additional">
                <option value="">Select Size</option>
                <option value="trending">extra large</option>
                <option value="sales">Large</option>
                <option value="rating">medium</option>
                <option value="price-asc">small</option>
                <option value="price-desc">extra small</option>
              </select>
              <i class="fa fa-angle-down customColor"></i>
            </div>
            <div class="select pull-right">
              <select id="color" name="color" class="select-field font-additional">
                <option value="">Select COLOR</option>
                <option value="trending">White</option>
                <option value="sales">green</option>
                <option value="rating">black</option>
                <option value="price-asc">red</option>
                <option value="price-desc">blue</option>
              </select>
              <i class="fa fa-angle-down customColor"></i>
            </div>
            <div class="product-options_row">
              <div class="product-counter">
                <input class="font-main font-weight-normal" type="text" name="product-qty" id="productQuantity" value="1" readonly="readonly">
                <div class="productCounter addQuantity font-main hover-focus-color" data-counter-step="1" data-counter-type="add" data-counter-field="#productQuantity">+</div>
                <div class="productCounter minusQuantity font-main hover-focus-color" data-counter-step="1" data-counter-type="minus" data-counter-field="#productQuantity">-</div>
              </div>
              <a href="#" class="btn button-additional button-big font-additional font-weight-normal text-uppercase hvr-bounce-to-right before-bg">
                <span class="icon-basket" aria-hidden="true"></span>
                add to cart
              </a>
            </div>
            <div class="product-options_row">
              <ul class="product-links">
                <li>
                  <a href="#" class="font-additional font-weight-normal hover-focus-color">
                    <span aria-hidden="true" class="icon-heart"></span>
                    add to wishlist
                  </a>
                </li>
                <li>
                  <a href="#" class="font-additional font-weight-normal hover-focus-color">
                    <span class="icon-envelope" aria-hidden="true"></span>
                    email to friend
                  </a>
                </li>
              </ul>
            </div>
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
        <div class="product-content col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
          <h3 class="font-additional font-weight-bold text-uppercase">Advanced product description</h3>
          <p>Proin est elentesque risus magna vulputate vitae sodales uam morbi non sem lacus porta mollis. Nunc condime ntum metus eud In molestie sed consect etu Lorem ipsum dolor sit amet conse adipisicing elit sed do incididunt ut labore et dolore magna. Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi ut aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <img class="pull-left border-img-l" src="{{asset('front')}}/images/product-detail/extDetail-img-1.jpg" alt="Product Img">
          <h4 class="customColor font-additional font-weight-bold text-uppercase">FEATURES</h4>
          <p>Simultaneously relaxed and polished, the dressy tank is never an oxymoron. This version perfectly embodies both qualities with its boxy silhouette, which is refined with a round neckline and allover  metallic flecks. So pair it with your sharpest pencil skirt or favorite boyfriend jeans - the work-to-weekend options are endless.</p>
          <ul class="bullet-list">
            <li>lorem impsum</li>
            <li>lorem impsum  emmet</li>
            <li>lorem impsum doller </li>
            <li>lorem impsum doller emmet</li>
            <li>lorem impsum </li>
            <li>lorem impsum doller</li>
          </ul>
          <div class="shell-box font-weight-semibold">it is for additional important information</div>
          <div class="options-box font-additional">Product Code : 2055878540</div>
          <div class="sepparator"></div>
          <img class="pull-right border-img-r" src="{{asset('front')}}/images/product-detail/extDetail-img-2.jpg" alt="Product Img">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <p>Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore.</p>
          <div class="options-box font-additional">Tops, Tees, Blouses, Hoodies, Outerwear,&amp;Dresses</div>
          <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur mag dolor es eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam eius modi tempora incidunt.</p>
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