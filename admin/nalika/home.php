<!-- Mobile Menu end -->
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
                                    <h2>Quản Lí </h2>
                                    <p>Chào mừng <span class="bread-ntd"> Admin</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                    class="btn"><i class="icon nalika-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                        <h4 class="text-left text-uppercase"><b>Tổng số đơn hàng</b></h4>
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="col-xs-3 mar-bot-15 text-left">
                                <label class="label bg-green">30% <i class="fa fa-level-up"
                                        aria-hidden="true"></i></label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <?php 
                                    foreach ($tongsobill as $tong) {
                                    extract($tong);
                                    echo '<h2 class="text-right no-margin">'.$tongsobill.'</h2>';
                                    }
                                     ?>
                            </div>
                        </div>
                        <div class="progress progress-mini">
                            <div style="width: 78%;" class="progress-bar bg-green"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                        <h4 class="text-left text-uppercase"><b>Tổng sản phẩm</b></h4>
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="text-left col-xs-3 mar-bot-15">
                                <label class="label bg-red">15% <i class="fa fa-level-down"
                                        aria-hidden="true"></i></label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                            <?php 
                                    foreach ($demsp as $so) {
                                    extract($so);
                                    echo '<h2 class="text-right no-margin">'.$sosp.'</h2>';
                                    }
                                     ?>
                            </div>
                        </div>
                        <div class="progress progress-mini">
                            <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                        <h4 class="text-left text-uppercase"><b>Doanh Thu</b></h4>
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="text-left col-xs-3 mar-bot-15">
                                <label class="label bg-blue">50% <i class="fa fa-level-up"
                                        aria-hidden="true"></i></label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                            <?php 
                    
                        echo '<h2 class="text-right no-margin">'.$tong.'</h2>';
                    
                ?>
                                
                            </div>
                        </div>
                        <div class="progress progress-mini">
                            <div style="width: 60%;" class="progress-bar bg-blue"></div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject text-uppercase"><b>Danh mục sản phẩm</b></span>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-grey active">
                                            <input type="radio" name="options" class="toggle" id="option1"
                                                checked="">Hôm Nay</label>
                                        <label class="btn btn-grey">
                                            <input type="radio" name="options" class="toggle" id="option2">Tuần</label>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div id="myChart" style="width:100%; width:900px; height:500px; align-items: center"></div>
                    <!-- <div id="curved-line-chart" class="flot-chart-sts flot-chart curved-chart-statistic"></div> -->
                </div>
            </div>
           
                
        </div>
    </div>
</div>
<div class="traffic-analysis-area">
    <div class="container-fluid">

    </div>
</div>
<div class="product-new-list-area">

</div>
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject text-uppercase"><b>Thống Kê Đơn Hàng Theo :</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp">
                                    <a href="#" class="btn btn-dark-blue btn-circle active tip-top"
                                        data-toggle="tooltip" title="Upload">
                                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip"
                                        title="Refresh">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-blue-grey btn-circle active tip-top"
                                        data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Chart" style="width:100%; max-width:1600px; height:500px;"></div>
                    <!-- <div id="line-chart" class="flot-chart flot-chart-sts line-chart-statistic"></div> -->
                </div>
            </div>

        </div>
    </div>
</div>
