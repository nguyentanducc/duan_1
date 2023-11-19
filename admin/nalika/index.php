<?php
include "../../model/pdo.php";
include "../../model/taikhoan.php";
include "../../model/sanpham.php";
include "../../model/danhmuc.php";
include "header.php";
$spnew = loadall_sanpham_home();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "dssp":
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $keyw=$_POST['keyw'];
                    $id_danhmuc=$_POST['iddm'];
                }else{
                    $keyw="";
                    $id_danhmuc=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($keyw,$id_danhmuc);
                include "sanpham/dssp.php";
                break;
            case "themsp":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $id_danhmuc=$_POST['iddm'];
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $trang_thai=$_POST['trangthai'];
                    $giam_gia=$_POST['giamgia'];
                    $id_phanloai=$_POST['mauma'];
                    $soluong=$_POST['soluong'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir ="upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }else{

                    }
                    insert_sanpham($tensp,$giasp,$giam_gia,$hinh,$trang_thai,$soluong,$id_danhmuc,$id_phanloai);
                    $thongbao ="thêm thành công";
                  ;
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/themsp.php";
                break;    
            case "xoasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']); 
                }
                $listsanpham=loadall_sanpham();
                include "sanpham/dssp.php";                        
                break;
            case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']); 
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/updatesp.php";                        
                break;
            case "updatesp":      
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_danhmuc=$_POST['iddm'];
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $trang_thai=$_POST['trangthai'];
                    $giam_gia=$_POST['giamgia'];
                    $id_phanloai=$_POST['mauma'];
                    $soluong=$_POST['soluong'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir ="upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }else{
                    }
                    update_sanpham($id,$id_danhmuc,$tensp,$giasp,$giam_gia,$hinh);
                    $thongbao ="Sửa  thành công";
                }


                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham();
                    include "sanpham/dssp.php";
                break;
            case "ctsp":
                include "sanpham/ctsp.php";                        
                break;   
            case "dsdm":
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/dsdm.php";
                break;
            case "themdm":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir ="upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }else{
                        
                    }
                    insert_danhmuc($tenloai,$hinh);
                    $thongbao ="thêm thành công";
                    
                    $listdanhmuc=loadall_danhmuc();
                    
                    include "danhmuc/dsdm.php";
                }                    
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/themdm.php";
                break;    
            case "suadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_dm($_GET['id']); 
                }
                include "danhmuc/suadm.php" ;                        
                break; 
            case "updatedm":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir ="upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }else{
                        
                    }
                    update_danhmuc($id,$tenloai,$hinh);
                    $thongbao ="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();   
                    include "danhmuc/dsdm.php" ;                        
                    break;
            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']); 
                }
                $listdanhmuc=loadall_danhmuc();
                        include "danhmuc/dsdm.php";
                        break;                            
            case "dstk":
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/dstk.php";
                break;
            case "xoatk":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']); 
         }
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/dstk.php";
                break;    
            case "suatk":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $taikhoan=loadone_taikhoan($_GET['id']); 
                }
                include "taikhoan/updatetk.php" ;                          
                break;  
            case "updatetk":
                $listtaikhoan=loadall_taikhoan();
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $ten=$_POST['ten'];
                    $tai_khoan=$_POST['user'];
                    $mat_khau=$_POST['pass'];
                    $email=$_POST['email'];
                    $dia_chi=$_POST['address'];
                    $dien_thoai=$_POST['tel'];
                    $id=$_POST['id'];
                    $id_role=$_POST['role'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir ="upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }else{
                        
                    }
                    $listtaikhoan=loadall_taikhoan();
                    update_taikhoan($ten,$id,$tai_khoan,$mat_khau,$email,$dia_chi,$dien_thoai,$hinh,$id_role);
                    $thongbao ="Cập nhật thành công";
                }
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/dstk.php" ;                          
                break;                   
            case "dsbl" :
                include "binhluan/dsbl.php";
                break;
            case "xoabl" : 
                include "xoabl.php";
                break;
            case "dsdh" :   
                include "donhang/dsdh.php";
                break;
            case "suadh":   
                include "donhang/suadh.php";
                break;
            case "themdh" :   
                include "donhang/themdh.php";
                break;
            case "xoadh" :   
                include "donhang/xoadh.php";
                break;
            case "dsbanner" :   
                include "banner/dsbanner.php";
                break;
            case "suabanner"  :
                include "banner/suabanner.php";
                break;
     
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>