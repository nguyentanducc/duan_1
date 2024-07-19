 <!--breadcrumbs area start-->

 <div class="breadcrumbs_area" >
                            <div class="row" >
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
                        <?php
                        if(isset($hoadon)&&(is_array($hoadon))){
                            extract($hoadon);
                        }
                        ?>

                        <!--Checkout page section-->
                        <div class="Checkout_section">
                            <div class="row">
                                   <div class="col-12">
                                        
                                        <div class="user-actions mb-20">
                                            <h2 style="color:red"> 
                                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                                CẢM ƠN BẠN ĐÃ ĐẶT HÀNG THÀNH CÔNG

                                            </h2>
                                               
                                        </div>    
                                   </div>
                                </div>
                            <div class="checkout_form">
                                    <div class="row"> 
                                        
                                        <div class="col-lg-6 col-md-6">
                                           
                                                <h3>Hóa Đơn </h3>
                                                <div class="row">
                                                    <div class="col-12 mb-30">
                                                        <label>Người Nhận</label>
                                                        <input type="text"  name="ten" value="<?=$hoadon['ten']?>"readonly="">     
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <label for="country">Quốc Gia <span>*</span></label>
                                                        <select name="cuntry" id="country"> 
                                                            <option value="2">VietNam</option>      
                                                        </select>
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <label>Địa Chỉ Nhận Hàng <span>*</span></label>
                                                        <input  type="text" name="dia_chi" value="<?=$hoadon['dia_chi']?>" readonly="">    
                                                    </div>
                                                    
                                                    <div class="col-12 mb-30">
                                                        <label>Ngày Đặt Hàng<span>*</span></label>
                                                        <input type="text"  name="ngay_mua"value="<?=$hoadon['ngay_mua']?>" readonly="">    
                                                    </div> 
         
                                                    <div class="col-lg-6 mb-30">
                                                        <label>Số Điện Thoại<span>*</span></label>
                                                        <input type="text"name="dien_thoai" value="<?=$hoadon['dien_thoai']?>" readonly=""> 

                                                    </div> 
                                                     <div class="col-lg-6 mb-30">
                                                        <label> Địa chỉ Email   <span>*</span></label>
                                                          <input type="email" name="email" value="<?=$hoadon['email']?>" readonly="">   

                                                    </div> 
                                                    <div class="col-12 mb-30">
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                    
                                                        <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                                           <div class="row">
                                                         
                                                                <div class="col-lg-6 mb-30">
                                                                     

                                                                </div> 
                                                                 <div class="col-lg-6">
                                                                    

                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <div class="order-notes">
                                                            
                                                        </div>    
                                                    </div>     	    	    	    	    	    	    
                                                </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                        <div class="payment_method">
                                                   <div class="panel-default">
                                                   <h3>Mã Hóa Đơn <?=$hoadon['id']?></h3> 
                                                   <h2>

                                                   </h2>
                                                    <div class="order_button">
                                                <h3>Giỏ Hàng Của Bạn</h3> 
                                                <div class="order_table table-responsive mb-30">
                                                    <table>
                                                    <?php
                                                       hoadonctt($hoadonct);
                                                       ?>                                                  
                                                </table>     
                                                </div>
                                                
                                                        <a href="index.php"><button type="submit">Trở Về </button> </a>
                                                    </div>    
                                                </div> 
                                            </form>         
                                        </div>
                                    </div> 
                                </div>        
                        </div>
                        <!--Checkout page section end-->

                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
            