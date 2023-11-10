<?php
    require "includes/config.php";
    include_once LAYOUT_DIR.'head.php';
?>

    <body class="font-inter skin-default">
        <div class="loginwrapper bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo BASE_URL?>assets/images/all-img/page-bg.png);">
            <div class="lg-inner-column">
                <div class="left-columns lg:w-1/2 lg:block hidden">
                    <div class="logo-box-3">
                        <a href="index.html" class="">
                            <img src="<?php echo BASE_URL?>assets/images/logo/logo-white.svg" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center justify-center">
                    <div class="auth-box-3">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="<?php echo BASE_URL?>assets/images/logo/logo.svg" alt="Brand Logo Mobile" class="mb-10 dark_logo">
                                <img src="<?php echo BASE_URL?>assets/images/logo/logo-white.svg" alt="Brand Logo Mobile" class="mb-10 white_logo">
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-5">
                            <h4 class="font-medium">Welcome</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-base my-3">
                                Begin your financial journey with <?php echo BRAND_NAME ?>
                            </p>
                            <div class="flex flex-col justify-between items-center">
                                <a class="w-full" href="<?php echo BASE_URL_SIGNUP;?>">
                                    <button class="btn btn-dark block w-full text-center">Sign Up</button>
                                </a>
                                <br>
                                <a class="w-full" href="<?php echo BASE_URL_SIGNIN;?>">
                                    <button class="btn btn-dark block w-full text-center">Sign In</button>
                                </a>
                            </div>
                        </div>                     
                    </div>
                </div>
                <div class="auth-footer3 text-white py-5 px-5 text-xl w-full">
                    Unlock new heights...
                </div>
            </div>
        </div>
    </body>

<?php include_once LAYOUT_DIR.'scripts.php'; ?>
        