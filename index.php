<?php
ob_start();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include "model/pdo.php";
include "model/binhluan.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/giohang.php";
include "model/donhang.php";
include "model/banner.php";
include "view/header.php";
include "global.php";
$listbn=loadall_banner();
if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$spbest=loadall_sanpham_chay();
$sphot=loadall_sanpham_best();
$taikhoan=loadall_taikhoan();
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
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sp = loadone_sanpham($_GET['idsp']);
                    $sanphamcl=load_sanpham_cungloai($_GET['idsp'], $sp['id_danhmuc']);
                    $spanh = loadanh_sanpham($_GET['idsp']);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";            
                }
                
                break;
            case "addtocart":
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['ten'];
                    $hinh=$_POST['hinh'];
                    $price=$_POST['gia'];
                    $soluong=1;
                    $j = 0;
                    $cnsl = 0;
                    $ttien=$soluong*(int)$price;
                    foreach ($_SESSION['cart'] as $cart) {
                        if ($cart[0] == $id) {
                            $soluongm = $soluong + $cart[4];
                            $cnsl = 1;
                            $_SESSION['cart'][$j][4] = $soluongm;
                            break;
                        }
                        $j++;
                    }
                    if ($cnsl == 0) {
                    $spadd=[$id,$name,$hinh,(int)$price,$soluong,$ttien]; 
                    array_push($_SESSION['cart'],$spadd);
                    }
                }
                include "view/giohang.php";
                break;
            case "delcart": 
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['cart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['cart']=[];
                }
                header('Location: index.php?act=addtocart');
                break;
            case "login":
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $tai_khoan=$_POST['tai_khoan'];
                    $mat_khau=$_POST['mat_khau'];
                    // $checkuser=checkuser($tai_khoan);
                    // if(is_array($checkuser)){
                //     $_SESSION['tai_khoan']=$checkuser;
                //  $thongbao="Bạn đã đăng nhập thành công"; 
                //     header("Location: index.php");
                // }
                // else {
                  $checkuser=checkuser($tai_khoan,$mat_khau);
                    if(is_array($checkuser)){
                    $_SESSION['tai_khoan']=$checkuser;
                    // $thongbao="Bạn đã đăng nhập thành công";
                header('Location: index.php'); 
                }
                else {
                    header('Location: index.php?act=dangky'); 
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
                case "taikhoan":
                    include "view/login/taikhoan.php";
                break;
            case "capnhat":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $ten=$_POST['ten'];
                    $tai_khoan=$_POST['tai_khoan'];
                    // $mat_khau=$_POST['mat_khau'];
                    $email=$_POST['email'];
                    $dien_thoai=$_POST['dien_thoai'];
                    $dia_chi=$_POST['dia_chi'];
                    $id=$_POST['id'];
                    $checkuser=checkuser($tai_khoan,$mat_khau);
                    if(is_array($checkuser)){
                        update_taikhoan1($ten,$tai_khoan,$email,$dia_chi,$dien_thoai,$id);
                        $_SESSION['tai_khoan']=$checkuser;
                        $thongbao="Bạn đã cập nhật thành công";
                    header('Location: index.php?act=taikhoan ');  
                    }
                    $thongbao="Bạn đã cập nhật thành công";
                }
                include "view/login/taikhoan.php";
                break;
            case "doimk":
                if(isset($_POST['doimk']) && ($_POST['doimk'])){
                    $mat_khaucu=$_POST['mat_khaucu'];
                    $mat_khau=$_POST['mat_khau'];
                    $id=$_POST['id'];
                    $checkuser=checkuser($tai_khoan,$mat_khau);
                    if(is_array($checkuser)){
                        $_SESSION['tai_khoan']=$checkuser;
                        
                    header('Location: index.php?act=taikhoan ');  
                    }
                    update_taikhoan2($mat_khau,$id);
                    $thongbao="Bạn đã đổi mật khẩu thành công";
                }
                include "view/login/taikhoan.php";
                break;    
            case "hoadon":
                include "view/bill.php";
                break;
            case "hoadonct":
                if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                    $id_user=$_SESSION['tai_khoan']['id'];
                    $ten=$_POST['ten'];
                    $dia_chi=$_POST['dia_chi'];
                    $dien_thoai=$_POST['dien_thoai'];
                    $email=$_POST['email'];
                    $pthtt=$_POST['pttt'];
                    $ngay_mua=date('d/m/Y');
                    $tong_tien=tongdonhang();
                // var_dump($tong_tien);die;
                    $idbill=insert_hoadon($id_user,$ten,$email,$dia_chi,$dien_thoai,$ngay_mua,$tong_tien,$pthtt);
                    foreach($_SESSION['cart'] as $cart){
                        insert_gio($_SESSION['tai_khoan']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    }
                  
                    
                    if( $pthtt==2){
                        update_dh2($idbill);
                        echo '<script>window.location.replace("view/xulythanhtoan.php?gia=' . $tong_tien . '&&id='.$idbill.'");</script>';
                       
                        }
                       
                    }
                   
                    $_SESSION['cart']=[];
                    $hoadon=loadone_hoadon($idbill);
                    $hoadonct=loadall_giohang($idbill);
                    include "view/billconfirm.php";
                    break;
            
            case "thanhtoan":
                include "view/thanhtoan.php";
                break;
            case "dhtk":
                if(isset($_POST['huy'])&& ($_POST['huy'])){
                    $id=$_POST['id'];
                    huy($id);
                   
                }
                $listdh=loadall_dh($_SESSION['tai_khoan']['id']);
                include "view/mybill.php";
                break;        
            case "dangky":
                if(isset($_POST['dangky']) && ($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['tai_khoan'];
                    $pass=$_POST['mat_khau'];
                    insert_taikhoan($email,$user,$pass);
                    $_SESSION['tai_khoan']=checkuser($user,$pass);
                    $thongbao="Đã đăng ký thành công .Vui lòng đăng nhập để đặt hàng hoặc bình luận!";  
                }
                include "view/login/dangky.php";
                break;
            case "quenmk": 
                include "view/login/quenmk.php";
                break; 

            case "ctdh":
                if(isset($_GET['id'])&&($_GET['id']>0)){  
                    $hoadon=loadone_dh($_GET['id']);
                } 
                $hoadon=loadone_dh($_GET['id']);
                $listct = loadct_dh($_GET['id']);
                include "view/billct.php";  
                break;   
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
    ob_end_flush();
