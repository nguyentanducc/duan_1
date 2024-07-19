<?php
function loadall_taikhoan(){
    $sql= "select * from tb_user order by id desc";
    $listtaikhoan=pdo_query($sql);
    return  $listtaikhoan;
}
function insert_taikhoan($email,$tai_khoan,$mat_khau){
    $sql="insert into tb_user(email,tai_khoan,mat_khau) values('$email','$tai_khoan','$mat_khau')";
    pdo_execute($sql);
}
function checkuser($tai_khoan,$mat_khau){
    $sql = "select * from tb_user where tai_khoan='".$tai_khoan."'  AND mat_khau= '".$mat_khau."' ";
    $result = pdo_query_one($sql);
    return $result;
}
// function update_taikhoan($id,$user,$pass,$email,$address,$tel){
   
//     $sql="update tb_user set tai_khoan='".$user."', mat_khau='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
    
//      pdo_execute($sql);
// }
// function checkemail($email){
//     $sql = "select * from tb_user where email='".$email."'";
//     $result = pdo_query_one($sql);
//     return $result;
// }
function loadone_taikhoan($id){
    $sql="select * from tb_user where id=".$_GET['id'];
    $taikhoan=pdo_query_one($sql); 
return $taikhoan;
}
function update_taikhoan($ten,$id,$tai_khoan,$mat_khau,$email,$dia_chi,$dien_thoai,$hinh,$id_role){
    if($hinh!="") {
        $sql="update tb_user set ten='".$ten."', tai_khoan='".$tai_khoan."', mat_khau='".$mat_khau."',email='".$email."',dia_chi='".$dia_chi."',dien_thoai='".$dien_thoai."',hinh='".$hinh."',id_role='".$id_role."' where id=".$id;
    }else {
        $sql="update tb_user set ten='".$ten."', tai_khoan='".$tai_khoan."', mat_khau='".$mat_khau."',email='".$email."',dia_chi='".$dia_chi."',dien_thoai='".$dien_thoai."',id_role='".$id_role."' where id=".$id;
    }
   
    
     pdo_execute($sql);
}
function update_taikhoan1($ten,$tai_khoan,$email,$dia_chi,$dien_thoai,$id){
    $sql="update tb_user set ten='".$ten."', tai_khoan='".$tai_khoan."',email='".$email."',dia_chi='".$dia_chi."',dien_thoai='".$dien_thoai."' where id=".$id;
     pdo_execute_return_lastInsertId($sql);
}
function update_taikhoan2($mat_khau,$id){
    $sql="update tb_user set mat_khau='".$mat_khau."' where id=".$id;
     pdo_execute($sql);
}
function delete_taikhoan($id){
    $sql = "delete from tb_user where id=".$id;
    pdo_execute($sql);
}
function checkuser1($tai_khoan,$mat_khau,$role){
    $sql = "select * from tb_user where tai_khoan='".$tai_khoan."'  AND mat_khau= '".$mat_khau."' AND id_role='".$role."' ";
    $result = pdo_query_one($sql);
    return $result;
}
// function checkRole($allowedRoles) {
//     if (!isset($_SESSION['idPerson'])) {
//         // Nếu người dùng chưa đăng nhập, chuyển hướng hoặc hiển thị thông báo
//         // header('Location:'); 
       
//         echo '<script>window.location.replace("/duan1/admin/nalika/dangnhap.php");</script>';// Chuyển hướng đến trang đăng nhập
//         exit;
//     }
//     else{
//     $userRole=$_SESSION["id"];
//     if (!in_array($userRole, $allowedRoles)) {
//         echo 'Bạn không có quyền truy cập vào trang này.';
//         exit();
//     }}
// }
// function sendEmail($email){
//     $sql="select * from tb_user where email='$email'";
//     $taikhoan=pdo_query_one($sql);
//     if($taikhoan !=false){
//         sendEmailpass($email,$taikhoan['user'],$taikhoan['pass']);
//         return "đã gửi email thành công, vui lòng check mail";
//     }else {
//         return "Email của bạn nhập không có trong hệ thống";
//     }
// }
// function sendEmailpass($email,$username,$pass){
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
// $mail = new PHPMailer\PHPMailer\PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'sandbox.smtp.mailtrap.io    ';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'a9026b29140418';                     //SMTP username
//     $mail->Password   = 'ee319ed0b26b89';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
//     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('duanmau@example.com', 'DuAnMau');
//     $mail->addAddress($email, $username);     //Add a recipient
    

        

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Nguoi dung quen mat khau';
//     $mail->Body    = 'Mat khau cua ban la '.$pass;
   

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
// }
function getpass($user){
    $sql="select mat_khau from tb_user where tai_khoan='".$user."'";
    $result = pdo_query_one($sql);
    return $result;
}
?>