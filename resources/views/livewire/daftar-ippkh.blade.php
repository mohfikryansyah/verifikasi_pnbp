<div>
    <div class="block sm:flex items-center justify-between mb-3 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                {{-- @include('partials.breadcumb') --}}
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white uppercase">Data Izin Pinjam Pakai Kawasan Hutan</h1>
            </div>
            <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                <div class="flex items-center mb-4 sm:mb-0">
                    <label for="products-search" class="sr-only">Search</label>
                    <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input wire:model.live.debounce.500="search" type="search" name="email" id="products-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
                            placeholder="Perusahaan / Nomor SK">
                    </div>
                </div>
                <a href="/home/create"
                    class="text-white cursor-pointer bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-emerald-600 dark:hover:bg-emerald-700 focus:outline-none dark:focus:ring-emerald-800">
                    Tambah Data IPPKH
                </a>
            </div>
        </div>
    </div>
    {{-- <div id="mega-menu-full-dropdown"
        class="mt-1 bg-white shadow-sm">
        <div
            class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white space-x-3 sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button">
                <li>
                    <div class="relative">
                        <input type="text" wire:model.live="filters.berlaku-min" id="masaBerlakuMin" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 peer" placeholder=" " />
                        <label for="masaBerlakuMin" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-emerald-600 peer-focus:dark:text-emerald-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Min. Masa  Berlaku</label>
                    </div>
                </li>
                
            </ul>
            <ul>
                <li>
                    <div class="relative">
                        <input type="text" wire:model.live="filters.berlaku-max" id="masaBerlakuMax" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 peer" placeholder=" " />
                        <label for="masaBerlakuMax" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-emerald-600 peer-focus:dark:text-emerald-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Max. Masa  Berlaku</label>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="relative">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-emerald-600 peer-focus:dark:text-emerald-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Floating outlined</label>
                    </div>
                </li>
            </ul>
        </div>
    </div> --}}
    <div class="flex flex-col border-t">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="bg-emerald-500 dark:bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-50 uppercase dark:text-gray-400">
                                    No.
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-50 uppercase dark:text-gray-400">
                                    Perusahaan
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-50 uppercase dark:text-gray-400">
                                    Nomor SK
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left whitespace-nowrap text-gray-50 uppercase dark:text-gray-400">
                                    Berlaku (Tahun)
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-50 uppercase dark:text-gray-400">
                                    Mulai
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-50 uppercase dark:text-gray-400">
                                    Berakhir
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left whitespace-nowrap text-gray-50 uppercase dark:text-gray-400">
                                    Verifikasi PNBP
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left whitespace-nowrap text-gray-50 uppercase dark:text-gray-400">
                                    Bukti Bayar
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-50 uppercase dark:text-gray-400">
                                    Keterangan
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-50 uppercase dark:text-gray-400">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @forelse ($dataIppkhs as $index => $dataIppkh)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $dataIppkhs->firstItem() + $index }}
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="/home/{{ $dataIppkh->id }}">{{ $dataIppkh->pt }}</a>
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $dataIppkh->nomor_sk }}
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 text-center whitespace-nowrap dark:text-white">
                                        {{ $dataIppkh->masa_berlaku }}
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $dataIppkh->mulai }}
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $dataIppkh->berakhir }}
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $dataIppkh->verifikasi_pbnp }}
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 text-center whitespace-nowrap dark:text-white">
                                        {{ $dataIppkh->bukti_bayar }}
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $dataIppkh->keterangan }}
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap flex">
                                        <a href="/home/{{ $dataIppkh->id }}/edit"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                        <form action="/home/{{ $dataIppkh->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr class="hover:bg-gray-100">
                                    <td colspan="10"
                                        class="p-4 text-center uppercase text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Data kosong atau tidak ditemukan!
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        {{ $dataIppkhs->links('vendor.livewire.tailwind') }}
    </div>
</div>
