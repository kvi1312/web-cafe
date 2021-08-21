<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/htdocs-update/css/general.css">
    <link rel="stylesheet" href="/htdocs-update/css/homepage.css">
    
</head>
<body>


    <div id="notificationContainer" class="notification">

        <!-- <div  class="alert alert-success alert-dismissible fade show mt-4 mr-4" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
    </div>

    
    
    <?php include(dirname(__DIR__).'/views/common/header.php'); ?>

    <!-- Content--> 


    <main class="container-fluid bg">
    
    <?php if (isset($user)) echo"<p> WELCOME  $user->fullname!</p>"; ?>
        <div class="row">
            <div class="col-md-2 left mt-4 " >
                <h3>Loại Mặt Hàng:</h3>

                <ul class="list-group mb-2 ml-2 brand-list ">
                    
                <?php
                        $checked = !isset($cagetory_code)? 'checked': '';
                        echo "<a href='/htdocs-update/index.php'><li class='list-group-item check-cl'>
                            <input type='checkbox' class='disabled-checkbox' $checked >
                            Tất cả
                        </li></a>";
                    ?>
                    <?php
                        foreach ($list_cagetory as $cagetory) {
                            $checked = (isset($cagetory_code) && $cagetory->code == $cagetory_code)? 'checked': '';
                            echo "<a href='/htdocs-update/index.php?cagetory=$cagetory->code'><li class='list-group-item check-cl'>
                                <input type='checkbox' class='disabled-checkbox' $checked >
                                $cagetory->name
                            </li></a>";
                        }
                    ?>

                <!-- <h3>Sắp Xếp Theo:</h3>
                <ul class="list-group mb-2 ml-2 ">
                    <li class="list-group-item check-cl">
                        <input type="radio" name="a" id="">
                        Giá Thành
                    </li>
                    <li class="list-group-item check-cl">
                        <input type="radio" name="a" id="">
                        Bán Chạy
                    </li>
                
                </ul> -->

            </div>

            <div class="col-md-10 right container pt-4">
                <div id="product-grid" class="row">

                    <?php

                        foreach ($list_product as $product) {
                            echo "<div class='col-lg-4 col-sm-6 item-item mb-3 product-item '>
                            <a href='/htdocs-update/product.php?id=$product->id'> 
                                <div class='card'>
                                    <img class='card-img-top pic' src='$product->thumbnail' alt='Card image cap'>
                                    <div class='card-body'>
                                    <h5 class='card-title'>$product->name</h5>
                                    <p class='card-text'>$product->description</p>
                                    <p class='card-text'>$product->price</p>
                                    <button productId='$product->id' class='btn btn-primary btn-add-to-cart'>Thêm vào giỏ</button>
                                    </div>
                                </div>
                            </a> 
                            </div>";
                        }

                    ?>

                
                </div>   
                <nav aria-label="Page navigation example" class="d-flex justify-content-center mb-3">
                    <ul class="pagination">
                        <?php
                            $cagetory_param = isset($cagetory_code)? "cagetory=$cagetory_code": "";
                            $disabled = ($page == 1)? 'disabled': '';
                            $prev_page = $page-1;
                            echo "<li class='page-item $disabled'>
                                <a class='page-link' href='/htdocs-update/index.php?$cagetory_param&page=$prev_page&limit=$limit' aria-label='Previous'>
                                    <span aria-hidden='true'>«</span>
                                    <span class='sr-only'>Previous</span>
                                </a>
                            </li>";

                            if ($total_page > $NB_PAGE_SHOW) {
                                $temp_nb_show = (int)($NB_PAGE_SHOW / 2);
                                for ($i = 1; $i <= $temp_nb_show; $i++) {
                                    $active = ($i == $page)? 'active': '';
                                    echo "<li class='page-item $active'><a class='page-link' href='/htdocs-update/index.php?$cagetory_param&page=$i&limit=$limit'>$i</a></li>";    
                                }
                                if ($page > $temp_nb_show && $page <= $total_page - $temp_nb_show) {
                                    echo "<li class='page-item disabled'><a class='page-link' href='#'>...</a></li>";    
                                    $temp_mid_nb_show = (int)($temp_nb_show / 2);
                                    for ($i = $page - $temp_mid_nb_show; $i < $page ; $i++) {
                                        $active = ($i == $page)? 'active': '';
                                        echo "<li class='page-item $active'><a class='page-link' href='/htdocs-update/index.php?$cagetory_param&page=$i&limit=$limit'>$i</a></li>";    
                                    }       
                                    $active = ($i == $page)? 'active': '';
                                    echo "<li class='page-item $active'><a class='page-link' href='/htdocs-update/index.php?$cagetory_param&page=$page&limit=$limit'>$page</a></li>";    
                                    for ($i = $page + 1; $i <= $page + $temp_mid_nb_show; $i++) {
                                        $active = ($i == $page)? 'active': '';
                                        echo "<li class='page-item $active'><a class='page-link' href='/htdocs-update/index.php?$cagetory_param&page=$i&limit=$limit'>$i</a></li>";    
                                    }
                                }
                                echo "<li class='page-item disabled'><a class='page-link' href='#'>...</a></li>";    
                                for ($i = $total_page - $temp_nb_show + 1; $i <= $total_page ; $i++) {
                                    $active = ($i == $page)? 'active': '';
                                    echo "<li class='page-item $active'><a class='page-link' href='/htdocs-update/index.php?$cagetory_param&page=$i&limit=$limit'>$i</a></li>";    
                                }
                            } else {
                                for ($i = 1; $i <= $total_page; $i++) {
                                    $active = ($i == $page)? 'active': '';
                                    echo "<li class='page-item $active'><a class='page-link' href='/htdocs-update/index.php?$cagetory_param&page=$i&limit=$limit'>$i</a></li>";    
                                }
                            }
                        
                            
                            $disabled = ($page == $total_page)? 'disabled': '';
                            $next_page = $page+1;
                            
                            echo "<li class='page-item $disabled'>
                                <a class='page-link' href='/index.php?$cagetory_param&page=$next_page&limit=$limit' aria-label='Next'>
                                    <span aria-hidden='true'>»</span>
                                    <span class='sr-only'>Next</span>
                                </a>
                            </li>";
                        ?>
                    </ul>
                </nav>
            </div>
    </main>
    <!-- End Content -->

    
    <?php include(dirname(__DIR__).'/views/common/footer.php'); ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/htdocs-update/script/common.js"></script>
    <script src="/htdocs-update/script/product-list.js"></script>
    <script>
        $(function(){
            $('.disabled-checkbox').click(function(event) {
                event.preventDefault();
            });
        });
    </script>
</body>
</html>