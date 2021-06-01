@include('layout.head');
<body>
    <div class="page-body-buong">
        <style type="text/css" media="screen">
            #footer-site .top-footer .item .nav-item-adress ul li .fa-facebook-f {
                background: #3B5997;
            }

            #footer-site .top-footer .item .nav-item-adress ul li .fa-twitter {
                background: #00ACF0;
            }

            #footer-site .top-footer .item .nav-item-adress ul li .fa-instagram {
                background: #447397;
            }

            #footer-site .top-footer .item .nav-item-adress ul li .fa-youtube {
                background: #D12E2E;
            }

            #footer-site .top-footer .item .nav-item-adress ul li .fa-google {
                background: #DB4F48;
            }

            .css-icon-plus {
                padding: 10px;
                position: absolute;
                right: 0px;
                display: none;
                top: 0px;
            }

            .fillter_bl .content_fillter [class^="group-fillter fill-key-"] .attribute-title {
                position: relative;
            }

            .fillter_bl .content_fillter [class^="group-fillter fill-key-"] .attribute-title:after {
                content: "\f067";
                font-size: 13px;
                /* color: rgba(255,235,59,.64); */
                font: normal normal normal 14px/1 FontAwesome;
                position: absolute;
                right: 10px;
                top: 12px;
                transition: all .3s;
            }

            .fillter_bl .content_fillter [class^="group-fillter fill-key-"] .attribute-title.show:after {
                content: "\f068";
            }

            .fillter_bl .content_fillter [class^="group-fillter fill-key-"] .attribute-group {
                display: none;
            }

            @media (max-width: 768px) {
                .mobile-display-none {
                    display: none;
                }

                .css-icon-plus {
                    display: block;
                }

                .vertical-dropdown-menu {
                    display: none;
                }

                .slider-large .item img {
                    height: auto !important;
                }

                .slider-large .owl-prev {
                    right: 0px;
                    background: transparent;
                    width: 27px;
                    height: 27px;
                }

                .slider-large .owl-next {
                    right: 0px;
                    background: transparent;
                    width: 27px;
                    height: 27px;
                }

                .slider-large .owl-nav i {
                    width: 27px;
                    height: 27px;
                    line-height: 27px;
                }

                .content-detail-new img {
                    height: auto !important;
                    width: 100% !important;
                }
            }

            .content-product .nav-product .add-cart {
                transform: scale(0, 0);
                position: absolute;
                bottom: 45px;
                width: 100%;
                text-align: center;
                transition: .3s;
            }

            .content-product.home-first .nav-product .add-cart {
                bottom: 25px;
            }

            .content-product .nav-product .item-product {
                display: flex;
                flex-direction: column;
                position: relative;
            }

            .content-product .nav-product .item-product:hover .add-cart {
                transform: scale(1, 1);
            }

            .content-product .nav-product .item-product:hover .price-c {
                transform: scale(0, 0);
            }

            .content-product .nav-product .item-product .price-c .price {
                padding: 0px;
            }

            .content-product .nav-product .item-product .price-c {
                order: 3;
                transition: .3s;
                text-align: left;
                font-family: Roboto, sans-serif;
                transform: scale(1, 1);
            }

            .content-product .nav-product .item-product .price-c * {
                font-family: 'Roboto-Bold' !important;
                font-weight: bold;
                font-size: 20px;
                text-shadow: 0px 0px #b2b2b2;
            }

            .content-product .nav-product .item-product .price-c .gia-cu {
                font-size: 16px;
                color: rgba(0, 0, 0, .2);
                font-family: 'Roboto', sans-serif !important;
                font-weight: 400;
            }

            .content-product .nav-product .item-product .price-c {
                position: relative;
            }

            .content-product .nav-product .item-product .price-c .sale-off-show {
                position: absolute;
                top: 17px;
                right: 0;
                background-image: url('assets/images/sale1.png');
                background-size: contain;
                font-size: 11px;
                padding: 10px 0px;
                width: 35px;
                height: 35px;
                text-align: center;
            }

            #main-menu1 ul {
                display: inline;
            }

            #main-menu1 ul li {
                padding: 5px 0;
            }

            #main-menu1 ul li:hover {
                background: linear-gradient(#65562e -16%, #797143 47%, #787142 82%);
            }

            #main-menu1 ul li:hover p {
                color: #fff;
            }

            div.adfloat {
                top: 205px !important;
            }

            .content-product .nav-product .item-product .price-c .css-size-d {
                font-size: 17px;
            }

            .sidebar .nav-product-sb .item .price span.css-price-d {
                font-size: 14px;
                padding: 0px;
                color: #c80000;
                font-family: 'Roboto-Bold';
            }

            .sidebar .nav-product-sb .item .price {
                font-size: 15px;
            }

            @media (min-width: 768px) {
                .main-logo-shop>.container>.row>.col-md-2.col-xs-12 {
                    padding-left: 40px;
                    text-align: center;
                }
            }

            .main-slider .owl-prev,
            .main-slider .owl-next {
                background: initial;
            }

            .main-slider .owl-prev {
                display: block;
            }

            .main-slider .owl-nav i {
                background: initial;
            }

            .slider-sale .col-md-6.col-sm-6.col-xs-12.col-edit-2 {
                padding-left: 3px;
            }
        </style>
        @include('layout.header')
        <h1 style="display: none;">HÀ LINH COMPUTER</h1>
        @yield('content')
        <style>
            .quick-view {
                font-size: 0;
                height: 38px;
                width: 42px;
                display: inline-block;
                vertical-align: top;
                -webkit-transition: none;
                -moz-transition: none;
                -o-transition: none;
                transition: none;
                background: #0d5a94 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAuCAYAAAAyVNlIAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAPnSURBVHja7JddiFVVFMd/+5xzPxoNZmy0D3q4EL5MTIJXER+SmyJ9jChDmBV9QEbRo88TPog4jh+DYKjNiyODDxoy1KQyERWlZKHQQ9lLb8akWakNCdf78e/Bdep0Zp+ZOzH1NAs2l7vW2v+19l7/vc7eThLTyCLgWeAp4FEgZ/oa8C0wDrwH3MwCcBkBFgN9wFbAAVeBr4EfgTzwEFAG7geawBDQD/w6BUlSerwq6YakuqQTklaafrGkDZJ6JHWabpWkk+Z7XdLzabzkn7yko7or5yR1mz6UtFdSTX/LHUm7JQXms0zSebMdkZRLB1go6WNJDUnbDTS2HbKJQ5IqNo6Zbl/CL5K0wzDOSGqLA7RJ+kzSpKTnUkvsltSU1O/ZykEDW5rSv2hYZyXlkTQi6XtJT3tA+iTdlrTAY2u3bdvmsfUa5uEAKAJfAGc9bHoQ+Bn4w2O7CfwCLPHYRoEvgfsC4DbwOLDR4/gT8ABwr8fWDnRaAmnZAqwGriKpKGnc9u3ljBoMZNSg7qnB1nQN4kK/b0UbMEbEtoPGmGFJ6yStTbBoT8IvJ+mAYYxKuid9DiLLqinpgnE7Pgc7JVUT56BqlHTmU5Z00ebuT9KcDAZMGENGbDKSOiStt9FhuuWSjpvvhKRNabysXtQOvA28CSwEfgAuAVesNz0MrAAeASaBw8Au4FarzS7ZTbcAG4DHjFECrgHfAGPWTW/MtpvOmQT8xzIfYD7AfID/IYCbzthqG3HOzS7Av+1PvkBBK+C+iT6dd+5MwDOtJssnTiCYTdaz2ZoYcyaUdqAX6AG6Ev4CvgPOAKeA36crcgg0UvpOu76/bv+vAV+lru8r7NIl4F27vv/Wyll4xT6BdeAEsDLxZugBnrEEAFYBJ833un1ep0hov3ngqGV0DuhO2Pfaq0Y27gC7E8ktA86b7UjiJXRXyuVym3PuI9uq7YmgAIds4hBQsXHMdPsSfhGwA2g45z4slUpFACqVStE59wkwGYbh5tTquu2J1O9Z+aAltPQf2xGGLwCTzrmxcrmcAxgGLkdR9KQHpM8uxwsyGFYDtqUNhUJhI3A5CIJ3AqCWy+U+rdfr43N1fa9Wqx+EYfh5s9lsC4CwVqs9USgUeubq+h6G4eZGo7EmiqJbdHV15Z1zp60GL2XUYCCjBnVPDV5L14BSqVR0zo1a0QaMEbEcNMYMA+uAtQkW7Un45YADxqJTf7EoRbNBy/iCcTs+BzuBauIcVI2ScesoAxdt7v4UzadILzBhDBmxyQAdwHobHaZbDhw33wlgU6tftDm7vs8ki4IgeAs4beA1axNXgLEgCN5IrMYrfw4A55yi+TWLtjUAAAAASUVORK5CYII=) no-repeat scroll 9px 12px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -19px;
                margin-left: -21px;
                opacity: 0;
                filter: alpha(opacity=0);
                -webkit-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0);
            }

            .quick-view .material-icons {
                display: none;
                font-size: 20px;
                margin: 7px 10px;
                color: #fff;
            }

            .nav-product .item-product:hover .quick-view {
                opacity: 1;
                filter: alpha(opacity=100);
                -webkit-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1);
            }

            .nav-product .item-product .quick-view:hover {
                background-color: #ffe11b;
                /* background-position: 9px -19px; */
            }
        </style>
        @include('layout.footer')