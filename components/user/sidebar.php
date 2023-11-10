<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>

      <div class="logo-segment">
        <a class="flex items-center" href="index.html">
          <img src="<?php echo BASE_URL;?>assets/images/logo/logo-c.svg" class="black_logo" alt="logo">
          <img src="<?php echo BASE_URL;?>assets/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
          <span class="ltr:ml-3 text-xl font-Inter font-bold text-slate-900 dark:text-white"><?php echo BRAND_NAME; ?></span>
        </a>
        <!-- Sidebar close icon for mobile -->
        <button class="sidebarCloseIcon text-2xl inline-block md:hidden">
          <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
      </div>

      <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
      <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
          <li class="sidebar-menu-title">MENU</li>

          <!-- Menu items -->
          <li class="">
            <a href="<?php echo VIEW_DIR ?>dashboard" class="navItem <?php echo $activePage == 'dashboard' ? 'active': ''; ?>">
              <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                <span>Dashboard</span>
              </span>
            </a>
          </li>

          <li class="">
            <a class="navItem">
              <span class="flex items-center">
                <iconify-icon class="nav-icon" icon="heroicons-outline:chat"></iconify-icon>
                <span>My Wallet</span>
              </span>
            </a>
          </li>

          <li class="">
            <a class="navItem">
              <span class="flex items-center">
                <iconify-icon class="nav-icon" icon="heroicons-outline:chat"></iconify-icon>
                <span>My Accounts</span>
              </span>
            </a>
          </li>

          <li>
            <a class="navItem">
              <span class="flex items-center">
                <iconify-icon class="nav-icon" icon="heroicons-outline:chat"></iconify-icon>
                <span>Transactions</span>
              </span>
            </a>
          </li>

          <li class="">
            <a class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:mail"></iconify-icon>
            <span>Messages</span>
              </span>
            </a>
          </li>

          <li class="sidebar-menu-title">UTILITIES</li>
                    
          <!-- Utilities -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                <span>Buy Airtime</span>
              </span>
            </a>
          </li>

          <li class="">
            <a href="#" class="navItem">
              <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:mail"></iconify-icon>
                <span>Pay Bills</span>
              </span>
            </a>
          </li>

          <li class="">
            <a href="#" class="navItem">
              <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:mail"></iconify-icon>
                <span>Send/Receive Money</span>
              </span>
            </a>
          </li>

          <!-- Account -->
          <li class="sidebar-menu-title">ACCOUNT</li>

          <li>
            <a href="#" class="navItem">
               <span class="flex items-center">
                  <iconify-icon class="nav-icon" icon="heroicons-outline:cog"></iconify-icon>
                  <span>Settings</span>
               </span>
               <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="<?php echo VIEW_DIR ?>profile" class="navItem <?php echo $activePage == 'profile' ? 'active': ''; ?>">My Profile</a>
              </li>
              <li>
                <a href="<?php echo VIEW_DIR ?>set-pin" class="navItem <?php echo $activePage == 'change-pin' ? 'active': ''; ?>">Transaction Pin</a>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="#" class="navItem">
              <span class="flex items-center">
                <iconify-icon class="nav-icon" icon="heroicons-outline:mail"></iconify-icon>
                <span>Support</span>
              </span>
            </a>
          </li>
        </ul>

        <!-- Upgrade Your Business Plan Card Start -->
        <div class="bg-slate-900 mb-10 mt-24 p-4 relative text-center rounded-2xl text-white" id="sidebar_bottom_wizard">
          <img src="<?php echo BASE_URL;?>assets/images/svg/rabit.svg" alt="" class="mx-auto relative -mt-[73px]">
          <div class="max-w-[160px] mx-auto mt-6">
            <div class="widget-title font-Inter mb-1">Unlimited Access</div>
            <div class="text-xs font-light font-Inter">
              Upgrade your system to business plan
            </div>
          </div>
          <div class="mt-6">
            <button class="bg-white hover:bg-opacity-80 text-slate-900 text-sm font-Inter rounded-md w-full block py-2 font-medium">
              Upgrade
            </button>
          </div>
        </div>
      </div>
    </div>