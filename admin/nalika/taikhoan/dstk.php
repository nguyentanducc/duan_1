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
												<h2>Sửa Tài Khoản Khách Hàng</h2>
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
<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>DANH SÁCH TÀI KHOẢN</h4>
                            <div class="add-product">
                                <a href="product-edit.html">THÊM TÀI KHOẢN</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Hình</th>
                                    <th>Mã Tài Khoản</th>
                                    <th>Họ Tên Khách Hàng</th>
                                    <th>Tên Tài Khoản</th>
                                    <th>Trạng Thái</th>
                                    <th>Mật Khẩu</th>
                                    <th>Email</th>
                                    <th>Địa Chỉ</th>
                                    <th>Điện thoại</th>
                                    <th>Vai Trò</th>
                                    <th>Chức Năng</th>
                                </tr>
                                <?php
            foreach( $listtaikhoan as $taikhoan){
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;
                $hinhpath= "./upload/".$hinh;
                if(is_file($hinhpath)){
                    $hinh="<img src='".$hinhpath."' >";
                }else{
                    $hinh="no photo";
                }
                echo '<tr>
                <td>'.$hinh.'</td>
                <td>
                '.$id.'</td>
                <td>'.$ten.'</td>
                <td>'.$tai_khoan.'</td>
                <td>
                    <button class="pd-setting">'.$trang_thai.'</button>
                </td>
                <td>'.$mat_khau.'</td>
                <td>'.$email.'</td>
                <td>'.$dia_chi.'</td>
                <td>'.$dien_thoai.'</td>
                <td>'.$id_role.'</td>
                <td>
                  <a href="'.$suatk.'" <button data-toggle="tooltip" title="Sửa" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                  <a href="'.$xoatk.'" <button data-toggle="tooltip" title="Xóa" class="pd-setting-ed" onclick="return confirm(\'Bạn có chắc muốn xóa\')"><i class="fa fa-trash-o" aria-hidden="true" ></i></button></a>
                </td>
            </tr>';
            }
                ?>          
                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>