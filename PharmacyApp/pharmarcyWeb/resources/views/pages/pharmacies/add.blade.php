@extends('layouts.master')

@section('title')
  Ajouter une Pharmacies
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
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <div class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                        <i class="fas fa-triangle-exclamation flex-shrink-0 text-red-700"></i>
                        <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                          {{ $error }} </div>
                        <button type="button"
                          class="justify-center items-center ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300 alert-hidden">

                          <i class="fas fa-xmark"></i>
                        </button>
                      </div>
                    @endforeach
                  </ul>
                </div>
              @endif

              <h4 class="font-medium">Ajouter une Pharmacie</h4>
            </div>
            <!--end header-title-->
            <div class="flex-auto p-4">
              <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">

                  <!--end header-title-->
                  <div class="grid grid-cols-1 p-4">
                    <div class="sm:-mx-6 lg:-mx-8">
                      <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                        <form method="POST" action="{{ route('pharmacie.store') }}">
                          @csrf
                          <div class="mb-2">
                            <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                              Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                            @error('name')
                            @enderror
                          </div>
                          <div class="mb-2">
                            <label for="description"
                              class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy Description</label>
                            <input type="text" id="description" name="description" value="{{ old('description') }}"
                              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                              required="">
                          </div>
                          <div class="mb-2">
                            <label for="address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                              Address</label>
                            <input type="text" id="address" name="address" value="{{ old('address') }}"
                              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                              required="">
                          </div>
                          <div class="mb-2">
                            <label for="phone1" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                              Phone Number
                            </label>
                            <input type="text" id="phone1" name="phone1" value="{{ old('phone1') }}"
                              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                              required="">
                          </div>
                          <div class="mb-2">
                            <label for="phone2" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                              Phone Number 2
                            </label>
                            <input type="text" id="phone2" name="phone2" value="{{ old('phone2') }}"
                              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                              required="">
                          </div>
                          <div class="mb-2">
                            <label for="website" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                              Website
                            </label>
                            <input type="text" id="website" name="website" value="{{ old('website') }}"
                              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                              required="">
                          </div>
                          <div class="mb-2">
                            <label for="longitude" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                              Location (Longitude)
                            </label>
                            <input type="text" id="longitude" name="longitude" value="{{ old('longitude') }}"
                              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                              required="">
                          </div>
                          <div class="mb-2">
                            <label for="latitude"
                              class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                              Location (Latitude)
                            </label>
                            <input type="text" id="latitude" name="latitude" value="{{ old('latitude') }}"
                              class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                          </div>


                          <button type="submit"
                            class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1">Submit</button>
                          <button type="text"
                            class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mb-1">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!--end card-body-->
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
@endsection
