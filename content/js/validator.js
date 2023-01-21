$().ready(function() {
  
    $("#form_valid").validate({
        onfocusout: false,
		onkeyup: false,
		onclick: false,
        rules: {
            //Đăng ký + đăng nhập + Khách Hàng
            "email": {
                required: true,
                email:true,
                minlength: 8
            },
            "mat_khau": {
                required: true,
                // validatePassword:true,
            },
            "old_pass": {
                required: true,
                
            },
            "fullname": {
                required: true,
                special_letter: true,
                maxlength: 25,

            },
            "ten_kh": {
                required: true,
                special_letter: true,
                maxlength: 25,

            },
            "ten_nguoi_nhan": {
                required: true,
                special_letter: true,
                maxlength: 25,
            },
            "dia_chi": {
                required: true,
                minlength: 8
            },
            "sdt": {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            "password": {
                required: true,
                validatePassword: true
            },
            "re_password": {
                required: true,
                equalTo: "#password",
                minlength: 4
            },
            //Đăng ký + đăng nhập + Khách Hàng
            
            //Thương hiệu + danh mục
            "ten_dm": {
                required: true,
                maxlength: 25
            },
            "ten_th": {
                required: true,
                maxlength: 25
            },
            "hinh": {
                required: false,
            },
            "uu_tien": {
                required: true,
                minlength: 1,
                digits: true,
                number: true
            },
            "hien_thi": {
                required: true,
                minlength: 1,
                digits: true,
                number: true
            },
            //Thương hiệu + danh mục

            // Sản Phẩm
            "ten_sp": {
                required: true,
                maxlength: 100
            },
            "cau_hinh": {
                required: true,
                maxlength: 1000
            },
            "don_gia": {
                required: true,
                number: true,
                digits: true,
                minlength: 1
            },
            "giam_gia": {
                required: true,
                number: true,
                // digits: true,
                so_duong: true,
                minlength: 1
            },
            "so_luong": {
                required: true,
                digits: true,
                minlength: 1
            },
            "mau_sac": {
                required: true,
                minlength: 2
            },
            "kich_thuoc": {
                required: true,
                minlength: 3
            }
            // Sản Phẩm
        },
        messages: {
            //Đăng ký + đăng nhập
            "email": {
                required: "Bắt buộc nhập trường email",
                email: "Email chưa đúng định dạng",
            },
            "mat_khau": {
                required: "Bắt buộc nhập password"
            },
            "old_pass": {
                required: "Vui lòng nhập mật khẩu củ!"
                
            },
            "fullname": {
                required: "Bắt buộc nhập fullname",
                maxlength: "Hãy nhập tối đa dưới 25 ký tự"
            },
            "ten_kh": {
                required: "Bắt buộc nhập fullname",
                maxlength: "Hãy nhập tối đa dưới 25 ký tự"
            },
            "ten_nguoi_nhan": {
                required: "Bắt buộc nhập fullname",
                maxlength: "Hãy nhập tối đa dưới 25 ký tự"
            },
            "dia_chi": {
                required: "Địa chỉ không được để trống",
            
                minlength: "Vui lòng nhập tối thiểu 10 kí tự "
            },
            "sdt": {
                required: "Số điện thoại không được để trống",
                number: "Vui lòng nhập số",
                minlength: "Vui lòng nhập tối đa 10 kí tự ",
                maxlength: "Vui lòng nhập tối đa 10 kí tự "
            },
            "password": {
                required: "Bắt buộc nhập password"
            },
            "re_password": {
                equalTo: "Hai password phải giống nhau",
                required: "Bắt buộc nhập lại mật khẩu",
                minlength: "Hãy nhập ít nhất 8 ký tự"
            }, 
            //Đăng ký + đăng nhập

            //Thương hiệu + danh mục      
            "ten_dm": {
                required: "Bắt buộc nhập tên danh mục",
                maxlength: "Hãy nhập tối đa ít hơn 25 ký tự"
            },
            "ten_th": {
                required: "Bắt buộc nhập tên thương hiệu",
                maxlength: "Hãy nhập tối đa ít hơn 25 ký tự"
            },
            // "hinh": {
            //     required: "Bắt buộc nhập hình"
            // },
            "uu_tien": {
                required: "Bắt buộc nhập độ ưu tiên",
                minlength: "Hãy nhập ít nhất 1 ký tự",
                digits: "Hãy nhập số dương",
                number: "Hãy nhập số"
            },
            "hien_thi": {
                required: "Bắt buộc nhập hiển thị",
                minlength: "Hãy nhập ít nhất 1 ký tự",
                digits: true,
                number: "Hãy nhập số"
            },
            //Thương hiệu + danh mục   

            //Sản phẩm validate form
            "ten_sp": {
                required: "Vui lòng không để trống tên sản phẩm",
                maxlength: "Hãy nhập tối đa ít hơn 100 ký tự"
            },
            "cau_hinh": {
                required: "Vui lòng không để trống cấu hình",
                maxlength: "Nhập tối đa 1000 ký tự "
            },
            "don_gia": {
                required: "Vui lòng không để trống đơn giá",
                minlength: "Hãy nhập ít nhất 1 ký tự"
            },
            "giam_gia": {
                required: "Vui lòng không để trống giảm giá ",
                minlength:"Hãy nhập ít nhất 1 ký tự",
                digits: "Hãy nhập số dương",
                number: "Hãy nhập số"
            },
            "so_luong": {
                required: "Vui lòng không để trống số lượng",
                minlength:"Hãy nhập ít nhất 1 ký tự",
                digits: "Hãy nhập số dương",
                number: "Hãy nhập số"
            },
            "mau_sac": {
                required: "Vui lòng không để trống màu sắc ",
                minlength:"Hãy nhập ít nhất 2 ký tự"
            },   
            "kich_thuoc": {
                required: "Vui lòng không để trống kích thước ",
                minlength:"Hãy nhập ít nhất 3 ký tự"
            }
            //Sản phẩm validate form
        }
        
    });
    

  


    $.validator.addMethod("validatePassword", function (value, element) {
        return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/i.test(value);
    }, "Hãy nhập mật khẩu từ 8-10 ký tự, gồm có ít nhất một chữ thường, một chữ cái in hoa, một chữ số và 1 ký tự đặc biệt");

    $.validator.addMethod("special_letter", function (value, element) {
        return this.optional(element) || /^([a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđ]+)((\s{1}[a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđ]+){1,})$/i.test(value);
    }, "Tên phải có chỉ một dấu cách giữa các từ, không chứa các ký tự đặc biệt, khoảng trắng ở cuối, chữ số");
    $.validator.addMethod("so_duong", function (value, element) {
        return (value >= 0 && value <=1) ;
    }, "Vui lòng hãy nhập số dương từ 0 - 1 (ví dụ 0.5)");
});