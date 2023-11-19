  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="breadcrumb_content">
                                            <ul>
                                                <li><a href="index.php">Trang Chủ</a></li>
                                                <li><i class="fa fa-angle-right"></i></li>
                                                <li>Đăng Ký</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--breadcrumbs area end-->
                        <div class="customer_login">
                            <div class="row">
 <!--register area start-->
 <div class="col-lg-6 col-md-6">
                                            <div class="account_form register">
                                                <h2>Đăng Ký</h2>
                                                <form action="index.php?act=dangky" method="post">
                                                <p>   
                                                        <label>Nhập Email  <span>*</span></label>
                                                        <input type="email" name="email">
                                                     </p>
                                                    <p>   
                                                        <label>Nhập Tên Tài Khoản  <span>*</span></label>
                                                        <input type="text" name="tai_khoan">
                                                     </p>
                                                     <p>   
                                                        <label>Mật Khẩu <span>*</span></label>
                                                        <input type="password" name="mat_khau">
                                                     </p>
                                                    <div class="login_submit">
                                                        <button type="submit" name="dangky" value="Đăng Ký">Đăng Ký</button>
                                                        <button type="submit" name="dangnhap" value="Đăng Nhập"><a href="index.php?act=dangnhap">Đăng Nhập</a></button>
                                                        <label for="remember">
                                                            <input id="remember" type="checkbox">
                                                            Ghi Nhớ Tài Khoản
                                                        </label>
                                                        
                                                        <a href="index.php?act=quenmk">Bạn Đã Quên Mật Khẩu?</a>
                                                    </div>
                                                </form>
                                                     <h3 class="thongbaoo" style="color:red">
                                                <?php
                                                
                                                if(isset($thongbao)&&($thongbao!="")){
                                                    echo $thongbao;
                                                }
                                                ?>
                                                </h3>
                                            </div>    
                                        </div>
                                        <!--register area end-->
                                        </div>
                        </div>
                        <!-- customer login end -->

                    </div>
                    <!--pos page inner end-->
                </div> 
            </div>
            <!--pos page end-->