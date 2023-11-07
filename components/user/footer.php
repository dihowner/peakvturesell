<?php 
    if(!isset($_SESSION['user_id'])) {
        header('location: '.BASE_URL_SIGNIN);
        exit;
    }

    require_once MODEL_DIR."User.php";
    $user = new User($conn);

    $userId = $_SESSION['user_id'];
    $userDetails = $user->getUserInfo($userId);
?>

<!-- BEGIN: Footer For Desktop and tab -->
        <footer id="footer">
            <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
                <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
                    <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
                        COPYRIGHT ©
                        <span id="thisYear"></span>
                        <?php echo BRAND_NAME ?>, All rights Reserved
                    </div>     
                </div>
            </div>
        </footer>

        <!-- Foot tab for mobile screen-->
        <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
        backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
            <a href="<?php echo BASE_URL;?>logout">
                <div>
                    <span class="cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
                    text-slate-900 ">
                        <iconify-icon icon="heroicons-outline:login"></iconify-icon>
                    </span>
                    <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                        Logout
                    </span>
                </div>
            </a>

            <a href="<?php echo VIEW_DIR ?>profile" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
            h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
                <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
                    <img src="<?php echo BASE_URL;?>assets/images/users/user-1.jpg" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
                </div>
            </a>
            <a href="#">
                <div>
                    <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
                        text-slate-900">
                        <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
                        <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
                            justify-center rounded-full text-white z-[99]">
                            4
                        </span>
                    </span>
                    <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                        Notifications
                    </span>
                </div>
            </a>
        </div>