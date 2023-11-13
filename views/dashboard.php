<?php 
    require_once "authorizer.php"; 
    
    $greeting = "Good evening";
?>

<body class="font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        <?php include USER_COMPONENTS_DIR."sidebar.php"; ?>

        <div class="flex flex-col justify-between min-h-screen">
            <div>
                <?php include USER_COMPONENTS_DIR."header.php"; ?>

                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]" id="content_wrapper">
                    <div class="page-content">
                        <div id="content_layout">

                        <div class="space-y-5">

                            <!-- BEGIN: BreadCrumb -->
                            <div class="flex justify-between flex-wrap items-center mb-6">
                                <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">Banking</h4>
                                <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
                                    <button class="btn inline-flex justify-center bg-white text-slate-700 dark:bg-slate-700 !font-normal dark:text-white ">
                                    <span class="flex items-center">
                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:calendar"></iconify-icon>
                                        <span>Home</span>
                                    </span>
                                    </button>
                                    <button class="btn inline-flex justify-center bg-white text-slate-700 dark:bg-slate-700 !font-normal dark:text-white ">
                                    <span class="flex items-center">
                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:filter"></iconify-icon>
                                        <span>Dashboard</span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                            <!-- END: Breadcrumb  -->

                            <div class="card p-6">
                                <div class="grid xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5 place-content-center">
                                    <div class="flex space-x-4 h-full items-center rtl:space-x-reverse">
                                    <div class="flex-none">
                                        <div class="h-20 w-20 rounded-full">
                                        <img src="<?php echo BASE_URL;?>assets/images/all-img/main-user.png" alt="" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-medium mb-2">
                                        <span class="block font-light"><?php echo $greeting; ?></span>
                                        <span class="block">
                                            <?php echo $userDetails['initial'] ?>
                                        </span>
                                        </h4>
                                        <p class="text-sm dark:text-slate-300">Welcome to <?php echo BRAND_NAME ?></p>
                                    </div>
                                    </div>

                                    <!-- BEGIN: Group Chart3 -->


                                    <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                                        Current balance
                                    </div>
                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                        $34,564
                                    </div>
                                    <div class="ml-auto max-w-[124px]">
                                        <div id="clmn_chart_1"></div>
                                    </div>
                                    </div>

                                    <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                                        Credit
                                    </div>
                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                        $3,564
                                    </div>
                                    <div class="ml-auto max-w-[124px]">
                                        <div id="clmn_chart_2"></div>
                                    </div>
                                    </div>

                                    <div class="bg-slate-50 dark:bg-slate-900 rounded p-4">
                                    <div class="text-slate-600 dark:text-slate-400 text-sm mb-1 font-medium">
                                        Debit
                                    </div>
                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                        $3,564
                                    </div>
                                    <div class="ml-auto max-w-[124px]">
                                        <div id="clmn_chart_3"></div>
                                    </div>
                                    </div>

                                    <!-- END: Group Chart3 -->
                                </div>
                            </div>

                            <div class="grid grid-cols-12 gap-5">
                                <div class="lg:col-span-4 col-span-12 space-y-5">
                                    <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title">My cards</h4>
                                    </header>
                                    <div class="card-body p-6">
                                        <div class="max-w-[90%] mx-auto mt-2">

                                        <!-- BEGIN: Card Slide -->
                                        <!-- <div class="swiper card-slider">
                                            <div class="swiper-wrapper">


                                            <div class="swiper-slide">
                                                <div class="from-[#1EABEC] to-primary-500  h-[200px] bg-gradient-to-r relative rounded-md z-[1] p-4 text-white">
                                                <div class="overlay absolute left-0 top-0 h-full w-full -z-[1]">
                                                    <img src="<?php echo BASE_URL ?>assets/images/all-img/visa-card-bg.png" alt="" class="h-full w-full object-cover">
                                                </div>
                                                <img src="<?php echo BASE_URL ?>assets/images/logo/visa.svg" alt="">
                                                <div class="mt-[18px] font-semibold text-lg mb-[17px]">
                                                    **** **** **** 3945
                                                </div>
                                                <div class="text-xs text-opacity-75 mb-[2px]">
                                                    Card balance
                                                </div>
                                                <div class="text-2xl font-semibold">$10,975</div>
                                                </div>
                                            </div>


                                            <div class="swiper-slide">
                                                <div class="from-[#4C33F7] to-[#801FE0]  h-[200px] bg-gradient-to-r relative rounded-md z-[1] p-4 text-white">
                                                <div class="overlay absolute left-0 top-0 h-full w-full -z-[1]">
                                                    <img src="<?php echo BASE_URL ?>assets/images/all-img/visa-card-bg.png" alt="" class="h-full w-full object-cover">
                                                </div>
                                                <img src="<?php echo BASE_URL ?>assets/images/logo/visa.svg" alt="">
                                                <div class="mt-[18px] font-semibold text-lg mb-[17px]">
                                                    **** **** **** 3945
                                                </div>
                                                <div class="text-xs text-opacity-75 mb-[2px]">
                                                    Card balance
                                                </div>
                                                <div class="text-2xl font-semibold">$10,975</div>
                                                </div>
                                            </div>


                                            <div class="swiper-slide">
                                                <div class="from-[#FF9838] to-[#008773] h-[200px] bg-gradient-to-r relative rounded-md z-[1] p-4 text-white">
                                                <div class="overlay absolute left-0 top-0 h-full w-full -z-[1]">
                                                    <img src="<?php echo BASE_URL ?>assets/images/all-img/visa-card-bg.png" alt="" class="h-full w-full object-cover">
                                                </div>
                                                <img src="<?php echo BASE_URL ?>assets/images/logo/visa.svg" alt="">
                                                <div class="mt-[18px] font-semibold text-lg mb-[17px]">
                                                    **** **** **** 3945
                                                </div>
                                                <div class="text-xs text-opacity-75 mb-[2px]">
                                                    Card balance
                                                </div>
                                                <div class="text-2xl font-semibold">$10,975</div>
                                                </div>
                                            </div>

                                            </div>
                                        </div> -->
                                        <!-- END: Card Slider -->

                                        

                                        </div>
                                    </div>
                                    </div>
                                    <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title">Quick transfer</h4>
                                    </header>
                                    <div class="card-body p-6">
                                        <div class="space-y-6">
                                        <div class="bg-slate-50 dark:bg-slate-900 rounded-md p-4">
                                            <div class="flex justify-between mb-2">
                                            <span class="text-lg text-slate-900 dark:text-white">
                                                        Contacts
                                                    </span>
                                            <a href="#" class="font-medium text-slate-900 dark:text-white underline text-sm">
                                                View all
                                            </a>
                                            </div>
                                            <ul class="flex space-x-6 py-3 px-1  overflow-x-auto">

                                            <li class="ring-2 ring-primary-500 ring-offset-2 h-[42px] w-[42px] cursor-pointer text-xl font-medium capitalize flex-none
                                                                    rounded-full bg-primary-500 text-white flex flex-col items-center justify-center ">
                                                Ab
                                            </li>

                                            <li class="ring-2 ring-primary-500 ring-offset-2 h-[42px] w-[42px] cursor-pointer text-xl font-medium capitalize flex-none
                                                                    rounded-full bg-primary-500 text-white flex flex-col items-center justify-center ">
                                                Bc
                                            </li>

                                            <li class="ring-2 ring-primary-500 ring-offset-2 h-[42px] w-[42px] cursor-pointer text-xl font-medium capitalize flex-none
                                                                    rounded-full bg-primary-500 text-white flex flex-col items-center justify-center ">
                                                Cd
                                            </li>

                                            <li class="ring-2 ring-primary-500 ring-offset-2 h-[42px] w-[42px] cursor-pointer text-xl font-medium capitalize flex-none
                                                                    rounded-full bg-primary-500 text-white flex flex-col items-center justify-center ">
                                                Df
                                            </li>

                                            <li class="ring-2 ring-primary-500 ring-offset-2 h-[42px] w-[42px] cursor-pointer text-xl font-medium capitalize flex-none
                                                                    rounded-full bg-primary-500 text-white flex flex-col items-center justify-center ">
                                                Ab
                                            </li>

                                            <li class="ring-2 ring-primary-500 ring-offset-2 h-[42px] w-[42px] cursor-pointer text-xl font-medium capitalize flex-none
                                                                    rounded-full bg-primary-500 text-white flex flex-col items-center justify-center ">
                                                Sd
                                            </li>

                                            <li class="ring-2 ring-primary-500 ring-offset-2 h-[42px] w-[42px] cursor-pointer text-xl font-medium capitalize flex-none
                                                                    rounded-full bg-primary-500 text-white flex flex-col items-center justify-center ">
                                                Sg
                                            </li>

                                            </ul>
                                        </div>
                                        <div class="bg-slate-100 dark:bg-slate-900 rounded-md p-4">
                                            <label class="text-xs text-slate-500 dark:text-slate-400 block mb-1 cursor-pointer font-normal" for="cdp">Amount</label>
                                            <div class="fromGroup">
                                            <div class="relative">
                                                <input class="form-control py-2 !bg-transparent border-none focus:ring-0 focus:border-none p-0 text-slate-900 dark:text-white
                                                                text-sm placeholder:text-slate-400 placeholder:font-medium h-auto font-medium" placeholder="$6547" id="cdp" value="">
                                                <div class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2 space-x-1 rtl:space-x-reverse"></div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="bg-slate-100 dark:bg-slate-900 rounded-md p-4">
                                            <label class="text-xs text-slate-500 dark:text-slate-400 block cursor-pointer mb-1" for="cd">Recipient account number</label>
                                            <div class="fromGroup">
                                            <div class="relative">
                                                <input type="text" placeholder="3458-3548-6548-3244" class="form-control py-2 !bg-transparent border-none focus:ring-0 focus:border-none p-0 text-slate-900 dark:text-white
                                                                text-sm placeholder:text-slate-400 h-auto placeholder:font-medium font-medium" id="cd" value="">
                                                <div class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2 space-x-1 rtl:space-x-reverse"></div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div>
                                            <span class="text-xs text-slate-500 dark:text-slate-400 block mb-1">
                                                        Total amount
                                                    </span>
                                            <span class="text-lg font-medium text-slate-900 dark:text-white block">
                                                        $6547
                                                    </span>
                                            </div>
                                            <div>
                                            <button type="button" class="btn btn-dark">
                                                Send money
                                            </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-8 col-span-12">
                                    <div class="space-y-5 bank-table">

                                    <!-- BEGIN: Transactions -->


                                    <div class="card">
                                        <header class="card-header noborder mb-6">
                                        <h4 class="card-title">All Transactions
                                        </h4>
                                        </header>
                                        <div class="card-body px-6 pb-6">
                                        <div class="overflow-x-auto -mx-6 ">
                                            <span class=" col-span-8  hidden"></span>
                                            <span class="  col-span-4 hidden"></span>
                                            <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden ">
                                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                    <tr>

                                                    <th scope="col" class=" table-th ">
                                                        Customer
                                                    </th>

                                                    <th scope="col" class=" table-th ">
                                                        Date
                                                    </th>

                                                    <th scope="col" class=" table-th ">
                                                        HISTORY
                                                    </th>

                                                    <th scope="col" class=" table-th ">
                                                        Amount
                                                    </th>

                                                    <th scope="col" class=" table-th ">
                                                        Action
                                                    </th>

                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                    <tr>
                                                    <td class="table-td">
                                                        <span class="flex">
                                                            <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                                <img src="assets/images/all-img/customer_1.png" alt="1" class="object-cover w-full h-full rounded-full">
                                                            </span>
                                                        <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                                        </span>
                                                    </td>
                                                    <td class="table-td ">3/26/2022</td>
                                                    <td class="table-td ">
                                                        <div class="min-w-[170px]">
                                                        <span class="text-slate-500 dark:text-slate-400">
                                                                <span class="block text-slate-600 dark:text-slate-300">Transfer</span>
                                                        <span class="block text-slate-500 text-xs">Trans ID: 8HG654Pk32</span>
                                                        </span>
                                                        </div>
                                                    </td>
                                                    <td class="table-td ">

                                                        <div class=" text-success-500">
                                                        +$ 200.00
                                                        </div>

                                                    </td>
                                                    <td class="table-td ">
                                                        <div>
                                                        <div class="relative">
                                                            <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" id="transactionDropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                                                            shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    Edit</a>
                                                                </li>
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    Delete</a>
                                                                </li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    </tr>

                                                    <tr>
                                                    <td class="table-td">
                                                        <span class="flex">
                                                            <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                                <img src="assets/images/all-img/customer_1.png" alt="2" class="object-cover w-full h-full rounded-full">
                                                            </span>
                                                        <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                                        </span>
                                                    </td>
                                                    <td class="table-td ">2/6/2022</td>
                                                    <td class="table-td ">
                                                        <div class="min-w-[170px]">
                                                        <span class="text-slate-500 dark:text-slate-400">
                                                                <span class="block text-slate-600 dark:text-slate-300">Transfer</span>
                                                        <span class="block text-slate-500 text-xs">Trans ID: 8HG654Pk32</span>
                                                        </span>
                                                        </div>
                                                    </td>
                                                    <td class="table-td ">

                                                        <div class=" text-warning-500">
                                                        +$ 1,200.00
                                                        </div>

                                                    </td>
                                                    <td class="table-td ">
                                                        <div>
                                                        <div class="relative">
                                                            <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" id="transactionDropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                                                            shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    Edit</a>
                                                                </li>
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    Delete</a>
                                                                </li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    </tr>

                                                    <tr>
                                                    <td class="table-td">
                                                        <span class="flex">
                                                            <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                                <img src="assets/images/all-img/customer_1.png" alt="3" class="object-cover w-full h-full rounded-full">
                                                            </span>
                                                        <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                                        </span>
                                                    </td>
                                                    <td class="table-td ">9/6/2021</td>
                                                    <td class="table-td ">
                                                        <div class="min-w-[170px]">
                                                        <span class="text-slate-500 dark:text-slate-400">
                                                                <span class="block text-slate-600 dark:text-slate-300">Transfer</span>
                                                        <span class="block text-slate-500 text-xs">Trans ID: 8HG654Pk32</span>
                                                        </span>
                                                        </div>
                                                    </td>
                                                    <td class="table-td ">

                                                        <div class=" text-warning-500">
                                                        +$ 1,200.00
                                                        </div>

                                                    </td>
                                                    <td class="table-td ">
                                                        <div>
                                                        <div class="relative">
                                                            <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" id="transactionDropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                                                            shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    Edit</a>
                                                                </li>
                                                                <li>
                                                                <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                                    dark:hover:text-white">
                                                                    Delete</a>
                                                                </li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    </tr>

                                                </tbody>
                                                </table>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- END: Transactions -->
                                    <div class="card">
                                        <header class="card-header">
                                        <h4 class="card-title">
                                            History
                                        </h4>
                                        <div>
                                            <!-- BEGIN: Card Dropdown -->
                                            <div class="relative">
                                            <div class="dropdown relative">
                                                <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                    rounded dark:text-slate-400">
                                <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                            </span>
                                                </button>
                                                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                <li>
                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                        dark:hover:text-white">
                                                    Last 28 Days</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                        dark:hover:text-white">
                                                    Last Month</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                        dark:hover:text-white">
                                                    Last Year</a>
                                                </li>
                                                </ul>
                                            </div>
                                            </div>
                                            <!-- END: Card Droopdown -->
                                        </div>
                                        </header>
                                        <div class="card-body p-6">
                                        <div class="legend-ring4">
                                            <div id="history-chart"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                            <div class="card">
                                <header class="card-header">
                                <h4 class="card-title">
                                    Account Receivable
                                </h4>
                                <div>
                                    <!-- BEGIN: Card Dropdown -->
                                    <div class="relative">
                                    <div class="dropdown relative">
                                        <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                rounded dark:text-slate-400">
                            <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                        </span>
                                        </button>
                                        <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                            shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                        <li>
                                            <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    dark:hover:text-white">
                                            Last 28 Days</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    dark:hover:text-white">
                                            Last Month</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    dark:hover:text-white">
                                            Last Year</a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <!-- END: Card Droopdown -->
                                </div>
                                </header>
                                <div class="card-body p-6">
                                <div class="legend-ring4">
                                    <div id="account-receivable-chart"></div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <header class="card-header">
                                <h4 class="card-title">
                                    Account Payable
                                </h4>
                                <div>
                                    <!-- BEGIN: Card Dropdown -->
                                    <div class="relative">
                                    <div class="dropdown relative">
                                        <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                rounded dark:text-slate-400">
                            <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                        </span>
                                        </button>
                                        <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                            shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                        <li>
                                            <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    dark:hover:text-white">
                                            Last 28 Days</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    dark:hover:text-white">
                                            Last Month</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    dark:hover:text-white">
                                            Last Year</a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <!-- END: Card Droopdown -->
                                </div>
                                </header>
                                <div class="card-body p-6">
                                <div class="legend-ring4">
                                    <div id="payable-chart"></div>
                                </div>
                                </div>
                            </div>
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