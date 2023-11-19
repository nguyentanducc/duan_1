<?php
function loadall_sanpham_home(){
    $sql="SELECT * FROM tb_sanphamm WHERE 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;   
}
function loadall_sanpham_top10(){
    $sql="SELECT * FROM tb_sanphamm  WHERE is_deleted = 0 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw="",$id_danhmuc=0){
    $sql="SELECT *  FROM tb_sanphamm  WHERE 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and ten like '%".$keyw."%'";
    }
    if($id_danhmuc>0){
        $sql.=" and id_danhmuc ='".$id_danhmuc."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}

// 
// function loadone_sanpham($id){
//     $sql = "select * from sanpham where id = $id";
//     $result = pdo_query_one($sql);
//     return $result;
// }
function load_sanpham_cungloai($id, $id_danhmuc){
    $sql = "select * from tb_sanphamm  where id_danhmuc = $id_danhmuc and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
///
function insert_sanpham($tensp,$giasp,$giam_gia,$hinh,$trang_thai,$soluong,$id_danhmuc,$id_phanloai){
    $sql= "insert into tb_sanphamm(ten,gia,giam_gia,hinh,trang_thai,soluong,id_danhmuc,id_phanloai) values('$tensp','$giasp','$giam_gia','$hinh','$trang_thai','$soluong','$id_danhmuc','$id_phanloai')";
    pdo_execute($sql);  
}
function delete_sanpham($id){
    $sql="delete from `tb_sanphamm` where tb_sanphamm.id=".$id;
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql="select * from tb_sanphamm  where id=".$id ;
    $sanpham=pdo_query_one($sql); 
return $sanpham;
}

// function update_sanpham($id,$id_danhmuc,$tensp,$giasp,$giam_gia,$hinh){
//     if($hinh!=""){
//     $sql="UPDATE tb_sanphamm  set id_danhmuc ='".$id_danhmuc."', ten='".$tensp."',gia='".$giasp."',giam_gia='".$giam_gia."',hinh='".$hinh."' where id=".$id;
//     }else{
//     $sql="UPDATE tb_sanphamm  set id_danhmuc ='".$id_danhmuc."', ten='".$tensp."',gia='".$giasp."',giam_gia='".$giam_gia."' where id=".$id;
// }
//      pdo_execute($sql);
// }
