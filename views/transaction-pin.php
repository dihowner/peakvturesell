<?php
    require "../includes/config.php";
    include_once LAYOUT_DIR.'head.php';

    if(!isset($_SESSION['user_id'])) {
        header('location: '.BASE_URL_SIGNIN);
        exit;
    }

    $userId = $_SESSION['user_id'];
    $userDetails = $user->getUserInfo($userId);

    if($userDetails['transact_pin'] == "0000") { ?>  
        <!-- If new user, display the set pin form to change default pin       -->
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
                        <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                            <a href="index.html">
                            <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                            <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                            </a>
                        </li>
                        <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                            Settings
                            <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                        </li>
                        <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                            Set Pin</li>
                        </ul>
                    </div>

                    <!-- Profile page -->
                    <div class="space-y-5 profile-page">
                        <div class="profiel-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:flex lg:space-y-0
                        space-y-6 justify-between items-end relative z-[1]">
                        <div class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg"></div>
                        <div class="profile-box flex-none md:text-start text-center">
                            <div class="md:flex items-end md:space-x-6 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4
                                        ring-slate-100 relative">
                                <img src="<?php echo BASE_URL ?>assets/images/users/user-1.jpg" alt="" class="w-full h-full object-cover rounded-full">
                                <a href="#" class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center
                                            justify-center md:top-[140px] top-[100px]">
                                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                </a>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                                <?php echo $userDetails['name'] ?>
                                </div>
                                <div class="text-sm font-light text-slate-600 dark:text-slate-400">
                                @<?php echo $userDetails['username'] ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- end profile box -->
                        <div class="profile-info-500 md:flex md:text-start text-center flex-1 max-w-[516px] md:space-y-0 space-y-4">
                            <div class="flex-1">
                            <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                                $32,400
                            </div>
                            <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                                Total Balance
                            </div>
                            </div>
                            <!-- end single -->
                            <div class="flex-1">
                            <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                                200
                            </div>
                            <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                                Board Card
                            </div>
                            </div>
                            <!-- end single -->
                            <div class="flex-1">
                            <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                                3200
                            </div>
                            <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                                Calender Events
                            </div>
                            </div>
                            <!-- end single -->
                        </div>
                        <!-- profile info-500 -->
                        </div>
                        <div class="grid grid-cols-12 gap-6">
                        <div class="lg:col-span-4 col-span-12">
                            <div class="card h-full">
                            <header class="card-header">
                                <h4 class="card-title">Info</h4>
                            </header>
                            <div class="card-body p-6">
                                <ul class="list space-y-8">
                                <li class="flex space-x-3 rtl:space-x-reverse">
                                    <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                    <iconify-icon icon="heroicons:envelope"></iconify-icon>
                                    </div>
                                    <div class="flex-1">
                                    <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                        EMAIL
                                    </div>
                                    <a href="mailto:someone@example.com" class="text-base text-slate-600 dark:text-slate-50">
                                        <?php echo $userDetails['email'] ?>
                                    </a>
                                    </div>
                                </li>
                                <!-- end single list -->
                                <li class="flex space-x-3 rtl:space-x-reverse">
                                    <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                    <iconify-icon icon="heroicons:phone-arrow-up-right"></iconify-icon>
                                    </div>
                                    <div class="flex-1">
                                    <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                        PHONE
                                    </div>
                                    <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                        <?php echo $userDetails['phone'] ?>
                                    </a>
                                    </div>
                                </li>
                                <!-- end single list -->
                                <li class="flex space-x-3 rtl:space-x-reverse">
                                    <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                    <iconify-icon icon="heroicons:map"></iconify-icon>
                                    </div>
                                    <div class="flex-1">
                                    <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                        LOCATION
                                    </div>
                                    <div class="text-base text-slate-600 dark:text-slate-50">
                                        ###
                                    </div>
                                    </div>
                                </li>
                                <!-- end single list -->
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="lg:col-span-8 col-span-12">
                            <div class="card ">
                            <header class="card-header">
                                <h4 class="card-title">User Overview
                                </h4>
                            </header>
                            <div class="card-body">
                                <div id="areaChart"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <!-- Form Modal Area Start -->
                    <div id="form-modal" aria-labelledby="form-modal" aria-modal="true" role="dialog" tabindex="-1" class="modal fade show fixed top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto bg-slate-900/40 backdrop-filter backdrop-blur-sm backdrop-brightness-10" style="display: block;">      
                        <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
                            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                <div class="relative w-full h-full max-w-xl md:h-auto">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                        <!-- Modal header -->
                                        <div class="flex flex-col justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                        <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                                            Set Transaction Pin
                                        </h3>
                                        <p class="text-sm font-medium text-white dark:text-white">
                                            Please enter a 4 digit pin that will be used for your transactions.
                                        </p>
                                        </div>
                                        <!-- Modal body -->
                                        <div>
                                        <!-- Feedback and response messages -->
                                        <div class="w-full d-flex mx-auto mb-2 justify-content-center relative">
                                            <?php echo errorMessage(); echo successMessage(); ?>
                                        </div>
                                        

                                        <!-- Collect pin form -->
                                        <form id="typeValidation" method="post" action="<?php echo CONTROLLER_DIR ?>updateAuth">
                                            <div class="p-6 space-y-6">
                                                <div class="input-group">
                                                    <label for="defaultPin" class="form-label text-sm font-Inter font-normal text-slate-900 block">Default Pin</label>
                                                    <input id="defaultPin" type="text" name="defaultPin" class="text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 pr-9 focus:!outline-none
                                                        focus:!ring-0 border !border-slate-400 rounded-md mt-2" value="0000" disabled>                                        
                                                </div>
                                                <div class="input-group">
                                                    <label for="newPin" class="form-label text-sm font-Inter font-normal text-slate-900 block">New Pin:</label>
                                                    <div class="relative" id="passwordInputField">
                                                        <input id="newPin" type="password" inputmode="numeric"  name="newPin" class="passwordfield text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 focus:!outline-none 
                                                            focus:!ring-0 border !border-slate-400 rounded-md mt-2" placeholder="Enter your new pin" autocomplete="off">
                                                        <span class="text-xl text-slate-400 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer" id="toggleIcon">
                                                            <iconify-icon id="hidePassword" icon="heroicons-outline:eye-off"></iconify-icon>
                                                            <iconify-icon class="hidden" id="showPassword" icon="heroicons-outline:eye"></iconify-icon>
                                                        </span>
                                                    </div>
                                                </div>                                     
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                            <button type="submit" name="setPin" class="btn inline-flex justify-center text-white bg-black-500">Set Pin</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                    <!-- Form Modal Area End -->
                    </div>
                </div>
                </div>
            </div>
            </div>
        </main>
        </body>
    <?php    
        header('location: '.VIEW_DIR.'dashboard');
        exit;
    } else { ?>
        <!-- for other users, display the change transaction form -->
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
                                Change Transaction Pin</li>
                            </ul>
                        </div>
                        <!-- END: BreadCrumb -->
                        
                        <!-- Feedback and response messages -->
                        <div class="w-full d-flex mx-auto mb-2 justify-content-center relative">
                            <?php echo errorMessage(); echo successMessage(); ?>
                        </div>
                        
                        <!-- Change Transaction Pin Form -->
                        <div class="card w-full md:w-1/2 mx-auto set">
                            <div class="card-body flex flex-col p-6">
                                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                <div class="flex-1">
                                    <div class="card-title text-slate-900 dark:text-white">Change Your Transaction Pin</div>
                                </div>
                                </header>
                                
                                <form id="typeValidation" method="post" action="<?php echo CONTROLLER_DIR ?>updateAuth">
                                <div class="p-6 space-y-6">
                                    <div class="input-group">
                                        <label for="oldPin" class="form-label text-sm font-Inter font-normal text-slate-900 block">Old Pin</label>
                                        <div class="relative" id="passwordInputField">
                                            <input id="oldPin" type="password" inputmode="numeric" name="oldPin" class="passwordfield text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 pr-9 focus:!outline-none
                                                focus:!ring-0 border !border-slate-400 rounded-md mt-2" placeholder="Your former pin" autocomplete="off" autofocus required> 
                                            <span class="text-xl text-slate-400 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer" id="toggleIcon">
                                                <iconify-icon id="hidePassword" icon="heroicons-outline:eye-off"></iconify-icon>
                                                <iconify-icon class="hidden" id="showPassword" icon="heroicons-outline:eye"></iconify-icon>
                                            </span>
                                        </div>                                       
                                    </div>

                                    <div class="input-group">
                                        <label for="newPin" class="form-label text-sm font-Inter font-normal text-slate-900 block">New Pin:</label>
                                        <div class="relative" id="passwordInputField">
                                            <input id="newPin" type="password" inputmode="numeric"  name="newPin" class="passwordfield text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 focus:!outline-none 
                                                focus:!ring-0 border !border-slate-400 rounded-md mt-2" placeholder="Enter your new pin" autocomplete="off" autofocus required>
                                            <span class="text-xl text-slate-400 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer" id="toggleIcon">
                                                <iconify-icon id="hidePassword" icon="heroicons-outline:eye-off"></iconify-icon>
                                                <iconify-icon class="hidden" id="showPassword" icon="heroicons-outline:eye"></iconify-icon>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="input-group">
                                        <label for="confirmNewPin" class="form-label text-sm font-Inter font-normal text-slate-900 block">Confirm New Pin:</label>
                                        <div class="relative" id="passwordInputField">
                                            <input id="confirmNewPin" type="password" inputmode="numeric"  name="confirmNewPin" class="passwordfield text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 focus:!outline-none 
                                                focus:!ring-0 border !border-slate-400 rounded-md mt-2" placeholder="Confirm your new pin" autocomplete="off" autofocus required>
                                            <span class="text-xl text-slate-400 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer" id="toggleIcon">
                                                <iconify-icon id="hidePassword" icon="heroicons-outline:eye-off"></iconify-icon>
                                                <iconify-icon class="hidden" id="showPassword" icon="heroicons-outline:eye"></iconify-icon>
                                            </span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center justify-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                    <button type="submit" name="changePin" class="btn inline-flex justify-center text-white bg-black-500">Change Pin</button>
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
    <?php
    }
    include_once LAYOUT_DIR.'scripts.php';
?>