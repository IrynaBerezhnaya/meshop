$(document).ready(function () {

    // Change Input type on click
    $('#insert_form').on('click', '.link_edit__js', function (e) {
        e.preventDefault();
        $('#product-img').attr('src', '../img/placeholder.png');
        $('.link_remove__js').addClass('hidden');
        $('.cr-image').addClass('placeholder-img');
        $('.upload-croppie__js').removeClass('hidden');
        $('.btn-result__js').removeClass('hidden');
        $('#image_removed').val('true');
        $('#file-upload').attr('type', 'file');
    });

    // confirmation message
    $('#insert_form').on('click', '.link_remove__js', function (e) {
        e.preventDefault();

        if (confirm('Are you sure?')) {
            $('#product-img').attr('src', '../img/placeholder.png');
            $('.link_remove__js').addClass('hidden');
            $('#image_removed').val('true');
        }
    });

    $('img').on("error", function () {
        $(this).attr('src', '../img/placeholder.png');
    });

    $('#records-limit').change(function () {
        $('form').submit();
    });

    if ($('img').attr('src') === '../img/placeholder.png') {
        $('.link_remove__js').addClass('hidden');
    }

    //CROPPIE:
    $uploadCrop = $('#upload-demo').croppie({
        viewport: {
            width: 250,
            height: 300,
            type: 'square'
        },
        boundary: {
            width: 300,
            height: 350
        },
        enableExif: true
    });


    $('#file-upload').on('change', function () {
        readFile(this);
    });

    $('#product_img').on('change', function () {
        readFile(this);
    });


    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#upload_image_section').addClass('ready');
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            };
            reader.readAsDataURL(input.files[0]);
        }
        else {
            alert("Sorry - you're browser doesn't support the FileReader API");
        }
    }


    $('#upload_result').on('click', function (e) {
        e.preventDefault();
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {
            showResult({
                src: resp
            });
        });
    });

    $(".cr-image").attr("src", "../img/placeholder.png");


    function showResult(result) {

        $('#new_product_img_result').val(result.src);
        $('#product_img_container').find('img').attr('src', result.src);
    }


    $("#product_img").on("change", function () {
        $('.upload-croppie__js').removeClass('hidden');
        $('.btn-result__js').removeClass('hidden');
        $('.add-product_slider__js').removeClass('hidden');
    });

    $("#file-upload").on("change", function () {
        $('.cr-image').removeClass('placeholder-img');
    });





});


