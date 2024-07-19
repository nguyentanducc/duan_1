 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.html">Trang Chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Hóa Đơn </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <!--Checkout page section-->
                        <div class="Checkout_section">
                            <form action="index.php?act=hoadonct" method="post">
                            <div class="row">
                                   <div class="col-12">
                                        
                                        <!-- <div class="user-actions mb-20">
                                            <h3> 
                                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                                Bạn Có Mã Khuyến Mãi?
                                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon" aria-expanded="true">NHẤN VÀO ĐÂY ĐỂ NHẬP CODE</a>     

                                            </h3>
                                             <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                                <div class="checkout_info">
                                                    
                                                        <input placeholder="Coupon code" type="text">
                                                         <input value="Apply coupon" type="submit">
                                                   
                                                </div>
                                            </div>    
                                        </div>     -->
                                   </div>
                                </div>
                            <div class="checkout_form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                                <h3>Hóa Đơn </h3>
                                                <div class="row">
                                                    <div class="col-12 mb-30">
                                                        <label>Nhập Tên Người Nhận</label>
                                                        <input type="text" laceholder="Tên" name="ten" value="" required>     
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <label for="country">Quốc Gia <span>*</span></label>
                                                        <select name="cuntry" id="country"> 
                                                            <option value="2">VietNam</option>      
                                                        </select>
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <label>Địa Chỉ  <span>*</span></label>
                                                        <input  type="text" name="dia_chi" value="" required>     
                                                    </div>
                                                    
                                                    <!-- <div class="col-12 mb-30">
                                                        <label>Ngày Tháng <span>*</span></label>
                                                        <input type="date"  name="ngay_mua" value="">    
                                                    </div>  -->
                                                   
                                                    <div class="col-lg-6 mb-30">
                                                        <label>Số Điện Thoại<span>*</span></label>
                                                        <input type="text"name="dien_thoai" value="" required> 

                                                    </div> 
                                                     <div class="col-lg-6 mb-30">
                                                        <label> Email   <span>*</span></label>
                                                          <input type="text"name="email" value="" required> 

                                                    </div> 
                        
                                                    
                                                       	    	    	    	    
                                                </div>
                                               
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                                
                                                <h3>Giỏ Hàng Của Bạn</h3> 
                                                <div class="order_table table-responsive mb-30">
                                                    <table>
                                                       <?php
                                                       hoadonct();
                                                       ?>
                                                    </table>     
                                                </div>
                                                <div class="payment_method">
                                                    <h3>Phương thức thanh toán</h3>
                                                    <input type="radio" name="pttt"  value="1" > Thanh Toán Trực Tiếp
                                                    <input type="radio" name="pttt"  value="2" > Chuyển Khoản
                                       
                                                </div> 
                                                
                                        </div>
                                        <input type="submit" name="dongydathang" style="background: #018576;color:white;"></input>
                                    </div> 
                                </div>
                                </form>        
                        </div>
                        <!--Checkout page section end-->
