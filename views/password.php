<?php 
    require_once "authorizer.php"; 
    
    $greeting = "Good evening";
?>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <?php include USER_COMPONENTS_DIR."sidebar.php"; ?>

        <div class="flex flex-col justify-between min-h-screen">
        <div>
            <!-- BEGIN: Header -->
            <?php include USER_COMPONENTS_DIR."header.php"; ?>
            <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]" id="content_wrapper">
            <div class="page-content">
                <div id="content_layout">
                <!-- BEGIN: Breadcrumb -->
                <div class="mb-5">
                    <ul class="m-0 p-0 list-none">
                    <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                        Settings
                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                    </li>
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                        Change Account Password</li>
                    </ul>
                </div>
                <!-- END: BreadCrumb -->
                
                <!-- Feedback and response messages -->
                <div class="w-full md:w-1/2 d-flex mx-auto mb-2 justify-content-center relative">
                    <?php echo errorMessage(); echo successMessage(); ?>
                </div>
                
                <!-- Change Account Password Form -->
                <div class="card w-full md:w-1/2 mx-auto set">
                    <div class="card-body flex flex-col p-6">
                        <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Change Your Account Password</div>
                        </div>
                        </header>

                        <form id="typeValidation" method="post" action="<?php echo CONTROLLER_DIR ?>updateAuth">
                            <div class="p-6 space-y-6">
                                <div class="input-group">
                                    <label for="oldPassword" class="form-label text-sm font-Inter font-normal text-slate-900 block">Old Password</label>
                                    <div class="relative" id="passwordInputField">
                                        <input id="oldPassword" type="password" name="oldPassword" class="passwordfield text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 pr-9 focus:!outline-none
                                            focus:!ring-0 border !border-slate-400 rounded-md mt-2" placeholder="Enter former password" autocomplete="off" autofocus required> 
                                        <span class="text-xl text-slate-400 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer" id="toggleIcon1">
                                            <iconify-icon id="hidePassword" icon="heroicons-outline:eye-off"></iconify-icon>
                                            <iconify-icon class="hidden" id="showPassword" icon="heroicons-outline:eye"></iconify-icon>
                                        </span>
                                    </div>                                       
                                </div>

                                <div class="input-group">
                                    <label for="newPassword" class="form-label text-sm font-Inter font-normal text-slate-900 block">New Password:</label>
                                    <div class="relative" id="passwordInputField">
                                        <input id="newPassword" type="password" name="newPassword" class="passwordfield text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 focus:!outline-none 
                                            focus:!ring-0 border !border-slate-400 rounded-md mt-2" placeholder="Enter new password" autocomplete="off" autofocus required>
                                        <span class="text-xl text-slate-400 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer" id="toggleIcon2">
                                            <iconify-icon id="hidePassword" icon="heroicons-outline:eye-off"></iconify-icon>
                                            <iconify-icon class="hidden" id="showPassword" icon="heroicons-outline:eye"></iconify-icon>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="input-group">
                                    <label for="confirmNewPassword" class="form-label text-sm font-Inter font-normal text-slate-900 block">Confirm New Pin:</label>
                                    <div class="relative" id="passwordInputField">
                                        <input id="confirmNewPassword" type="password" name="confirmNewPassword" class="passwordfield text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 focus:!outline-none 
                                            focus:!ring-0 border !border-slate-400 rounded-md mt-2" placeholder="Confirm password" autocomplete="off" autofocus required>
                                        <span class="text-xl text-slate-400 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer" id="toggleIcon3">
                                            <iconify-icon id="hidePassword" icon="heroicons-outline:eye-off"></iconify-icon>
                                            <iconify-icon class="hidden" id="showPassword" icon="heroicons-outline:eye"></iconify-icon>
                                        </span>
                                    </div>
                                </div>  
                            </div>
                            <div class="flex items-center justify-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                <button type="submit" name="changePassword" class="btn inline-flex justify-center text-white bg-black-500">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
            </div>
        </div>
        </div>
        <?php include USER_COMPONENTS_DIR."footer.php"; ?>
    </main>
</body> 

<?php include_once LAYOUT_DIR.'scripts.php';  ?>