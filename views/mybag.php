<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gio Hang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/htdocs-update/css/general.css">
    <link rel="stylesheet" href="/htdocs-update/css/mybag.css">
</head>
<body>

    <?php include dirname(__DIR__).'/views/common/header.php'; ?>

<div class="container d-flex justify-content-center align-items-center pt-5 pb-5 accelerator"> 
    <table id="cart" class="table table-hover table-condensed" style="background: rgb(223,255,255); background: linear-gradient(90deg, rgba(223,255,255,1) 10%, rgba(251,255,216,1) 76%);"> 
        <thead > 
            <tr> 
                <th style="width:50%">Tên sản phẩm</th>
                <th style="width:10">Size</th>
                <th style="width:10%">Giá</th> 
                <th style="width:8%">Số lượng</th> 
                <th style="width:12%" class="text-center">Thành tiền</th> 
            </tr> 
        </thead> 

        <tbody>
        <?php
            if (isset($details)) {
                foreach ($details as $index => $detail) {
                    $product = $products[$index];
                    $subtotal = $detail->amount * $detail->price;
                    echo " <tr> 
                        <td data-th='Product'>
                            <div class='row'> 
                                <div class='col-sm-2 hidden-xs'>
                                    <img src='$product->thumbnail' alt='Sản phẩm 1' class='img-responsive' width='80px'></div> 
                                <div class='col-sm-10'>
                                    <h4 class='nomargin'>$product->name</h4>   
                                </div> 
                            </div> 
                        </td>
                        <td data-th='Size'>$product->size</td>
                        <td data-th='Price'>$detail->price đ</td> 
                        <td data-th='Quantity'><input productId='$detail->productId' class='form-control text-center amount-input' value='$detail->amount' type='number' min=1></td> 
                        <td data-th='Subtotal' class='text-center'>$subtotal đ</td> 
                        <td class='actions' data-th=''>
                            <button productId='$detail->productId' class='btn btn-danger btn-sm btn-delete'><i class='fa fa-trash'></i></button>
                        </td> 
                    </tr> ";
                }
            } else {
                echo "<tr>
                    <td>Giỏ hàng rỗng</td>
                </tr>";
            }
        ?>
             
        </tbody>
        
        <tfoot> 

            <tr> 
                <td><a href="index.php" class="btn btn-primary"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td> 
                <td colspan="2" class="hidden-xs"></td> 
                <td class="hidden-xs text-center"><strong><?php if (isset($total)) echo "Tổng tiền $total đ"; ?></strong></td> 
                <td><a href="\htdocs-update\checkout.php" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </td> 
            </tr> 
        </tfoot> 
    </table>
</div>
<?php include dirname(__DIR__).'/views/common/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/htdocs-update/script/common.js"></script>
<script src="/htdocs-update/script/shopping-cart.js"></script>
</body>
</html>