<!--pos home section-->
<div class=" pos_home_section">
                            <div class="row pos_home">
                                <div class="col-lg-3 col-md-8 col-12">
                                   <!--sidebar banner-->
                                    <div class="sidebar_widget banner mb-35">
                                        <div class="banner_img mb-35">
                                       <?php foreach($dsdm as $danhmuc){
                                                extract($danhmuc);
                                                $linkdm="index.php?act=sanpham&id_danhmuc=".$id;
                                                $hinhpath= "./admin/nalika/upload/".$hinh;
                                                if(is_file($hinhpath)){
                                                    $hinh="<img src='".$hinhpath."'  >";
                                                }else{
                                                    $hinh="no photo";
                                                }
                                            echo'<a href="'.$linkdm.'">'.$hinh.'</a>';
                                            }
                                                ?>
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
                                             $linkdm="index.php?act=sanpham&id_danhmuc=".$id;
                                                echo'<a href="'.$linkdm.'" style="color:white; fontsize"><li>  '.$ten.'
                                            </li></a>
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
                                        <?php
                                        foreach($spbest as $sanpham){
                                            extract($sanpham);  
                                            $link="index.php?act=sanphamct&idsp=$id";
                                            $hinhpath= "./admin/nalika/upload/".$hinh;
                                            if(is_file($hinhpath)){
                                                $hinh="<img src='".$hinhpath."' >";
                                            }else{
                                                $hinh="no photo";
                                            }
                                            echo'<div class="cart_item">
                                            <div class="cart_img">
                                                <a href="'.$link.'">'.$hinh.'</a>
                                            </div>
                                             <div class="cart_info">
                                                 <a href="'.$link.'">'.$ten.'</a>
                                                 <span class="cart_price">$'.$gia.'</span>
                                                 <span class="quantity">Qty: 1</span>
                                             </div>
                                             <div class="cart_remove">
                                             </div>
                                         </div>';}
                                            ?>
                                        
                                        
                                        <div class="block_content">
                                            <p>2 Sản Phảm</p>
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
                                        
                                    </div>
                                    <!--sidebar banner end-->
                                </div>
                                