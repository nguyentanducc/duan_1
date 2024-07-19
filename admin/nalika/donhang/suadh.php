<?php
if (is_array($hoadon)) {
    extract($hoadon);
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
												<h2>Sửa Đơn Hàng</h2>
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
                    <form action="index.php?act=updatedh" method="POST">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Sửa đơn hàng</a></li>
                                    <!-- <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Hình Ảnh</a></li> -->
                                    <!-- <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                <label class="ten">Mã đơn hàng:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="id" value="EKO-<?=$hoadon['id']?>"  >
                                                    </div>
                                                    <label class="ten">Khách hàng:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <label class="ten">Tên Khách hàng:</label><br><input type="text" class="form-control" value="<?=$hoadon['ten']?>" >
                                                        <label class="ten">Email:</label><br><input type="text" class="form-control" value="<?=$hoadon['email']?>" >
                                                        <label class="ten">Địa Chỉ:</label><br><input type="text" class="form-control" value="<?=$hoadon['dia_chi']?>" >
                                                        <label class="ten">Số Điện Thoại:</label><br><input type="text" class="form-control" value="<?=$hoadon['dien_thoai']?>" >
                                                    </div>
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Thuế">
                                                    </div> -->
                                                    <label class="ten">Ngày đặt hàng:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" value="<?=$hoadon['ngay_mua']?>" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                <label class="ten">Tổng tiền đơn hàng:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" value="<?=$hoadon['tong_tien']?>" >
                                                    </div>
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Khuyến Mãi">
                                                    </div> -->
                                                    <label class="ten">Tình trạng đơn hàng:</label>
                                                     <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <select name="trang_thai" class="form-control pro-edt-select form-control-primary">
                                                            <?php 
                                                               if ($hoadon['trang_thai']!="3"&&$hoadon['trang_thai']!="4") {
                                                                        echo '<option value="0">Đơn hàng mới</option>
                                                                        <option value="1">Đang xử lý</option>
                                                                        <option value="2">Đang giao</option>
                                                                        <option value="3" >Hoàn tất</option>
                                                                        <option value="4" >Đơn đã hủy</option>
                                                                        ';
                                                                        
                                                             } else{
                                                                echo '<option value="0" disabled >Đơn hàng mới</option>
                                                                        <option value="1" disabled >Đang xử lý</option>
                                                                        <option value="2" disabled>Đang giao</option>
                                                                        <option value="3" selected>Hoàn tất</option>
                                                                        ';
                                                             }
                                                                
                                                            ?>
														</select> 
                                                        <!-- <input type="text" class="form-control" name="trang_thai" value="<?=$hoadon['trang_thai']?>" placeholder="tình trạng đơn hàng"> -->
                                                    </div> 
                                                    <label class="ten">Trạng thái thanh toán:</label>
                                                     <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <select name="tinhtrangtt" class="form-control pro-edt-select form-control-primary">
                                                             <?php 
                                                             if ($hoadon['tinhtrangtt']!="1") {
                                                                        echo '<option value="0">Chưa thanh toán</option>
                                                                        <option value="1">Đã thanh toán</option>';
                                                                        
                                                             } else{
                                                                echo '  <option value="0" disabled>Chưa thanh toán</option>
                                                                        <option value="1" selected>Đã thanh toán</option>';
                                                             }
                                                            ?> 
														</select> 
                                                        
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                <div class="text-center custom-pro-edt-ds"><input type="hidden" name="id" value="<?=$hoadon['id']?>">
                                                    <input type="submit" value="Cập Nhật" name="capnhat" class="btn btn-ctl-bt waves-effect waves-light m-r-10">
														
                                                    <input type="reset" value="NHẬP LẠI" class="btn btn-ctl-bt waves-effect waves-light">
														
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .ten{
                color: #fff;
            }
        </style>