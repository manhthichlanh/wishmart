
// ============Chi tiết sản phẩm số lượng============
$('input.input-qty').each(function() {
    var $this = $(this),
      qty = $this.parent().find('.is-form'),
      min = Number($this.attr('min')),
      max = Number($this.attr('max'))
    if (min == 0) {
      var d = 0
    } else d = min
    $(qty).on('click', function() {
      if ($(this).hasClass('minus')) {
        if (d > min) d += -1
      } else if ($(this).hasClass('plus')) {
        var x = Number($this.val()) + 1
        if (x <= max) d += 1
        else  alert("Số lượng sản phẩm có hạn!")
      }
      $this.attr('value', d).val(d)
    })
  })
//   =============ảnh sản phẩm chi tiết thu nhỏ=============
$(() => {
    $('p img').hover(function(){
      let imgPath = $(this).attr('src');
      $('#main-img').attr('src', imgPath);
    //   $('#anhtn').attr('src').css("border", "#1px solid red");
    })
  }) 



  $("#btn1").click(function (e) { 
    e.preventDefault();
    $("#content").hide();
    $("#btn2").show();
    $(this).hide();
  });
  $("#btn2").click(function (e) { 
    e.preventDefault();
    $("#content").show();
    $("#btn1").hide();
    $(this).show();
  });
//   document.getElementById("btn1").onclick = function () {
//     document.getElementById("content").style.display = 'none';
//     document.getElementById("btn2").style.display = 'block';
//     document.getElementById("btn2").style.textAlign = 'block';
//     document.getElementById("btn1").style.display = 'none';
//   };
//   document.getElementById("btn2").onclick = function () {
//     document.getElementById("content").style.display = 'block';
//     document.getElementById("btn1").style.display = 'block';
//     document.getElementById("btn2").style.display = 'none';
//   };



 
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.hover = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

//   ==============Đồng hồ=============


        // ==========ảnh trang thông tin cá nhân khách hàng (giao diện khách hàng)==========
function readURL(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image-upload-wrap').hide();
  
        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();
  
        $('.image-title').html(input.files[0].name);
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload();
    }
  }




// =============ô nhập nội dung========================
