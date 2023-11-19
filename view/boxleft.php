<!--pos home section-->
<div class=" pos_home_section">
                            <div class="row pos_home">
                                <div class="col-lg-3 col-md-8 col-12">
                                   <!--sidebar banner-->
                                    <div class="sidebar_widget banner mb-35">
                                        <div class="banner_img mb-35">
                                            <a href="#"><img src="templatefree\assets\img\banner\banner5.jpg" alt=""></a>
                                        </div>
                                        <div class="banner_img">
                                            <a href="#"><img src="templatefree\assets\img\banner\banner6.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <!--sidebar banner end-->

                                    <!--categorie menu start-->
                                    <div class="sidebar_widget catrgorie mb-35">
                                        <h3>Danh Mục</h3>
                                        <ul>
                                            <?php 
                                            foreach($dsdm as $danhmuc){
                                                extract($danhmuc);
                                                echo'<li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> '.$ten.'</a>
                                           
                                            </li>
                                             ';
                                            }
                                            
                                            ?>
                                            <!-- <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Iphone</a>
                                                <ul class="categorie_sub">
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Accessories</a>
                                                        <ul class="categorie_sub">
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Accessories</a></li>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Dresses</a></li>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Tops</a></li>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> HandBags</a></li>
                                                        </ul> 
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Dresses</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Tops</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> HandBags</a></li>
                                                </ul>     
                                            </li>
                                            <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> SamSung</a>
                                                <ul class="categorie_sub">
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Accessories</a>
                                                        <ul class="categorie_sub">
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Accessories</a></li>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Dresses</a></li>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> Tops</a></li>
                                                            <li><a href="#"><i class="fa fa-caret-right"></i> HandBags</a></li>
                                                        </ul> 
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Dresses</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Tops</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> HandBags</a></li>
                                                </ul> 
                                            </li> -->
                                            

                                        </ul>
                                    </div>
                                    <!--categorie menu end-->

                                    <!--wishlist block start-->
                                    <div class="sidebar_widget wishlist mb-35">
                                        <div class="block_title">
                                            <h3><a href="#">Sản Phẩm Bán Chạy</a></h3>
                                        </div>
                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\cart\cart.jpg" alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="index.php?act=sanphamct">lorem ipsum dolor</a>
                                                <span class="cart_price">$115.00</span>
                                                <span class="quantity">Qty: 1</span>
                                            </div>
                                            <div class="cart_remove">
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\cart\cart2.jpg" alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="index.php?act=sanphamct">Quisque ornare dui</a>
                                                <span class="cart_price">$105.00</span>
                                                <span class="quantity">Qty: 1</span>
                                            </div>
                                            <div class="cart_remove">
                                            </div>
                                        </div>
                                        <div class="block_content">
                                            <p>2  products</p>
                                            <a href="#">» My wishlists</a>
                                        </div>
                                    </div>
                                    <!--wishlist block end-->

                                    <!--popular tags area-->
                                    <div class="sidebar_widget tags mb-35">
                                        <div class="block_title">
                                            <h3>TOP TỪ KHÓA HOT </h3>
                                        </div>
                                        <div class="block_tags">
                                            <a href="#">ipod</a>
                                            <a href="#">sam sung</a>
                                            <a href="#">apple</a>
                                            <a href="#">iphone 5s</a>
                                            <a href="#">superdrive</a>
                                            <a href="#">shuffle</a>
                                            <a href="#">nano</a>
                                            <a href="#">iphone 4s</a>
                                            <a href="#">canon</a>
                                        </div>
                                    </div>
                                    <!--popular tags end-->

                                    <!--newsletter block start-->
                                    <div class="sidebar_widget newsletter mb-35">
                                        <div class="block_title">
                                            <h3>Bản Tin Mới</h3>
                                        </div> 
                                        <form action="#">
                                            <p>Đăng Nhập để xem bản tin mới</p>
                                            <input placeholder="Your email address" type="text">
                                            <button type="submit">Theo Dõi</button>
                                        </form>   
                                    </div>
                                    <!--newsletter block end--> 

                                    <!--sidebar banner-->
                                    <div class="sidebar_widget bottom ">
                                        <div class="banner_img">
                                            <a href="#"><img src="templatefree\assets\img\banner\banner9.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <!--sidebar banner end-->
                                </div>
                                