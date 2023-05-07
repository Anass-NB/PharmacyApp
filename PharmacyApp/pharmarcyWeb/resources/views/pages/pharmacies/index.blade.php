@extends('layouts.master')

@section('title')
  Pharmacies
@endsection

@section('styles')
  @notifyCss
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
                  <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Pharmacies</h1>
                  <ol class="list-reset flex text-sm">
                    <li><a href="#" class="text-gray-500">Pharmacies</a></li>
                    <li><span class="text-gray-500 mx-2">/</span></li>
                    <li class="text-gray-500">Pages</li>
                    <li><span class="text-gray-500 mx-2">/</span></li>
                    <li class="text-blue-600 hover:text-blue-700">Pharmacies</li>
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
              <h4 class="font-medium">Tous les Pharmacies</h4>
            </div>
            <!--end header-title-->
            <div class="flex-auto p-4">
              <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                  <div
                    class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium">Pharmacies</h4>
                  </div>
                  <!--end header-title-->
                  <div class="grid grid-cols-1 p-4">
                    <div class="sm:-mx-6 lg:-mx-8">
                      <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                        <table class="w-full">
                          <thead class="bg-slate-700 dark:bg-slate-900/30">
                            <tr>
                              <th scope="col"
                                class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                #
                              </th>
                              <th scope="col"
                                class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                Name
                              </th>
                              <th scope="col"
                                class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                Phone No
                              </th>
                              <th scope="col"
                                class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                Address
                              </th>
                              <th scope="col"
                                class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                Action
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($pharmacies as $pharmacy)
                              <!-- 1 -->
                              <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                  <img src="assets/images/pharmacy/pharmacy.png" alt="pharmacy"
                                    class="mr-2 h-8 rounded-full inline-block">{{ $pharmacy->id }}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                  {{ $pharmacy->name }}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                  {{ $pharmacy->phone1 }}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                  <span
                                    class="bg-indigo-600/5 text-indigo-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">
                                    {{ $pharmacy->address }}</span>
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                  <form action="{{ route('pharmacie.delete') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="pharmacy_id" value="{{ $pharmacy->id }}">
                                    <button type="submit">
                                      <i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i>
                                    </button>
                                  </form>



                                  <a href="#edit_pharmacy_{{ $pharmacy->id }}" data-modal-toggle="modal">
                                    <i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                </td>
                              </tr>
                              {{-- Edit pharmacy Modal --}}
                              <div class="modal animate-ModalSlide" id="edit_pharmacy_{{ $pharmacy->id }}">
                                <div class="relative w-auto pointer-events-none sm:max-w-lg sm:my-7 sm:mx-auto z-[99]">
                                  <div
                                    class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded">
                                    <div
                                      class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-green-500">
                                      <h6 class="mb-0 leading-4 text-base font-semibold text-slate-200 mt-0"
                                        id="staticBackdropLabel1">Ed it {{ $pharmacy->name }}</h6>
                                      <button type="button"
                                        class="box-content w-4 h-4 p-1 bg-green-700/60 rounded-full text-slate-300 leading-4 text-xl close"
                                        aria-label="Close">×</button>
                                    </div>
                                    <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed">
                                      <div
                                        class="grid grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 md:col-span-12 lg:col-span-4 xl:col-span-4">
                                          <img src="assets/images/widgets/rocket.gif" alt="" class="h-32 w-32">
                                        </div>
                                        <div class="col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-8">
                                          <h5 class="text-gray-700 mr-3 dark:text-slate-200 text-lg font-medium">Crypto
                                            Market Services</h5>
                                          <p class="truncate text-gray-500 dark:text-slate-500 text-sm font-normal">
                                            <span
                                              class="bg-slate-600/5 text-slate-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Disable
                                              Services</span>
                                            07 Oct 2023
                                          </p>
                                          <ul class="list-disc list-inside mt-3">
                                            <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm">Lorem Ipsum is
                                              dummy text.</li>
                                            <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm">It is a long
                                              established reader.</li>
                                            <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm">Contrary to
                                              popular belief, Lorem simply.</li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="flex flex-wrap shrink-0 justify-end p-3  rounded-b border-t border-dashed dark:border-gray-700">
                                      <button
                                        class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mr-1 close">Close</button>
                                      <button
                                        class="inline-block focus:outline-none text-green-500 hover:bg-green-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-green-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-green-500  text-sm font-medium py-1 px-3 rounded">Save</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!--end card-body-->
                </div>
                <div class="">
                  {!! $pharmacies->links() !!}
                </div>
                <!--end card-->
              </div>
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
  <x-notify::notify />

  @notifyJs
@endsection
