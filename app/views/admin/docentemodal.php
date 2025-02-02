
    <template x-teleport="#x-teleport-target">
    <div
        class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
        x-show="showModal"
        role="dialog"
        @keydown.window.escape="showModal = false"
    >
        <div
        class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
        @click="showModal = false"
        x-show="showModal"
        x-transition:enter="ease-out"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        ></div>
        <div
        class="relative w-full max-w-2xl origin-bottom rounded-lg bg-white pb-4 transition-all duration-300 dark:bg-navy-700"
        x-show="showModal"
        x-transition:enter="easy-out"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="easy-in"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        >
        <div
            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5"
        >
            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
            Users Status
            </h3>
            <button
            @click="showModal = !showModal"
            class="btn -mr-1.5 size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
            >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-4.5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
                ></path>
            </svg>
            </button>
        </div>
        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
            <table class="w-full text-left">
            <thead>
                <tr
                class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                <th
                    class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                >
                    #
                </th>
                <th
                    class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                >
                    Name
                </th>
                <th
                    class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                >
                    Role
                </th>
                <th
                    class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                >
                    Status
                </th>
                </tr>
            </thead>
            <tbody>
                <tr
                class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">1</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    Cy Ganderton
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">Admin</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                    class="badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light"
                    >
                    <div class="size-2 rounded-full bg-current"></div>
                    <span>Online</span>
                    </div>
                </td>
                </tr>
                <tr
                class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">2</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    StarCodeKh
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">Teacher</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                    class="badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light"
                    >
                    <div class="size-2 rounded-full bg-current"></div>
                    <span>Online</span>
                    </div>
                </td>
                </tr>
                <tr
                class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">3</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    Konnor Guzman
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">Moderator</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                    class="badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light"
                    >
                    <div class="size-2 rounded-full bg-current"></div>
                    <span>Online</span>
                    </div>
                </td>
                </tr>
                <tr
                class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">4</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    Alfredo Elliott
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">Admin</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                    class="badge space-x-2.5 rounded-full bg-warning/10 text-warning dark:bg-warning/15"
                    >
                    <div class="size-2 rounded-full bg-current"></div>
                    <span>Offline</span>
                    </div>
                </td>
                </tr>
                <tr
                class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">5</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    Derrick Simmons
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">Teacher</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                    class="badge space-x-2.5 rounded-full bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light"
                    >
                    <div class="size-2 rounded-full bg-current"></div>
                    <span>Offline</span>
                    </div>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="text-center">
            <button
            class="btn mt-4 border border-primary/30 bg-primary/10 font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:border-accent-light/30 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
            >
            Show All
            </button>
        </div>
        </div>
    </div>
    </template>
</div>