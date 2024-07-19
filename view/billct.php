
<div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.php">Trang Chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Đơn Chi Tiết</li>
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
                                                    <li><a href="#orders" data-toggle="tab" class="nav-link ">Đơn Chi Tiết</a></li>
                                                    <li><a href="index.php?act=dhtk"  class="nav-link ">Đơn Hàng Của Tôi</a></li>
                                                    <li><a href="index.php?act=taikhoan"  class="nav-link ">Trang Chủ</a></li>
                                                          <li><a href="index.php?act=thoat" class="nav-link">logout</a></li>
                                                </ul>
                                            </div>    
                                        </div>
                                        <div class="col-sm-12 col-md-9 col-lg-9">
                                            <!-- Tab panes -->
                                            <div class="tab-content dashboard_content">
                                              
                                                <div class="tab-pane fade show active" id="orders">
                                                    <h3>Đơn Chi Tiết</h3>
                                                    <div class="coron_table table-responsive">
                                                        <table class="table">
                                                        <tr>
                                                              <th>STT</th>
                                                              <th>Tên Sản Phẩm</th>
                                                              <th>Ảnh</th>
                                                              <th>Số Lượng</th>
                                                              <th>Giá</th>
                                                              <th>Thành Tiền</th>
                                                              </tr>
                                                            <?php
                                                        
                                                        $tong=0;
                                                        $i = 0;
                              
                                                        foreach($listct as $cart){
                                                            extract($cart);
                                                            $hinh="./admin/nalika/upload/".$hinh;
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