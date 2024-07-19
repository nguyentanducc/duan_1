
                             <?php
                             include "boxleft.php";
                             ?>
                               <div class="col-lg-9 col-md-12">
                                    <?php
                                    include "slide.php";
                                    ?>
                                    <!--new product area start-->
                                    <div class="brand_logo mb-60">
                                        <div class="block_title">
                                            <h3>Danh Mục Sản Phẩm</h3>
                                        </div>
                                        <div class="row">
                                            <div class="brand_active owl-carousel">
                                               
                                                    <?php foreach($dsdm as $danhmuc){
                                                extract($danhmuc);
                                                $linkdm="index.php?act=sanpham&id_danhmuc=".$id;
                                                $hinhpath= "./admin/nalika/upload/".$hinh;
                                                if(is_file($hinhpath)){
                                                    $hinh="<img src='".$hinhpath."' width='100px' height='100px'>";
                                                }else{
                                                    $hinh="no photo";
                                                }
                                            echo'<div class="col-lg-2">
                                            <div class="single_brand">
                                            <a href="'.$linkdm.'">'.$hinh.'</a>
                                            </div>
                                        </div>
                                            ';
                                            }
                                                ?>
                                                    
                                                    </div>
                                                </div>
                                               
                                                
                                                
                                               
                                                
                                            </div>
                                    <div class="new_product_area">
                                        <div class="block_title">
                                            <h3>Sản Phẩm Mới</h3>
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                                <!-- <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\product\product1.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$50.00</span>
                                                            <h3 class="product_title"><a href="index.php?act=sanphamct">Curabitur sodales</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                       <?php
                                                       $i=0;
                                                       foreach ($spnew as $sanpham){
                                                        extract($sanpham);
                                                        $link="index.php?act=sanphamct&idsp=$id";
                                                        $hinhpath= "./admin/nalika/upload/".$hinh;
                                                            if(($i==2)||($i==5)||($i==8)){
                                                                $mr="";
                                                            }else{
                                                                $mr="mr";
                                                            }
                                                       echo'<div class="col-lg-3">
                                                       <div class="single_product"> 
                                                       <div class="product_thumb">
                                                       <a href="'.$link.'"><img src="'.$hinhpath.'" alt=""></a> 
                                                       <div class="hot_img">
                                                           <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                                       </div>
                                                       <div class="product_action">
                                                           <a href="#"> 
                                                           <form action="index.php?act=addtocart" method="post" >
                                                            <input type="hidden" name="id" value="'.$id.'">
                                                            <input type="hidden" name="ten" value="'.$ten.'">
                                                            <input type="hidden" name="hinh" value="'.$hinh.'">
                                                            <input type="hidden" name="gia" value="'.$gia.'">
                                                            <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG" style="color:white; background: #018576; border:#018576;" ">
                                                        </form> 
                
                                                       </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <span class="product_price">$'.$gia.'</span>
                                                        <h3 class="product_title"><a href="'.$link.'">'.$ten.'</a></h3>
                                                    </div>
                                                    <div class="product_info">
                                                        <ul>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    </div>';
                                                
                                                }
                                                       ?>
                                                  
                                                <!-- <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\product\product3.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$60.00</span>
                                                            <h3 class="product_title"><a href="index.php?act=sanphamct">Sed non turpiss</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\product\product4.jpg" alt=""></a> 
                                                           <div class="hot_img">
                                                               <img src="templatefree\assets\img\cart\span-hot.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$65.00</span>
                                                            <h3 class="product_title"><a href="index.php?act=sanphamct">Duis convallis</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\product\product6.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$50.00</span>
                                                            <h3 class="product_title"><a href="index.php?act=sanphamct">Curabitur sodales</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div> 
                                        </div>       
                                    </div> 
                                    <!--new product area start-->  

                                    <!--featured product start--> 
                                    <div class="featured_product">
                                        <div class="block_title">
                                            <h3>Sản Phẩm Tiêu Biểu</h3>
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                                <?php
                                                foreach($sphot as $sanpham){
                                                    extract($sanpham);
                                                    $link="index.php?act=sanphamct&idsp=$id";
                                                    $hinhpath= "./admin/nalika/upload/".$hinh;
                                                    
                                                    echo'<div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="'.$link.'"><img src="'.$hinhpath.'" alt=""></a> 
                                                           <div class="hot_img">
                                                               <img src="templatefree\assets\img\cart\span-hot.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"><form action="index.php?act=addtocart" method="post" >
                                                               <input type="hidden" name="id" value="'.$id.'">
                                                               <input type="hidden" name="ten" value="'.$ten.'">
                                                               <input type="hidden" name="hinh" value="'.$hinh.'">
                                                               <input type="hidden" name="gia" value="'.$gia.'">
                                                               <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG" style="color:white; background: #018576; border:#018576;" ">
                                                           </form></a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$'.$gia.'</span>
                                                            <h3 class="product_title"><a href="'.$link.'">'.$ten.'</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                                <!-- <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\product\product8.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$50.00</span>
                                                            <h3 class="product_title"><a href="index.php?act=sanphamct">Sed non turpis</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\product\product9.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$70.00</span>
                                                            <h3 class="product_title"><a href="index.php?act=sanphamct">Donec ac congue</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\product\product3.jpg" alt=""></a> 
                                                           <div class="hot_img">
                                                               <img src="templatefree\assets\img\cart\span-hot.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$60.00</span>
                                                            <h3 class="product_title"><a href="index.php?act=sanphamct">Curabitur sodales</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="index.php?act=sanphamct"><img src="templatefree\assets\img\product\product2.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">$50.00</span>
                                                            <h3 class="product_title"><a href="index.php?act=sanphamct">Phasellus a arcu</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div> 
                                        </div> 
                                    </div>     
                                    <!--featured product end--> 

                                    <!--banner area start-->
                                    <div class="banner_area mb-60">
                                        <div class="row">
                                            
                                            
                                        </div>
                                    </div>     
                                    <!--banner area end--> 

                                    <!--brand logo strat--> 
                                    
                                        </div>
                                    </div>       
                                    <!--brand logo end-->        
                                </div>
                            </div>  
                        </div>
                        <!--pos home section end-->
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
            