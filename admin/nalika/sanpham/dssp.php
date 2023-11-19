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
												<h2>Product Edit</h2>
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
                            <h4>DANH SÁCH SẢN PHẨM</h4>
                            <div class="add-product">
                            <a href="index.php?act=themsp">THÊM SẢN PHẨM</a>
                            </div>
                            <form action="index.php?act=dssp" method="post">
                                <form action="" method="post">
                                <input type="text" name="keyw" style="width:200px;">

                                    <select name="iddm" >
                                        <option value="0" selected> Tất Cả</option>
                                        <?php 
                                    foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$ten.'</option>';
                                    }
                                    ?> 
                                    </select>
                                    <input type="submit"  name ="listok"value="Tìm Kiếm">
                                </form>
                            <table>
                                <tr>
                                    <th>Hình</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Trạng Thái</th>
                                    <th>Số Lượng</th>
                                    <th>Khuyến Mãi</th>
                                    <th>Giá</th>
                                    <th>Mã Loại</th>
                                    <th>Mẫu Mã</th>
                                    <th>Chức Năng</th>
                                </tr>
                                <?php
            foreach($listsanpham as $sanpham){
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id;
                $xoasp="index.php?act=xoasp&id=".$id;
                $ctsp="index.php?act=ctsp&id=".$id;
                $hinhpath= "./upload/".$hinh;
                if(is_file($hinhpath)){
                    $hinh="<img src='".$hinhpath."' >";
                }else{
                    $hinh="no photo";
                }
                 echo '<tr>
                 <td>'.$hinh.'</td>
                 <td>'.$ten.'</td>
                 <td>
                     <button class="pd-setting">'.$trang_thai.'</button>
                 </td>
                 <td>'.$soluong.'</td>
                 <td>$'.$giam_gia.'</td>
                 <td>$'.$gia.'</td>
                 <td>'.$id_danhmuc.'</td>
                
                 <td>'.$id_phanloai.'</td>
                 <td>
                     <a href="'.$suasp.'"<button data-toggle="tooltip" title="Sửa" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><a/>
                     <a href="'.$xoasp.'" <button data-toggle="tooltip" title="Xóa" class="pd-setting-ed" onclick="return confirm(\'Bạn có chắc muốn xóa\')"><i class="fa fa-trash-o" aria-hidden="true"></i></button><a/>
                     <a href="'.$ctsp.'"<button data-toggle="tooltip" title="Xem Sản Phẩm" class="pd-setting-ed" >Xem Chi Tiết</button><a/>
                 </td>
             </tr>';   
            }
                ?>
                                
                                </form>
                                <!-- <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Sản Phẩm 2</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>60</td>
                                    <td>$1020</td>
                                    <td>In Stock</td>
                                    <td>$17</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Sản Phẩm 3</td>
                                    <td>
                                        <button class="ds-setting">Disabled</button>
                                    </td>
                                    <td>70</td>
                                    <td>$1050</td>
                                    <td>Low Stock</td>
                                    <td>$15</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                    <td>Sản Phẩm 4</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>120</td>
                                    <td>$1440</td>
                                    <td>In Stock</td>
                                    <td>$12</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Sản Phẩm 5</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>30</td>
                                    <td>$540</td>
                                    <td>Out Of Stock</td>
                                    <td>$18</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Sản Phẩm 6</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>400</td>
                                    <td>$4000</td>
                                    <td>In Stock</td>
                                    <td>$10</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr> -->
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