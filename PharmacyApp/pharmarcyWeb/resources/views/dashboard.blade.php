@extends('layouts.master')

@section('title')
  Dashboard
@endsection

@section('styles')
@endsection

@section('content')
  <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-276px)] px-4 pt-[54px] duration-300">
    <div class="xl:w-full">
      <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
          <div class="w-full">
            <div class="">
              <div class="flex flex-wrap justify-between">
                <div class="items-center ">
                  <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Starter</h1>
                  <ol class="list-reset flex text-sm">
                    <li><a href="#" class="text-gray-500">Dashboard</a></li>
                    <li><span class="text-gray-500 mx-2">/</span></li>
                    <li class="text-gray-500">Pages</li>
                    <li><span class="text-gray-500 mx-2">/</span></li>
                    <li class="text-blue-600 hover:text-blue-700">Dashboard</li>
                  </ol>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end container-->

    <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 ">

      <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">

        <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
          <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
              <h4 class="font-medium">Title</h4>
            </div>
            <!--end header-title-->
            <div class="flex-auto p-4">

            </div>
            <!--end card-body-->
          </div>
          <!--end card-->
        </div>
        <!--end col-->
      </div>
      <!--end inner-grid-->

      <!-- footer -->
      <div class="absolute bottom-0 left-0 right-0 block print:hidden">
        <div class="">
          <!-- Footer Start -->
          <footer
            class="footer mt-4 rounded-tr-md rounded-tl-md bg-transparent py-4 text-center font-medium text-slate-600 dark:text-slate-400 md:text-left">
            &copy;
            <script>
              var year = new Date();
              document.write(year.getFullYear());
            </script>
            Tailfox
            <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted with <i
                class="ti ti-heart text-red-500"></i> by
              Mannatthemes</span>
          </footer>
          <!-- end Footer -->
        </div>
      </div>


    </div>
    <!--end container-->
  </div>
@endsection
@section('scripts')
@endsection
