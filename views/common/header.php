<!-- Header -->

<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between" style="background: #C1D3FE;" >
    <a class="navbar-brand" href="/htdocs-update/index.php" >
        <img src="/htdocs-update/assert/lg.png" class="web-logo" alt="web logo"> 
    </a>
    <div class="d-flex align-items-center">
        <!-- Menu Bar -->
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item active mg-r">
                <a class="nav-link font-size" href="/htdocs-update/index.php" style="color:#3a0ca3;">TRANG CHỦ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mg-r">
                <a class="nav-link font-size" href="#" style="color:#3a0ca3;">KHUYẾN MÃI</a>
            </li>
            <li class="nav-item mg-r">
                <a class="nav-link font-size" href="#" style="color:#3a0ca3;">CHÍNH SÁCH</a>
            </li>
            </li>
        </ul>

        <!-- End Menu Bar -->
    </div>
    <div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
            <div class="searchbar mr-3">
                <input class="search_input" type="text" name="" placeholder="Search...">
                <a id='search-bar-btn' href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    


                    <?php
                     if(isset($user)){

                        echo "<a href='/htdocs-update/view-cart.php' class='btn btn-primary my-2 my-sm-0' type='button'><i class='fas fa-shopping-cart'></i></a>
                        <a href='/htdocs-update/logout.php' class='btn btn-danger my-2 my-sm-0' type='button'><i class='fas fa-sign-out-alt'></i></a>";

                        }else{
                          echo"<a href='/htdocs-update/login.php' class='btn btn-primary my-2 my-sm-0 mr-3' type='button'>Đăng Nhập</a>
                            <a href='/htdocs-update/login.php?action=register#' class='btn btn-info my-2 my-sm-0' type='button'>Đăng Ký</a>";
                     }
                    ?>



                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- End Header -->