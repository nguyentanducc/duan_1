 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.php">Trang Chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Giỏ Hàng</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->



                         <!--shopping cart area start -->
                        <div class="shopping_cart_area">
                            <form action="#"> 
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table_desc">
                                                <div class="cart_page table-responsive">
                                                    <table>
                                                    <?php
                    viewcart(1);
                    ?>
                                            </table>   
                                                </div>  
                                                <div class="cart_submit">
                                                    <button type="submit">Thêm Sản Phẩm Khác</button>
                                                </div>      
                                            </div>
                                         </div>
                                     </div>
                                     <!--coupon code area start-->
                                    <div class="coupon_area">
                                        <!-- <?php
                                        include "khuyenmai.php";
                                        ?> -->
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Giỏ Hàng</h3>
                                                    <div class="coupon_inner">
                                                   
                                                       <div class="checkout_btn">
                                                           <a href="index.php?act=hoadon">Thanh Toán</a>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--coupon code area end-->
                                </form> 
                         </div>
                         <!--shopping cart area end -->

                    </div>
                    <!--pos page inner end-->
                </div>
            </div>