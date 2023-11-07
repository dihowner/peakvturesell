<?php 
    require "includes/config.php";
    include_once LAYOUT_DIR.'head.php';

    if(isset($_SESSION['user_id'])) {
        header('location: '.VIEW_DIR.'dashboard');
        exit;
    }
?>

<body class=" font-inter skin-default"> 
  <div class="loginwrapper">
    <div class="lg-inner-column">
      <!-- Right column -->
      <div class="right-column relative">       
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box h-full flex flex-col justify-center">

            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <a href="index.html">
                <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
              </a>
            </div>

            <div class="text-center 2xl:mb-10 mb-4">             
              <h4 class="font-medium">Welcome back!</h4>
              <div class="text-slate-500 dark:text-slate-400 text-base">
                Sign in to your account
              </div>
            </div>
            
            <!-- Feedback and response messages -->
            <div class="w-full d-flex mx-auto mb-2 justify-content-center relative">
                <?php echo errorMessage(); echo successMessage(); ?>
            </div>

            <!-- Login Form -->
            <form class="space-y-4" method="post" action="<?php echo CONTROLLER_DIR;?>auth.php">
              <div class="fromGroup">
                <label class="block capitalize form-label">Your detail</label>
                <div class="relative ">
                  <input type="text" name="detail" class="form-control py-2" placeholder="Email Address / Phone Number / Username">
                </div>
              </div>

              <div class="fromGroup">
                <label class="block capitalize form-label">Password</label>
                <div class="relative ">
                  <input type="password" name="password" class="form-control py-2" placeholder="john123">
                </div>
              </div>

              <div class="flex justify-between">
                <div class="checkbox-area">
                  <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="hidden" name="checkbox">
                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                    <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Keep me signed in</span>
                  </label>
                </div>
                <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="<?php echo BASE_URL; ?>forgot-password.php">Forgot Password?</a>
              </div>

              <button name="userLogin" class="btn btn-dark block w-full text-center">Sign in</button>
            </form>

            <div class="md:max-w-[345px] mt-6 mx-auto font-normal text-slate-500 dark:text-slate-400mt-12 uppercase text-sm">
              Don’t have an account?
              <a href="<?php echo BASE_URL_SIGNUP ?>" class="text-slate-900 dark:text-white font-medium hover:underline">
                Sign up
              </a>
            </div>
          </div>

          <div class="auth-footer text-center">
            Copyright <?php echo CURRENT_YEAR ?>, <?php echo BRAND_NAME ?> All Rights Reserved.
          </div>
        </div>
      </div>

        <!-- left column -->
      <div class="left-column bg-cover bg-no-repeat bg-center " style="background-image: url(assets/images/all-img/login-bg.png);">
        <div class="flex flex-col h-full justify-center">
          <div class="flex-1 flex flex-col justify-center items-center">
            <a href="<?php echo BASE_URL_HOME?>">
              <span class="mb-10 text-white text-4xl">BRAND LOGO</span>
              <!-- <img src="assets/images/logo/logo-white.svg" alt="Brand Logo" class="mb-10"> -->
            </a>
          </div>
          <div>
            <div class="black-500-title max-w-[525px] mx-auto pb-20 text-center">
              Unlock new 
              <span class="text-white font-bold">heights&#9992;</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include_once LAYOUT_DIR.'scripts.php'; ?>