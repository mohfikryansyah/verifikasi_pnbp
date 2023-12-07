<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full md:bg-transparent bg-white lg:translate-x-0"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 -mt-2 md:bg-transparent bg-white">
        <div class="flex flex-col flex-1 pt-4 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-transparent divide-y divide-gray-200">
                <ul class="pb-2 space-y-2">
                    <li>
                        <a href="/home"
                            class="{{ Request::is('home') ? 'bg-emerald-500 text-gray-50' : '' }} flex items-center p-2 text-base text-gray-900 hover:text-gray-50 rounded-lg hover:bg-emerald-500 group">
                            <svg class="{{ Request::is('home') ? 'text-gray-50' : '' }} w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-50"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/home/create"
                            class="{{ Request::is('home/create') ? 'bg-emerald-500 text-gray-50' : '' }} flex items-center p-2 text-base text-gray-900 hover:text-gray-50 rounded-lg hover:bg-emerald-500 group">
                            <svg class="{{ Request::is('home/create') ? 'text-gray-50' : '' }} w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-50"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Tambah Data IPPKH</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('history.create') }}"
                            class="{{ Request::is('home/history/create') ? 'bg-emerald-500 text-gray-50' : '' }} flex items-center p-2 text-base text-gray-900 hover:text-gray-50 rounded-lg hover:bg-emerald-500 group">
                            <svg class="{{ Request::is('home/history/create') ? 'text-gray-50' : '' }} w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-50"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Tambah Data Pertahun</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</aside>
