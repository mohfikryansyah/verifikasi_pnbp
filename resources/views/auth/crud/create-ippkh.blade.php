@extends('auth.layouts.main')

@section('content')
    <form method="POST" action="/home" class="relative bg-white rounded-lg shadow">
        @csrf
        <!-- Modal header -->
        <div class="flex items-start justify-between bg-emerald-500 p-4 border-b rounded-t">
            <h3 class="text-xl font-semibold text-gray-50">
                Tambah Data IPPKH
            </h3>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="pt" class="block mb-2 text-sm font-medium text-gray-900">Nama
                        Perusahaan</label>
                    <input type="text" name="pt" id="pt"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="nomor_sk" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                        SK</label>
                    <input type="text" name="nomor_sk" id="nomor_sk"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="masa_berlaku" class="block mb-2 text-sm font-medium text-gray-900">Masa
                        Berlaku
                        (Tahun)</label>
                    <input type="number" name="masa_berlaku" id="masa_berlaku"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="mulai" class="block mb-2 text-sm font-medium text-gray-900">Mulai</label>
                    <input type="date" name="mulai" id="mulai"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="berakhir"
                        class="block mb-2 text-sm font-medium text-gray-900">Berakhir</label>
                    <input type="date" name="berakhir" id="berakhir"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="luas" class="block mb-2 text-sm font-medium text-gray-900">Luas
                        (Ha)</label>
                    <input type="text" name="luas" id="luas"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="verifikasi_pbnp"
                        class="block mb-2 text-sm font-medium text-gray-900">Verifikasi PBNP</label>
                    <input type="text" name="verifikasi_pbnp" id="verifikasi_pbnp"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="bukti_bayar" class="block mb-2 text-sm font-medium text-gray-900">Bukti
                        Bayar</label>
                    <input type="text" name="bukti_bayar" id="bukti_bayar"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="keterangan"
                        class="block mb-2 text-sm font-medium text-gray-900">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                        required="">
                </div>

            </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
            <button type="submit"
                class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save
                all</button>
        </div>
    </form>
@endsection
