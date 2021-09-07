$(document).ready(function () {


    $(window).on('load', function () {
        $('html body').scrollTop(0);
    });

    $("#single_product-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        stagePadding: 30,
        margin: 30,
        navText: ["<i class=\"fas fa-caret-circle-left fa-lg ib-circle\"></i>", "<i class=\"fas fa-caret-circle-right fa-lg ib-circle\"></i>"],
    });

    /*
    Calculator
     */
    $("#exampleFormControlSelect").on("change", function () {
        var $select = $(this),
            value = $select.val(),
            index = $select.find(':selected').data('index'),
            $owl = $('#single_product-carousel');
        if (!index) {
            return;
        }
        $owl.trigger('to.owl.carousel', index);
    });

    $("#exampleFormControlQTY").on("change", function () {

            var $qtySelector = $('#exampleFormControlQTY'),
                qty = parseInt($qtySelector.find(':checked').val()),
                $fullPriceHolder = $("#full_price"),
                $salePriceHolder = $("#sale_price"),
                fullPrice = parseInt($fullPriceHolder.data('initial-price')),
                salePrice = parseInt($salePriceHolder.data('initial-price'));
            if (!qty) {
                return;
            }

            var newFullPrice = fullPrice * qty,
                newSalePrice = salePrice * qty;

            $fullPriceHolder.text(newFullPrice);
            $salePriceHolder.text(newSalePrice);
        }
    );

    // Modal window on a dark background
    $('#side_cart_open').click(function (e) {
        e.preventDefault();
        $('#side_cart').addClass('active');
        $('#shadow_overlay').addClass('active');
    });

    $('#side_cart_close, #link_cart').click(function (e) {
        e.preventDefault();
        $('#side_cart').removeClass('active');
        $('#shadow_overlay').removeClass('active');
    });

    // Закрытие по клавише Esc.
    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('#side_cart').removeClass('active');
            $('#shadow_overlay').removeClass('active');
        }
    });

    // Клик по фону, но не по окну.
    $('#shadow_overlay').click(function () {
        $(this).removeClass('active');
        $('#side_cart').removeClass('active');
    });

    // Star rating.
    $('.fa-star').hover(function () {
        var $this = $(this),
            thisIndex = $this.index();
        $this.addClass('to-check');
        $this.parent().find('.fa-star').slice(0, thisIndex).addClass('to-check');
        $this.parent().find('.fa-star').slice(thisIndex + 1).addClass('no-to-check');
    }).mouseout(function () {
        var $this = $(this),
            thisIndex = $this.index();
        $this.parent().find('.fa-star').removeClass('to-check');
        $this.parent().find('.fa-star').slice(thisIndex + 1).removeClass('no-to-check');
    }).click(function (e) {
        e.preventDefault();
        var $this = $(this),
            thisIndex = $this.index();
        $this.removeClass('to-check').addClass('checked');
        $this.parent().find('.fa-star').slice(0, thisIndex).removeClass('to-check').addClass('checked');
        $this.parent().find('.fa-star').slice(thisIndex + 1).removeClass('no-to-check').removeClass('checked');
    });


    // Image Gallery.
    $('#img_selector img').on('click', function (e) {
        e.preventDefault();
        var imgSrc = $(this).parent().attr('href'),
            $imgMain = $('#img_main img');

        if ($(this).hasClass('active')) {
            return;
        }

        $('#img_selector').find('.active').removeClass('active');
        $(this).addClass('active');

        // with Animation.
        $imgMain.fadeOut(300, function () {
            $imgMain.attr('src', imgSrc).fadeIn(300);
        });
    });


    $('#start_page .box').click(function () {
        var $startPage = $('#start_page'),
            $brandPage = $('#brand_page');

        $startPage.find('.selected').removeClass('selected');
        $(this).addClass('selected');
        $brandPage.removeClass('hidden');

        var position = $brandPage.offset().top;
        $(window).scrollTop(position);
        showResultTable();

    });

    function showResultTable() {
        var $gender = $('#start_page').find('.selected').data('choice'),
            $brand = $('#brand_page').find('.selected').data('choice'),
            $price = $('#price_page').find('.selected').data('choice');

        if (!$gender || !$brand || !$price) {
            return;
        }

        var $result_image = $('#result_image'),
            $result_brand = $('#result_brand'),
            $result_price = $('#result_price'),
            $result_product = $('#result_product');

        if ($gender === 'male') {
            $result_image.attr('src', 'img/male.png');
            $result_product.html('Black T-shirt');

            switch ($brand) {
                case 'logo':
                    $result_brand.html('"Logo Mockup"');
                    switch ($price) {
                        case 100:
                            $result_price.html(' $ 100.00');
                            break;
                        case 200:
                            $result_price.html(' $ 200.00');
                            break;
                        case 300:
                            $result_price.html(' $ 300.00');
                            break;
                    }
                    break;

                case 'blueline':
                    $result_brand.html('"Blueline"');
                    switch ($price) {
                        case 100:
                            $result_price.html(' $ 100.00');
                            break;
                        case 200:
                            $result_price.html(' $ 200.00');
                            break;
                        case 300:
                            $result_price.html(' $ 300.00');
                            break;
                    }
                    break;

                case 'racer':
                    $result_brand.html('"Racer"');
                    switch ($price) {
                        case 100:
                            $result_price.html(' $ 100.00');
                            break;
                        case 200:
                            $result_price.html(' $ 200.00');
                            break;
                        case 300:
                            $result_price.html(' $ 300.00');
                            break;
                    }
                    break;
            }
        } else {
            $result_product.html('Black Top');
            $result_image.attr('src', 'img/female.png');

            switch ($brand) {
                case 'logo':
                    $result_brand.html('"Logo Mockup"');
                    switch ($price) {
                        case 100:
                            $result_price.html(' $ 100.00');
                            break;
                        case 200:
                            $result_price.html(' $ 200.00');
                            break;
                        case 300:
                            $result_price.html(' $ 300.00');
                            break;
                    }
                    break;

                case 'blueline':
                    $result_brand.html('"Blueline"');
                    switch ($price) {
                        case 100:
                            $result_price.html(' $ 100.00');
                            break;
                        case 200:
                            $result_price.html(' $ 200.00');
                            break;
                        case 300:
                            $result_price.html(' $ 300.00');
                            break;
                    }
                    break;

                case 'racer':
                    $result_brand.html('"Racer"');
                    switch ($price) {
                        case 100:
                            $result_price.html(' $ 100.00');
                            break;
                        case 200:
                            $result_price.html(' $ 200.00');
                            break;
                        case 300:
                            $result_price.html(' $ 300.00');
                            break;
                    }
                    break;
            }
        }
    }


    $('#boxes_categories .box').click(function () {
        var $pricePage = $('#price_page');

        $('#boxes_categories').find('.selected').removeClass('selected');
        $(this).addClass('selected');
        $pricePage.removeClass('hidden');

        var position = $pricePage.offset().top;

        $('html, body').animate({
            scrollTop: position
        }, 50);
        showResultTable();
    });


    $('#price_page .box').click(function () {
        var $resultPage = $('#result_page');

        $('#price_page').find('.selected').removeClass('selected');
        $(this).addClass('selected');
        $resultPage.removeClass('hidden');

        var position = $resultPage.offset().top;

        $('html, body').animate({
            scrollTop: position
        }, 50);
        showResultTable();
    });


    $('#last_news_items').on('click', '.btn_plus__js, .btn_close__js', function () {

        var $section = $(this).closest('.last_news_item__js'),
            $front = $section.find('.last_news_item_front__js'),
            $back = $section.find('.last_news_item_back__js');

        $section.toggleClass('rotate');
    });


    //    ***  Shopping CART  ***   //

    $('#categories-carousel').on('click', '.add_to_cart__js', function (e) {
        e.preventDefault();
        var $sideCart = $('#side_cart'),
            $placeHolder = $sideCart.find('.place_holder__js'),
            $productItem = $(this).closest('.product_item__js'),
            productImageSrc = $productItem.find('.product_small_image__js').attr('src'),
            $productName = $productItem.find('.selected_product__js').html(),
            $productBrand = $productItem.find('.selected_brand__js').html(),
            $productPrice = $productItem.find('.selected_price__js').html(),
            $productPriceNumber = $productItem.find('.selected_price__js').data('price'),
            $productNameStr = $productName.replace(' ', '_'),
            $productBrandStr = $productBrand.replace(' ', '_'),
            $addedItem = $sideCart.find('.side_cart_item__js[data-name=' + $productNameStr + '][data-brand=' + $productBrandStr + ']');

        if ($addedItem.length === 0) {
            $sideCart.find('.currently_edited').removeClass('currently_edited');
            $placeHolder.clone().appendTo('#side_cart .side_cart_content__js').addClass('currently_edited').removeClass('place_holder__js hidden').attr({
                'data-name': $productNameStr,
                'data-brand': $productBrandStr,
                'data-price': $productPriceNumber,
            });

            var $currentlyEditedItem = $sideCart.find('.currently_edited');

            $currentlyEditedItem.find('.product_name__js').text($productName);
            $currentlyEditedItem.find('.product_brand__js').text($productBrand);
            $currentlyEditedItem.find('.product_price__js').text($productPrice);
            $currentlyEditedItem.find('img').attr('src', productImageSrc);

        } else {
            var $input = $addedItem.find('.quantity input.quantity-select'),
                count = parseInt($input.val()) + 1;

            if (count < 2) {
                $addedItem.find('.minus__js').addClass('dis');
            } else {
                $addedItem.find('.minus__js').removeClass('dis');
            }

            $input.val(count);
            $input.change();
        }

        hideCartIsEmpty();
        openSideCart();
        displaySideCartTotals();
    });

    function hideCartIsEmpty() {
        var $sideCart = $('#side_cart');

        $sideCart.find('.text_cart__js').addClass('hidden');
        $sideCart.find('.side_cart_footer__js').removeClass('hidden');
        $sideCart.find('.flex_row_reverse__js').css({'justify-content': 'flex-end'});
    }

    function openSideCart() {
        var $sideCart = $('#side_cart');

        $sideCart.addClass('active');
        $('#shadow_overlay').addClass('active');
    }

    function displaySideCartTotals() {
        var subTotal = getSideCartSubTotal(),
            shipping = getSideCartShipping(subTotal),
            shippingReadable = getSideCartShippingReadable(shipping),
            total = getSideCartTotal(subTotal, shipping);

        var $sideCart = $('#side_cart'),
            $showSubtotal = $sideCart.find('#subtotal__js'),
            $showShipping = $sideCart.find('#shipping__js'),
            $showTotal = $sideCart.find('#total__js');

        $showSubtotal.text(subTotal);
        $showShipping.text(shippingReadable);
        $showTotal.text(total);

        if (subTotal === 0) {
            clearCart();
        }

    }

    function getSideCartSubTotal() {
        var $sideCart = $('#side_cart'),
            subtotal = 0;

        $sideCart.find('.side_cart_item__js').each(function () {
            if ($(this).hasClass('place_holder__js')) {
                return;
            }

            var price = $(this).data('price'),
                qty = $(this).find('input.quantity-select').val();

            subtotal = subtotal + (price * qty);
        });

        return subtotal;
    }

    function clearCart() {
        var $sideCart = $('#side_cart');

        $sideCart.find('.side_cart_footer__js').addClass('hidden');
        $('.text_cart__js').removeClass('hidden');
        $sideCart.find('.flex_row_reverse__js').css({'justify-content': 'center'});
    }

    function getSideCartShippingReadable(shipping) {
        if (shipping === 0) {
            shipping = 'Free';
        } else {
            shipping = '$ ' + shipping;
        }
        return shipping;
    }

    function getSideCartShipping(subTotal) {
        var shipping = 0;

        if (subTotal <= 500) {
            shipping = 10;
        }
        return shipping;
    }

    function getSideCartTotal(subTotal, shipping) {
        var total = 0;

        total = subTotal + shipping;

        return total;
    }

    // Remove side cart item
    $('#side_cart').on('click', '.remove_side_cart_item__js', function () {
        $(this).closest('.side_cart_item__js').remove();

        // Show SubTotal:
        displaySideCartTotals();
    });

    // btn CLEAR CART
    $('#side_cart').on('click', '.clear_cart__js', function (e) {
        e.preventDefault();
        var $sideCart = $('#side_cart');

        $sideCart.find('.side_cart_item__js').not('.place_holder__js').remove();
        $('.text_cart__js').removeClass('hidden');
        $sideCart.find('.side_cart_footer__js').addClass('hidden');
        $sideCart.find('.flex_row_reverse__js').css({'justify-content': 'center'});
    });

    // btn + and -
    $('#side_cart').on('click', '.minus__js, .plus__js', function () {
        var $input = $(this).parents('.quantity').find('input.quantity-select');
        if ($(this).hasClass('minus__js')) {
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            if (count < 2) {
                $(this).addClass('dis');
            } else {
                $(this).removeClass('dis');
            }
            $input.val(count);
        } else {
            var count = parseInt($input.val()) + 1;
            $input.val(count);
            if (count > 1) {
                $(this).parents('.quantity').find(('.minus__js')).removeClass('dis');
            }
        }

        $input.change();

        //Show SubTotal:
        displaySideCartTotals();

        return false;
    });

    // jQuery.Lazy();

    if ($('.lazy').length !== 0) {
        $('img.lazy').Lazy({
            effect: "fadeIn",
            effectTime: 2000,
            threshold: 0
        });
    }

    $("body").on("click", "#add_user_submit", function (e) {
        e.preventDefault();

        var $form = $('#add_user_form'),
            $userNameField = $form.find('#user_name'),
            $userLastNameField = $form.find('#user_last_name'),
            $userPositionField = $form.find('#user_position');

        $.ajax({
            url: 'add_user.php',
            type: "POST",
            data: {
                'user_name': $userNameField.val(),
                'user_last_name': $userLastNameField.val(),
                'user_position': $userPositionField.val(),
            },
            cache: false,
            dataType: "JSON",
            error: function () {
                console.log('error');
            },
            success: function (response) {
                if (response.message !== '') {
                    $('#user_message').html(response.message);
                }
                if (response.table !== '') {
                    $('#display_users_table').html(response.table);
                }

                if (response.status) {
                    $userNameField.val('');
                    $userLastNameField.val('');
                    $userPositionField.val('');
                }
            }
        });
    });


    $("body").on('click', '.delete-btn', function (e) {
        e.preventDefault();
        var userId = $(this).data('user-id');

        if (confirm("Are you sure you want to delete this User?")) {
            $.ajax({
                type: "POST",
                url: "delete_user.php",
                data: {
                    'user_id': userId
                },
                cache: false,
                dataType: "JSON",
                error: function () {
                    console.log('error');
                },
                success: function (response) {
                    if (response.message !== '') {
                        $('#user_message').html(response.message);
                    }
                    if (response.table !== '') {
                        $('#display_users_table').html(response.table);
                    }
                }
            });
        }
    });

    $("body").on('click', '.edit-btn', function (e) {
        e.preventDefault();
        var $this = $(this).closest("tr"),
            userId = $(this).data('user-id'),
            userName = $(this).data('user-name'),
            userLastName = $(this).data('user-last-name'),
            userPosition = $(this).data('user-position');

        $.ajax({
            type: "POST",
            url: "generate_edit_user_table_row.php",
            data: {
                'user_id': userId,
                'user_name': userName,
                'user_last_name': userLastName,
                'user_position': userPosition,
            },
            cache: false,
            error: function () {
                console.log('error');
            },
            success: function (response) {
                $this.after(response);
            }
        });

    });

    $("body").on('click', '.cancel-btn', function (e) {
        e.preventDefault();
        $(this).closest("tr").remove();
    });


    $("body").on('click', '.save-btn', function (e) {
        e.preventDefault();

        var $tableRow = $(this).closest("tr"),
            $userId = $tableRow.find('.user_id'),
            $userNameField = $tableRow.find('.user_name'),
            $userLastNameField = $tableRow.find('.user_last_name'),
            $userPositionField = $tableRow.find('.user_position');


        $.ajax({
            url: "update_user.php",
            type: "POST",
            data: {
                'user_id': $userId.val(),
                'user_name': $userNameField.val(),
                'user_last_name': $userLastNameField.val(),
                'user_position': $userPositionField.val(),
            },
            cache: false,
            dataType: "JSON",
            error: function () {
                console.log('error');
            },
            success: function (response) {
                console.log('response: ', response);
                if (response.message !== '') {
                    $('#user_message').html(response.message);
                }
                if (response.table !== '') {
                    $('#display_users_table').html(response.table);
                }

                if (response) {
                    $(this).closest("tr").remove();
                }
            }
        });
    });

});
