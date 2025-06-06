<script>
    loadData6();
    function add6() {
        // Lấy giá trị từ các trường nhập liệu của form
        // document.getElementById là phương thức của đối tượng document trong JavaScript
        // Nó tìm kiếm một phần tử HTML có thuộc tính id trùng với chuỗi được truyền vào
        // Ở đây, nó tìm phần tử có id="fullName" trong DOM và trả về phần tử đó
        // Sau đó .value truy cập giá trị hiện tại của phần tử đó (nội dung người dùng đã nhập)
        var addFullName = document.getElementById("fullName").value;  // Lấy họ và tên
        var addDob = document.getElementById("dob").value;            // Lấy ngày sinh
        var addGender = document.getElementById("gender").value;      // Lấy giới tính
        var addIdCard = document.getElementById("idCard").value;      // Lấy số CMND/CCCD
        var addEmail = document.getElementById("email").value;        // Lấy địa chỉ email
        var addPhone = document.getElementById("phone").value;        // Lấy số điện thoại
        var addAddress = document.getElementById("address").value;    // Lấy địa chỉ
        var addEducation = document.getElementById("education").value; // Lấy trình độ học vấn
        var addNote = document.getElementById("note").value;          // Lấy ghi chú



        if(addFullName == "" || addDob == "" || addGender == "" || addIdCard == "" || addEmail == "" || addPhone == "" || addAddress == "" || addEducation == "" || addNote == ""){
            $.toast({
                text: "Vui lòng nhập đầy đủ thông tin",
                icon: 'error',
                position: 'top-right'
            });
            return;
        }

        // Kiểm tra định dạng email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(addEmail)) {
            $.toast({
                text: "Email không hợp lệ",
                icon: 'error',
                position: 'top-right'
            });
            return;
        }

        // Kiểm tra số điện thoại (10-11 số)
        const phoneRegex = /^[0-9]{10,11}$/;
        if (!phoneRegex.test(addPhone)) {
            $.toast({
                text: "Số điện thoại phải có 10-11 chữ số",
                icon: 'error',
                position: 'top-right'
            });
            return;
        }

        // Kiểm tra CMND/CCCD (9 hoặc 12 số)
        const idCardRegex = /^[0-9]{9}$|^[0-9]{12}$/;
        if (!idCardRegex.test(addIdCard)) {
            $.toast({
                text: "CMND/CCCD phải có 9 hoặc 12 chữ số",
                icon: 'error',
                position: 'top-right'
            });
            return;
        }

        // Kiểm tra độ dài họ tên (ít nhất 2 ký tự)
        if (addFullName.length < 2) {
            $.toast({
                text: "Họ tên phải có ít nhất 2 ký tự",
                icon: 'error',
                position: 'top-right'
            });
            return;
        }

        // Kiểm tra độ dài địa chỉ (ít nhất 5 ký tự)
        if (addAddress.length < 5) {
            $.toast({
                text: "Địa chỉ phải có ít nhất 5 ký tự",
                icon: 'error',
                position: 'top-right'
            });
            return;
        }


        console.log(addFullName, addDob, addGender, addIdCard, addEmail, addPhone, addAddress, addEducation, addNote);
        
        $.ajax({
            url: '<?=set_route_to_link(["backend","test6","add6"])?>',
            type: 'POST',
            data:{
                // Họ và tên của người dùng, thu thập từ trường input có id="fullName"
                // Key "fullName" là tên của trường trong database hoặc API endpoint
                // Value "addFullName" là biến JavaScript chứa giá trị từ input field
                fullName: addFullName,
                
                // Ngày sinh của người dùng, định dạng date, thu thập từ trường input có id="dob"
                dob: addDob,
                
                // Giới tính được chọn từ dropdown menu có id="gender"
                // Có thể là "male" (Nam), "female" (Nữ), hoặc "other" (Khác)
                gender: addGender,
                
                // Số chứng minh nhân dân hoặc căn cước công dân, thu thập từ trường input có id="idCard"
                idCard: addIdCard,
                
                // Địa chỉ email của người dùng, thu thập từ trường input có id="email"
                email: addEmail,
                
                // Số điện thoại của người dùng, thu thập từ trường input có id="phone"
                phone: addPhone,
                
                // Địa chỉ nhà của người dùng, thu thập từ trường textarea có id="address"
                address: addAddress,
                
                // Trình độ học vấn được chọn từ dropdown menu có id="education"
                // Có thể là "highschool" (THPT), "college" (Cao đẳng), "university" (Đại học),
                // "master" (Thạc sĩ), hoặc "phd" (Tiến sĩ)
                education: addEducation,
                
                // Ghi chú bổ sung từ người dùng, thu thập từ trường textarea có id="note"
                note: addNote
            },

            success: function(response){
                if(response.status) {
                    $.toast({
                        text: response.message,
                        icon: 'success',
                        position: 'top-right'
                    });
                    loadData6();
                }else{
                    $.toast({
                        text: response.message,
                        icon: 'error',
                        position: 'top-right'
                    });
                }
            },
            error: function(response){
                $.toast({
                    text: response.message,
                    icon: 'error',
                    position: 'top-right'
                });
            } 
            
        });
    }






    function loadData6(){
        $.ajax({
            url: '<?=set_route_to_link(["jsload","test6","loadData6"])?>',
            type: 'GET',
            success: function(response){
                document.getElementById('loadData6').innerHTML = response;
            },
            error: function(response){
                console.log(response);
            }
        });

    }




    function delete6(id){
        $.ajax({
            url: '<?=set_route_to_link(["backend", "test6", "deleteId6"])?>',
            type: 'POST',
            data: {
                id : id
            },
            success: function(response){
                if(response.status){
                    $.toast({
                        text: response.message,
                        icon: "success",
                        position: "top-right",
                        duration: 1000
                    });
                    loadData6();
                }else{
                    $.toast({
                        text: response.message,
                        icon: "error",
                        position: "top-right",
                        ducation: 10000
                    });
                }
            },
            
            error: function(response){
                $.toast({
                        text: response.message,
                        icon: "error",
                        position: "top-right",
                        ducation: 10000
                    });
            }
        });       
    }




</script>