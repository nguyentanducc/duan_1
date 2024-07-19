<?php
    function loadall_thongke_dm(){
        $sql=" select tb_danhmuc.id as madm, tb_danhmuc.ten as tendm, count(tb_sanphamm.id) as demsp, min(tb_sanphamm.gia) as minprice, max(tb_sanphamm.gia) as maxprice, avg(tb_sanphamm.gia) as avgprice";
        $sql.=" from tb_sanphamm left join tb_danhmuc on tb_danhmuc.id=tb_sanphamm.id_danhmuc";
        $sql.=" group by tb_danhmuc.id order by tb_danhmuc.id desc";
        $thongkedm=pdo_query($sql);
        return $thongkedm;
    }
    function loadall_thongke_dh(){
        $sql= "select tb_hoadon.ngay_mua as ngay, count(tb_hoadon.id) as countbill,min(tb_hoadon.tong_tien) as mintong, max(tb_hoadon.tong_tien) as maxtong, sum(tb_hoadon.tong_tien) as tongtien ";
        $sql.= "from tb_hoadon ";
        $sql.= "group by ngay";
        // $sql.= "ORDER BY tb_hoadon.id by tb_hoadon.ngaydathang desc";
        $thongkedh=pdo_query($sql);
        return $thongkedh;
    }
    function tongdon(){
        $sql= "select count(tb_hoadon.id) as tongsobill,sum(tb_hoadon.tong_tien) as tong from tb_hoadon";
        $tongsobill=pdo_query($sql);
        return $tongsobill;
    }
    function sosanpham(){
        $sql= "select count(tb_sanphamm.id) as sosp from tb_sanphamm";
        $demsp=pdo_query($sql);
        return $demsp;
    }
    
?>
