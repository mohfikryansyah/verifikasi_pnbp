<div>
    @extends('auth.layouts.main')
    @section('content')
        {{-- {{ $histories->dataippkh->pt }} --}}
        <div
            class="sm:mr-5 block w-full mb-3 text-center p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->pt }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $data->nomor_sk }}</p>
        </div>
        
        <div class="my-5">

            <a href="{{ route('history.create') }}"
                class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 focus:outline-none dark:focus:ring-emerald-800">Tambah Data Pertahun</a>
        </div>

        <div class="relative overflow-x-auto shadow sm:rounded-lg border border-gray-200 p-5">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Tahun
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Data L1
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Data L2
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Data L3
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data->history as $history)
                        <tr class="dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $history->tahun }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $history->l1 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $history->l2 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $history->l3 }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-1">
                                    <a href="/home/history/{{ $history->id }}/edit"
                                        class="self-center text-sm font-medium text-center p-2 text-white rounded-lg bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300">
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
                                    <form action="/home/history/{{ $history->id }}" method="post" class="mt-3">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="text-sm font-medium text-center p-2 text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                kosong
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endsection
</div>
