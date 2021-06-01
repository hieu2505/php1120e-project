@extends('index')
@section('content')
<div id="main" class="wrapper main-product">
            @include('layout.sidebar')
            <div class="bres">
                <div class="container">
                    <ul>
                        <li><a href="">Trang chủ</a>/</li>
                        <li>CPU - BỘ VI XỬ LÝ </li>
                    </ul>
                </div>
            </div>
            <section class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="sidebar wow fadeInUp">
                                <div class="sidebar wow fadeInUp">
                                    <div class="item-sb side-category">
                                        <div class="category">
                                            <h3 class="title" style="margin-top: 0px;"><i class="fa fa-bars"></i>CPU -
                                                BỘ VI XỬ LÝ</h3>
                                        </div>

                                    </div>
                                </div>
                                <style type="text/css" media="screen">
                                    .fillter_bl .fa.fa-check {
                                        position: absolute;
                                        left: 12px;
                                        top: 9px;
                                        display: none;
                                        color: green;
                                    }

                                    .fillter-label.tpInputLabel.checked label::before {
                                        border: 1px solid #ccc !important;
                                    }

                                    .fillter-label.tpInputLabel.checked label .fa.fa-check {
                                        display: block;
                                    }
                                </style>
                                <div class="aside-fillter">
                                    <section class="fillter_bl">
                                        <div class="content_fillter">
                                            <div class="group-fillter fill-key-0">
                                                <div class="attribute-title">
                                                    <label class="form-label tpInputLabel">Bảng giá</label>
                                                </div>

                                            </div>
                                            <div class="group-fillter fill-key-0">
                                                <div class="attribute-title">
                                                    <label class="form-label tpInputLabel">Hãng Sản Xuất</label>
                                                </div>
                                                <div class="attribute-group">
                                                    <label class="fillter-label tpInputLabel fill-line-0"
                                                        data-line="fill-line-0">
                                                        <input class="filter" type="checkbox" name="attr[type]"
                                                            value="46" id="item-46" />
                                                        <label for="item-46"><i class="fa fa-check"
                                                                aria-hidden="true"></i>Intel</label>
                                                    </label>
                                                    <label class="fillter-label tpInputLabel fill-line-0"
                                                        data-line="fill-line-0">
                                                        <input class="filter" type="checkbox" name="attr[type]"
                                                            value="47" id="item-47" />
                                                        <label for="item-47"><i class="fa fa-check"
                                                                aria-hidden="true"></i>AMD</label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="group-fillter fill-key-1">
                                                <div class="attribute-title">
                                                    <label class="form-label tpInputLabel">Socket</label>
                                                </div>
                                                <div class="attribute-group">
                                                    <label class="fillter-label tpInputLabel fill-line-1"
                                                        data-line="fill-line-1">
                                                        <input class="filter" type="checkbox" name="attr[socket]"
                                                            value="61" id="item-61" />
                                                        <label for="item-61"><i class="fa fa-check"
                                                                aria-hidden="true"></i>Intel LGA 1151</label>
                                                    </label>
                                                    <label class="fillter-label tpInputLabel fill-line-1"
                                                        data-line="fill-line-1">
                                                        <input class="filter" type="checkbox" name="attr[socket]"
                                                            value="63" id="item-63" />
                                                        <label for="item-63"><i class="fa fa-check"
                                                                aria-hidden="true"></i>AM4</label>
                                                    </label>
                                                    <label class="fillter-label tpInputLabel fill-line-1"
                                                        data-line="fill-line-1">
                                                        <input class="filter" type="checkbox" name="attr[socket]"
                                                            value="64" id="item-64" />
                                                        <label for="item-64"><i class="fa fa-check"
                                                                aria-hidden="true"></i>TR4</label>
                                                    </label>
                                                    <label class="fillter-label tpInputLabel fill-line-1"
                                                        data-line="fill-line-1">
                                                        <input class="filter" type="checkbox" name="attr[socket]"
                                                            value="65" id="item-65" />
                                                        <label for="item-65"><i class="fa fa-check"
                                                                aria-hidden="true"></i>Intel LGA 2066</label>
                                                    </label>
                                                    <label class="fillter-label tpInputLabel fill-line-1"
                                                        data-line="fill-line-1">
                                                        <input class="filter" type="checkbox" name="attr[socket]"
                                                            value="66" id="item-66" />
                                                        <label for="item-66"><i class="fa fa-check"
                                                                aria-hidden="true"></i>Intel LGA 2011</label>
                                                    </label>
                                                    <label class="fillter-label tpInputLabel fill-line-1"
                                                        data-line="fill-line-1">
                                                        <input class="filter" type="checkbox" name="attr[socket]"
                                                            value="67" id="item-67" />
                                                        <label for="item-67"><i class="fa fa-check"
                                                                aria-hidden="true"></i>Intel LGA 1150</label>
                                                    </label>
                                                    <label class="fillter-label tpInputLabel fill-line-1"
                                                        data-line="fill-line-1">
                                                        <input class="filter" type="checkbox" name="attr[socket]"
                                                            value="185" id="item-185" />
                                                        <label for="item-185"><i class="fa fa-check"
                                                                aria-hidden="true"></i>sTRX4</label>
                                                    </label>
                                                    <label class="fillter-label tpInputLabel fill-line-1"
                                                        data-line="fill-line-1">
                                                        <input class="filter" type="checkbox" name="attr[socket]"
                                                            value="198" id="item-198" />
                                                        <label for="item-198"><i class="fa fa-check"
                                                                aria-hidden="true"></i>Intel LGA 1200</label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <form class="uk-hidden" id="Formfilter" method="post" action="" style="display: none;">
                                    <input type="text" value="" name="attr" id="attr" class="confirm-filter" />
                                    <input type="text" value="1" name="page" id="page" class="" />
                                    <input type="text" value="97" name="cataloguesid" id="cataloguesid" class="" />
                                    <input type="submit" value="" name="submit" id="filter_submit" class="" />
                                </form>
                                <script type="text/javascript">
                                    $(document).ready(function () {

                                        $('#Formfilter').on('submit', function (e) {
                                            var attr = $('#attr').val();
                                            var page = $('#page').val();
                                            var cataloguesid = $('#cataloguesid').val();
                                            var postData = $(this).serializeArray();
                                            var formURL = 'products/ajax/products/filter';
                                            $.post(formURL, {
                                                post: attr, page: page, cataloguesid: cataloguesid
                                            },
                                                function (data) {
                                                    var json = JSON.parse(data);
                                                    if (json.html.length) {

                                                        $('#list-filter-ajax').html('').html(json.html);
                                                    } else {
                                                        $('#list-filter-ajax').html('Không có dữ liệu phù hợp');
                                                    }

                                                });
                                            return false;
                                        });


                                        $('.filter').change(function (e) {
                                            var str = '';
                                            $('.filter').each(function () {
                                                if ($(this).val() != 0 && $(this).prop('checked') == true) {
                                                    str = str + $(this).val() + '-';
                                                }
                                            });
                                            if (str.length > 0) {
                                                str = str.substr(0, str.length - 1);
                                                $('#attr').val(str);
                                            } else {
                                                $('#attr').val('');
                                            }
                                            e.stopImmediatePropagation();
                                            $('#filter_submit').click();
                                        });

                                        $('input.filter').click(function () {
                                            var id = $(this).prop('id');
                                            var name = $(this).prop('name');
                                            $('input[name="' + name + '"]:not(#' + id + ')').prop('checked', false);
                                        });


                                    });
                                    $(function () {
                                        $('.tpInputLabel').on('click', function () {
                                            var line = $(this).attr('data-line');
                                            $('.' + line + '').removeClass('checked');
                                            if ($(this).find('.filter').is(':checked')) {
                                                $(this).addClass('checked');
                                            } else {
                                                $(this).removeClass('checked');
                                            }
                                        });
                                    });
                                    $(function () {
                                        $(document).on('click', '#ajax-pagination li a', function (e) {
                                            var page = $(this).attr('data-ci-pagination-page');
                                            $('#page').val(page);
                                            e.stopImmediatePropagation();
                                            $('#filter_submit').click();
                                            return false;
                                        });
                                    });
                                </script>
                                <style>
                                    .content_fillter {
                                        border: 1px solid #f0f0f0;
                                    }

                                    .attribute-title {
                                        line-height: 34px;
                                        color: #333;
                                        border-bottom: solid 1px #ccc;
                                        text-shadow: 1px 1px 0 #fff;
                                        background: #eee;
                                        font-weight: bold;
                                        padding: 0 10px;
                                        font-family: 'Roboto', sans-serif;
                                        font-size: 16px;
                                    }

                                    .attribute-group {
                                        padding: 5px 0;
                                    }

                                    .attribute-group .fillter-label {
                                        padding-left: 10px;
                                        display: block;
                                        line-height: 30px;
                                        font-size: 13px;
                                        position: relative;
                                        height: 30px;
                                        overflow: hidden;
                                    }

                                    .attribute-group .fillter-label label {
                                        padding-left: 20px;
                                        font-family: 'Roboto', sans-serif;
                                    }

                                    .attribute-group input[type="checkbox"] {
                                        display: none;
                                    }

                                    .fillter-label.tpInputLabel label::before {
                                        height: 16px;
                                        width: 16px;
                                        border: 1px solid #ccc;
                                        border-radius: 2px;
                                        content: '';
                                        display: block;
                                        position: absolute;
                                        left: 10px;
                                        top: 8px;
                                    }

                                    .fillter-label.tpInputLabel.checked label::before {
                                        background: url('assets/images/checked.png');
                                        border: 0;
                                    }
                                </style>
                                <style type="text/css" media="screen">
                                    .side-category .title {
                                        background: linear-gradient(#caad5c -16%, #f2e386 47%, #caad5c 82%);
                                        padding: 12px 15px;
                                        font-weight: 600;
                                        margin-bottom: 0px;
                                    }

                                    .side-category .title i {
                                        margin-right: 7px;
                                    }

                                    .side-category ul {
                                        background-color: #040404;
                                        list-style: none;
                                        padding: 0px;
                                        margin: 0px;
                                    }

                                    .side-category ul li {
                                        color: #fff;
                                        padding: 10px 15px;
                                        border-bottom: 1px dashed #333333;
                                    }

                                    .side-category ul li i {
                                        float: right;
                                    }

                                    .side-category ul li a {
                                        color: #fff;
                                        text-transform: uppercase;
                                    }

                                    .side-category ul.sub {
                                        position: absolute;
                                        width: 250px;
                                        z-index: 999;
                                        left: 100%;
                                        top: 0%;
                                        display: none;
                                    }

                                    .side-category ul li:hover>a,
                                    .side-category ul li:hover>i {
                                        color: #b1a662;
                                    }

                                    .side-category ul li:hover>ul {
                                        display: block;
                                    }

                                    @media (max-width: 600px) {
                                        .side-category ul.sub {
                                            display: none !important;
                                        }

                                        .side-category ul li i {
                                            display: none !important;
                                        }
                                    }
                                </style>
                                <div class="sidebar wow fadeInUp">
                                    <div class="item-sb">
                                        <div class="support item">
                                            <div class="images">
                                                <img src="assets/images/suport.png" alt="">
                                            </div>
                                            <div class="holine">
                                                <div class="icon">
                                                    <img src="assets/images/icon-holine.png" alt="">
                                                </div>
                                                <div class="nav-icon">
                                                    <span class="sp1">Hotline</span>
                                                    <span class="sp2" style="font-weight: bold;">0227.3838.898</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item-sb">
                                        <h3 class="title-sb">
                                            Sản Phẩm
                                        </h3>
                                        <div class="nav-product-sb">
                                            <div class="item">
                                                <div class="image">
                                                    <a href="pc-intel-i7-10700-ram-16gb-rtx-2060-6gb.html"><img
                                                            src="assets/images/products/untitled-29.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="nav-image">
                                                    <h3 class="title"><a href="">CPU G3250 ( 3Mb/3.2Ghz/1150) Box</a>
                                                    </h3>
                                                    <p class="price">
                                                        23,100,000 <span
                                                            class="css-price-d"></span><span>27,600,000</span>
                                                        <!--  399.000₫ <span>500.000₫</span> -->
                                                    </p>
                                                    <a href="" class="readmore">Xem chi tiết<i
                                                            class="fas fa-angle-right"></i></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-sb">
                                        <h3 class="title-sb">
                                            Tin tức
                                        </h3>
                                        <div class="nav-right-new">
                                            <div class="item">
                                                <div class="image">
                                                    <a
                                                        href="cpu-amd-ryzen-7-5800x-nhanh-hon-ca-intel-core-i9-10900k-a323.html"><img
                                                            src="assets/images/products/amd-ryzen-5000-zen-3-vermeer.jpg"
                                                            alt="CPU AMD Ryzen 7 5800X nhanh hơn cả Intel Core i9-10900K ?">
                                                    </a>
                                                </div>
                                                <div class="nav-img">
                                                    <h3 class="title"><a
                                                            href="cpu-amd-ryzen-7-5800x-nhanh-hon-ca-intel-core-i9-10900k-a323.html">CPU
                                                            AMD Ryzen 7 5800X nhanh hơn cả Intel Core i9-10900K ?</a>
                                                    </h3>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="nav-main-content">
                                <div class="content-product">
                                    <div class="title-primary wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <h1 class="title1">CPU - BỘ VI XỬ LÝ</h1>
                                    </div>
                                    <div class="nav-product" id="list-filter-ajax">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i9-9900-3-1-upto-5-0ghz-8c16t-16mb-coffee-lake.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/9900.jpg"
                                                                alt="CPU Intel Core i9-9900 (3.1 GHz turbo upto 5.0GHz/ 8 nhân 16 luồng/ 16MB/ Coffee Lake)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">10,000,000 đ</span>
                                                            <br><span class="gia-moi">8,500,000<span class="css-size-d">
                                                                    đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-185%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-intel-core-i9-9900-3-1-upto-5-0ghz-8c16t-16mb-coffee-lake.html">CPU
                                                            Intel Core i9-9900 (3.1 GHz turbo upto 5.0GHz/ 8 nhân 16
                                                            luồng/ 16MB/ Coffee Lake) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="787" data-price="8500000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="787" data-price="8500000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-amd-ryzen-9-5950x.html" class="thubmail-img"><img
                                                                src="assets/images/products/ryzen-9-5950x.jpg"
                                                                alt="CPU AMD Ryzen 9 5950X (3.4 GHz Upto 4.9GHz / 72MB / 16 Cores, 32 Threads / 105W / Socket AM4)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">20,899,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-amd-ryzen-9-5950x.html">CPU AMD Ryzen
                                                            9 5950X (3.4 GHz Upto 4.9GHz / 72MB / 16 Cores, 32 Threads /
                                                            105W / Socket AM4) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="735" data-price="20899000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="735" data-price="20899000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-amd-ryzen-9-5900x-3-7ghz-4-8ghz-max-boos-70mb-cache-12-cores-24-threads-105w-socket-am4.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/5900x.jpg"
                                                                alt="CPU AMD Ryzen 9 5900X (3.7 GHz Upto 4.8GHz / 70MB / 12 Cores, 24 Threads / 105W / Socket AM4)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">14,299,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-amd-ryzen-9-5900x-3-7ghz-4-8ghz-max-boos-70mb-cache-12-cores-24-threads-105w-socket-am4.html">CPU
                                                            AMD Ryzen 9 5900X (3.7 GHz Upto 4.8GHz / 70MB / 12 Cores, 24
                                                            Threads / 105W / Socket AM4) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="734" data-price="14299000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="734" data-price="14299000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-amd-ryzen-7-5800x.html" class="thubmail-img"><img
                                                                src="assets/images/products/5800x.jpg"
                                                                alt="CPU AMD Ryzen 7 5800X (3.8 GHz Upto 4.7GHz / 36MB / 8 Cores, 16 Threads / 105W / Socket AM4)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">11,599,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-amd-ryzen-7-5800x.html">CPU AMD Ryzen
                                                            7 5800X (3.8 GHz Upto 4.7GHz / 36MB / 8 Cores, 16 Threads /
                                                            105W / Socket AM4) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="733" data-price="11599000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="733" data-price="11599000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-amd-ryzen-5-5600x.html" class="thubmail-img"><img
                                                                src="assets/images/products/ryzen-5-5600x.jpg"
                                                                alt="CPU AMD Ryzen 5 5600X (3.7 GHz Upto 4.6GHz / 35MB / 6 Cores, 12 Threads / 65W / Socket AM4)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">7,899,000<span class="css-size-d">
                                                                    đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-amd-ryzen-5-5600x.html">CPU AMD Ryzen
                                                            5 5600X (3.7 GHz Upto 4.6GHz / 35MB / 6 Cores, 12 Threads /
                                                            65W / Socket AM4) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="732" data-price="7899000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="732" data-price="7899000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i9-10900k-avengers-edition-3-7ghz-turbo-up-to-5-3ghz-10-nhan-20-luong-20mb-cache-125w.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/intel-core-i9-10900k-10c-20t-20mb-3.70-5.30-ghz-avengers-edition-box-chinh-hang.jpg"
                                                                alt="CPU Intel Core i9 10900K Avengers Edition (3.7GHz turbo up to 5.3GHz, 10 nhân 20 luồng, 20MB Cache, 125W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">13,990,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-intel-core-i9-10900k-avengers-edition-3-7ghz-turbo-up-to-5-3ghz-10-nhan-20-luong-20mb-cache-125w.html">CPU
                                                            Intel Core i9 10900K Avengers Edition (3.7GHz turbo up to
                                                            5.3GHz, 10 nhân 20 luồng, 20MB Cache, 125W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="717" data-price="13990000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="717" data-price="13990000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i7-10700k-avengers-edition-3-8ghz-turbo-up-to-5-1ghz-8-nhan-16-luong-16mb-cache-125w.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/cpu-intel-core-i7-10700k-avengers-edition-01.jpg"
                                                                alt="CPU Intel Core i7 10700K Avengers Edition (3.8GHz turbo up to 5.1GHz, 8 nhân 16 luồng, 16MB Cache, 125W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">10,900,000 đ</span>
                                                            <br><span class="gia-moi">10,599,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-3%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-intel-core-i7-10700k-avengers-edition-3-8ghz-turbo-up-to-5-1ghz-8-nhan-16-luong-16mb-cache-125w.html">CPU
                                                            Intel Core i7 10700K Avengers Edition (3.8GHz turbo up to
                                                            5.1GHz, 8 nhân 16 luồng, 16MB Cache, 125W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="694" data-price="10599000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="694" data-price="10599000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i9-10850k-avengers-edition-3-6ghz-turbo-up-to-5-2ghz-10-nhan-20-luong-20mb-cache-95w.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/cpu-intel-core-i9-10850k-avengers-edition-02.jpg"
                                                                alt="CPU Intel Core i9 10850K Avengers Edition (3.6GHz turbo up to 5.2GHz, 10 nhân 20 luồng, 20MB Cache, 95W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">12,950,000 đ</span>
                                                            <br><span class="gia-moi">12,690,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-2%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-intel-core-i9-10850k-avengers-edition-3-6ghz-turbo-up-to-5-2ghz-10-nhan-20-luong-20mb-cache-95w.html">CPU
                                                            Intel Core i9 10850K Avengers Edition (3.6GHz turbo up to
                                                            5.2GHz, 10 nhân 20 luồng, 20MB Cache, 95W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="693" data-price="12690000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="693" data-price="12690000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-amd-ryzen-5-3600xt-3-8-ghz-turbo-upto-4-5ghz-35mb-6-cores-12-threads-95w-socket-am4.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/cpu-ryzen-3600xt.jpg"
                                                                alt="CPU AMD Ryzen 5 3600XT (3.8 GHz turbo upto 4.5GHz / 35MB / 6 Cores, 12 Threads / 95W / Socket AM4)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">6,390,000<span class="css-size-d">
                                                                    đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-amd-ryzen-5-3600xt-3-8-ghz-turbo-upto-4-5ghz-35mb-6-cores-12-threads-95w-socket-am4.html">CPU
                                                            AMD Ryzen 5 3600XT (3.8 GHz turbo upto 4.5GHz / 35MB / 6
                                                            Cores, 12 Threads / 95W / Socket AM4) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="685" data-price="6390000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="685" data-price="6390000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i9-10850k-3-6ghz-turbo-up-to-5-2ghz-10-core-20-threads-20mb-cache.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/cpu-intel-core-i9-10850k.jpg"
                                                                alt="CPU Intel Core i9 10850K (3.6GHz turbo up to 5.2GHz, 10 core 20 Threads , 20MB Cache)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">12,890,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-intel-core-i9-10850k-3-6ghz-turbo-up-to-5-2ghz-10-core-20-threads-20mb-cache.html">CPU
                                                            Intel Core i9 10850K (3.6GHz turbo up to 5.2GHz, 10 core 20
                                                            Threads , 20MB Cache) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="683" data-price="12890000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="683" data-price="12890000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-amd-ryzen-7-3800xt-3-8ghz-boost-4-7ghz-8cores-16-threads-32mb-cache-105w-socket-am4.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/3800xt.png"
                                                                alt="CPU AMD Ryzen 7 3800XT (3.8GHz Boost 4.7GHz /8cores / 16 threads / 32MB Cache; 105W; Socket AM4)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">10,290,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-amd-ryzen-7-3800xt-3-8ghz-boost-4-7ghz-8cores-16-threads-32mb-cache-105w-socket-am4.html">CPU
                                                            AMD Ryzen 7 3800XT (3.8GHz Boost 4.7GHz /8cores / 16 threads
                                                            / 32MB Cache; 105W; Socket AM4) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="676" data-price="10290000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="676" data-price="10290000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-amd-ryzen-9-3900xt-3-8ghz-boost-4-7ghz-12-cores-24-threads-64mb-cache-105w-socket-am4.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/3900xt.png"
                                                                alt="CPU AMD Ryzen 9 3900XT (3.8GHz Boost 4.7GHz /12 cores / 24 threads / 64MB Cache; 105W; Socket AM4)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">.-</span>
                                                            <br><span class="gia-moi">12,900,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-amd-ryzen-9-3900xt-3-8ghz-boost-4-7ghz-12-cores-24-threads-64mb-cache-105w-socket-am4.html">CPU
                                                            AMD Ryzen 9 3900XT (3.8GHz Boost 4.7GHz /12 cores / 24
                                                            threads / 64MB Cache; 105W; Socket AM4) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="675" data-price="12900000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="675" data-price="12900000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i3-10100-3-6ghz-turbo-up-to-4-3ghz-4-nhan-8-luong-6mb-cache-65w.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/52615-intel-core-i3-10100.jpg"
                                                                alt="CPU Intel Core i3 10100 (3.6GHz turbo up to 4.3GHz, 4 nhân 8 luồng, 6MB Cache, 65W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">3,390,000 đ</span>
                                                            <br><span class="gia-moi">3,090,000<span class="css-size-d">
                                                                    đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-9%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-intel-core-i3-10100-3-6ghz-turbo-up-to-4-3ghz-4-nhan-8-luong-6mb-cache-65w.html">CPU
                                                            Intel Core i3 10100 (3.6GHz turbo up to 4.3GHz, 4 nhân 8
                                                            luồng, 6MB Cache, 65W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="601" data-price="3090000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="601" data-price="3090000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i5-10400-2-9ghz-turbo.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/10400.jpg"
                                                                alt="CPU Intel Core i5 10400 (2.9 GHz turbo up to 4.3 GHz, 6 core 12 Threads , 12MB Cache, 65W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">5,550,000 đ</span>
                                                            <br><span class="gia-moi">4,890,000<span class="css-size-d">
                                                                    đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-12%</div>
                                                    </div>
                                                    <h3 class="title"><a
                                                            href="cpu-intel-core-i5-10400-2-9ghz-turbo.html">CPU Intel
                                                            Core i5 10400 (2.9 GHz turbo up to 4.3 GHz, 6 core 12
                                                            Threads , 12MB Cache, 65W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="449" data-price="4890000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="449" data-price="4890000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i7-10700k.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/10700k(1).jpg"
                                                                alt="CPU Intel Core i7 10700K (3.8GHz turbo up to 5.1GHz, 8 core 16 Threads , 16MB Cache, 125W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">10,190,000 đ</span>
                                                            <br><span class="gia-moi">10,590,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-intel-core-i7-10700k.html">CPU Intel
                                                            Core i7 10700K (3.8GHz turbo up to 5.1GHz, 8 core 16 Threads
                                                            , 16MB Cache, 125W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="448" data-price="10590000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="448" data-price="10590000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i7-10700.html" class="thubmail-img"><img
                                                                src="assets/images/products/10700.jpg"
                                                                alt="CPU Intel Core i7 10700 (2.9GHz turbo up to 4.8GHz, 8 core 16 Threads , 16MB Cache, 65W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">9,190,000 đ</span>
                                                            <br><span class="gia-moi">8,990,000<span class="css-size-d">
                                                                    đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-2%</div>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-intel-core-i7-10700.html">CPU Intel
                                                            Core i7 10700 (2.9GHz turbo up to 4.8GHz, 8 core 16 Threads
                                                            , 16MB Cache, 65W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="447" data-price="8990000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="447" data-price="8990000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i9-10900.html" class="thubmail-img"><img
                                                                src="assets/images/products/intel-core-i9-comet-lake-s.jpg"
                                                                alt="CPU Intel Core i9 10900 (2.8GHz turbo up to 5.2GHz, 10 core 20 Threads , 20MB Cache, 65W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">12,790,000 đ</span>
                                                            <br><span class="gia-moi">12,490,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-2%</div>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-intel-core-i9-10900.html">CPU Intel
                                                            Core i9 10900 (2.8GHz turbo up to 5.2GHz, 10 core 20 Threads
                                                            , 20MB Cache, 65W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="446" data-price="12490000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="446" data-price="12490000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i9-10900k.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/10900k(3).jpg"
                                                                alt="CPU Intel Core i9 10900K (3.7GHz turbo up to 5.3GHz, 10 core 20 Threads , 20MB Cache, 125W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">14,990,000 đ</span>
                                                            <br><span class="gia-moi">13,990,000<span
                                                                    class="css-size-d"> đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-7%</div>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-intel-core-i9-10900k.html">CPU Intel
                                                            Core i9 10900K (3.7GHz turbo up to 5.3GHz, 10 core 20
                                                            Threads , 20MB Cache, 125W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="445" data-price="13990000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="445" data-price="13990000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i5-10600k.html"
                                                            class="thubmail-img"><img
                                                                src="assets/images/products/10600k.jpg"
                                                                alt="CPU Intel Core i5 10600K (4.1 GHz turbo up to 4.8 GHz, 6 core 12 Threads , 12MB Cache, 125W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">7,900,000 đ</span>
                                                            <br><span class="gia-moi">7,499,000<span class="css-size-d">
                                                                    đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-5%</div>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-intel-core-i5-10600k.html">CPU Intel
                                                            Core i5 10600K (4.1 GHz turbo up to 4.8 GHz, 6 core 12
                                                            Threads , 12MB Cache, 125W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="443" data-price="7499000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="443" data-price="7499000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="item-product">
                                                    <div class="image">
                                                        <a href="cpu-intel-core-i5-10600.html" class="thubmail-img"><img
                                                                src="assets/images/products/10600.jpg"
                                                                alt="CPU Intel Core i5 10600 (3.3GHz turbo up to 4.8 GHz, 6 core 12 Threads , 12MB Cache, 65W)">
                                                        </a>
                                                        <div class="new-pr"><img
                                                                src="templates/frontend/resources/images/new.png"
                                                                alt="">
                                                        </div>
                                                        <div class="sale-pr"><img
                                                                src="templates/frontend/resources/images/sale.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="price-c">
                                                        <p class="price"><span class="gia-cu">6,640,000 đ</span>
                                                            <br><span class="gia-moi">5,990,000<span class="css-size-d">
                                                                    đ</span></span>
                                                        </p>
                                                        <div class="sale-off-show">-10%</div>
                                                    </div>
                                                    <h3 class="title"><a href="cpu-intel-core-i5-10600.html">CPU Intel
                                                            Core i5 10600 (3.3GHz turbo up to 4.8 GHz, 6 core 12 Threads
                                                            , 12MB Cache, 65W) </a></h3>
                                                    <div class="add-cart">
                                                        <a href="" class="ajax-addtocart" data-quantity="1"
                                                            data-id="442" data-price="5990000">Cho vào giỏ</a>
                                                        <a href="" class="mh ajax-addtocart" data-redirect="redirect"
                                                            data-quantity="1" data-id="442" data-price="5990000">Mua
                                                            hàng</a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="pagenavi">
                                            <ul>
                                                <li><a class="active">1</a><a
                                                        href="http://halinhcomputer.vn/cpu-bo-vi-xu-ly/trang-2.html"
                                                        data-ci-pagination-page="2" rel="start">2</a><a
                                                        href="http://halinhcomputer.vn/cpu-bo-vi-xu-ly/trang-3.html"
                                                        data-ci-pagination-page="3">3</a><a
                                                        href="http://halinhcomputer.vn/cpu-bo-vi-xu-ly/trang-2.html"
                                                        data-ci-pagination-page="2" rel="next">›</a><a
                                                        href="http://halinhcomputer.vn/cpu-bo-vi-xu-ly/trang-4.html"
                                                        data-ci-pagination-page="4"><i
                                                            class="fa fa-angle-double-right"></i> </a></li>
                                            </ul>
                                        </div>
                                        <div class="description" style="margin-bottom: 20px;">
                                            <p style="text-align: justify;">CPU được ví như bộ não của con người điều
                                                khiển mọi hoạt động của máy tính. Tuy nhiên, bạn có bao giờ đặt câu hỏi
                                                CPU hoạt động như thế nào? Và cách thức hoạt động của nó ra sao? Hãy
                                                cùng Hà Linh Computer&nbsp;tìm hiểu qua bài viết dưới đây nhé.&nbsp;</p>
                                            <p style="text-align: justify;">Control Processing Unit viết tắt là CPU- bộ
                                                xử lí trung tâm. Chức năng của CPU là xử lí và phân tích mọi dữ liệu khi
                                                được nhập vào. Nó xử lí mọi yêu cầu của người dùng máy tính. CPU có hai
                                                dòng chính là Intel và AMD.&nbsp;</p>
                                            <h2 style="text-align: justify;"><strong>Những thành phần của CPU</strong>
                                            </h2>
                                            <p><strong>-&nbsp;</strong>Bộ điều khiển (Control Unit): Chức năng thông
                                                dịch các lệnh của chương trình điều khiển.&nbsp;</p>
                                            <p>- Bộ số học logic (ALU): Hiểu đơn giản đơn vị này thực hiện các công việc
                                                tính toán số học và các phép so sánh lớn hơn, nhỏ hơn.</p>
                                            <p>- Thanh ghi (Register): Ghi lại các tập lệnh trước và sau khi xử
                                                lí.&nbsp;</p>
                                            <h2><strong>CPU làm việc như thế nào?&nbsp;</strong></h2>
                                            <p>-&nbsp;Chương trình đã được lưu trữ&nbsp;trên ổ cứng sẽ được truyền
                                                vào&nbsp;RAM (bộ nhớ của máy tính). Chương trình là một loạt những tập
                                                lệnh cho CPU.&nbsp;</p>
                                            <p>-&nbsp;CPU dùng mạch điện tử để điều khiển bộ nhớ tải số liệu chương
                                                trình từ RAM.</p>
                                            <p>-&nbsp;Bây giờ dữ&nbsp;liệu đã bên trong CPU và được xử lí.&nbsp;</p>
                                            <p>-&nbsp;Những gì xảy ra tiếp theo tuỳ thuộc vào chương trình.&nbsp;CPU có
                                                thể tiếp tục tải dữ&nbsp;liệu để thực hiện chương trình hoặc làm
                                                một&nbsp;việc gì đó để xử lí dữ&nbsp;liệu, ví dụ như hiển thị một cái gì
                                                đó lên màn hình.</p>
                                            <h2><strong>Các loại CPU phổ biến hiện nay&nbsp;&nbsp;</strong></h2>
                                            <p>Hiện nay, tại Hà Linh PC và các cửa hàng máy tính khác đều có hai loại
                                                CPU của 2 nhà&nbsp;sản xuất lớn đó là Intel và AMD. Sự cạnh tranh này
                                                đến từ 2 thương hiệu nổi tiếng trên thế giới đem đến cho người dùng
                                                nhiều sự lựa chọn và trải nghiệm khác nhau.&nbsp;</p>
                                            <h2><strong>CPU quan trọng như thế nào đối với máy tính&nbsp;</strong></h2>
                                            <p>CPU đóng vai trong quan trọng trong việc làm cho máy tính của bạn chạy
                                                nhanh hay không. Vì nó chịu trách nhiệm thực thi các lệnh trong chương
                                                trình nên CPU của bạn càng khỏe, ứng dụng sẽ hoạt động càng nhanh.&nbsp;
                                            </p>
                                            <p>Nói CPU là tất cả thì không đúng mà nói CPU không quan trọng thì càng
                                                không đúng. CPU nhanh đồng nghĩa với công việc của bạn sẽ nhanh chóng
                                                được hoàn thành.&nbsp;</p>
                                            <p>Các bạn đang có nhu cầu tìm hiểu về CPU hay một linh kiện máy tính nào
                                                khác. Hãy liên hệ ngay đến Hà Linh Computer để được tư vấn chi tiết
                                                nhất.&nbsp;</p>
                                            <p style="text-align: justify;">&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
           