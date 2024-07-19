<?php
function loadall_banner(){
    $sql="select * from tb_banner order by id desc";
    $listbanner=pdo_query($sql);
    return  $listbanner;
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
function insert_banner($hinh){
    $sql="insert into tb_banner(hinh) values('$hinh')";
    pdo_execute($sql);
}
function delete_banner($id){
    $sql="delete  from tb_banner where id=".$id;
    pdo_execute($sql);
}
function loadone_banner($id){
    $sql="select * from tb_banner where id=".$_GET['id'];
    $dm=pdo_query_one($sql); 
return $dm;
}

function update_banner($id,$hinh){
    $sql="update tb_banner set hinh ='".$hinh."' where id=".$id;
                    pdo_execute($sql);
}