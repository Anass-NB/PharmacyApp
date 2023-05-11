<div class="leftbar-tab min-w-[260px] z-[99] duration-300 print:hidden">
  <div
    class="flex w-[60px] bg-iconbar dark:bg-slate-800 py-4 items-center fixed top-0 z-[99]
          rounded-[100px] m-4 flex-col h-[calc(100%-30px)]">
    <a href="index.html" class="block text-center logo">
      <span>
        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm
                h-8">
      </span>
    </a>

    <div class="icon-body max-h-full w-full overflow-hidden">
      <div class="relative h-full">
        <ul class="flex-col w-[60px] items-center mt-[60px] flex-1 border-b-0 tab-menu" id="tab-menu"
          data-tabs-toggle="#Icon-menu">
          <li class="my-0 flex justify-center menu-items" role="presentation">
            <button
              class="inline-block py-4 px-4 text-sm font-medium relative
                    text-center text-gray-700 rounded-t-lg border-0
                    border-transparent hover:text-primary-500
                    dark:text-gray-400 dark:hover:text-primary-400 menu-link"
              id="Dashboards-tab" data-tabs-target="#Dashboards" type="button" role="tab"
              aria-controls="Dashboards" aria-selected="false">
              <i class="ti ti-smart-home text-3xl"></i>
            </button>
          </li>
          <li class="my-0 flex justify-center menu-items" role="presentation">
            <button
              class="inline-block py-4 px-4 text-sm font-medium relative
                    text-center text-gray-700 rounded-t-lg border-0
                    border-transparent hover:text-primary-500
                    dark:text-gray-400 dark:hover:text-primary-400 menu-link"
              id="Apps-tab" data-tabs-target="#Apps" type="button" role="tab" aria-controls="Apps"
              aria-selected="false">
              <i class="ti ti-apps text-3xl"></i>
            </button>
          </li>
          <li class="my-0 flex justify-center menu-items" role="presentation">
            <button
              class="inline-block py-4 px-4 text-sm font-medium relative
                    text-center text-gray-700 rounded-t-lg border-0
                    border-transparent hover:text-primary-500
                    dark:text-gray-400 dark:hover:text-primary-400 menu-link"
              id="Uikit-tab" data-tabs-target="#Uikit" type="button" role="tab" aria-controls="Uikit"
              aria-selected="false">
              <i class="ti ti-planet text-3xl"></i>
            </button>
          </li>
          <li class="my-0 flex justify-center menu-items" role="presentation">
            <button
              class="inline-block py-4 px-4 text-sm font-medium relative
                    text-center text-gray-700 rounded-t-lg border-0
                    border-transparent hover:text-primary-500
                    dark:text-gray-400 dark:hover:text-primary-400 menu-link"
              id="Pages-tab" data-tabs-target="#Pages" type="button" role="tab" aria-controls="Pages"
              aria-selected="false">
              <i class="ti ti-files text-3xl"></i>
            </button>
          </li>
          <li class="my-0 flex justify-center menu-items" role="presentation">
            <button
              class="inline-block py-4 px-4 text-sm font-medium relative
                    text-center text-gray-700 rounded-t-lg border-0
                    border-transparent hover:text-primary-500
                    dark:text-gray-400 dark:hover:text-primary-400 menu-link"
              id="Authentication-tab" data-tabs-target="#Authentication" type="button" role="tab"
              aria-controls="Authentication" aria-selected="false">
              <i class="ti ti-shield-lock text-3xl"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
    <div class="flex flex-col items-center mt-auto bg-iconbar dark:bg-slate-800 shrink-0">
      <a href="">
        <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-full w-8 h-8">
      </a>
    </div>
  </div>
  <div
    class="main-menu-inner h-full w-[200px] my-4  fixed top-0 z-[99] left-[calc(60px+16px)] rtl:right-[calc(60px+16px)] rtl:left-0 rounded-lg transition delay-150 duration-300 ease-in-out">
    <div class="main-menu-inner-logo">
      <div class="flex items-center">
        <a href="index.html" class="leading-[60px]">
          <img src="assets/images/logo-2.png" alt=""
            class="inline-block dark:hidden h-[15px] ltr:ml-4 rtl:ml-0 rtl:mr-4">
          <img src="assets/images/logo.png" alt=""
            class=" hidden dark:inline-block h-[15px] ltr:ml-4 rtl:ml-0 rtl:mr-4">
        </a>
        <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 ml-auto block xl:hidden">
          <button id="toggle-menu-hide-2" class="button-menu-mobile-2 flex rounded-full md:mr-0 relative">
            <i class="ti ti-chevrons-left top-icon text-3xl"></i>
          </button>
        </div>
      </div>
      <div class="menu-body h-[calc(100vh-60px)] p-4" data-simplebar>
        <div id="Icon-menu">
          <div class="hidden" id="Dashboards" role="tabpanel" aria-labelledby="Dashboards-tab">
            <div class="title-box mb-3">
              <h6 class="text-sm font-medium uppercase text-slate-400">Dashboards</h6>
            </div>
            <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
              <li class="nav-item relative block">
                <a href="{{ route('pharmacies.index') }}"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Pharmacies
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="{{ route('pharmacies.add') }}"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Ajouter une Pharmacie
                </a>
              </li>

            </ul>
          </div>
          <div class="hidden" id="Apps" role="tabpanel" aria-labelledby="Apps-tab">
            <div class="title-box mb-3">
              <h6 class="text-sm font-medium uppercase text-slate-400">Applications</h6>
            </div>
            <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
              <li>
                <div id="accordion-flush" data-accordion="collapse" data-active-classes=""
                  data-inactive-classes="text-gray-700 hover:text-primary-500 dark:text-gray-400">

                  <div id="Apps-Analytics">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Analytics-flush" aria-expanded="false" aria-controls="Analytics-flush">
                      <span>Analytics</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Analytics-flush" class="collapse-menu hidden" aria-labelledby="Apps-Analytics">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">

                      <li class="nav-item relative block">
                        <a href="analytics-customers.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Customers
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="analytics-reports.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Reports
                        </a>
                      </li>
                    </ul>
                  </div>



            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
