<?php
$params = path_urls();
$dataUsers = $is_login_tier_3->is_user();
if (!$dataUsers) {
    require $pathFolder."/public/users/guest.php";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en" data-footer="true" data-placement="horizontal" data-behaviour="unpinned" data-layout="fluid" data-radius="rounded" data-color="dark-red" data-navcolor="default" data-show="true" data-dimension="desktop">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Admin Panel | Sofin AI</title>
        <meta name="description" content="An empty page with a fluid vertical layout.">
        
        <!-- Favicon Links -->
        <?php 
        $faviconSizes = [57, 60, 72, 76, 114, 120, 144, 152, 196, 96, 32, 16, 128];
        foreach ($faviconSizes as $size) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="' . $size . 'x' . $size . '" href="' . asset("/style/acom-all/img/favicon/apple-touch-icon-{$size}x{$size}.png") . '">';
        }
        ?>
        <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-196x196.png") ?>" sizes="196x196">
        <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-96x96.png") ?>" sizes="96x96">
        <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-32x32.png") ?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-16x16.png") ?>" sizes="16x16">
        <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-128.png") ?>" sizes="128x128">
        
        <!-- Microsoft Application Meta Tags -->
        <meta name="application-name" content="&nbsp;">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="<?= asset("/style/acom-all/img/favicon/mstile-144x144.png") ?>">
        <meta name="msapplication-square70x70logo" content="<?= asset("/style/acom-all/img/favicon/mstile-70x70.png") ?>">
        <meta name="msapplication-square150x150logo" content="<?= asset("/style/acom-all/img/favicon/mstile-150x150.png") ?>">
        <meta name="msapplication-wide310x150logo" content="<?= asset("/style/acom-all/img/favicon/mstile-310x150.png") ?>">
        <meta name="msapplication-square310x310logo" content="<?= asset("/style/acom-all/img/favicon/mstile-310x310.png") ?>">
        
        <!-- Font Links -->
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?= asset("/style/acom-all/font/CS-Interface/style.css") ?>">
        <link rel="stylesheet" href="<?= asset("/style/acom-all/css/vendor/bootstrap.min.css") ?>">
        <link rel="stylesheet" href="<?= asset("/style/acom-all/css/vendor/OverlayScrollbars.min.css") ?>">
        <link rel="stylesheet" href="<?= asset("/style/acom-all/css/styles.css") ?>">
        <link rel="stylesheet" href="<?= asset("/style/acom-all/css/main.css") ?>">


        <!--font-awesome-6.5.1-->
        <link rel="stylesheet" href="<?= asset("/font-awesome-6.5.1/css/all.css") ?>">


        <!-- https://kamranahmed.info/toast -->
        <link rel="stylesheet" href="<?= asset("/jquery-toast/src/jquery.toast.css") ?>">
        <!-- Stylesheets -->
        <?php
        if (file_exists($pathFileCss)) {
            include $pathFileCss;
        }
        ?>


        <style>
            .logo-container {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
                position: relative;
            }
            
            .sofin-logo {
                position: relative;
                font-weight: 700;
                font-size: 24px;
                color: #ffffff;
                text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
                display: flex;
                align-items: center;
            }
            
            .logo-text {
                letter-spacing: 1px;
            }
            
            .logo-ai {
                margin-left: 5px;
                font-size: 18px;
                background: linear-gradient(135deg, #ffffff, #f0f0f0);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
                position: relative;
                padding: 0 5px;
            }
            
            .logo-ai::before {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 100%;
                height: 1px;
                background: linear-gradient(90deg, transparent, #ffffff, transparent);
                animation: glow 2s infinite;
            }
            
            .logo-particles {
                position: absolute;
                top: -10px;
                left: 0;
                right: 0;
                bottom: -10px;
                pointer-events: none;
            }
            
            @keyframes glow {
                0%, 100% { opacity: 0.5; }
                50% { opacity: 1; }
            }





        </style>

        <!-- Loader Script -->
        <script src="<?= asset("/style/acom-all/js/base/loader.js") ?>"></script>
    </head>

    <body>
        <div id="root">
            <div id="nav" class="nav-container d-flex">
                <div class="nav-content d-flex">
                    <div class="logo position-relative">
                        <a href="<?=set_route_to_link(["public","home","index"])?>">
                            <!-- <div class="img"></div> -->
<div class="logo-container">
    <div class="sofin-logo">
        <span class="logo-text">Sofin</span>
        <span class="logo-ai">AI</span>
        <div class="logo-particles"></div>
    </div>
</div>



                        </a>
                    </div>
                    
                    <div class="user-container d-flex">
                        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="profile" alt="profile" src="<?= asset("/style/acom-all/img/profile/profile-9.webp") ?>">
                            <div class="name"><?=$dataUsers->email?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end user-menu wide">
                            
                           

                            <div class="row mb-1 ms-0 me-0">
                                <div class="col-12 p-1 mb-3 pt-3"><div class="separator-light"></div></div>
                                <div class="col-6 ps-1 pe-1">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="<?=set_route_to_link(["public","profiles","index"])?>">
                                                <i data-acorn-icon="gear" class="me-2" data-acorn-size="17"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 pe-1 ps-1">
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <a href="javascript:;" onclick="logout()">
                                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                                <span class="align-middle">Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled list-inline text-center menu-icons">
                        <!-- <li class="list-inline-item">
                            <a href="#" id="pinButton" class="pin-button">
                                <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                                <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
                            </a>
                        </li> -->
                        
                        <!-- <li class="list-inline-item">
                            <a href="#" id="colorButton">
                                <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                                <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
                            </a>
                        </li> -->
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                                <div class="position-relative d-inline-flex">
                                    <i data-acorn-icon="bell" data-acorn-size="18"></i>
                                    <span class="position-absolute notification-dot rounded-xl"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                                <div class="scroll">
                                    <ul class="list-unstyled border-last-none">
                                        <!-- <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                            <img src="<?= asset("/style/acom-all/img/profile/profile-1.webp") ?>" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
                                            <div class="align-self-center">
                                                <a href="#">Joisse Kaycee just sent a new comment!</a>
                                            </div>
                                        </li>
                                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                            <img src="<?= asset("/style/acom-all/img/profile/profile-2.webp") ?>" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="...">
                                            <div class="align-self-center">
                                                <a href="#">New order received! It is total $147,20.</a>
                                            </div>
                                        </li> -->
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="menu-container flex-grow-1">
                        <ul id="menu" class="menu">


                            <li>
                                <a href="<?=set_route_to_link(["public","edu_tier","tier_4"])?>">
                                    <i class="fa-solid fa-book-open me-2"></i>
                                    <span class="label">Dashboard</span>
                                </a>
                            </li>

                            

                            
                            


                        </ul>
                    </div>
                    <div class="mobile-buttons-container">
                        <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                            <i data-acorn-icon="menu-dropdown"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                        <a href="#" id="mobileMenuButton" class="menu-button">
                            <i data-acorn-icon="menu"></i>
                        </a>
                    </div>
                </div>
                <div class="nav-shadow"></div>
            </div>
            <main>
                <div class="container">




                    
                    
                    <?php

                    require $pathFileIndex;

                    ?>


                </div>
            </main>
            <footer>
                <div class="footer-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p class="mb-0 text-muted text-medium">@2025 Sofin - AI.</p>
                            </div>
                            <div class="col-sm-6 d-none d-sm-block">
                                <!-- <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                                    <li class="breadcrumb-item mb-0 text-medium">
                                        <a href="#" target="_blank" class="btn-link">Review</a>
                                    </li>
                                    <li class="breadcrumb-item mb-0 text-medium">
                                        <a href=#" target="_blank" class="btn-link">Purchase</a>
                                    </li>
                                    <li class="breadcrumb-item mb-0 text-medium">
                                        <a href="#" target="_blank" class="btn-link">Docs</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
        <!-- Settings Modal -->
        <div class="modal fade modal-right scroll-out-negative" id="settings" data-bs-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="settings" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable full" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Theme Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="scroll-track-visible">
                            <div class="mb-5" id="color">
                                <label class="mb-3 d-inline-block form-label">Color</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                    <?php 
                                    $colors = [
                                        'light-blue' => 'LIGHT BLUE',
                                        'dark-blue' => 'DARK BLUE',
                                        'light-teal' => 'LIGHT TEAL',
                                        'dark-teal' => 'DARK TEAL',
                                        'light-sky' => 'LIGHT SKY',
                                        'dark-sky' => 'DARK SKY',
                                        'light-red' => 'LIGHT RED',
                                        'dark-red' => 'DARK RED',
                                        'light-green' => 'LIGHT GREEN',
                                        'dark-green' => 'DARK GREEN',
                                        'light-lime' => 'LIGHT LIME',
                                        'dark-lime' => 'DARK LIME',
                                        'light-pink' => 'LIGHT PINK',
                                        'dark-pink' => 'DARK PINK',
                                        'light-purple' => 'LIGHT PURPLE',
                                        'dark-purple' => 'DARK PURPLE'
                                    ];
                                    foreach ($colors as $value => $label) {
                                        echo '<a href="#" class="flex-grow-1 w-50 option col" data-value="' . $value . '" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="' . $value . '"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">' . $label . '</span>
                                                </div>
                                            </a>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="mb-5" id="navcolor">
                                <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <?php 
                                    $navColors = [
                                        'default' => 'DEFAULT',
                                        'light' => 'LIGHT',
                                        'dark' => 'DARK'
                                    ];
                                    foreach ($navColors as $value => $label) {
                                        echo '<a href="#" class="flex-grow-1 w-33 option col" data-value="' . $value . '" data-parent="navcolor">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">' . $label . '</span>
                                                </div>
                                            </a>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="mb-5" id="placement">
                                <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="horizontal" data-parent="placement">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">HORIZONTAL</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="vertical" data-parent="placement">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left"></div>
                                            <div class="figure figure-secondary right"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">VERTICAL</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="behaviour">
                                <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left large"></div>
                                            <div class="figure figure-secondary right small"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">PINNED</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary left"></div>
                                            <div class="figure figure-secondary right"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">UNPINNED</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="layout">
                                <label class="mb-3 d-inline-block form-label">Layout</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">FLUID</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
                                        <div class="card rounded-md p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom small"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">BOXED</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-5" id="radius">
                                <label class="mb-3 d-inline-block form-label">Radius</label>
                                <div class="row d-flex g-3 justify-content-between flex-wrap">
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
                                        <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">ROUNDED</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
                                        <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">STANDARD</span>
                                        </div>
                                    </a>
                                    <a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
                                        <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                                            <div class="figure figure-primary top"></div>
                                            <div class="figure figure-secondary bottom"></div>
                                        </div>
                                        <div class="text-muted text-part">
                                            <span class="text-extra-small align-middle">FLAT</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- thông tin thành viên -->
        <!-- User Details Modal -->
        <div class="modal fade" id="userDetailsModal" tabindex="-1" aria-labelledby="userDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="userDetailsModalLabel">
                        <i class="fas fa-user-circle me-2"></i>Thông tin chi tiết thành viên
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 bg-light">
                    <!-- User Header Section -->
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="row align-items-center rounded-4 p-4 mb-4 shadow-sm">
                                <div class="col-md-2 text-center mb-3 mb-md-0">
                                    <div class="bg-primary bg-gradient p-3 rounded-circle d-inline-flex">
                                        <i class="fas fa-user-circle text-white fs-1"></i>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h4 id="userName" class="fw-bold text-dark mb-2">Nguyễn Văn Minh</h4>
                                    <p id="userStatus" class="text-muted mb-2">Thành viên hoạt động</p>
                                    <span class="badge bg-success bg-gradient rounded-pill px-3 py-2">
                                        <i class="fas fa-circle me-1" style="font-size: 0.5rem;"></i>Đang trực tuyến
                                    </span>
                                </div>
                                <div class="col-md-3 text-md-end">
                                    <span id="userRole" class="badge bg-warning bg-gradient rounded-pill px-4 py-3 text-dark fw-bold">
                                        <i class="fas fa-crown me-1"></i>Quản trị viên
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Stats Section -->
                    <div class="row g-3 mt-4">
                        <div class="col-md-3">
                            <div class="card text-center border-0 bg-info bg-gradient text-white">
                                <div class="card-body p-3">
                                    <i class="fas fa-comments fs-2 mb-2"></i>
                                    <h5 class="fw-bold">1,250</h5>
                                    <small>Bài viết</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center border-0 bg-warning bg-gradient text-dark">
                                <div class="card-body p-3">
                                    <i class="fas fa-thumbs-up fs-2 mb-2"></i>
                                    <h5 class="fw-bold">5,420</h5>
                                    <small>Lượt thích</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center border-0 bg-success bg-gradient text-white">
                                <div class="card-body p-3">
                                    <i class="fas fa-trophy fs-2 mb-2"></i>
                                    <h5 class="fw-bold">15</h5>
                                    <small>Giải thưởng</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center border-0 bg-danger bg-gradient text-white">
                                <div class="card-body p-3">
                                    <i class="fas fa-users fs-2 mb-2"></i>
                                    <h5 class="fw-bold">892</h5>
                                    <small>Người theo dõi</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-header bg-primary bg-gradient text-white">
                                    <h6 class="mb-0 fw-bold">
                                        <i class="fas fa-user-circle me-2"></i>Thông tin cá nhân
                                    </h6>
                                </div>
                                <div class="card-body p-4">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="border-bottom pb-3">
                                                <small class="text-muted fw-medium">Email</small>
                                                <div id="userEmail" class="fw-bold text-primary mt-1">
                                                    <i class="fas fa-envelope me-2"></i>nguyen.van.minh@example.com
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="border-bottom pb-3">
                                                <small class="text-muted fw-medium">Số điện thoại</small>
                                                <div id="userPhone" class="fw-bold text-primary mt-1">
                                                    <i class="fas fa-phone me-2"></i>+84 901 234 567
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="border-bottom pb-3">
                                                <small class="text-muted fw-medium">Ngày tham gia</small>
                                                <div id="userJoinDate" class="fw-bold text-primary mt-1">
                                                    <i class="fas fa-calendar-check me-2"></i>15/03/2023
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <small class="text-muted fw-medium">Đăng nhập cuối</small>
                                            <div id="userLastLogin" class="fw-bold text-primary mt-1">
                                                <i class="fas fa-clock me-2"></i>2 giờ trước
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-header bg-success bg-gradient text-white">
                                    <h6 class="mb-0 fw-bold">
                                        <i class="fas fa-shield-alt me-2"></i>Quyền hạn & Hoạt động
                                    </h6>
                                </div>
                                <div class="card-body p-4">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="border-bottom pb-3">
                                                <small class="text-muted fw-medium">Cấp độ</small>
                                                <div id="userLevel" class="fw-bold text-warning mt-1">
                                                    <i class="fas fa-star me-2"></i>Cấp độ 5 - VIP
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="border-bottom pb-3">
                                                <small class="text-muted fw-medium">Trạng thái</small>
                                                <div id="userActiveStatus" class="fw-bold text-success mt-1">
                                                    <i class="fas fa-check-circle me-2"></i>Đã xác minh
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <small class="text-muted fw-medium">Ghi chú</small>
                                            <div id="userNotes" class="fw-bold text-info mt-1">
                                                <i class="fas fa-sticky-note me-2"></i>Thành viên tích cực
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- <div class="modal-footer bg-white border-top">
                    <button type="button" class="btn btn-outline-secondary btn-lg" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Đóng
                    </button>
                    <button type="button" class="btn btn-primary btn-lg">
                        <i class="fas fa-edit me-2"></i>Chỉnh sửa
                    </button>
                    <button type="button" class="btn btn-success btn-lg">
                        <i class="fas fa-message me-2"></i>Nhắn tin
                    </button>
                </div> -->
            </div>
        </div>
    </div>

        

        
        <!-- Settings and Niches Buttons -->
        <div class="settings-buttons-container">
            <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
                <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
                    <i data-acorn-icon="paint-roller" class="position-relative"></i>
                </span>
            </button>
            <!-- <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#niches" id="nichesButton">
                <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Niches">
                    <i data-acorn-icon="toy" class="position-relative"></i>
                </span>
            </button> -->
        </div>
        
        
        
        <!-- Scripts -->
        <script src="<?= asset("/style/acom-all/js/vendor/jquery-3.5.1.min.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/vendor/bootstrap.bundle.min.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/vendor/OverlayScrollbars.min.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/vendor/autoComplete.min.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/vendor/clamp.min.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/icon/acorn-icons.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/icon/acorn-icons-interface.js") ?>"></script>


        <script src="<?= asset("/style/acom-all/js/vendor/bootstrap-submenu.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/vendor/datatables.min.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/vendor/mousetrap.min.js") ?>"></script>


        <script src="<?= asset("/style/acom-all/js/base/helpers.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/base/globals.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/base/nav.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/base/search.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/base/settings.js") ?>"></script>
        <!-- https://kamranahmed.info/toast -->
        <script src="<?= asset("/jquery-toast/src/jquery.toast.js") ?>"></script>

    
        <script src="<?= asset("/style/acom-all/js/common.js") ?>"></script>
        <script src="<?= asset("/style/acom-all/js/scripts.js") ?>"></script>
        <script src="<?= asset("/js-tdev/confirmAction.js") ?>"></script>
        <script src="<?= asset("/js-tdev/hieu-ung-tham-gia.js") ?>"></script>
        <script>
        /**
         * hàm ví dụ về cách sử dụng confirmAction
        function initializeDeleteConfirmation() {
            document.addEventListener('DOMContentLoaded', async function() {
                const confirmed = await confirmAction();
                if (!confirmed) {
                    return false;
                }
                console.log("DOM fully loaded and ready");
            });
        }
        initializeDeleteConfirmation();
        */
        </script>


        <!-- Scripts -->
        <?php
        if (file_exists($pathFileJs)) {
            include $pathFileJs; 
        }
        ?>
        <script>
            
            function logout() {
                $.ajax({
                    url: '<?=set_route_to_link(["backend","profiles","logout"])?>',
                    type: 'POST',
                    success: function(response) {
                        if (response.stt) {
                            location.reload();
                        } else {
                            $.toast({
                                heading: 'Error',
                                text: response.data,
                                showHideTransition: 'fade',
                                icon: 'error',
                                position: 'top-right',
                                hideAfter: 10000
                            });
                        }
                    },
                    error: function(response) {
                        $.toast({
                            heading: 'Error',
                            text: 'Failed to logout',
                            showHideTransition: 'fade',
                            icon: 'error',
                            position: 'top-right',
                            hideAfter: 10000
                        });
                    }
                });
            }
        </script>






        <script>
            const logoParticles = document.querySelector('.logo-particles');
            const particleCount = 15;
            
            // Create particles
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.style.cssText = `
                    position: absolute;
                    width: ${Math.random() * 3 + 1}px;
                    height: ${Math.random() * 3 + 1}px;
                    background-color: rgba(255, 255, 255, ${Math.random() * 0.5 + 0.3});
                    border-radius: 50%;
                    top: ${Math.random() * 100}%;
                    left: ${Math.random() * 100}%;
                    animation: float ${Math.random() * 3 + 2}s linear infinite;
                    opacity: 0;
                    box-shadow: 0 0 ${Math.random() * 5 + 2}px rgba(255, 255, 255, 0.8);
                    animation-delay: ${Math.random() * 2}s;
                `;
                logoParticles.appendChild(particle);
            }
            
            // Add hover effect
            const logo = document.querySelector('.sofin-logo');
            logo.addEventListener('mouseenter', function() {
                this.style.textShadow = '0 0 15px rgba(255, 255, 255, 0.8)';
            });
            
            logo.addEventListener('mouseleave', function() {
                this.style.textShadow = '0 0 10px rgba(255, 255, 255, 0.5)';
            });



            // Add event listeners when the DOM is fully loaded
            document.addEventListener('DOMContentLoaded', function() {
            // Prevent context menu (right-click)
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
                return false;
            });

            // Prevent mouse down events (needed for middle click)
            document.addEventListener('mousedown', function(e) {
                // Middle mouse button is usually button 1
                if (e.button === 1) {
                e.preventDefault();
                return false;
                }
            });

            // Prevent mouse up events
            document.addEventListener('mouseup', function(e) {
                if (e.button === 1) {
                e.preventDefault();
                return false;
                }
            });

            // Prevent clicks with modifier keys
            document.addEventListener('click', function(e) {
                // Check if modifier keys are pressed (Ctrl, Shift, Alt, Meta/Command)
                if (e.ctrlKey || e.shiftKey || e.altKey || e.metaKey) {
                e.preventDefault();
                e.stopPropagation();
                return false;
                }
            });

            // Prevent auxiliary clicks (middle button)
            document.addEventListener('auxclick', function(e) {
                e.preventDefault();
                return false;
            });

            // Handle all links on the page
            const links = document.getElementsByTagName('a');
            for (let i = 0; i < links.length; i++) {
                // Override default link behavior
                links[i].addEventListener('click', function(e) {
                if (e.ctrlKey || e.shiftKey || e.altKey || e.metaKey || e.button === 1) {
                    e.preventDefault();
                    e.stopPropagation();
                    return false;
                }
                
                // For links with target="_blank"
                if (this.target === '_blank') {
                    // Change to same window or implement your desired behavior
                    this.target = '_self';
                }
                });
            }
            });




        // Function to open user details modal
        function openUserDetailsModal(email) {
            $("#userDetailsModalLabel").html(`<i class="fas fa-user-circle me-2"></i> ${email}`);
            $("#userEmail").html(`<i class="fas fa-envelope me-2"></i> ${email}`);
            // Get the modal element
            const modal = document.getElementById('userDetailsModal');
            
            // If modal exists, show it using Bootstrap's modal method
            if (modal) {
                // Set user ID to a data attribute if needed
                modal.setAttribute('data-user-email', email);
                
                // Initialize the Bootstrap modal
                const modalInstance = new bootstrap.Modal(modal);
                
                // Show the modal
                modalInstance.show();
                
                // Optional: Load user data via AJAX
                // loadUserData(userId);
            } else {
                console.error('Modal with ID "userDetailsModal" not found');
            }
        }
        
        // Optional: Function to load user data via AJAX
        function loadUserData(userId) {
            // Example AJAX request to load user data
            fetch(`<?=set_route_to_link(["jsload","users","get_user_details"])?>&id=${userId}`)
                .then(response => response.json())
                .then(data => {
                    // Populate modal with user data
                    if (data.success) {
                        // Update modal content with user details
                        // document.getElementById('user-name').textContent = data.user.name;
                        // etc.
                    } else {
                        console.error('Error loading user data:', data.message);
                    }
                })
                .catch(error => {
                    console.error('Error fetching user data:', error);
                });
        }
        </script>

    </body>

</html>
    <?php
}
?>



