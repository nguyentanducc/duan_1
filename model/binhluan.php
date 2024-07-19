<?php 
    function loadall_binhluan($idpro){
        $sql = "
            SELECT tb_binhluan.id, tb_binhluan.noidung, tb_user.tai_khoan, tb_binhluan.ngaybinhluan FROM `tb_binhluan` 
            LEFT JOIN tb_user ON tb_binhluan.iduser = tb_user.id
            LEFT JOIN tb_sanphamm ON tb_binhluan.idpro = tb_sanphamm.id
            WHERE tb_sanphamm.id = $idpro;
        ";
        $listbl= pdo_query($sql);
        return $listbl;
    }
    // function insert_binhluan($idpro, $noidung){
    //     $date = date('Y-m-d');
    //     $sql = "
    //         INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
    //         VALUES ('$noidung','2','$idpro','$date');
    //     ";
    //     //echo $sql;
    //     //die;
    //     pdo_execute($sql);
    // }
function insert_binhluan($noidung,$ngaybinhluan,$iduser,$idpro){
    $sql="insert into tb_binhluan(noidung,ngaybinhluan,iduser,idpro) values('$noidung','$ngaybinhluan','$iduser','$idpro')";
    pdo_execute($sql);
}

function loadall_binhluan1($idpro){
    $sql="SELECT * from tb_binhluan where 1";
    if($idpro>0){
        $sql.=" AND idpro='".$idpro."'";
     }
     else{
        $sql.=" order by id desc";
    }
    $listbinhluan= pdo_query($sql);
    return $listbinhluan;
    var_dump($sql);
}

function delete_binhluan($id){
    $sql ="delete from tb_binhluan where id=".$id;
    pdo_execute($sql);
}
?>