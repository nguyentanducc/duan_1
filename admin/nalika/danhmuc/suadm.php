<?php
    if(is_array($dm)){
        extract($dm);
    }
    $hinhpath= "./upload/".$hinh;
                if(is_file($hinhpath)){
                    $hinh="<img src='".$hinhpath."' width='100px' height='100px'>";
                }else{
                    $hinh="no photo";
                }
    ?>

<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>SỬA LOẠI HÀNG HÓA</h2>
												<p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
<div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Sửa Loại Hàng Hóa</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
                                                <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true" ></i></span>
                                                        <input type="text" class="form-control" placeholder="Không Nhập"  name="maloai">
                                                    </div>    
                                                <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Nhập Vào Tên Loại" name="tenloai" value="<?=$dm['ten']?>">
                                                    </div>
                                                <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="file" class="form-control"  name="hinh" ><?=$hinh?>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                               
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                <input type="hidden" name="id" value="<?=$dm['id']?>">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10"  value="Cập Nhật" name="capnhat">Cập Nhật
														</button>
                                                    <button type="reset" class="btn btn-ctl-bt waves-effect waves-light" value="Nhập Lại">Hủy Bỏ
														</button>
                                                        
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <h2 style="color:blue"><?php 
                                                  if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                                                        ?>   </h2>
                                        </form>                           
                        </div>
                    </div>
                </div>
                
           
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="card-block">
                                                        
                                                        <div class="m-t-10">
                                                            
                                                            <div class="stars stars-example-css detail-stars">
                                                                
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
                                                             