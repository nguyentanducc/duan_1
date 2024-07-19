     <?php
     session_start();
     $idpro=$_REQUEST['idpro'];
     include "../../model/pdo.php";
     include "../../model/binhluan.php";
     $dsbl=loadall_binhluan($idpro);
     ?> 
      
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="..\..\templatefree\assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="..\..\templatefree\assets\css\plugin.css">
        <link rel="stylesheet" href="..\..\templatefree\assets\css\bundle.css">
        <link rel="stylesheet" href="..\..\templatefree\assets\css\style.css">
        <link rel="stylesheet" href="..\..\templatefree\assets\css\responsive.css">
      </head>
      <body>
      <div class="row">
                        <div class="col-12">
                                    <div class="product_d_inner">   
                                        <div class="product_info_button">    
                                            <ul class="nav" role="tablist">
                                                
                                                <li>
                                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Bình Luận</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                                <div class="product_info_content">
                                                </div>    
                                            </div>

                                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                                <div class="product_d_table">
                                                   <form action="#">
                                                        
                                                    </form>
                                                </div>
                                                <div class="product_info_content">
                                                </div>    
                                            </div>
                                           
<div>                                            <div class="col-12">
                                    <div class="product_d_inner">   
                                       
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                                <div class="product_info_content">
                                                </div>    
                                            </div>

                                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                                <div class="product_d_table">
                                                   <form action="#">
                                                        
                                                    </form>
                                                </div>
                                                <div class="product_info_content">
                                                </div>    
                                            </div>
                                           
                                   
                                        </div>
                                    </div>     
                                </div>
                                                <div class="product_info_content">
                                                    <table>
                                                    <?php
                                            foreach($dsbl as $value){
                                                echo '<tr><td>' .$value['noidung'].'</td>';
                                                echo '<td>' .$value['tai_khoan'].'</td>';
                                                echo '<td>' .$value['ngaybinhluan'].'</td>
                                                </tr>';

                                            }
                                             ?>

                                                    </table>
                                                </div>
                                                <div class="product_info_inner">
                                                    <div class="product_ratting mb-10">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                         
                                                       
                                                    </div>
                                                    <div class="product_demo">
                                                        <strong></strong>
                                                        <p>That's OK!</p>
                                                    </div>
                                                </div> 
                                                <div class="product_review_form">
                                                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                                        <h2>Bình Luận </h2>
                                                        <p>Hãy bình Luận Trải Nghiệm Của Bạn </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="review_comment">Bạn Bình Luận Tại Đây </label>
                                                                
                                                                
                                                            </div> 
                                                            
                                                        </div>
                                        <input type="hidden" name="idpro" value="<?=$idpro?>">
                                        <input type="text" name="noidung">
                                    <Input type="submit" name="guibinhluan" value ="Gửi bình luận">
                                                     </form>   
                                                     <?php
                                                 if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                                                    $noidung=$_POST['noidung'];
                                                    $idpro=$_POST['idpro'];
                                                   $iduser=$_SESSION['tai_khoan']['id'];
                                                     $ngaybinhluan=date('d/m/Y');
                                                    insert_binhluan($noidung,$ngaybinhluan,$iduser,$idpro);
                                                    Header("Location:".$_SERVER['HTTP_REFERER']);
                                                     }
                                                     ?>
                                                </div>     
                                            </div>
                                         </div>
                                    </div>     
                                </div>
      </body>
      </html>
      