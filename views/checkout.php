<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/htdocs-update/css/general.css">
    <link rel="stylesheet" href="/htdocs-update/css/mybag.css">
</head>


<body>

<?php include dirname(__DIR__).'/views/common/header.php'; ?>
<h2>Thanh toán giỏ hàng</h2>
<div class=" container d-flex justify-content-center align-items-center pt-5 pb-5 accelerator"> 
    <form action="" method="POST">
        
        <table id="cart" class="table table-hover table-condensed" style="background: rgb(223,255,255); background: linear-gradient(90deg, rgba(223,255,255,1) 10%, rgba(251,255,216,1) 76%); "> 
            <thead>
                <tr> 
                    <th >Tên sản phẩm</th> 
                    <th >Size</th>
                    <th>Giá</th> 
                    <th >Số lượng</th> 
                    
                </tr> 
            </thead> 

            <tbody>
                <?php
                    foreach ($details as $index => $detail) {
                        $product = $products[$index];
                        $subtotal = $detail->amount * $detail->price;
                        echo " <tr> 
                            <td data-th='Product'>
                                <div class='row'> 
                                    <div class='col-sm-3 hidden-xs'>
                                        <img src=$product->thumbnail alt='Sản phẩm 1' class='img-responsive' width='100'></div> 
                                    <div class='col-sm-10'>
                                        <h4 class='nomargin'>$product->name</h4> 
                                            
                                    </div> 
                                </div> 
                            </td> 
                            <td data-th-'Size'>$product->size</td>
                            <td data-th='Price'>$detail->price VND</td> 
                            <td data-th='Quantity'>$detail->amount</td> 
                            <td data-th='Subtotal'>$subtotal đ</td> 
                        </tr> ";
                    }
                ?>
            </tbody>
            <tfoot> 
                <tr> 
                    <td class="hidden-xs text-center"><strong><?php echo "Tổng tiền $total đ" ?></strong></td> 
                </tr> 
            </tfoot> 
        </table>
        <input type="hidden" name='action' value='checkout'>
        <div class="form-group">
          <label for="">Địa chỉ</label>
          <input type="text" name="address" id="address" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Nhập địa chỉ giao hàng</small>

                </div>
        <button type="submit" class="btn btn-primary">Thanh toán</button>

    </form>
</div>

<?php include dirname(__DIR__).'/views/common/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/htdocs-update/script/common.js"></script>
<script src="/htdocs-update/script/shopping-cart.js"></script>
</body>

</html>