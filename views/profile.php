<?php require_once "authorizer.php"; ?>
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
                    Profile</li>
                </ul>
              </div>
              <!-- END: BreadCrumb -->              

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
                        $18,680
                      </div>
                      <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Debits
                      </div>
                    </div>
                    <!-- end single -->
                    <div class="flex-1">
                      <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        $13,746
                      </div>
                      <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Credits
                      </div>
                    </div>
                    <!-- end single -->
                  </div>
                  <!-- profile info-500 -->
                </div>
                <!-- Feedback and response messages -->
                <div class="w-full md:w-1/2 d-flex mx-auto mb-2 justify-content-center relative">
                    <?php echo errorMessage(); echo successMessage(); ?>
                </div>

                <!-- User Profile Info -->
                <!-- <div class="grid grid-cols-12 gap-6 justify-center">
                  <div class="lg:col-span-4 col-span-12">
                    <div class="card h-full">
                      <header class="card-header">
                        <h4 class="card-title">Profile Info</h4>
                      </header>
                      <div class="card-body p-6">
                        <ul class="list space-y-8">
                          <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                              <iconify-icon icon="heroicons:map"></iconify-icon>
                            </div>
                            <div class="flex-1">
                              <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                USERNAME
                              </div>
                              <div class="text-base text-slate-600 dark:text-slate-50">
                                @<?php echo $userDetails['username'] ?>
                              </div>
                            </div>
                          </li>
                          
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
                        </ul>
                      </div>
                    </div>
                  </div>
                </div> -->

                <!-- Update Profile -->
                <div class="card w-full md:w-1/2 mx-auto set">
                  <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                      <div class="flex1">
                        <div class="card-title text-slate-900 dark:text-white">Update Profile </div>
                      </div>
                    </header>
                    <div class="card-body p-4">                      
                      <!-- Edit Profile -->
                      <div class="list space-y-8 ">
                        <form class="space-y-4" id="typeValidation" method="post" action="<?php echo CONTROLLER_DIR ?>updateAuth">
                          <div class="input-area relative">
                            <label for="largeInput" class="form-label">Username</label>
                            <div class="relative">
                              <input type="text" name="username" class="form-control !pl-9 checkInteraction"  value="<?php echo $userDetails['username'] ?>">
                              <iconify-icon icon="heroicons-outline:user" class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500"></iconify-icon>
                            </div>
                          </div>
                          <div class="input-area relative">
                            <label for="largeInput" class="form-label">Email</label>
                            <div class="relative">
                              <input type="email" name="email" class="form-control !pl-9 checkInteraction" value="<?php echo $userDetails['email'] ?>">
                              <iconify-icon icon="heroicons-outline:mail" class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500"></iconify-icon>
                            </div>
                          </div>
                          <div class="input-area relative">
                            <label for="largeInput" class="form-label">Phone</label>
                            <div class="relative">
                              <input type="tel" name="phone" class="form-control !pl-9 checkInteraction" value="<?php echo $userDetails['phone'] ?>" pattern="[0-9]">
                              <iconify-icon icon="heroicons-outline:phone" class="absolute left-2 top-1/2 -translate-y-1/2 text-base text-slate-500"></iconify-icon>
                            </div>
                          </div>
            
                          <button name="updateProfile" class="btn inline-flex justify-center btn-dark cursor-not-allowed light checkInteractionBtn" disabled>Submit</button>
                        </form>
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