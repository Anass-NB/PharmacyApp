@extends('layouts.master')

@section('title')
  Add new Pharmacy
@endsection


@section('styles')
@endsection

@section('content')
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
                </div>
                <div class="mb-2">
                  <label for="city" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                    City</label>
                  <input type="text" id="city" name="city" value="{{ old('city') }}"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                </div>
                <div class="mb-2">
                  <label for="description" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                    Description</label>
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
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                </div>
                <div class="mb-2">
                  <label for="website" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
                    Website
                  </label>
                  <input type="text" id="website" name="website" value="{{ old('website') }}"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
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
                  <label for="latitude" class="font-medium text-sm text-slate-600 dark:text-slate-400">Pharmacy
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
@endsection
@section('scripts')
@endsection
