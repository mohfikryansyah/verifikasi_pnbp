@extends('auth.layouts.main')

@section('content')
<form class="relative bg-white rounded-lg shadow">
    <!-- Modal header -->
    <div class="flex items-start justify-between  p-4 border-b rounded-t">
        <h3 class="text-xl font-semibold text-gray-900">
            Edit Data IPPKH
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
                    placeholder="PT. Srikandi Jaya" required value="{{ old('pt', $dataIppkh->pt) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="example@gmail.com" required value="{{ old('email', $dataIppkh->email) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="nomor_sk" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                    SK</label>
                <input type="text" name="nomor_sk" id="nomor_sk"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="SK12/AW" required value="{{ old('nomor_sk', $dataIppkh->nomor_sk) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="masa_berlaku"
                    class="block mb-2 text-sm font-medium text-gray-900">Masa Berlaku
                    (Tahun)</label>
                <input type="number" name="masa_berlaku" id="masa_berlaku"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="15" required value="{{ old('masa_berlaku', $dataIppkh->masa_berlaku) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="mulai"
                    class="block mb-2 text-sm font-medium text-gray-900">Mulai</label>
                <input type="date" name="mulai" id="mulai"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="12-12-2012" required value="{{ old('mulai', $dataIppkh->mulai) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="berakhir"
                    class="block mb-2 text-sm font-medium text-gray-900">Berakhir</label>
                <input type="date" name="berakhir" id="berakhir"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="12-12-2023" required value="{{ old('berakhir', $dataIppkh->berakhir) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="luas" class="block mb-2 text-sm font-medium text-gray-900">Luas
                    (Ha)</label>
                <input type="text" name="luas" id="luas"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="45" required value="{{ old('luas', $dataIppkh->luas) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="verifikasi_pbnp"
                    class="block mb-2 text-sm font-medium text-gray-900">Verifikasi PBNP</label>
                <input type="text" name="verifikasi_pbnp" id="verifikasi_pbnp"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="Sudah | Belum" required value="{{ old('verifikasi_pbnp', $dataIppkh->verifikasi_pbnp) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="bukti_bayar"
                    class="block mb-2 text-sm font-medium text-gray-900">Bukti Bayar</label>
                <input type="text" name="bukti_bayar" id="bukti_bayar"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="BUK1293" required value="{{ old('bukti_bayar', $dataIppkh->bukti_bayar) }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="keterangan"
                    class="block mb-2 text-sm font-medium text-gray-900">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-600 focus:border-emerald-600 block w-full p-2.5"
                    placeholder="Komersil" required value="{{ old('keterangan', $dataIppkh->keterangan) }}">
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
