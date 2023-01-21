
$(document).ready(function () {

    var page_index=1;
    var check=false;

    $('.xoa_gh').click(function (e) { 
        var id = $(this).attr("value");
        
        $.post("../del_cart.php", {id : id},
            function () {
                alert("Sản phẩm đã được xóa khỏi giỏ hàng");
            },
            
        );

    });
    //live search
    $("#timkiem").keyup(function (e) { 
        search_ajax();
    });
    $("#timkiem").on("input", function () {
        if ($(this).val()=="") search_ajax();
    });
    function search_ajax() {
        val = $("#timkiem").val();
        $.post("../search_data.php",{ten_sp:val}, 
                function (data) {
                    $(".bangtimkiem").html(data);
                },
                
            );
    }
    //Bộ lọc giá trong sản phẩm
    $('.price_checked .form-check-input').click(function (e) { 
        $('.price_checked .form-check-input').not(this).prop("checked", false);
        filter()
        
    });
    //Bộ lọc dung lượng bộ nhớ 
    $('.rom_checked .form-check-input').click(function (e) { 
        $('.rom_checked .form-check-input').not(this).prop("checked", false);
        filter()
        
    });
    //Bộ lọc màu săc
    $('.color_checked .form-check-input').click(function (e) { 
        $('.color_checked .form-check-input').not(this).prop("checked", false);
        filter();
        
    });

    //Sản phẩm
    filter()

    function filter() {

        let type = $(".option").find("option:selected").val();
        let dm_btn = $("#dm_checked");
        let id_dm = null;
        let min = null;
        let max = null;
        let bo_nho = null;
        let mau_sac = null;
        //Tìm giá trị min max trên các checkbox
        $.each($('.price_checked .form-check-input'), function (indexInArray, valueOfElement) { 
            if($(this).prop("checked") == true ) {
                if ( typeof $(this).attr("min") !== "undefined" && $(this).attr("min")) {
                    min = $(this).attr("min");
                    max = $(this).attr("max");
                }
            } 
        });
        //Tìm bộ nhớ trên các checkbox
        $.each($('.rom_checked .form-check-input'), function (indexInArray, valueOfElement) { 
            if($(this).prop("checked") == true ) {  
                bo_nho = $(this).val();
                console.log(bo_nho)
            } 
        });
        //Tìm màu sắc trên các checkbox
        $.each($('.color_checked .form-check-input'), function (indexInArray, valueOfElement) { 
            if($(this).prop("checked") == true ) {  
                mau_sac = $(this).val();
            } 
        });
        
        // $('.price_checked .form-check-input').each();
        // let max = $('.price_checked .form-check-input').attr("max");
        if (dm_btn.prop("checked") == true ) id_dm = dm_btn.val();
        // if ($(".sanpham_sp1").length<=8) $(".add_more").hide();
        // else $(".add_more").show();
        $(".add_more").hide()
        //object
        obj = {
            sort: type,
            id_dm: id_dm,
            min:min,
            max:max,
            bo_nho:bo_nho,
            mau_sac:mau_sac,
            page:page_index
        }
        //Sync 
        $.ajax({
            type: "post",
            url: "../data.php",
            data: obj,
            dataType: "html",

            beforeSend: function(msg){
                $('.sanpham_sp1').addClass("spinner");
                $('.add_more').hide();
                $(".place").empty();
            },
            success: function (response) {
                $(".place").html(response);
            },  
            complete: function() { 
                $('.sanpham_sp1').removeClass("spinner");; 
                if ($('#flag').length!=1) $('.add_more').show();

                $("body").animate({scrollTop: $(".sanpham_sp1").height()}, 1000);
            }
        });
    }
    //List of sort
    $('.option').change(function (e) { 
        page_index=1;
        filter() 
    });
    //Catalogies button
    $("#dm_checked").change(function (e) { 
        page_index=1;
        filter()  
    });
    //Panigatrion
    $('.add_more').click(function (e) { 
        page_index++;
        filter();
        // console.log(page_index,check);
    });

    //Show pass
    $('.test').click(function (e) { 
        var type = $("#password").attr("type"); 
        // now test it's value
        if( type === 'password' ){
            $(this).text("Ẩn mật khẩu");
            $("#password").attr("type", "text");
        }else{
            $(this).text("Hiện mật khẩu");
            $("#password").attr("type", "password");
        } 
      
    });
    
});