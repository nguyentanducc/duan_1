<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "view/header.php";
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case "sanpham":
            if(isset($_POST['keyword']) && $_POST['keyword'] != 0 ){
                $kyw = $_POST['keyword'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc']>0)){
                $id_danhmuc=$_GET['id_danhmuc'];
            }else{
                $id_danhmuc=0;
            }
            $dssp=loadall_sanpham($kyw,$id_danhmuc);
            $tendm=load_ten_dm($id_danhmuc);
            include "view/sanpham.php";
            break;
            case "sanphamct":
                include "view/sanphamct.php";
                break;
            case "cart":
                include "view/giohang.php";
                break;
            case "login":
                if(isset($_POST['dangnhap']) ){
                    $user=$_POST['tai_khoan'];
                    $pass=$_POST['mat_khau'];
                //     $checkuser=checkuser($user,md5( $pass));
                //     if(is_array($checkuser)){
                //     $_SESSION['tai_khoan']=$checkuser;
                //  $thongbao="Bạn đã đăng nhập thành công"; 
                //     header("Location: index.php");
                // }
                // else {
                  $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                    $_SESSION['tai_khoan']=$checkuser;
                    // $thongbao="Bạn đã đăng nhập thành công";
                header('Location: index.php');  
                }
                else {
                    $thongbao="Tài khoản không tồn tại . Vui lòng kiểm tra hoặc Đăng Ký";
            }
        }
                include "view/login/dangnhap.php";
                break;
             case "thoat":   
                session_unset();
                header("Location:index.php");
                // exit();
                break;    
            case "bill":
                include "view/bill.php";
                break;   
            case "dangky":
                if(isset($_POST['dangky']) && ($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['tai_khoan'];
                    $pass=$_POST['mat_khau'];
                    $hashed_password = md5($pass);
                    insert_taikhoan($email,$user,$hashed_password);
                    $thongbao="Đã đăng ký thành công .Vui lòng đăng nhập để đặt hàng hoặc bình luận!";  
                }
                include "view/login/dangky.php";
                break;
            case "quenmk": 
                include "view/login/quenmk.php";
                break;  
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
