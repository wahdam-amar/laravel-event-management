<nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open"
    :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }"
    class="fixed h-screen w-0 bg-white shadow-sm transition-all duration-500 ease-in-out dark:bg-gray-800 md:w-64"
    aria-expanded="false" x-ref="nav">
    <div class="scrollbars relative h-full overflow-auto">
        <!--logo-->
        <div class="mh-18 py-5 text-center">
            <a href="#" class="relative">
                <h2 class="hidden-compact max-h-9 overflow-hidden px-4 text-2xl font-semibold text-gray-200">
                    <span class="text-gray-700 dark:text-gray-200">{{ config('app.name', 'Laravel') }}</span>
                </h2>
                <h2 class="logo-compact mx-auto hidden text-3xl font-semibold">
                    <!-- <img class="-mt-1 inline-block h-auto w-7" src="src/img/logo.png"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="-mt-1 inline-block h-7 w-7"
                        viewBox="0 0 300.000000 300.000000">
                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor"
                            stroke="none">
                            <path class="text-pink-500"
                                d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z">
                            </path>
                            <path class="text-indigo-500"
                                d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                -687 428 -110 29 -111 28 -153 -37z">
                            </path>
                            <path class="text-indigo-500"
                                d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                217 -10 16 -14 14 -45 -18z">
                            </path>
                        </g>
                    </svg>
                </h2>
            </a>
        </div>

        <!-- Sidebar menu -->
        <ul id="side-menu" x-data="{ selected: 5 }"
            class="float-none flex w-full flex-col font-medium ltr:pl-1.5 rtl:pr-1.5">
            <!-- dropdown -->
            <li class="relative">
                <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 1 }"
                    @click="selected !== 1 ? selected = 1 : selected = null"
                    class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-house-door inline-block h-4 w-4 ltr:mr-2 rtl:ml-2" viewBox="0 0 16 16">
                        <path
                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z">
                        </path>
                    </svg>
                    <!-- <i class="fas fa-home ltr:mr-2 rtl:ml-2"></i> -->
                    <span>Dashboards</span>
                    <!-- caret -->
                    <span class="inline-block ltr:float-right rtl:float-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="bi bi-chevron-down mt-1.5 transform transition duration-300 ltr:-rotate-90 rtl:rotate-90"
                            :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"
                            width=".8rem" height=".8rem" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg>
                        <!-- <i class="fas fa-chevron-down transform transition duration-300" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"></i> -->
                    </span>
                </a>

                <!-- dropdown menu -->
                <ul x-show="selected == 1" x-transition:enter="transition-all duration-200 ease-out"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    class="top-full z-50 mb-1 block rounded rounded-t-none py-0.5 font-normal ltr:pl-7 ltr:text-left rtl:pr-7 rtl:text-right"
                    style="display: none;">
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index.html">CMS</a>
                    </li>
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index-analytics.html">Analytics</a>
                    </li>
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index-ecommerce.html">Ecommerce</a>
                    </li>
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index-projects.html">Projects</a>
                    </li>
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index-crm.html">CRM</a>
                    </li>
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index-hosting.html">Hosting</a>
                    </li>
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index-saas.html">Saas</a>
                    </li>
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index-sales.html">Sales</a>
                    </li>
                    <li class="relative">
                        <a class="clear-both block w-full whitespace-nowrap py-2 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                            href="index-marketing.html">Marketing</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                    href="{{ route('member.index') }}">
                    <svg class="mr-2 inline-block h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>

                    <!-- <i class="fas fa-calendar-alt mr-2"></i> -->
                    <span>Member</span>
                </a>
            </li>

            <li>
                <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300"
                    href="{{ route('member.index') }}">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="mr-2 inline-block h-4 w-4" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>

                    <span>Events</span>
                </a>
            </li>

        </ul>

        <!-- Banner -->
        <div class="box-banner px-4">
            <div class="my-8 rounded-lg bg-gray-300 bg-opacity-50 p-4 text-center dark:bg-gray-700">
                <h4 class="mb-2 inline-block font-bold">Report</h4>
                <div class="mb-3 text-sm">
                    Monthly report is ready for download!
                </div>

                <div class="grid">
                    <a href="#"
                        class="mb-3 inline-block rounded border border-pink-500 bg-pink-500 py-2 px-4 text-center leading-5 text-gray-100 hover:border-pink-600 hover:bg-pink-600 hover:text-white hover:ring-0 focus:border-pink-600 focus:bg-pink-600 focus:outline-none focus:ring-0"
                        target="_blank">Download</a>
                </div>
            </div>
        </div><!-- end banner -->
    </div>
</nav>
