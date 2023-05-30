@extends('layouts.master')

@section('title')
  Pharmacies
@endsection

@section('styles')
  @notifyCss
@endsection

@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="flex-auto p-4">
    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
      <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
        <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
          <h4 class="font-medium">Pharmacies</h4>
        </div>
        <!--end header-title-->
        <div class="grid grid-cols-1 p-4">
          <div class="sm:-mx-6 lg:-mx-8">
            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
              <table class="w-full">
                <thead class="bg-slate-700 dark:bg-slate-900/30">
                  <tr>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                      #
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                      Name
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                      City
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                      Phone No
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                      Shipping Support
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                      Status
                    </th>

                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                      Reference
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($pharmacies as $pharmacy)
                    <!-- 1 -->
                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                      <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                        <img src="assets/images/pharmacy/pharmacy.png" alt="pharmacy"
                          class="mr-2 h-8 rounded-full inline-block">{{ $i++ }}
                      </td>
                      <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ $pharmacy->name }}
                      </td>
                      <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ $pharmacy->ville }}
                      </td>
                      <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{ $pharmacy->phone1 }}
                      </td>
                      <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        @if ($pharmacy->support_shipping == 1)
                          <span
                            class="bg-green-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded ">YES</span>
                        @else
                          <span
                            class="bg-red-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded ">No</span>
                        @endif
                      </td>
                      <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        @if ($pharmacy->active == 1)
                          <span
                            class="bg-green-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded ">Active</span>
                        @else
                          <span class="bg-red-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded ">Not
                            Active</span>
                        @endif
                      </td>


                      <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <span class="bg-indigo-600/5 text-indigo-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">
                          {{ $pharmacy->reference }}</span>
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
                      <div class="relative w-auto pointer-events-none sm:my-7 sm:mx-auto z-[99] xl:max-w-6xl">
                        <div
                          class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded">
                          <div
                            class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-green-500">
                            <h6 class="mb-0 leading-4 text-base font-semibold text-slate-200 mt-0"
                              id="staticBackdropLabel1">Edit {{ $pharmacy->name }} informations </h6>
                            <button type="button"
                              class="box-content w-4 h-4 p-1 bg-green-700/60 rounded-full text-slate-300 leading-4 text-xl close"
                              aria-label="Close">×</button>
                          </div>
                          <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed">
                            <div class="grid grid-cols-8 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-8 gap-4">

                              <div class="col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-8">
                                <form method="POST" action="{{ route('pharmacy.edit') }}">
                                  @csrf
                                  <input type="hidden" name="pharmacy_id" value="{{ $pharmacy->id }}">
                                  <div class="relative z-0 mb-2 w-full group">
                                    <input type="text" name="name"
                                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                      placeholder=" " required="" value="{{ $pharmacy->name }}">
                                    <label for="name"
                                      class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pharmacy
                                      Name
                                    </label>
                                  </div>
                                  <div class="relative z-0 mb-2 w-full group">
                                    <input type="text" name="ville" id="ville"
                                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                      placeholder=" " required="" value="{{ $pharmacy->ville }}">
                                    <label for="ville"
                                      class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pharmacy
                                      City</label>
                                  </div>
                                  <div class="relative z-0 mb-2 w-full group">
                                    <input type="text" name="address" id="address"
                                      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                      placeholder=" " required="" value="{{ $pharmacy->address }}">
                                    <label for="address"
                                      class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pharmacy
                                      Adress
                                    </label>
                                  </div>
                                  <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <div class="relative z-0 mb-2 w-full group">
                                      <input type="text" name="description" id="description"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                        placeholder=" " required="" value="{{ $pharmacy->description }}">
                                      <label for="description"
                                        class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pharmacy
                                        Description
                                      </label>
                                    </div>
                                    <div class="grid xl:grid-cols-2 xl:gap-6">
                                      <fieldset>
                                        <legend class="sr-only">SHipping</legend>

                                        <div class="flex items-center mb-3">
                                          <input id="country-option-1" type="radio" name="support_shipping"
                                            value="1"
                                            class="w-4 h-4 border-gray-300  dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                            aria-labelledby="country-option-1" aria-describedby="country-option-1"
                                            {{ $pharmacy->support_shipping == 1 ? 'checked' : '' }}>
                                          <label for="country-option-1"
                                            class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Support Shipping
                                          </label>
                                        </div>

                                        <div class="flex items-center mb-3">
                                          <input id="country-option-2" type="radio" name="support_shipping"
                                            value="0"
                                            class="w-4 h-4 border-gray-300  dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                            aria-labelledby="country-option-2"
                                            {{ $pharmacy->support_shipping == 0 ? 'checked' : '' }}
                                            aria-describedby="country-option-2">
                                          <label for="country-option-2"
                                            class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Not Support Shipping
                                          </label>
                                        </div>



                                      </fieldset>

                                    </div>

                                    <div class="relative z-0 mb-2 w-full group">
                                      <input type="text" name="phone1" id="phone1"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                        placeholder=" " required="" value="{{ $pharmacy->phone1 }}">
                                      <label for="phone1"
                                        class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pharmacy
                                        Phone</label>
                                    </div>
                                  </div>
                                  <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <fieldset>
                                      <legend class="sr-only">Countries</legend>

                                      <div class="flex items-center mb-3">
                                        <input id="country-option-1" type="radio" name="status" value="1"
                                          class="w-4 h-4 border-gray-300  dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                          aria-labelledby="country-option-1" aria-describedby="country-option-1"
                                          {{ $pharmacy->active == 1 ? 'checked' : '' }}>
                                        <label for="country-option-1"
                                          class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                          Active
                                        </label>
                                      </div>

                                      <div class="flex items-center mb-3">
                                        <input id="country-option-2" type="radio" name="status" value="0"
                                          class="w-4 h-4 border-gray-300  dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                          aria-labelledby="country-option-2"
                                          {{ $pharmacy->active == 0 ? 'checked' : '' }}
                                          aria-describedby="country-option-2">
                                        <label for="country-option-2"
                                          class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                          Not Active
                                        </label>
                                      </div>



                                    </fieldset>

                                  </div>
                                  <div
                                    class="flex flex-wrap shrink-0 justify-end p-3  rounded-b border-t border-dashed dark:border-gray-700">
                                    <button
                                      class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mr-1 close">Close</button>
                                    <button type="submit"
                                      class="inline-block focus:outline-none text-green-500 hover:bg-green-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-green-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-green-500  text-sm font-medium py-1 px-3 rounded">Save</button>
                                  </div>
                                </form>
                              </div>
                            </div>
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
@endsection
@section('scripts')
  <x-notify::notify />

  @notifyJs
@endsection
