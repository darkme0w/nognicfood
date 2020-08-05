@extends('layouts.masterview')
@section('content')
    <div class="clearfix"></div>
    <!-- Banner Carousel -->
    <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
      <div class="slides" data-group="slides">
        <ul>
          <li>
            <div class="slide-body" data-group="slide">
              <img src="images/slider-banner.jpg" alt="banner">
              <div class="carouseal-caption">
                <div class="caption header"  data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                  <div class="sub-tit">Natural Health Care Ingredientsa</div>
                  <h2><span>100%</span> Organic</h2>
                  <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">Are they safer? More nutritious? </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="slide-body" data-group="slide">
              <img src="images/slider-banner.jpg" alt="banner">
              <div class="carouseal-caption">
                <div class="caption header"  data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                  <div class="sub-tit">Natural Health Care Ingredientsa</div>
                  <h2><span>100%</span> Organic</h2>
                  <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">Are they safer? More nutritious? </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- /Banner Carousel -->
    <div class="clearfix"></div>
    <!-- Fresh Collection -->
    <section class="fress-entry-section">
      <div class="pos-absolute">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <img src="images/fresh-fruits-img.jpg" alt="fresh fruit" class="img-responsive" />
              <div class="tit-btn-wrapper">
                <h2 class="tit"><span>fresh</span> fruits</h2>
                <a class="btn">View Collections</a> 
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="images/fresh-vegetables-img.jpg" alt="fresh vegitables" class="img-responsive" />
              <div class="tit-btn-wrapper">
                <h2 class="tit"><span>fresh</span> Vegetables</h2>
                <a class="btn">View Collections</a> 
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="images/organic-foods-img.jpg" alt="organic foods" class="img-responsive" />
              <div class="tit-btn-wrapper">
                <h2 class="tit"><span>Organic</span> Foods</h2>
                <a class="btn">View Collections</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
    <!-- /Fresh Collection -->
    <div class="clearfix"></div>
    <!-- New Arrival -->
    <section class="new-arrivals-section section-padding" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="section-tit">
              <div class="inner">
                <h2><span>New</span> arrivals</h2>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xs-12">
            <div class="owl-carousel owl-theme new-arrivals-slider">
              <div class="item">
                <div class="wrapper">
                  <div class="pro-img"> <img src="images/new-arrivals-img-1.jpg" alt="new arrival" class="img-responsive" /> </div>
                  <div class="contain-wrapper">
                    <div class="tit">Jessica Simpson Fruit's</div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                  <div class="wrapper-box-hover">
                    <div class="text">
                      <ul>
                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="wrapper">
                  <div class="pro-img"> <img src="images/new-arrivals-img-2.jpg" alt="new arrival" class="img-responsive" /> </div>
                  <div class="contain-wrapper">
                    <div class="tit">Jessica Simpson Fruit's</div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                  <div class="wrapper-box-hover">
                    <div class="text">
                      <ul>
                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="sale">sale</div>
                </div>
              </div>
              <div class="item">
                <div class="wrapper">
                  <div class="pro-img"> <img src="images/new-arrivals-img-3.jpg" alt="new arrival" class="img-responsive" /> </div>
                  <div class="contain-wrapper">
                    <div class="tit">Lee Uniforms Vegetable's Short-Sleeve</div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                  <div class="wrapper-box-hover">
                    <div class="text">
                      <ul>
                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="wrapper">
                  <div class="pro-img"> <img src="images/new-arrivals-img-4.jpg" alt="new arrival" class="img-responsive" /> </div>
                  <div class="contain-wrapper">
                    <div class="tit">Lee Uniforms Vegetable's Short-Sleeve</div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                  <div class="wrapper-box-hover">
                    <div class="text">
                      <ul>
                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="new">new</div>
                </div>
              </div>
              <div class="item">
                <div class="wrapper">
                  <div class="pro-img"> <img src="images/new-arrivals-img-1.jpg" alt="new arrival" class="img-responsive" /> </div>
                  <div class="contain-wrapper">
                    <div class="tit">Jessica Simpson Fruit's</div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                  <div class="wrapper-box-hover">
                    <div class="text">
                      <ul>
                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="wrapper">
                  <div class="pro-img"> <img src="images/new-arrivals-img-1.jpg" alt="new arrival" class="img-responsive" /> </div>
                  <div class="contain-wrapper">
                    <div class="tit">Jessica Simpson Fruit's</div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                  <div class="wrapper-box-hover">
                    <div class="text">
                      <ul>
                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /New Arrival -->
    <div class="clearfix"></div>
    <!-- Deal of the day -->
    <section class="deal-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="section-tit">
              <div class="inner">
                <h2><span>deal of</span> the day</h2>
              </div>
            </div>
            <div class="filter-part">
              <div class="col-lg-4 col-md-5 col-sm-8 col-xs-12 center-part hidden-lg">
                <div class="slider-bg">
                  <img src="images/slider-bg-1.png" alt="slider-back" class="img-responsive bg" />
                  <div class="pos-abs">
                    <div class="owl-carousel owl-theme deal-slider">
                      <div class="item">
                        <div class="pro-img"> <img src="images/deal-img-7.png" alt="Kensie Fruit" class="img-responsive" /> </div>
                        <div class="contain-wrapper">
                          <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                          <div class="price">
                            <div class="new-price">$23.00</div>
                            <div class="old-price"><del>$12.00</del></div>
                          </div>
                          <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="pro-img"> <img src="images/deal-img-7.png" alt="Kensie Fruit" class="img-responsive" /> </div>
                        <div class="contain-wrapper">
                          <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                          <div class="price">
                            <div class="new-price">$23.00</div>
                            <div class="old-price"><del>$12.00</del></div>
                          </div>
                          <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="pro-img"> <img src="images/deal-img-7.png" alt="Kensie Fruit" class="img-responsive" /> </div>
                        <div class="contain-wrapper">
                          <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                          <div class="price">
                            <div class="new-price">$23.00</div>
                            <div class="old-price"><del>$12.00</del></div>
                          </div>
                          <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xs-12">
                <div id="myBtnContainer">
                  <button class="btn active" onclick="filterSelection('all')">all</button>
                  /
                  <button class="btn" onclick="filterSelection('fruit')"> fruit</button>
                  /
                  <button class="btn" onclick="filterSelection('meet')"> meet</button>
                  /
                  <button class="btn" onclick="filterSelection('vegatable')"> vegatable</button>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 pull-left">
                <div class="filterDiv fruit" >
                  <div class="img-part"> <img src="images/deal-img-1.jpg" alt="Jessica Simpson Fruit" class="img-responsive" /> </div>
                  <div class="text-part">
                    <div class="box-tit">Jessica Simpson Fruit's</div>
                    <div class="ratting">
                      <ul>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                </div>
                <div class="filterDiv meet " >
                  <div class="img-part"> <img src="images/deal-img-2.jpg" alt="Jessica Simpson Fruit" class="img-responsive" /> </div>
                  <div class="text-part">
                    <div class="box-tit">Jessica Simpson Fruit's</div>
                    <div class="ratting">
                      <ul>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                </div>
                <div class="filterDiv vegatable " >
                  <div class="img-part"> <img src="images/deal-img-3.jpg" alt="Jessica Simpson Fruit" class="img-responsive" /> </div>
                  <div class="text-part">
                    <div class="box-tit">Jessica Simpson Fruit's</div>
                    <div class="ratting">
                      <ul>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-8 col-xs-12 center-part hidden-xs hidden-sm hidden-md">
                <div class="slider-bg">
                  <img src="images/slider-bg-1.png" alt="slider-back" class="img-responsive bg" />
                  <div class="pos-abs">
                    <div class="owl-carousel owl-theme deal-slider">
                      <div class="item">
                        <div class="pro-img"> <img src="images/deal-img-7.png" alt="Kensie Fruit" class="img-responsive" /> </div>
                        <div class="contain-wrapper">
                          <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                          <div class="price">
                            <div class="new-price">$23.00</div>
                            <div class="old-price"><del>$12.00</del></div>
                          </div>
                          <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="pro-img"> <img src="images/deal-img-7.png" alt="Kensie Fruit" class="img-responsive" /> </div>
                        <div class="contain-wrapper">
                          <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                          <div class="price">
                            <div class="new-price">$23.00</div>
                            <div class="old-price"><del>$12.00</del></div>
                          </div>
                          <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="pro-img"> <img src="images/deal-img-7.png" alt="Kensie Fruit" class="img-responsive" /> </div>
                        <div class="contain-wrapper">
                          <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                          <div class="price">
                            <div class="new-price">$23.00</div>
                            <div class="old-price"><del>$12.00</del></div>
                          </div>
                          <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pull-right">
                <div class="filterDiv fruit " >
                  <div class="img-part"> <img src="images/deal-img-4.jpg" alt="Jessica Simpson Fruit" class="img-responsive" /> </div>
                  <div class="text-part">
                    <div class="box-tit">Jessica Simpson Fruit's</div>
                    <div class="ratting">
                      <ul>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                </div>
                <div class="filterDiv meet">
                  <div class="img-part"> <img src="images/deal-img-5.jpg" alt="Jessica Simpson Fruit" class="img-responsive" /> </div>
                  <div class="text-part">
                    <div class="box-tit">Jessica Simpson Fruit's</div>
                    <div class="ratting">
                      <ul>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                </div>
                <div class="filterDiv vegatable " >
                  <div class="img-part"> <img src="images/deal-img-6.jpg" alt="Jessica Simpson Fruit" class="img-responsive" /> </div>
                  <div class="text-part">
                    <div class="box-tit">Jessica Simpson Fruit's</div>
                    <div class="ratting">
                      <ul>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/green-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                        <li><a href="#"><img src="images/dark-star-2.png" alt="star" class="img-responsive"></a></li>
                      </ul>
                    </div>
                    <div class="price">
                      <div class="new-price">$33.00</div>
                      <div class="old-price"><del>$33.00</del></div>
                    </div>
                    <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a> <i class="icon-basket-supermarket"></i> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Deal of the day -->
    <div class="clearfix"></div>
    <!-- Best Deal -->
    <section class="fress-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 lpart">
            <div class="bg equal-height ">
              <h2 class="section-name"><span>fresh</span> Fruits</h2>
              <a href="#" class="shop-btn">shop now</a> 
            </div>
          </div>
          <div class="col-sm-4  rpart">
            <div class="bg equal-height">
              <h3 class="free-shipping">freee shipping</h3>
              <p>With order over $500</p>
              <a href="#" class="shop-btn-1">shop now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Best Deal -->
    <div class="clearfix"></div>
    <!-- Organic News -->
    <section class="organic-news">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="section-tit">
              <div class="inner">
                <h2><span>Organic</span> news</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutter">
          <div class="col-sm-3 col-xs-12">
            <div class="wrapper">
              <img src="images/organic-news-img-1.jpg" alt="organic-news" class="img-responsive" />
              <div class="overlay"> </div>
              <div class="text">
                <div class="date">March 04, 2018</div>
                <div class="title"><a href="#">Quick dinners, healthy recipes, and more. </a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="wrapper">
              <img src="images/organic-news-img-2.jpg" alt="organic-news" class="img-responsive" />
              <div class="overlay"> </div>
              <div class="text">
                <div class="date">March 04, 2018</div>
                <div class="title"><a href="#">5 Reasons Why Grapes Are Good for You </a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="wrapper">
              <img src="images/organic-news-img-3.jpg" alt="organic-news" class="img-responsive" />
              <div class="overlay"> </div>
              <div class="text">
                <div class="date">March 04, 2018</div>
                <div class="title"><a href="#">Chicken & Spring Vegetable Lasagna Recipe </a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="wrapper">
              <img src="images/organic-news-img-4.jpg" alt="organic-news" class="img-responsive" />
              <div class="overlay"> </div>
              <div class="text">
                <div class="date">March 04, 2018</div>
                <div class="title"><a href="#">Fusce ac pharetra urna. Duis non lacus sit</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Organic News -->
    <div class="clearfix"></div>
    <!-- Delivery Process -->
    <section class="delivery-process">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 ">
            <div class="section-tit">
              <div class="inner">
                <h2><span>delivery</span> process</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12 first">
            <div class="icon-part"> <img src="images/step-1.png" alt="step-1" class="img-responsive center-block" /> <i class="icon-carrot"></i> </div>
            <div class="process-name">
              <div class="step">step 01</div>
              <p>Choose one or more products</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 second">
            <div class="icon-part"> <img src="images/step-2.png" alt="step-2" class="img-responsive center-block" /> <i class="icon-warehouse"></i> </div>
            <div class="process-name">
              <div class="step">step 02</div>
              <p>Determine our Farm</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 third">
            <div class="icon-part"> <img src="images/step-3.png" alt="step-3" class="img-responsive center-block" /> <i class="icon-placeholder-filled-point"></i> </div>
            <div class="process-name">
              <div class="step">step 03</div>
              <p>Write Your Location</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 fourth">
            <div class="icon-part"> <img src="images/step-4.png" alt="step-4" class="img-responsive center-block" /> <i class="icon-package"></i> </div>
            <div class="process-name">
              <div class="step">step 04</div>
              <p>Fast Delivery</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Delivery Process -->
    <div class="clearfix"></div>
    <!-- Newsletter -->
    <section class="news-letter">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="center">
              <h3 class="news-tit"><span>Sign up</span> newsletter</h3>
              <p class="instruction">Sign up our newsletter to recieve <span>latest news</span> and <span>greate offers</span>:</p>
              <div class="form">
                <form action="#">
                  <input class="newsletter-input" type="text" placeholder="Enter your email here">
                  <button class="newsletter-btn">subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Newsletter -->
    <div class="clearfix"></div>
    <!-- Brand logo -->
    <section class="brand">
      <div class="container">
      <h3 class="sr-only">Brand logos</h3>
        <div class="owl-carousel owl-theme brand-slider">
          <div class="item"> <img src="images/brand-1.png" alt="brand 01" class="img-responsive" /> </div>
          <div class="item"> <img src="images/brand-2.png" alt="brand 02" class="img-responsive" /> </div>
          <div class="item"> <img src="images/brand-3.png" alt="brand 03" class="img-responsive" /> </div>
          <div class="item"> <img src="images/brand-4.png" alt="brand 04" class="img-responsive" /> </div>
          <div class="item"> <img src="images/brand-5.png" alt="brand 05" class="img-responsive" /> </div>
          <div class="item"> <img src="images/brand-6.png" alt="brand 06" class="img-responsive" /> </div>
        </div>
      </div>
    </section>
    <!-- /Brand logo -->
    <div class="clearfix"></div>
    <!-- Services provide -->
    <section class="helpline">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="bgreen">
              <div class="inline">
                <div class="box">
                  <div class="icon"> <i class="icon-delivery-truck"></i> </div>
                  <div class="text-part">
                    <h3>Free Shipping</h3>
                    <p>Worldwide</p>
                  </div>
                </div>
                <div class="box">
                  <div class="icon"> <i class="icon-headphones"></i> </div>
                  <div class="text-part">
                    <h3>24X7</h3>
                    <p>Customer Support</p>
                  </div>
                </div>
                <div class="box">
                  <div class="icon"> <i class="icon-shuffle"></i> </div>
                  <div class="text-part">
                    <h3>Returns</h3>
                    <p>and Exchange</p>
                  </div>
                </div>
                <div class="box">
                  <div class="icon"> <i class="icon-phone-call"></i> </div>
                  <div class="text-part">
                    <h3>Hotline</h3>
                    <p><a href="tel:+8888888888">+(888) 888-8888</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Services provide -->
  @stop

