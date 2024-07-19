<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Product Edit</h2>
												<p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
<div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                    <form action="index.php?act=chitietdh" method="POST">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Chi tiết đơn hàng</a></li>
                                    </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="product-status-wrap border-pdt-ct">
                                                <table>
                                                <tr>
                                                    <th>MÃ ĐƠN HÀNG</th>
                                                    <th>KHÁCH HÀNG</th>
                                                    <th>SỐ LƯỢNG HÀNG</th>
                                                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                                    <th>NGÀY ĐẶT HÀNG</th>
                                                    <th>TÌNH TRANG ĐƠN HÀNG</th>
                                                </tr>
                                                <?php 
                                                    // foreach ($listbill as $bill) {
                                                    //     extract($bill);
                                                        $kh=$hoadon["ten"].'
                                                        <br> '.$hoadon["email"].'
                                                        <br> '.$hoadon["dien_thoai"].'
                                                        <br> '.$hoadon["dia_chi"];
                
                                                        $countsp=loadall_cart_count($hoadon["id"]);
                                                        $ttdh=get_ttdh($hoadon["trang_thai"]);
                                                        echo '<tr>
                                                        <td>EKO-'.$hoadon['id'].'</td>
                                                        <td>'.$kh.'</td>
                                                        <td>'.$countsp.'</td>
                                                        <td>'.$hoadon['tong_tien'].'.000</td>
                                                        <td>'.$hoadon['ngay_mua'].'</td>
                                                        <td>'.$ttdh.'</td>
                                                       </td>
                                                    </tr>';
                                                    // }
                                                ?>
                                                </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="product-status-wrap border-pdt-ct">
                                                    <table>
                                                        <?php
                                                        
                                                            $tong=0;
                                                            $i = 0;
                                  
                                                                echo '<tr>
                                                                  <th>STT</th>
                                                                  <th>Tên Sản Phẩm</th>
                                                                  <th>Ảnh</th>
                                                                  <th>Số Lượng</th>
                                                                  <th>Giá</th>
                                                                  <th>Thành Tiền</th>
                                                                  </tr>';
                                                            foreach($listct as $cart){
                                                                extract($cart);
                                                                $hinh="./upload/".$hinh;
                                                                if (is_file($hinh)) {
                                                                   $hinh="<img src='".$hinh."' height='80'>";
                                                               }else{
                                                                   $hinh="no photo";
                                                               }
                                                              $ttien=$cart['soluong']*$cart['gia'];
                                                              $tong+=$ttien;
                                                              echo
                                                                '
                                                                <tr>
                                                                <td>'.($i+1).'</td>
                                                                <td>'.$cart['ten'].'</td>
                                                                <td>'.$hinh.'</td>                                                                                            
                                                                <td>'.$cart['soluong'].'</td>                                                                                           
                                                                <td>'.$cart['gia'].'</td>
                                                                 <td>'.$ttien.'</td>
                                                                </tr>';
                                                                $i+=1;
                                                            }
                                                            echo '<tr>
                                                            <td colspan="5">Tổng Đơn Hàng</td>
                                                            <td>'.$tong.'</td>
                                                            </tr>
                                                            ';
                                                          
                                    
                                                        ?>
                                                    </table>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                <div class="text-center custom-pro-edt-ds"><input type="hidden" name="id" value="<?=$hoadon['id']?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .ten{
                color: #fff;
            }
            
        </style>