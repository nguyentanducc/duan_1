<?php
// function loadanh_sanpham($id){
//     $sql="SELECT tb_hinh.hinh from `tb_hinh`LEFT JOIN tb_sanphamm ON tb_hinh.id_sanpham=tb_sanphamm.id
//     WHERE tb_sanphamm.id=$id";
//     $listanh=pdo_query($sql);
//     return $listanh;
// }

function loadall_hinh(){
    $sql="select * from tb_hinh order by id desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
// function load_ten_dm($id_danhmuc){
//     if($id_danhmuc>0){
//         $sql="select * from tb_sanphamm where id=".$id_danhmuc;
//         $dm=pdo_query_one($sql);
//         // extract($dm);
//         // return $name;
//     }else{
//         return "";
//     }
// }
// function insert_danhmuc($tenloai,$hinh){
//     $sql="insert into tb_danhmuc(ten,hinh) values('$tenloai','$hinh')";
//     pdo_execute($sql);
// }
// function delete_danhmuc($id){
//     $sql="delete  from tb_danhmuc where id=".$id;
//     pdo_execute($sql);
// }
// function loadone_dm($id){
//     $sql="select * from tb_danhmuc where id=".$_GET['id'];
//     $dm=pdo_query_one($sql); 
// return $dm;
// }

// function update_danhmuc($id,$tenloai,$hinh){
//     $sql="update tb_danhmuc set ten ='".$tenloai."',hinh ='".$hinh."' where id=".$id;
//                     pdo_execute($sql);
// }



?>