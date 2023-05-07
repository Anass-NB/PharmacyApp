<div class="fixed ltr:left-0 ltr:right-4 rtl:right-0 rtl:left-4 print:hidden z-50">
  <nav id="topbar"
    class="topbar border-gray-200  relative ltr:ml-0 rtl:ml-0 ltr:lg:ml-0  rtl:lg:mr-0   ltr:xl:ml-[calc(260px+32px)]  rtl:xl:mr-[calc(260px+32px)] duration-300
             block ">
    <div class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">
      <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 ml-4 xl:ml-0">
        <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:mr-0 relative">
          <i class="ti ti-chevrons-left text-3xl  top-icon"></i>
        </button>
      </div>
      <div class="flex items-center md:w-[40%] lg:w-[30%] xl:w-[20%]">
        <div class="relative ltr:mr-2 rtl:mr-0 rtl:ml-2 hidden lg:mr-4 md:block lg:block w-full">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center
                    pl-3">
            <i class="ti ti-search text-gray-400 z-10"></i>
          </div>
          <input type="text" id="email-adress-icon"
            class="block w-full rounded-lg border border-slate-200 dark:border-slate-700/60 bg-slate-200/10 p-2
                    pl-10 text-slate-600 dark:text-slate-400 outline-none focus:border-slate-300
                    focus:ring-slate-300 dark:bg-slate-800/20 sm:text-sm"
            placeholder="Search..." />
        </div>
      </div>
      <div class="order-1 ltr:ml-auto rtl:ml-0 rtl:mr-auto flex items-center md:order-2">

        <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4">
          <button id="toggle-theme" class="flex rounded-full md:mr-0 relative">
            <i class="ti ti-moon text-3xl top-icon"></i>
          </button>
        </div>
        <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 dropdown relative">
          <button type="button" class="dropdown-toggle flex rounded-full md:mr-0" id="Notifications"
            aria-expanded="false" data-dropdown-toggle="navNotifications">
            <i class="ti ti-bell text-3xl top-icon"></i>
          </button>

          <div
            class="dropdown-menu dropdown-menu-right z-50 my-1 hidden w-64
                    list-none divide-y h-52 divide-gray-100 rounded border-slate-700
                    md:border-white text-base shadow dark:divide-gray-600 bg-white
                    dark:bg-slate-800"
            id="navNotifications" data-simplebar>
            <ul class="py-1" aria-labelledby="navNotifications">
              <li class="py-2 px-4">
                <a href="javascript:void(0);" class="dropdown-item">
                  <div class="flex align-items-start">
                    <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3" src="assets/images/users/avatar-2.jpg"
                      alt="logo" />
                    <div class="flex-grow ml-0.5 overflow-hidden">
                      <p
                        class="text-sm font-medium text-gray-800 truncate
                                dark:text-gray-300">
                        Karen Robinson</p>
                      <p class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                        Hey ! i'm available here
                      </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="py-2 px-4">
                <a href="javascript:void(0);" class="dropdown-item">
                  <div class="flex align-items-start">
                    <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3" src="assets/images/users/avatar-3.jpg"
                      alt="logo" />
                    <div class="flex-grow ml-0.5 overflow-hidden">
                      <p
                        class="text-sm font-medium text-gray-800 truncate
                                dark:text-gray-300">
                        Your order is placed</p>
                      <p class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                        Dummy text of the printing and industry.
                      </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="py-2 px-4">
                <a href="javascript:void(0);" class="dropdown-item">
                  <div class="flex align-items-start">
                    <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3" src="assets/images/users/avatar-9.jpg"
                      alt="logo" />
                    <div class="flex-grow ml-0.5 overflow-hidden">
                      <p
                        class="text-sm font-medium text-gray-800 truncate
                                dark:text-gray-300">
                        Robert McCray</p>
                      <p class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                        Good Morning!
                      </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="py-2 px-4">
                <a href="javascript:void(0);" class="dropdown-item">
                  <div class="flex align-items-start">
                    <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3" src="assets/images/users/avatar-6.jpg"
                      alt="logo" />
                    <div class="flex-grow ml-0.5 overflow-hidden">
                      <p
                        class="text-sm font-medium text-gray-800 truncate
                                dark:text-gray-300">
                        Meeting with designers</p>
                      <p class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                        It is a long established fact that a reader.
                      </p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="mr-2 lg:mr-0 dropdown relative">
          <button type="button"
            class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0"
            id="user-profile" aria-expanded="false" data-dropdown-toggle="navUserdata">
            <img class="h-8 w-8 rounded-full" src="assets/images/users/avatar-1.jpg" alt="user photo" />
            <span class="ltr:ml-2 rtl:ml-0 rtl:mr-2 hidden text-left xl:block">
              <span class="block font-medium text-slate-600 dark:text-gray-400">{{ auth()->user()->name }}</span>
              <span class="-mt-1 block text-xs text-slate-500 dark:text-gray-500">Admin</span>
            </span>
          </button>

          <div
            class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border-slate-700 md:border-white
                    text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
            id="navUserdata">
            <div class="py-3 px-4">
              <span class="block text-sm font-medium text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
              <span
                class="block truncate text-sm font-normal text-gray-500
                        dark:text-gray-400">{{ auth()->user()->email }}</span>
            </div>
            <ul class="py-1" aria-labelledby="navUserdata">
              <li>
                <a href="#"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Settings</a>
              </li>
              <li>
                <a href="#"
                  class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Earnings</a>
              </li>
              <li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit"
                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                        dark:text-gray-200 dark:hover:bg-gray-900/20
                        dark:hover:text-white">Sign
                    out</button>
                </form>

              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
