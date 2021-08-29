<!doctype html>
<html lang="en">
  <head>
  
    <title>Trang chủ - Tổ chức Giáo dục FPT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <nav class="nav navbar navbar-expand-lg">
        <div class="container">
            <!-- <div class="col-lg-2"> -->
                
                <a class="navbar-brand" href="#">
                    <img src="./images/2017-FE-White-Min.webp" width="200px" alt="">
                </a>
            <!-- </div> -->
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <div class="col-lg-10"> -->
            <div class="row">
                <!-- <div class="row no-flex"> -->
                <div class="col col-lg-12 d-flex align-items-center">
                    <form class="navbar-form navbar-right ms-auto" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập để tìm kiếm">
                        <span class="input-group-text" id="basic-addon2">
                            <i class="search-icon fa fa-search" aria-hidden="true"></i>
                        </span>
                        </div>
                    </form>
                    <!-- <a style="background-color: #e9ecef;
                        padding: 4px 4px 8px 4px;
                        border-radius: 4px;
                        line-height: 24px;
                        margin-right: 12px;
                        color :#4e4e4e;"
                        href="login.php">Đăng nhập
                    </a>
                     -->
                    <?php if(isset($_COOKIE["user"])){?>
                        <?php echo $_COOKIE["user"]; ?> /
                            <a style="  
                                background-color: #e9ecef;
                                padding: 4px 4px 8px 4px;
                                border-radius: 4px;
                                line-height: 24px;
                                margin-right: 12px;
                                color :#4e4e4e;" href="logout.php">Đăng xuất
                            </a>
                    <?php 
                    }
                    else {
                    ?>
                        <a style="  
                            background-color: #e9ecef;
                            padding: 4px 4px 8px 4px;
                            border-radius: 4px;
                            line-height: 24px;
                            margin-right: 12px;
                            color :#4e4e4e;" href="./admin/login.php">Đăng nhập
                        </a>
                    <?php 
                    }
                    ?>
                    
                    
                </div>

                <!-- <div class="row no-flex"> -->
                    <div class="col col-lg-12 ms-auto">
                        <div class="collapse navbar-collapse" id="navmenu">
                            <ul class="navbar-nav navbar-right menu">
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">Về FPT Education</a>
                                </li>
                                <li class="nav-item">
                                    <a href="news.php" class="nav-link">Tin Tức</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Trải nghiệm FPT Edu</a>
                                  </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Trường học trải nghiệm</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Tài nguyên thương hiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Tuyển dụng</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Liên hệ</a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </nav>
    