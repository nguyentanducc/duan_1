 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <?php
    extract($sp);
    ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.php">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Chi Tiết Sản Phẩm</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->

                          
                         <!--product wrapper start-->
                        <div class="product_details">
                            <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="product_tab fix"> 
                                            <div class="product_tab_button">    
                                            <ul class="nav" role="tablist">
                                           <?php   
                                            foreach($spanh as $anh){
                                                extract($anh);
                                             $hinhpath= "./admin/nalika/upload/".$hinh;
                                                  if(is_file($hinhpath)){
                                               $hinh="<img src='".$hinhpath."' >";
                                                }else{
                                                 $hinh="no photo";
                                                }
                                           echo' 
                                                    <li>
                                                        <a class="active" data-toggle="tab" href="#p_tab3" role="tab" aria-controls="p_tab1" aria-selected="false">'.$hinh.'</a>
                                                    </li>
                                                    
                                                    ';
                                                }
                                                ?>
                                                <?php
                                                    extract($sp);
                                                $hinhpath= "./admin/nalika/upload/".$hinh;
                                                    if(is_file($hinhpath)){
                                                $hinh="<img src='".$hinhpath."' >";
                                                }else{
                                                $hinh="no photo";
                                                }
                                            echo'     </ul>
                                            </div>
                                                    <div class="tab-content produc_tab_c">
                                                        <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                                            <div class="modal_img">
                                                         <a href="#">'.$hinh.'</a>
                                                
                                                            <div class="img_icone">
                                                                   <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                                               </div>
                                                                <div class="view_img">
                                                                    <a class="large_view" href=" '.$hinhpath.'"><i class="fa fa-search-plus"></i></a>
                                                                </div>    
                                                            </div>
                                                        </div>
                                                        ';
                                                        ?>
                                                        <?php
                                                        foreach($spanh as $anh){
                                                            extract($anh);
                                                         $hinhpath= "./admin/nalika/upload/".$hinh;
                                                              if(is_file($hinhpath)){
                                                           $hinh="<img src='".$hinhpath."' >";
                                                            }else{
                                                             $hinh="no photo";
                                                            }
                                                       echo'
                                                        <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                                            <div class="modal_img">
                                                                <a href="#">'.$hinh.'</a>
                                                                <div class="img_icone">
                                                                   <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                                               </div>
                                                                <div class="view_img">
                                                                    <a class="large_view" href="'.$hinhpath.'"> <i class="fa fa-search-plus"></i></a>
                                                                </div>     
                                                            </div>
                                                        </div>
                                                        
                                                    '; }
                                                    ?>
                                                 
                                                
                                            </div>

                                        </div> 
                                    </div>
                                    
                                    <div class="col-lg-7 col-md-6">
                                        <div class="product_d_right">
                                            <h1><?=$ten?></h1>
                                             <div class="product_ratting mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"> Write a review </a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati modi culpa voluptates illo, quos magni totam inventore delectus perspiciatis necessitatibus, iure rerum! Deleniti nobis voluptatibus minus, iusto ullam quae esse..</p>
                                            </div>

                                            <div class="content_price mb-15">
                                                <span>$<?=$gia?></span>
                                                <span class="old-price">$<?=$giam_gia?></span>
                                            </div>
                                            <div class="box_quantity mb-20">
                                                <form action="#">
                                                    <label>quantity</label>
                                                </form>
                                                <?php
                                                extract($sp); 
                                          echo'<form action="index.php?act=addtocart" method="post" >
                                          <input type="hidden" name="id" value="'.$id.'">
                                          <input type="hidden" name="ten" value="'.$ten.'">
                                          <input type="hidden" name="hinh" value="'.$hinh.'" >
                                          <input type="hidden" name="gia" value="'.$gia.'">
                                          <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG" style="color:white; background: #018576; border:#018576;" >
                                      </form>  ';
                                                ?>
                                                
                                                      
                                                       
                                            </div>
                                            <div class="product_d_size mb-20">
                                                <label for="group_1">size</label>
                                                <select name="size" id="group_1">
                                                    <option value="1">S</option>
                                                    <option value="2">M</option>
                                                    <option value="3">L</option>
                                                </select>
                                            </div>

                                            <div class="sidebar_widget color">
                                                <h2>Choose Color</h2>
                                                 <div class="widget_color">
                                                    <ul>
                                                        <li><a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                        <li> <a href="#"></a></li>
                                                        <li><a href="#"></a></li>
                                                    </ul>
                                                </div>
                                            </div>                 

                                            <div class="product_stock mb-20">
                                               <p>299 items</p>
                                                <span> In stock </span>
                                            </div>
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--product details end-->


                        <!--product info start-->
                        <div class="product_d_info">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                            <script>
                                            $(document).ready(function(){
                                                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                                                
                                                });
                                            </script>
                            <div class="row" id="binhluan">
                               
                            </div>
                        </div>  
                        <!--product info end-->


                        <!--new product area start-->
                        <div class="new_product_area product_page">
                            <div class="row">
                                <div class="col-12">
                                    <div class="block_title">
                                    <h3>  Sản Phẩm Khác </h3>
                                </div>
                                </div> 
                            </div>
                            <div class="row">
                            <?php
                                             $i=0;
                                            foreach($spnew as $sanpham){
                                                extract($sanpham);
                                                if(($i==2)||($i==5)||($i=8)){
                                                    $mr="";
                                                }else{
                                                    $mr="mr";
                                                }
                                                $link="index.php?act=sanphamct&idsp=$id";
                                                $hinhpath= "./admin/nalika/upload/".$hinh;
                                                    if(is_file($hinhpath)){
                                                        $hinh="<img src='".$hinhpath."'  height='200px'>";
                                                    }else{
                                                        $hinh="no photo";
                                                    }
                                          
                                            echo'<div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single_product" '.$mr.'>
                                                <div class="product_thumb">
                                                   <a href="'.$link.'">'.$hinh.' </a> 
                                                   <div class="img_icone">
                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                   </div>
                                                   <div class="product_action">
                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                   </div>
                                                </div>
                                                <div class="product_content">
                                                    <span class="product_price">$'.$gia.'</span>
                                                    <h3 class="product_title"><a href="'.$link.'">'.$ten.'</a></h3>
                                                </div>
                                                <div class="product_info">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>';
                                        $i+=1;
                                    }
                                            ?>
                                    <!-- <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="templatefree\assets\img\product\product2.jpg" alt=""></a> 
                                               <div class="hot_img">
                                                   <img src="templatefree\assets\img\cart\span-hot.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$40.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Quisque ornare dui</a></h3>
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
                                               <a href="single-product.html"><img src="templatefree\assets\img\product\product3.jpg" alt=""></a> 
                                               <div class="img_icone">
                                                   <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$60.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Sed non turpiss</a></h3>
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
                                               <a href="single-product.html"><img src="templatefree\assets\img\product\product4.jpg" alt=""></a> 
                                               <div class="hot_img">
                                                   <img src="templatefree\assets\img\cart\span-hot.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$65.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Duis convallis</a></h3>
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
                                               <a href="single-product.html"><img src="templatefree\assets\img\product\product6.jpg" alt=""></a> 
                                               <div class="img_icone">
                                                   <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$50.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
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


                        <!--new product area start-->
                        <div class="new_product_area product_page">
                            <div class="row">
                                <div class="col-12">
                                    <div class="block_title">
                                    <h3>   Sản Phẩm Cùng Loại</h3>
                                   
                                </div>
                                
                                </div> 
                            </div>
                            <div class="row">
                                <div class="single_p_active owl-carousel">
                                <?php
                                   foreach($sanphamcl as $value): 
                                                    ?>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="index.php?act=sanphamct&idsp=<?=$value['id'] ;?>"><?php 
                                               $hinhpath= "./admin/nalika/upload/".$value['hinh'];
                                               if(is_file($hinhpath)){
                                                   $hinh="<img src='".$hinhpath."'  >";
                                               }else{
                                                   $hinh="no photo";
                                               } 
                                               echo''.$hinh.'';
                                               ?></a> 
                                               <div class="hot_img">
                                                   <img src="templatefree\assets\img\cart\span-hot.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$40.00</span>
                                                <h3 class="product_title"><a href="index.php?act=sanphamct&idsp=<?=$value['id'] ;?>"><?=$value['ten']?></a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <!-- <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="templatefree\assets\img\product\product4.jpg" alt=""></a> 
                                               <div class="img_icone">
                                                   <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$60.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Sed non turpiss</a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="templatefree\assets\img\product\product3.jpg" alt=""></a> 
                                               <div class="hot_img">
                                                   <img src="templatefree\assets\img\cart\span-hot.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$65.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Duis convallis</a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.html"><img src="templatefree\assets\img\product\product2.jpg" alt=""></a> 
                                               <div class="img_icone">
                                                   <img src="templatefree\assets\img\cart\span-new.png" alt="">
                                               </div>
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">$50.00</span>
                                                <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
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

                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->