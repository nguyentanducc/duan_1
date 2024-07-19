<?php
function loadall_sanpham_home(){
    $sql="SELECT * FROM tb_sanphamm WHERE 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;   
}
function loadall_sanpham_best(){
    $sql="SELECT * FROM tb_sanphamm  WHERE 1 order by luot_xem desc limit 0,3";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_chay(){
    $sql="SELECT * FROM tb_sanphamm  WHERE seller=1 order by id desc limit 0,2";
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
//     $sql = "select * from tb_sanphamm where id = $id";
//     $result = pdo_query_one($sql);
//     return $result;
// }
function load_sanpham_cungloai($id,$id_danhmuc){
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
function update_luotxem($id)  {
    $sql="UPDATE tb_sanphamm set luot_xem=luot_xem+1 Where id=".$id;
    pdo_execute($sql);
}
function update_sanpham($id,$id_danhmuc,$tensp,$giasp,$giam_gia,$hinh){
    if($hinh!=""){
    $sql="UPDATE tb_sanphamm  set id_danhmuc ='".$id_danhmuc."', ten='".$tensp."',gia='".$giasp."',giam_gia='".$giam_gia."',hinh='".$hinh."' where id=".$id;
    }else{
    $sql="UPDATE tb_sanphamm  set id_danhmuc ='".$id_danhmuc."', ten='".$tensp."',gia='".$giasp."',giam_gia='".$giam_gia."' where id=".$id;
}
     pdo_execute($sql);
}
function loadanh_sanpham($id){
    $sql="SELECT tb_hinh.hinh from `tb_hinh`LEFT JOIN tb_sanphamm ON tb_hinh.id_sanpham=tb_sanphamm.id
    WHERE tb_sanphamm.id=$id";
    $listanh=pdo_query($sql);
    return $listanh;
}
