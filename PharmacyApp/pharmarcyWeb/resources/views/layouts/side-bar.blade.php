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

                  <div id="Apps-Crypto">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Crypto-flush" aria-expanded="false" aria-controls="Crypto-flush">
                      <span>Crypto</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Crypto-flush" class="collapse-menu hidden" aria-labelledby="Apps-Crypto">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="crypto-exchange.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Exchange
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="crypto-wallet.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Wallet
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="crypto-news.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Crypto News
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="crypto-ico.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          ICO List
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="crypto-settings.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Settings
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="Apps-CRM">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#CRM-flush" aria-expanded="false" aria-controls="CRM-flush">
                      <span>CRM</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="CRM-flush" class="collapse-menu hidden" aria-labelledby="Apps-CRM">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="crm-contacts.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Contacts
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="crm-opportunities.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Opportunities
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="crm-leads.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Leads
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="crm-customers.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Customers
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="Apps-Projects">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Projects-flush" aria-expanded="false" aria-controls="Projects-flush">
                      <span>Projects</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Projects-flush" class="collapse-menu hidden" aria-labelledby="Apps-Projects">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="projects-clients.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Clients
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="projects-team.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Team
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="projects-project.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Projects
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="projects-task.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Tasks
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="projects-kanban-board.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Kanban Board
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="projects-chat.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Chat
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="projects-users.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Users
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="projects-create.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Project Create
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="Apps-Ecommerce">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Ecommerce-flush" aria-expanded="false" aria-controls="Ecommerce-flush">
                      <span>Ecommerce</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Ecommerce-flush" class="collapse-menu hidden" aria-labelledby="Apps-Ecommerce">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="ecommerce-products.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Products
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ecommerce-product-list.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Product List
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ecommerce-product-detail.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Product Detail
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ecommerce-cart.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Cart
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ecommerce-checkout.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Chackout
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="Apps-Helpdesk">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer "
                      data-accordion-target="#Helpdesk-flush" aria-expanded="false" aria-controls="Helpdesk-flush">
                      <span>Helpdesk</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Helpdesk-flush" class="collapse-menu hidden" aria-labelledby="Apps-Helpdesk">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="helpdesk-tickets.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Tickets
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="helpdesk-reports.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Reports
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="helpdesk-agents.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Agents
                        </a>
                      </li>
                    </ul>
                  </div>


                  <div id="Apps-Email">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Email-flush" aria-expanded="false" aria-controls="Email-flush">
                      <span>Email</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Email-flush" class="collapse-menu hidden" aria-labelledby="Apps-Email">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="apps-email-inbox.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Inbox
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="apps-email-read.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Read Email
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>

              <li class="nav-item relative block">
                <a href="apps-chat.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Chat
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="apps-contact-list.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Contact List
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="apps-calendar.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Calendar
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="apps-invoice.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Invoice
                </a>
              </li>
            </ul>
          </div>
          <div class="hidden" id="Uikit" role="tabpanel" aria-labelledby="Uikit-tab">
            <div class="title-box mb-3">
              <h6 class="text-sm font-medium uppercase text-slate-400">UI Kit</h6>
            </div>
            <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
              <li class="nav-item relative block">
                <div id="UI-flush" data-accordion="collapse" data-active-classes=""
                  data-inactive-classes="text-gray-700 hover:text-primary-500 dark:text-gray-400">

                  <div id="UIKit-Elements">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#UI-Elements" aria-expanded="false" aria-controls="UI-Elements">
                      <span>UI Elements</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="UI-Elements" class="collapse-menu hidden" aria-labelledby="UIKit-Elements">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="ui-alerts.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Alerts
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-avatar.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Avatar
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-buttons.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Buttons
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-badges.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Badges
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-cards.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Crads
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-carousels.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Carousels
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-dropdowns.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Dropdowns
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-grids.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Grids
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-images.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Images
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-lists.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Lists
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-modals.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Modals
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-navs.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Navs
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-navbar.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Navbar
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-paginations.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Paginations
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-popover-tooltips.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Popover & Tooltips
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-progress.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Progress
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-spinners.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Spinners
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-tabs-accordions.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Tabs & Accordions
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-typography.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Typography
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="ui-videos.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Videos
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="UIKit-Advanced">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#AdvancedUI-flush" aria-expanded="false"
                      aria-controls="AdvancedUI-flush">
                      <span>Advanced UI</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="AdvancedUI-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Advanced">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="advanced-animation.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Animation
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="advanced-clipboard.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Clip Board
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="advanced-dragula.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Dragula
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="advanced-files.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          File Manager
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="advanced-highlight.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Highlight
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="advanced-rangeslider.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Range Slider
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="advanced-ratings.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Ratings
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="advanced-ribbons.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Ribbons
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="advanced-sweetalerts.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Sweet Alerts
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="UIKit-Forms">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Forms-flush" aria-expanded="false" aria-controls="Forms-flush">
                      <span>Forms</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Forms-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Forms">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="forms-elements.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Basic Elements
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="forms-advance.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Advance Elements
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="forms-validation.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Validation
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="forms-wizard.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Wizard
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="forms-editors.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Editors
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="forms-uploads.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          File Upload
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="forms-img-crop.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Image Crop
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="UIKit-Charts">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Charts-flush" aria-expanded="false" aria-controls="Charts-flush">
                      <span>Charts</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Charts-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Charts">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="charts-apex.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Apex
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="charts-echarts.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Echarts
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="charts-justgage.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          JustGage
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="charts-chartjs.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Chartjs
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="charts-toast-ui.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Toast
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="UIKit-Tables">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Tables-flush" aria-expanded="false" aria-controls="Tables-flush">
                      <span>Tables</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Tables-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Tables">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="tables-basic.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Basic
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="tables-datatable.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Datatables
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="tables-editable.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Editable
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="UIKit-Icons">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer "
                      data-accordion-target="#Icons-flush" aria-expanded="false" aria-controls="Icons-flush">
                      <span>Icons</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Icons-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Icons">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="icons-materialdesign.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Material Design
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="icons-fontawesome.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Fontawesome
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="icons-tabler.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Tabler
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="icons-feather.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Feather
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div id="UIKit-Maps">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500  font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Maps-flush" aria-expanded="false" aria-controls="Maps-flush">
                      <span>Maps</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Maps-flush" class="collapse-menu hidden" aria-labelledby="UIKit-Maps">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="maps-google.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Google Maps
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="maps-leaflet.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Leaflet Maps
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="maps-vector.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Vector Maps
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div id="UIKit-Email-Templates">
                    <a href="#"
                      class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4 cursor-pointer  "
                      data-accordion-target="#Email-Templates-flush" aria-expanded="false"
                      aria-controls="Email-Templates-flush">
                      <span>Email Templates</span>
                      <i class="fas fa-angle-down ml-auto inline-block text-sm transform transition-transform duration-300"
                        data-accordion-icon></i>
                    </a>
                  </div>
                  <div id="Email-Templates-flush" class="collapse-menu hidden"
                    aria-labelledby="UIKit-Email-Templates">
                    <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                      <li class="nav-item relative block">
                        <a href="email-templates-basic.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Basic Action Email
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="email-templates-alert.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Alert Email
                        </a>
                      </li>
                      <li class="nav-item relative block">
                        <a href="email-templates-billing.html"
                          class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                          Billing Email
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="hidden" id="Pages" role="tabpanel" aria-labelledby="Pages-tab">
            <div class="title-box mb-3">
              <h6 class="text-sm font-medium uppercase text-slate-400">Pages</h6>
            </div>
            <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
              <li class="nav-item relative block">
                <a href="pages-profile.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Profile
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="pages-tour.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Tour
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="pages-timeline.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Timeline
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="pages-treeview.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Treeview
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="pages-starter.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Starter Page
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="pages-pricing.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Pricing
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="pages-blogs.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Blogs
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="pages-faq.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  FAQs
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="pages-gallery.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Gallery
                </a>
              </li>
            </ul>
          </div>
          <div class="hidden" id="Authentication" role="tabpanel" aria-labelledby="Authentication-tab">
            <div class="title-box mb-3">
              <h6 class="text-sm font-medium uppercase text-slate-400">Authentication</h6>
            </div>
            <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
              <li class="nav-item relative block">
                <a href="auth-login.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Login
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-login-alt.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Login-alt
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-register.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Register
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-register-alt.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Register-alt
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-recover-pw.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Re-Password
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-recover-pw-alt.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Re-Password-alt
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-lock-screen.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Lock Screen
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-lock-screen-alt.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Lock Screen-alt
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-404.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Error 404
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-404-alt.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Error 404-alt
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-500.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Error 500
                </a>
              </li>
              <li class="nav-item relative block">
                <a href="auth-500-alt.html"
                  class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                  Error 500-alt
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
