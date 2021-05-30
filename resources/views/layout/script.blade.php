<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/wow.min.js"></script>
    <script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="public/js/BannerFloat.js"></script>
    <!-- <script type="text/javascript" src="public/js/cloud-zoom.js"></script> -->
    <script src="public/js/hc-offcanvas-nav.js?ver=3.3.0"></script>
    <script type="text/javascript" src="public/js/buong.js"></script>
    <script>
        //hieu ung wow------------------------------------------
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ajax-addtocart').click(function () {
                var product = $(this);
                $.post('products/ajax/cart/addtocart.html', {
                    id: product.attr('data-id'),
                    quantity: product.attr('data-quantity'),
                }, function (data) {
                    if (product.attr('data-redirect') == 'redirect') {
                        window.location.href = BASE_URL + 'dat-mua' + '.html';
                    } else {
                        var json = JSON.parse(data);
                        $('#modal-cart .cart-content').html(json.html);
                        $('.cart-item .count').html(json.item);
                        $('#total-cart').html(json.item);
                        $('#modal-cart').modal('toggle');
                    }
                });
                return false;
            });
            if ($('.btn-up')) {
                $('.btn-up').click(function () {
                    var $_input = $(this).parent().find('.quantity');
                    var quantity = parseInt($_input.val());
                    if (quantity <= 1) {
                        quantity = 1;
                    } else {
                        quantity -= 1;
                    }
                    $_input.val(quantity);
                    $('.action-button.ajax-addtocart').attr('data-quantity', quantity);
                });
            }
            if ($('.btn-down')) {
                $('.btn-down').click(function () {
                    var $_input = $(this).parent().find('.quantity');
                    var quantity = parseInt($_input.val());
                    quantity += 1;
                    $_input.val(quantity);
                    $('.action-button.ajax-addtocart').attr('data-quantity', quantity);
                });
            }
            $(document).on('click', '#ec-module-cart .augment', function () {
                var item = $(this);
                var quantity = parseInt($(this).parent().find('.quantity').val());
                quantity = quantity + 1;
                item.parent().find('.quantity').val(quantity);
                ajax_cart_update();
                return false;
            });
            $(document).on('click', '#ec-module-cart .abate', function () {
                $(".panel-foot1").hide();
                $(".panel-foot2").show();
            })
            $(document).on('click', '#ec-module-cart .augment', function () {
                $(".panel-foot1").hide();
                $(".panel-foot2").show();
            })
            $(document).on('click', '#ec-module-cart .abate', function () {
                var item = $(this);
                var quantity = parseInt($(this).parent().find('.quantity').val());
                if (quantity <= 1) {
                    quantity = 1
                } else {
                    quantity = quantity - 1;
                }
                item.parent().find('.quantity').val(quantity);
                ajax_cart_update();
                return false;
            });

            $(document).on('click', '#ec-module-cart .delete', function () {
                var item = $(this);
                item.parent().parent().parent().parent().parent().find('.quantity').val(0);
                item.parent().parent().parent().parent().parent().addClass('uk-hidden').removeClass('item');
                ajax_cart_update();
                return false;
            });
            $(document).on('click', '#ec-module-cart .delete', function () {
                $(".panel-foot1").hide();
                $(".panel-foot2").show();
            })
            $(document).on('click', '.ec-cart-continue', function () {
                UIkit.modal('#modal-cart').hide();
                return false;
            });

            $('.augment').click(function () {
                var num_order = parseInt($(this).parent().find('.quantity').val());
                num_order += 1;
                $(this).parent().find('.quantity').val(num_order);
            });
            $('.abate').click(function () {
                var cart_class = $(this).attr('data-cart');
                var num_order = parseInt($(this).parent().find('.quantity').val());
                if (num_order <= 1) {
                    num_order = 1
                } else {
                    num_order -= 1;
                }
                $(this).parent().find('.quantity').val(num_order);
            });

            $(document).on('click', '.delete_item', function () {
                var item = $(this);
                var idprd = item.parent().parent().parent().parent().find('.quantity').val();
                ajax_cart_update1(idprd);
                return false;
            });

        });
        function ajax_cart_update1(idprd) {
            $.post('products/ajax/cart/deletecart.html', { idprd: idprd }, function (data) {
                window.location.href = 'dat-mua.html';
            });
        }

        function ajax_cart_update() {
            $.post('products/ajax/cart/updatetocart.html', $('#ajax-cart-form').serialize(), function (data) {
                var price = JSON.parse(data);
                $('#ajax-cart-form').html(price.html);
                $('#total-cart').html(price.item);
            });
            return false;
        }
        $(function () {
            $('.label-star').on('click', function () {
                var value = $(this).attr('data-value');
                $('#hidden_star').attr('data-star', value);
            });

            $('#commentForm').on('submit', function () {
                var postData = $(this).serializeArray();
                var formURL = $(this).attr('action');
                var fullname = $('#fullname').val();
                var phone = $('#phone').val();
                var message = $('#message').val();
                var star = $('#hidden_star').attr('data-star');
                var module = $('#hidden_star').attr('data-module');
                var moduleid = $('#hidden_star').attr('data-module-id');
                var html = '';
                $.post(formURL, {
                    post: postData,
                    fullname: fullname,
                    phone: phone,
                    message: message,
                    star: star,
                    module: module,
                    moduleid: moduleid
                },
                    function (data) {
                        var json = JSON.parse(data);
                        if (json.error.length > 0) {
                            $('.validate_error').html(json.error);
                        } else {
                            $('#commentlist').html(json.result);
                        }
                        return false;
                    });
                return false;
            });
        });
        //end

        $(document).ready(function () {
            var time;
            $('.keyword').on('keyup', function () {
                var keyword = $(this).val();
                var numberKey = keyword.length;
                if (numberKey >= 2) {
                    clearTimeout(time);
                    time = setTimeout(function () {
                        $.ajax({
                            url: 'searchs/ajax/searchs/search',
                            method: 'POST',
                            dataType: 'JSON',
                            data: { keyword: keyword },
                            complete: function (data) {
                                console.log(data.responseText);
                                if (data.responseText.length > 0) {
                                    $('.header .searchResult').show();
                                    $('.header .searchResult').html(data.responseText);
                                }

                            }
                        });
                    }, 100);
                } else {
                    $('.header .searchResult').hide();
                }
            });
        });

    </script>
<!--  -->
<script type="text/javascript" charset="utf-8" async defer>
            $('#main-menu1 > ul > li').attr('style', 'width: calc(100% / ' + $('#main-menu1 > ul > li').length + ')');

            if (jQuery(window).width() <= 768) {
                $('.main-slider').attr('style', "padding-top: " + $('.nav-category-home.hello').height() + "px");
                $('.css-icon-plus').click(function () {
                    if (jQuery(this).next().css('display') == 'none') {

                        jQuery(this).next().attr('style', 'opacity: 1;display: block;visibility: inherit;position: inherit;left: 0px;');

                        // jQuery(this).next().css('display','block');

                        jQuery(this).addClass('show');

                    } else {

                        jQuery(this).next().attr('style', 'opacity: 0;display: none;visibility: hidden;position: absolute;');
                        // jQuery(this).next().css('display','none');

                        jQuery(this).removeClass('show');

                    }
                    // $(this).parent().find('.vertical-dropdown-menu').attr('style', 'opacity: 1;display: block;visibility: inherit;');
                });
            }
            jQuery('.fillter_bl .content_fillter [class^="group-fillter fill-key-"] .attribute-title').click(function (e) {

                e.preventDefault();

                if (jQuery(this).next().css('display') == 'none') {

                    jQuery(this).next().css('display', 'block');

                    jQuery(this).addClass('show');

                } else {

                    jQuery(this).next().css('display', 'none');

                    jQuery(this).removeClass('show');

                }

                return false;

            });


    // jQuery(window).resize(function() {
    //     if(jQuery(window).width() <= 768){
    //         jQuery('.fillter_bl .content_fillter [class^="group-fillter fill-key-"] .attribute-title').click(function(e){

    //             e.preventDefault();

    //             if(jQuery(this).next().css('display') == 'none'){

    //                 jQuery(this).next().css('display','block');

    //                 jQuery(this).addClass('show');

    //             }else{

    //                 jQuery(this).next().css('display','none');

    //                 jQuery(this).removeClass('show');

    //             }

    //             return false;

    //         });
    //     }
    // });
    </script>
<!--  -->

    <script>
            window.fbAsyncInit = function () {
                FB.init({
                    xfbml: true,
                    version: 'v4.0'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
    </script>
<!--  -->
    <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return; n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
                n.queue = []; t = b.createElement(e); t.async = !0;
                t.src = v; s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '893478067706055');
            fbq('track', 'PageView');
        </script>
<!--  -->
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=456763814831300&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>