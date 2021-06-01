<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/BannerFloat.js"></script>
    <!-- <script type="text/javascript" src="assets/js/cloud-zoom.js"></script> -->
    <script src="assets/js/hc-offcanvas-nav.js?ver=3.3.0"></script>
    <script type="text/javascript" src="assets/js/buong.js"></script>
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