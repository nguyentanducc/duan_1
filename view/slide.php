<!--banner slider start-->
<div class="banner_slider slider_1">
    
                                        <div class="slider_active owl-carousel">
                                            <?php
                                            foreach($listbn as $bn){
                                                extract($bn);
                                                $hinhpath= "./admin/nalika/upload/".$hinh;
                                                    if(is_file($hinhpath)){
                                                        $hinh1="<img src='".$hinhpath."'>";
                                                    }else{
                                                        $hinh1="no photo";
                                                    }
                                            echo'
                                            <div class="single_slider" style="background-image: url('.$hinhpath.')">
                                            <div class="slider_content">
                                            <div class="slider_content_inner">  
                                                <h1>Super Sale</h1>
                                                <p>Black fride đang đến hãy mua sắm ngay nào. </p>
                                                <a href="#">Mua Sắm Ngay Bây giờ</a>
                                            </div>     
                                        </div>    
                                    </div>
                                    
                                    '; }
                                            ?>    
                                            
                                        </div>
                                    </div> 
                                    <!--banner slider start-->