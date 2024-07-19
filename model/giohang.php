<?php
function view(){
    $img_path="./admin/nalika/upload/";
    global $img_path;
    $tong=0;
    $i = 0;
    echo'<thead>
    <tr>
        <th>Sản Phẩm</th>
        <th>Thành Tiền</th>
    </tr>
</thead>';
    foreach($_SESSION['cart'] as $cart){
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
    echo'
<tbody>
    <tr>
        <td> '.$cart[1].' <strong> × '.$cart[4].'</strong></td>
        <td> $'.$cart[3].'</td>
    </tr>
    
</tbody>
';
$i+=1;
    }
    echo'<tfoot>
    
    
    <tr class="order_total">
        <th>Tổng Tiền</th>
        <td><strong>$'.$tong.'</strong></td>
    </tr>
</tfoot>';
}
function hoadonct(){
    $img_path="./admin/nalika/upload/";
    global $img_path;
    $tong=0;
    $i = 0;
    echo'<thead>
    <tr>
        <th>Hình </th>
        <th>Sản Phẩm</th>
        <th>Đơn Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
    </tr>
</thead>';
    foreach($_SESSION['cart'] as $cart){
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
    echo'
<tbody>
    <tr>
        <td> <img src="'.$hinh.'" height="200" width="200"></td>
        <td> <strong>'.$cart[1].' </strong> </td>
        <td> $'.$cart[3].'</td>
        <td>'.$cart[4].'</td>
        <td> $'.$ttien.'</td>
    </tr>
    
</tbody>
';
$i+=1;
    }
    echo'<tfoot>
    <tr class="order_total">
        <th>Tổng Tiền</th>
        <td><strong>$'.$tong.'</strong></td>
    </tr>
</tfoot>';
}

function hoadonctt($hoadonct){
    $img_path="./admin/nalika/upload/";
    global $img_path;
    $tong=0;
    $i = 0;
    echo'<thead>
    <tr>
        <th>Hình </th>
        <th>Sản Phẩm</th>
        <th>Đơn Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
    </tr>
</thead>';
    foreach($hoadonct as $cart){
        $hinh=$img_path.$cart['hinh'];
        $cart['thanhtien']=$cart['soluong']*$cart['gia'];
        $tong+=$cart['thanhtien'];
    echo'
<tbody>
    <tr>
        <td> <img src="'.$hinh.'" height="200" width="200"></td>
        <td> <strong>'.$cart['ten'].' </strong> </td>
        <td> $'.$cart['gia'].'</td>
        <td>'.$cart['soluong'].'</td>
        <td> $'.$cart['thanhtien'].'</td>
    </tr>
    
</tbody>
';
$i+=1;
    }
    echo'<tfoot>
    <tr class="order_total">
        <th>Tổng Tiền</th>
        <td><strong>$'.$tong.'</strong></td>
    </tr>
</tfoot>';
}

function viewcart($del)  {
    $img_path="./admin/nalika/upload/";
    global $img_path;
    $tong=0;
    $i = 0;
    if($del==1){
        $xoasp_th='<th > Thao Tác </th>';
        }else{
            $xoasp_th='';
            $xoasp_td='';
        }
    echo'<thead>
    <tr>
        '.$xoasp_th.'
        <th class="product_thumb">Hình</th>
        <th class="product_name">Sản Phẩm</th>
        <th class="product-price">Giá</th>
        <th class="product_quantity">Số Lượng</th>
        <th class="product_total">Thành Tiền</th>
    </tr>';
    foreach($_SESSION['cart'] as $cart){
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
        if($del==1){
        $xoasp_td="index.php?act=delcart&idcart=".$i;
        
        }else{
            $xoasp_td='';
        }
        echo'
</thead>
<tbody>
    <tr>
       <td class="product_remove"><a href="'.$xoasp_td.'"<i class="fa fa-trash-o"></i></a></td>
        <td class="product_thumb"><a href="#" ><img src="'.$hinh.'" height="200" width="200"></a>
        </td>
        <td class="product_name"><a href="#">'.$cart[1].'</a></td>
        <td class="product-price">$'.$cart[3].'</td>

        <td class="product_quantity ">
        <button class="btn-minute" type="button" onclick="giamsl(this)">-</button>
        <input type="text" value="'.$cart[4].'">
        <button class="btn-plus" type="button" onclick="tangsl(this)">+</button>
        </td>
        
        <td class="product_total">$ '.$ttien.'</td>
        
    </tr>
</tbody>';
$i += 1 ;
    }
    echo '<tr>
                    <td colspan="4">Tổng Đơn Hàng</td>
                    <td>'.$tong.'</td>
                    <td></td>
                    </tr>
                    ';
}

function tongdonhang(){
    $tong=0;
    foreach($_SESSION['cart'] as $cart){
       $ttien=$cart[3]*$cart[4];
       $tong+=$ttien;
       
    }
  return  $tong;
   
}
function insert_gio($iduser, $idsp, $hinh, $ten, $gia, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO tb_cart(iduser,idsanpham,hinh,ten,gia,soluong,thanhtien,idbill) values('$iduser','$idsp','$hinh','$ten','$gia','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function insert_hoadon($id_user,$ten,$email,$dia_chi,$dien_thoai,$ngay_mua,$tong_tien,$pthtt){
    $sql="insert into tb_hoadon(id_user,ten,dia_chi,email,dien_thoai,ngay_mua,tong_tien,pttt) values('$id_user','$ten','$dia_chi','$email','$dien_thoai','$ngay_mua','$tong_tien','$pthtt')";
    // var_dump($sql);die;
    return pdo_execute_return_lastInsertID($sql);
    
}
function loadone_hoadon($id){
    $sql="select * from tb_hoadon where id=".$id ;
    $hoadon=pdo_query_one($sql); 
return $hoadon;
}
function loadall_giohang($idbill){
    $sql="select * from tb_cart where idbill=".$idbill ;
    $hoadon=pdo_query($sql); 
return $hoadon;
}

?>
<script>
    function giamsl(x) {
        var cha = x.parentElement;
        var soluongcu = cha.children[1];
        var price =  cha.children[0];
        // var price = document.getElementById('price_' + input_id).innerHTML.replace(/₫|,/g, '');
        var dongia =  cha.children[3];
        if (parseInt(soluongcu.value) > 1) {
            var soluongmoi = parseInt(soluongcu.value) - 1;
            soluongcu.value = soluongmoi;
            var pricem=parseInt(soluongmoi.value) * parseInt(dongia.value);
            price.innerHTML =pricem;
        }


    }

    function tangsl(x) {
        var cha = x.parentElement;
        var soluongcu = cha.children[1];
        var soluongmoi = parseInt(soluongcu.value) + 1;
        soluongcu.value = soluongmoi;


    }
    </script>