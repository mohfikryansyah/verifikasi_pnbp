@extends('auth.layouts.main')

@section('content')
<form method="POST" action="/home" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
    @csrf
    <!-- Modal header -->
    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            Add Data IPPKH
        </h3>
    </div>
    <!-- Modal body -->
    <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="pt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Perusahaan</label>
                <input type="text" name="pt" id="pt"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="PT. Srikandi Jaya" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="example@gmail.com" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="nomor_sk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                    SK</label>
                <input type="text" name="nomor_sk" id="nomor_sk"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="SK12/AW" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="masa_berlaku"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masa Berlaku
                    (Tahun)</label>
                <input type="number" name="masa_berlaku" id="masa_berlaku"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="15" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="mulai"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mulai</label>
                <input type="date" name="mulai" id="mulai"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="12-12-2012" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="berakhir"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berakhir</label>
                <input type="date" name="berakhir" id="berakhir"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="12-12-2023" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="luas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Luas
                    (Ha)</label>
                <input type="text" name="luas" id="luas"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="45" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="verifikasi_pbnp"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Verifikasi PBNP</label>
                <input type="text" name="verifikasi_pbnp" id="verifikasi_pbnp"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="Sudah | Belum" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="bukti_bayar"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti Bayar</label>
                <input type="text" name="bukti_bayar" id="bukti_bayar"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="BUK1293" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="keterangan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="Komersil" required="">
            </div>

        </div>
    </div>
    <!-- Modal footer -->
    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
            all</button>
    </div>
</form>
@endsection