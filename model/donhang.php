<?php
    function loadall_donhang($kyw="",$id_user=0){
        $sql= "SELECT * FROM tb_hoadon WHERE 1";
        if ($id_user>0) {
            $sql.=" AND id_user=".$id_user;
        }
        if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    function loadall_cart_count($idbill){
        $sql="SELECT * FROM tb_cart WHERE idbill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill) ;
    }
    function loadall_dh($id_user){
        $sql="SELECT * FROM tb_hoadon WHERE id_user=".$id_user;
        $sql.=" order by id desc";
        $dsbill=pdo_query($sql);
        return $dsbill ;
    }
    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt ="Đơn hàng mới";
                break;
            
            case '1':
                $tt ="Đang xử lý";
                break;
            
            case '2':
                $tt ="Đang giao hàng";
                break;
            
            case '3':
                $tt ="Hoàn tất";
                break;
            case '4':
                    $tt ="Đơn đã hủy";
                    break;
            default:
                $tt ="Đơn hàng mới";
                break;
        }
        return $tt;
    }
    function get_tt($n){
        switch ($n) {
            case '0':
                $pay="Chưa thanh toán";
                break;
            
            case '1':
                $pay ="Đã thanh toán";
                break;
            default:
                $pay ="Chưa thanh toán";
                break;
        }
        return $pay;
    }
    function delete_dh($id){
        $sql="DELETE FROM tb_hoadon WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadone_dh($id){
        $sql= "SELECT * FROM tb_hoadon WHERE id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }
    function update_dh($id,$ttdh,$paybill){
        $sql="UPDATE tb_hoadon SET trang_thai='".$ttdh."', tinhtrangtt='".$paybill."' WHERE id=".$id;
        pdo_execute($sql);
    }
    function update_dh2($id){
        $sql="UPDATE tb_hoadon set tinhtrangtt=1 WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadct_dh($id){
        $sql="SELECT tb_cart.id, tb_cart.ten, tb_cart.gia, tb_cart.hinh, tb_cart.soluong, tb_cart.thanhtien FROM `tb_cart` 
        LEFT JOIN tb_hoadon ON tb_cart.idbill = tb_hoadon.id
        WHERE tb_hoadon.id= $id";
        $listct = pdo_query($sql);
        return $listct;
    }

    function huy($id){
        $sql=" UPDATE `tb_hoadon` SET `trang_thai` = '4' WHERE `tb_hoadon`.`id`=  ".$id;
        $huy = pdo_query($sql);
        return $huy;
    }
       
?>