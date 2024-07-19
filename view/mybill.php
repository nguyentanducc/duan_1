
<div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.php">Trang Chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Tài Khoản Người Dùng</li>
                                        </ul>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <!-- Start Maincontent  -->
                        <section class="main_content_area">
                                <div class="account_dashboard">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 col-lg-3">
                                            <!-- Nav tabs -->
                                            <div class="dashboard_tab_button">
                                           
                                                <ul role="tablist" class="nav flex-column dashboard-list">
                                                    <li><a href="#orders" data-toggle="tab" class="nav-link ">Đơn hàng của tôi</a></li>
                                                    <li><a href="index.php?act=taikhoan"  class="nav-link ">Trang Chủ</a></li>
                                                          <li><a href="index.php?act=thoat" class="nav-link">logout</a></li>
                                                </ul>
                                            </div>    
                                        </div>
                                        <div class="col-sm-12 col-md-9 col-lg-9">
                                            <!-- Tab panes -->
                                            <div class="tab-content dashboard_content">
                                            <form action="index.php?act=dhtk" method="post">
                                                <div class="tab-pane fade show active" id="orders">
                                                    <h3>Đơn Đặt Hàng</h3>
                                                    <div class="coron_table table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Mã Đơn Hàng</th>
                                                                    <th>Ngày Đặt</th>
                                                                    <th>Số Lượng Mặt Hàng</th>
                                                                    <th>Tổng Đơn </th>
                                                                    <th>Trạng Thái</th>
                                                                    <th>Trạng Thái Thanh Toán</th>
                                                                    <th>Xem Chi Tiết</th>
                                                                    <th>Chức Năng</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                           
                                                                foreach ($listdh as $dh){
                                                                    extract($dh);
                                                                    $ttdh=get_ttdh($dh['trang_thai']);
                                                                    $countsp=loadall_cart_count($dh['id']);
                                                                    $chitietdh="index.php?act=ctdh&id=".$id;
                                                                    $paybill=get_tt($dh["tinhtrangtt"]);
                                                                    echo'<tbody>
                                                                    <tr>
                                                                        <td>NLK-'.$dh['id'].'</td>
                                                                        <td>'.$dh['ngay_mua'].'</td>
                                                                        <td>'.$countsp.'</td>
                                                                        <td>'.$dh['tong_tien'].' </td>
                                                                        <td>'.$ttdh.'</td>
                                                                        <td>'.$paybill.'</td>
                                                                        <td><a href="'.$chitietdh.'">Xem</a></td>
                                                                        <td>';
                                                                                if ($dh['trang_thai']!="3"&&$dh['trang_thai']!="2"&&$dh['trang_thai']!="4") {
                                                                                    echo '
                                                                                    <input type="hidden" name="id" value="'.$dh['id'].'">
                                                                                    <input  type="submit" value="hủy" name="huy" onclick="return confirm(\'Bạn có chắc muốn hủy đơn\')"> ';                  
                                                                                } else{
                                                                                echo 'không thể hủy đơn';
                                                                                }                                                                                echo'
                                                                                </td>
                                                                    </tr>
                                                                    
                                                                </tbody>';
                                                                }
                                                            
                                                            
                                                 
                                                 ?>
                                                            <!-- <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>May 10, 2018</td>
                                                                    <td><span class="success">Completed</span></td>
                                                                    <td>$25.00 for 1 item </td>
                                                                    <td><a href="index.php?act=addtocart" class="view">view</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>May 10, 2018</td>
                                                                    <td>Processing</td>
                                                                    <td>$17.00 for 1 item </td>
                                                                    <td><a href="index.php?act=addtocart" class="view">view</a></td>
                                                                </tr>
                                                            </tbody> -->
                                                        </table>
                                                    </div>
                                                </div>
                                                </form>
                                                
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>      	
                        </section>			
                        <!-- End Maincontent  --> 
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>