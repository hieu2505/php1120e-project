@extends('index')
@section('content')
    <div id="main" class="wrapper">
            @include('layout.sidebar')
            
            @include('layout.slider-sale')

            <section class="top-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-12 fade-left animated fadeInLeft col-edit-4">
                            <div class="left-product">
                                <div class="content-product home-first">
                                    <div class="title-primary wow fadeInUp">
                                        <a href="san-pham-khuyen-mai.html">
                                            <h3 class="title1">Sản phẩm khuyến mại</h3>
                                        </a>
                                        <!-- <a href="" class="read-more">Xem tất cả</a> -->
                                    </div>
                                    <div class="nav-product">
                                        <div class="row">
                                            <div id="product-sale-home" class='owl-carousel'>
                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i7-10700-ram-16gb-rtx-2060-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/pc-i7-10700-16gb-rtx-2060-6gb.jpg"
                                                                    alt="PC Intel i7 10700/ Ram 16GB/ RTX 2060 6GB">
                                                            </a>
                                                            <a href="pc-intel-i7-10700-ram-16gb-rtx-2060-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">27,600,000 đ</span>
                                                                <br><span class="gia-moi">23,100,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-16%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i7-10700-ram-16gb-rtx-2060-6gb.html">PC
                                                                Intel i7 10700/ Ram 16GB/ RTX 2060 6GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="689" data-price="23100000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="689"
                                                                data-price="23100000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i7-10700-ram16gb-gtx-1660-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/i7-10700-16gb-ram-gtx-1660-6gb.jpg"
                                                                    alt="PC Intel i7 10700/ Ram 16GB / GTX 1660 6GB">
                                                            </a>
                                                            <a href="pc-intel-i7-10700-ram16gb-gtx-1660-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">24,600,000 đ</span>
                                                                <br><span class="gia-moi">20,300,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-17%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i7-10700-ram16gb-gtx-1660-6gb.html">PC
                                                                Intel i7 10700/ Ram 16GB / GTX 1660 6GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="682" data-price="20300000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="682"
                                                                data-price="20300000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/i5-10400-16gb-ram-gtx-16606gb.jpg"
                                                                    alt="PC Intel I5 10400/Ram 16GB/ VGA GTX 1660 6GB">
                                                            </a>
                                                            <a href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">17,600,000 đ</span>
                                                                <br><span class="gia-moi">16,750,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-5%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-6gb.html">PC
                                                                Intel I5 10400/Ram 16GB/ VGA GTX 1660 6GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="681" data-price="16750000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="681"
                                                                data-price="16750000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i5-10500-16gb-ram-vga-rx-550-4gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/i5-10500-16gb-ram-rx550.jpg"
                                                                    alt="PC Intel I5 10500/16GB Ram/ VGA RX 550 4GB">
                                                            </a>
                                                            <a href="pc-intel-i5-10500-16gb-ram-vga-rx-550-4gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">17,000,000 đ</span>
                                                                <br><span class="gia-moi">14,750,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-13%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i5-10500-16gb-ram-vga-rx-550-4gb.html">PC
                                                                Intel I5 10500/16GB Ram/ VGA RX 550 4GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="680" data-price="14750000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="680"
                                                                data-price="14750000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i5-10600-ram-16gb-vga-rtx-2060-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/pc-i5-10600-16gb-rtx-2060-6gb.jpg"
                                                                    alt="PC Intel I5 10600/Ram 16GB/ VGA RTX 2060 6GB">
                                                            </a>
                                                            <a href="pc-intel-i5-10600-ram-16gb-vga-rtx-2060-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">22,100,000 đ</span>
                                                                <br><span class="gia-moi">20,950,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-5%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i5-10600-ram-16gb-vga-rtx-2060-6gb.html">PC
                                                                Intel I5 10600/Ram 16GB/ VGA RTX 2060 6GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="668" data-price="20950000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="668"
                                                                data-price="20950000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i5-10600-16gb-ram-vga-gtx-1660-super-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/i5-10600-16gb-ram-gtx-1660s-6gb.jpg"
                                                                    alt="PC Intel I5 10600/16GB Ram/ VGA GTX 1660 Super 6GB">
                                                            </a>
                                                            <a href="pc-intel-i5-10600-16gb-ram-vga-gtx-1660-super-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">20,400,000 đ</span>
                                                                <br><span class="gia-moi">18,550,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-9%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i5-10600-16gb-ram-vga-gtx-1660-super-6gb.html">PC
                                                                Intel I5 10600/16GB Ram/ VGA GTX 1660 Super 6GB </a>
                                                        </h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="666" data-price="18550000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="666"
                                                                data-price="18550000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-super-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/pc-i5-10400-16gb-gtx-1660s.jpg"
                                                                    alt="PC Intel I5 10400/Ram 16GB/ VGA GTX 1660 Super 6GB">
                                                            </a>
                                                            <a href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-super-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">19,800,000 đ</span>
                                                                <br><span class="gia-moi">17,150,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-13%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-super-6gb.html">PC
                                                                Intel I5 10400/Ram 16GB/ VGA GTX 1660 Super 6GB </a>
                                                        </h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="665" data-price="17150000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="665"
                                                                data-price="17150000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i5-10400-ram-16gb-vga-rtx-2060-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/pc-i5-10400-16gb-rtx-2060-6gb.jpg"
                                                                    alt="PC Intel I5 10400/Ram 16GB/ VGA RTX 2060 6GB">
                                                            </a>
                                                            <a href="pc-intel-i5-10400-ram-16gb-vga-rtx-2060-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div>
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">22,500,000 đ</span>
                                                                <br><span class="gia-moi">19,650,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-13%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i5-10400-ram-16gb-vga-rtx-2060-6gb.html">PC
                                                                Intel I5 10400/Ram 16GB/ VGA RTX 2060 6GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="664" data-price="19650000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="664"
                                                                data-price="19650000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i5-10500-16gb-ram-rtx-2060-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/pc-i5-10500-16gb-rtx-2060-6gb.jpg"
                                                                    alt="PC Intel i5 10500/16GB Ram/ RTX 2060 6GB">
                                                            </a>
                                                            <a href="pc-intel-i5-10500-16gb-ram-rtx-2060-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">21,500,000 đ</span>
                                                                <br><span class="gia-moi">20,600,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-4%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i5-10500-16gb-ram-rtx-2060-6gb.html">PC
                                                                Intel i5 10500/16GB Ram/ RTX 2060 6GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="661" data-price="20600000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="661"
                                                                data-price="20600000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i7-10700-16gb-ram-gtx-1660-super-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/pc-i7-10700-16gb-gtx-1660s-6gb.jpg"
                                                                    alt="PC Intel i7 10700/ 16GB Ram/ GTX 1660 Super 6GB">
                                                            </a>
                                                            <a href="pc-intel-i7-10700-16gb-ram-gtx-1660-super-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">25,300,000 đ</span>
                                                                <br><span class="gia-moi">20,750,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-18%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i7-10700-16gb-ram-gtx-1660-super-6gb.html">PC
                                                                Intel i7 10700/ 16GB Ram/ GTX 1660 Super 6GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="660" data-price="20750000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="660"
                                                                data-price="20750000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-intel-i7-10700k-16gb-ram-vga-gtx-1660-super-6gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/pc-i7-10700k-16gb-gtx-1660s-6gb.jpg"
                                                                    alt="PC Intel i7 10700K/16GB Ram / VGA GTX 1660 Super 6GB">
                                                            </a>
                                                            <a href="pc-intel-i7-10700k-16gb-ram-vga-gtx-1660-super-6gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">29,500,000 đ</span>
                                                                <br><span class="gia-moi">24,650,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-16%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-intel-i7-10700k-16gb-ram-vga-gtx-1660-super-6gb.html">PC
                                                                Intel i7 10700K/16GB Ram / VGA GTX 1660 Super 6GB </a>
                                                        </h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="655" data-price="24650000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="655"
                                                                data-price="24650000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="cpu-intel-core-i9-10980xe-cascade-lake-x-3-0-ghz-turbo-4-6ghz-up-to-4-8-ghz-24-75-mb-18-cores-36-threads.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/products/processor-box-core-i9-extreme-edition-1x1.png"
                                                                    alt="CPU Intel Core i9-10980XE Cascade Lake-X  (3.0 GHz Turbo 4.6GHz up to 4.8 GHz / 24.75 MB / 18 Cores, 36 Threads)">
                                                            </a>
                                                            <a href="cpu-intel-core-i9-10980xe-cascade-lake-x-3-0-ghz-turbo-4-6ghz-up-to-4-8-ghz-24-75-mb-18-cores-36-threads.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">36,000,000 đ</span>
                                                                <br><span class="gia-moi">28,500,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-21%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="cpu-intel-core-i9-10980xe-cascade-lake-x-3-0-ghz-turbo-4-6ghz-up-to-4-8-ghz-24-75-mb-18-cores-36-threads.html">CPU
                                                                Intel Core i9-10980XE Cascade Lake-X (3.0 GHz Turbo
                                                                4.6GHz up to 4.8 GHz / 24.75 MB / 18 Cores, 36 Threads)
                                                            </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="336" data-price="28500000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="336"
                                                                data-price="28500000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                                    <div class="item-product">
                                                        <div class="image">
                                                            <a href="pc-amd-ryzen-9-3900x-16gb-ram-vga-rx-550-4gb.html"
                                                                class="thubmail-img"><img
                                                                    src="assets/images/r9-3900x.png"
                                                                    alt="PC AMD Ryzen 9 3900X /16GB Ram/ VGA RX 550 4GB">
                                                            </a>
                                                            <a href="pc-amd-ryzen-9-3900x-16gb-ram-vga-rx-550-4gb.html"
                                                                class="quick-view" data-link-action="quickview">
                                                                <i class="material-icons search"></i> Quick view
                                                            </a>
                                                            <!-- <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                    </div> -->
                                                            <div class="sale-pr"><img src="assets/images/sale.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="price-c">
                                                            <p class="price"><span class="gia-cu">22,500,000 đ</span>
                                                                <br><span class="gia-moi">19,250,000<span
                                                                        class="css-size-d"> đ</span></span>
                                                            </p>


                                                            <div class="sale-off-show">-14%</div>
                                                        </div>
                                                        <h3 class="title"><a
                                                                href="pc-amd-ryzen-9-3900x-16gb-ram-vga-rx-550-4gb.html">PC
                                                                AMD Ryzen 9 3900X /16GB Ram/ VGA RX 550 4GB </a></h3>
                                                        <div class="add-cart">
                                                            <a href="" class="ajax-addtocart" data-quantity="1"
                                                                data-id="678" data-price="19250000">Cho vào giỏ</a>
                                                            <a href="" class="mh ajax-addtocart"
                                                                data-redirect="redirect" data-quantity="1" data-id="678"
                                                                data-price="19250000">Mua hàng</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-3 col-sm-3 col-xs-12 fade-Right animated fadeInRight col-edit-3 mobile-display-none">
                            <div class="right-new">
                                <div class="title-primary">
                                    <a href="tin-tuc-cong-nghe.html">
                                        <h3 class="title1">Tin tức công nghệ</h3>
                                    </a>

                                </div>
                                <div class="nav-right-new">
                                    <div class="item">
                                        <div class="image">
                                            <a href="cpu-amd-ryzen-7-5800x-nhanh-hon-ca-intel-core-i9-10900k-a323.html"><img
                                                    src="assets/images/products/amd-ryzen-5000-zen-3-vermeer.jpg"
                                                    alt="CPU AMD Ryzen 7 5800X nhanh hơn cả Intel Core i9-10900K ?">
                                            </a>
                                        </div>
                                        <div class="nav-img">
                                            <h3 class="title"><a
                                                    href="cpu-amd-ryzen-7-5800x-nhanh-hon-ca-intel-core-i9-10900k-a323.html">CPU
                                                    AMD Ryzen 7 5800X nhanh hơn cả Intel Core i9-10900K ?</a></h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <a
                                                href="evga-geforce-rtx-3090-kingpin-duoc-ep-xung-len-den-2-58ghz-a322.html"><img
                                                    src="assets/images/products/evga-geforce-rtx-3090-kingpin-hybrid.jpg"
                                                    alt="EVGA GeForce RTX 3090 KINGPIN được ép xung lên đến 2,58GHz">
                                            </a>
                                        </div>
                                        <div class="nav-img">
                                            <h3 class="title"><a
                                                    href="evga-geforce-rtx-3090-kingpin-duoc-ep-xung-len-den-2-58ghz-a322.html">EVGA
                                                    GeForce RTX 3090 KINGPIN được ép xung lên đến 2,58GHz</a></h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <a href="nvidia-geforce-rtx-3080-gap-su-co-khi-choi-game-a321.html"><img
                                                    src="assets/images/products/rtx-3080.jpg"
                                                    alt="NVIDIA GeForce RTX 3080 gặp sự cố khi chơi game">
                                            </a>
                                        </div>
                                        <div class="nav-img">
                                            <h3 class="title"><a
                                                    href="nvidia-geforce-rtx-3080-gap-su-co-khi-choi-game-a321.html">NVIDIA
                                                    GeForce RTX 3080 gặp sự cố khi chơi game</a></h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <a
                                                href="gigabyte-gioi-thieu-dong-geforce-rtx-3070-gaming-va-eagle-a320.html"><img
                                                    src="assets/images/products/gv-n3070gaming-oc-8gd-1.jpg"
                                                    alt="GIGABYTE giới thiệu dòng GeForce RTX 3070 GAMING và EAGLE">
                                            </a>
                                        </div>
                                        <div class="nav-img">
                                            <h3 class="title"><a
                                                    href="gigabyte-gioi-thieu-dong-geforce-rtx-3070-gaming-va-eagle-a320.html">GIGABYTE
                                                    giới thiệu dòng GeForce RTX 3070 GAMING và EAGLE</a></h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <a
                                                href="gigabyte-xac-nhan-geforce-rtx-3060-8gb-rtx-3070-16gb-va-rtx-3080-20gb-a319.html"><img
                                                    src="assets/images/products/rtx-3080-20gb.png"
                                                    alt="Gigabyte xác nhận GeForce RTX 3060 8GB, RTX 3070 16GB và RTX 3080 20GB">
                                            </a>
                                        </div>
                                        <div class="nav-img">
                                            <h3 class="title"><a
                                                    href="gigabyte-xac-nhan-geforce-rtx-3060-8gb-rtx-3070-16gb-va-rtx-3080-20gb-a319.html">Gigabyte
                                                    xác nhận GeForce RTX 3060 8GB, RTX 3070 16GB và RTX 3080 20GB</a>
                                            </h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-content main-content1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="nav-main-content nav-main-content1">
                                <div class="content-product">
                                    <div class="title-primary wow fadeInUp">
                                        <a href="pc-workstation.html">
                                            <h3 class="title1">PC WORKSTATION</h3>
                                        </a>
                                        <ul>
                                            <li><a href="pchl-intel-workstation.html">PC INTEL WORKSTATION</a>
                                            </li>
                                            <li><a href="pchl-amd-workstation.html">PC AMD WORKSTATION</a>
                                            </li>
                                            <li><a href="hlc-intel-xeon-workstation.html">PCHL XEON WORKSTATION</a>
                                            </li>
                                            <li><a href="cau-hinh-may-sinh-vien.html">CẤU HÌNH MÁY SINH VIÊN</a>
                                            </li>
                                            <li><a href="may-tinh-chuyen-lam-do-hoa.html">MÁY TÍNH CHUYÊN LÀM ĐỒ HỌA</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="nav-product">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i7-10700-16gb-ram-vga-rtx-2070-super-8gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/pc-i7-10700-16gb-rtx2070s-.jpg"
                                                                alt="PC Intel i7 10700/16GB Ram / VGA RTX 2070 Super 8GB">
                                                        </a>
                                                        <a href="pc-intel-i7-10700-16gb-ram-vga-rtx-2070-super-8gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">37,800,000 đ</span>
                                                            <br><span class="gia-moi">33,150,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-12%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i7-10700-16gb-ram-vga-rtx-2070-super-8gb.html">PC
                                                            Intel i7 10700/16GB Ram / VGA RTX 2070 Super 8GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="695" data-price="33150000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="695" data-price="33150000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i7-10700-16gb-ram-vga-rtx-2060-super-8gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/i7-10700-16gb-ram-rtx-2060s-8gb.jpg"
                                                                alt="PC Intel i7 10700/16GB Ram / VGA  RTX 2060 Super 8GB">
                                                        </a>
                                                        <a href="pc-intel-i7-10700-16gb-ram-vga-rtx-2060-super-8gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">27,600,000 đ</span>
                                                            <br><span class="gia-moi">24,900,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-10%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i7-10700-16gb-ram-vga-rtx-2060-super-8gb.html">PC
                                                            Intel i7 10700/16GB Ram / VGA RTX 2060 Super 8GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="691" data-price="24900000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="691" data-price="24900000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i7-10700-16gb-ram-gtx-1650-4gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/i7-10700-16gb-ram-gtx-1650-4gb.jpg"
                                                                alt="PC Intel i7 10700/ 16GB Ram/ GTX 1650 4GB">
                                                        </a>
                                                        <a href="pc-intel-i7-10700-16gb-ram-gtx-1650-4gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">23,200,000 đ</span>
                                                            <br><span class="gia-moi">18,750,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-19%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i7-10700-16gb-ram-gtx-1650-4gb.html">PC Intel
                                                            i7 10700/ 16GB Ram/ GTX 1650 4GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="690" data-price="18750000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="690" data-price="18750000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i7-10700-ram-16gb-rtx-2060-6gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/pc-i7-10700-16gb-rtx-2060-6gb.jpg"
                                                                alt="PC Intel i7 10700/ Ram 16GB/ RTX 2060 6GB">
                                                        </a>
                                                        <a href="pc-intel-i7-10700-ram-16gb-rtx-2060-6gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">27,600,000 đ</span>
                                                            <br><span class="gia-moi">23,100,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-16%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i7-10700-ram-16gb-rtx-2060-6gb.html">PC Intel
                                                            i7 10700/ Ram 16GB/ RTX 2060 6GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="689" data-price="23100000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="689" data-price="23100000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i7-10700-ram16gb-gtx-1660-6gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/i7-10700-16gb-ram-gtx-1660-6gb.jpg"
                                                                alt="PC Intel i7 10700/ Ram 16GB / GTX 1660 6GB">
                                                        </a>
                                                        <a href="pc-intel-i7-10700-ram16gb-gtx-1660-6gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">24,600,000 đ</span>
                                                            <br><span class="gia-moi">20,300,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-17%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i7-10700-ram16gb-gtx-1660-6gb.html">PC Intel
                                                            i7 10700/ Ram 16GB / GTX 1660 6GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="682" data-price="20300000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="682" data-price="20300000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-6gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/i5-10400-16gb-ram-gtx-16606gb.jpg"
                                                                alt="PC Intel I5 10400/Ram 16GB/ VGA GTX 1660 6GB">
                                                        </a>
                                                        <a href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-6gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">17,600,000 đ</span>
                                                            <br><span class="gia-moi">16,750,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-5%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i5-10400-ram-16gb-vga-gtx-1660-6gb.html">PC
                                                            Intel I5 10400/Ram 16GB/ VGA GTX 1660 6GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="681" data-price="16750000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="681" data-price="16750000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i5-10500-16gb-ram-vga-rx-550-4gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/i5-10500-16gb-ram-rx550.jpg"
                                                                alt="PC Intel I5 10500/16GB Ram/ VGA RX 550 4GB">
                                                        </a>
                                                        <a href="pc-intel-i5-10500-16gb-ram-vga-rx-550-4gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">17,000,000 đ</span>
                                                            <br><span class="gia-moi">14,750,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-13%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i5-10500-16gb-ram-vga-rx-550-4gb.html">PC
                                                            Intel I5 10500/16GB Ram/ VGA RX 550 4GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="680" data-price="14750000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="680" data-price="14750000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i9-10980xe-32gb-ram-rtx-2070-8gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/32.2070.jpg"
                                                                alt="PC Intel I9 32GB Ram/RTX 2070 8GB">
                                                        </a>
                                                        <a href="pc-intel-i9-10980xe-32gb-ram-rtx-2070-8gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">70,900,000 đ</span>
                                                            <br><span class="gia-moi">64,750,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-9%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i9-10980xe-32gb-ram-rtx-2070-8gb.html">PC
                                                            Intel I9 32GB Ram/RTX 2070 8GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="672" data-price="64750000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="672" data-price="64750000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i9-10980xe-32gb-ram-gtx-1660-super-6gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/32.1660s.jpg"
                                                                alt="PC Intel I9 32GB Ram/GTX 1660 Super 6GB">
                                                        </a>
                                                        <a href="pc-intel-i9-10980xe-32gb-ram-gtx-1660-super-6gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">60,500,000 đ</span>
                                                            <br><span class="gia-moi">55,750,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-8%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i9-10980xe-32gb-ram-gtx-1660-super-6gb.html">PC
                                                            Intel I9 32GB Ram/GTX 1660 Super 6GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="671" data-price="55750000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="671" data-price="55750000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="pc-intel-i9-10980xe-32gb-ram-rtx-2060-6gb.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/32.2060.jpg"
                                                                alt="PC Intel I9 32GB Ram/RTX 2060 6GB">
                                                        </a>
                                                        <a href="pc-intel-i9-10980xe-32gb-ram-rtx-2060-6gb.html"
                                                            class="quick-view" data-link-action="quickview">
                                                            <i class="material-icons search"></i> Quick view
                                                        </a>
                                                        <div class="new-pr"><img src="assets/images/new.png" alt="">
                                                        </div>
                                                        <div class="sale-pr"><img src="assets/images/sale.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">63,500,000 đ</span>
                                                            <br><span class="gia-moi">58,000,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-9%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="pc-intel-i9-10980xe-32gb-ram-rtx-2060-6gb.html">PC
                                                            Intel I9 32GB Ram/RTX 2060 6GB</a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="670" data-price="58000000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="670" data-price="58000000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="category-banner">
                                        <div class="banner">
                                            <a href="pc-workstation.html"><img alt="ads2" class="img-responsive"
                                                    src="assets/images/products/banner-ws02.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bottom-content">
                <div class="container" style="padding-top: 20px;">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                            <div class="item">
                                <div class="icon"><img src="assets/images/video/4.jpg" alt="SẢN PHẨM CHÍNH HÃNG">
                                </div>
                                <div class="nav-icon">
                                    <h4 class="title">SẢN PHẨM CHÍNH HÃNG</h4>
                                    <p class="desc"> Cam Kết Giá Tốt Nhất</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                            <div class="item">
                                <div class="icon"><img src="assets/images/video/1.jpg" alt="GIAO HÀNG MIỄN PHÍ">
                                </div>
                                <div class="nav-icon">
                                    <h4 class="title">GIAO HÀNG MIỄN PHÍ</h4>
                                    <p class="desc"> Tại Nơi Sử Dụng</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                            <div class="item">
                                <div class="icon"><img src="assets/images/video/3.jpg" alt="ĐỔI TRẢ NHANH GỌN">
                                </div>
                                <div class="nav-icon">
                                    <h4 class="title">ĐỔI TRẢ NHANH GỌN</h4>
                                    <p class="desc"> Suốt Quá Trình Sử Dụng</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                            <div class="item">
                                <div class="icon"><img src="assets/images/video/2.jpg" alt="BẢO HÀNH SIÊU TỐC">
                                </div>
                                <div class="nav-icon">
                                    <h4 class="title">BẢO HÀNH SIÊU TỐC</h4>
                                    <p class="desc"> Tại&nbsp;Nơi Sử dụng 24/7</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
