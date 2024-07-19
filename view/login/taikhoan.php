
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
                                                    <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Trang Chủ</a></li>
                                                    <li><a href="index.php?act=dhtk"  class="nav-link">Đơn Hàng Của Tôi</a></li>
                                                    <li><a href="#address" data-toggle="tab" class="nav-link">Thông Tin Cá Nhân</a></li>
                                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">Cập Nhật Thông Tin</a></li>
                                                    <li><a href="#downloads" data-toggle="tab" class="nav-link">Đổi Mật Khẩu</a></li>

                                                    <li><a href="index.php?act=thoat" class="nav-link">logout</a></li>
                                                </ul>
                                            </div>    
                                        </div>
                                        <div class="col-sm-12 col-md-9 col-lg-9">
                                            <!-- Tab panes -->
                                            <div class="tab-content dashboard_content">
                                                <div class="tab-pane fade show active" id="dashboard">
                                                <h3> Chào mừng <?=$ten?></h3>
                                                <h2 style="color:blue"><?php 
                                                  if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                                                        ?>   </h2>
                                                </div>
                                                
                                               
                                                <div class="tab-pane fade" id="downloads">
                                                    <h3>Đổi Mật Khẩu</h3>
                                                    <div class="coron_table table-responsive">
                                                    <div class="login">
                                                        <div class="login_form_container">
                                                            <div class="account_login_form">
                                                                <form action="index.php?act=doimk" method="post">
                                                                    <label>Mật Khẩu Cũ</label>
                                                                    <input type="password" name="mat_khaucu" value="<?=$mat_khau?>">
                                                                    <label>Mật Khẩu Mới </label>
                                                                    <input type="password" name="mat_khau" value="" required>
                                                                    <div class="save_button primary_btn default_button">
                                                                    <input type="hidden" name="id" value="<?=$id?>">
                                                                        <input type="submit" value="LƯU" name="doimk" style="background:red;">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="address">
                                                    <h1>Thông Tin Tài Khoản</h1>
                                                <a href=""><h3>Tên Người Dùng : <?=$ten?></h3></a>
                                                <a href=""><h3 style="text-transform:lowercase">Tên Tài Khoản :<?=$tai_khoan?></h3></a>
                                                <a href=""><h3>Email : <?=$email?></h3></a>
                                                <a href=""><h3>Địa Chỉ : <?=$dia_chi?></h3></a>
                                                <a href=""><h3>Điện Thoại : <?=$dien_thoai?></h3></a>    
                                                </div>
                                                <div class="tab-pane fade" id="account-details">
                                                    <h3>Cập Nhật Thông Tin </h3>
                                                    <div class="login">
                                                        <div class="login_form_container">
                                                            <div class="account_login_form">
                                                                <form action="index.php?act=capnhat" method="post">
                                                                    <label>Tên Người dùng</label>
                                                                    <input type="text" name="ten" value="<?=$ten?>" required>
                                                                    <label>Tên Tài Khoản</label>
                                                                    <input type="text" name="tai_khoan" value="<?=$tai_khoan?>" required>
                                                                    <label>Email</label>
                                                                    <input type="text" name="email" value="<?=$email?>" required>
                                                                    <label>Địa Chỉ</label>
                                                                    <input type="text"  name="dia_chi" value="<?=$dia_chi?>">
                                                                    <label>Điện Thoại</label>
                                                                    <input type="text"  name="dien_thoai" value="<?=$dien_thoai?>">
                                                                    <div class="save_button primary_btn default_button">
                                                                    <input type="hidden" name="id" value="<?=$id?>">
                                                                        <input type="submit" value="LƯU" name="capnhat" style="background:red;">
                                                                    </div>
                                                                </form>
                                                             </div>
                                                        </div>
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