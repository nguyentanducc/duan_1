<?php
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
        <td class="product_thumb"><a href="#" ><img src="'.$hinh.'" alt="" height="200"></a></td>
        <td class="product_name"><a href="#">'.$cart[1].'</a></td>
        <td class="product-price">$'.$cart[3].'</td>
        <td class="product_quantity">'.$cart[4].'</td>
        <td class="product_total">$ '.$ttien.'</td>
        
    </tr>
</tbody>';
$i+=1;
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
function insert_cart($idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql="insert into cart(id_sanpham,hinh,ten,gia,so_luong,,thanhtien,id_hoadon) values('$idpro','$img','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute_return_lastInsertID($sql);
}
?>