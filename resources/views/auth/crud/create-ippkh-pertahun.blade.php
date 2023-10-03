@extends('auth.layouts.main')

@section('content')
    <div class="max-w-screen-md">
        <form method="POST" action="/home/history" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            @csrf
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Data IPPKH
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                {{-- <div class="grid grid-cols-6 gap-6"> --}}
                <div class="col-span-6 sm:col-span-3">
                    <label for="data_ippkh_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Perusahaan</label>
                    <select id="data_ippkh_id" name="data_ippkh_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>-- Pilih Perusahaan --</option>
                        @foreach ($ippkh as $data)
                            <option value="{{ $data->id }}">{{ $data->pt }} | {{ $data->nomor_sk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="l1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white first-letter:uppercase">l1</label>
                    <input type="text" name="l1" id="l1"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" required value="{{ old('l1') }}">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="l2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white first-letter:uppercase">l2</label>
                    <input type="text" name="l2" id="l2"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" required value="{{ old('l2') }}">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="l3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white first-letter:uppercase">l3</label>
                    <input type="text" name="l3" id="l3"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" required value="{{ old('l3') }}">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white first-letter:uppercase">tahun</label>
                    <input type="number" name="tahun" id="tahun"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" required value="{{ old('tahun') }}">
                </div>
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                    all</button>
            </div>
        </form>
    </div>
@endsection
