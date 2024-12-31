<div class="flex flex-col px-8 py-12">
    <p class="text-2xl text-gray-900 dark:text-white mb-4">Ringkasan Hasil Audit</p>
    <div class="w-full flex flex-col gap-6 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 items-end">
        <div class="flex flex-row justify-between w-full">
            <div class="flex flex-col gap-2 items-center">
                <div class="rounded-full bg-green-50 text-green-500 size-[120px] flex items-center justify-center">
                    <p class="text-2xl font-semibold">9.5/10</p>
                </div>
                <p class="text-lg text-gray-900 dark:text-white">Reservasi</p>
            </div>
            <div class="flex flex-col gap-2 items-center">
                <div class="rounded-full bg-yellow-50 text-yellow-500 size-[120px] flex items-center justify-center">
                    <p class="text-2xl font-semibold">7.5/10</p>
                </div>
                <p class="text-lg text-gray-900 dark:text-white">Front Office</p>
            </div>
            <div class="flex flex-col gap-2 items-center">
                <div class="rounded-full bg-green-50 text-green-500 size-[120px] flex items-center justify-center">
                    <p class="text-2xl font-semibold">9.0/10</p>
                </div>
                <p class="text-lg text-gray-900 dark:text-white">Keuangan</p>
            </div>
            <div class="flex flex-col gap-2 items-center">
                <div class="rounded-full bg-green-50 text-green-500 size-[120px] flex items-center justify-center">
                    <p class="text-2xl font-semibold">8.6/10</p>
                </div>
                <p class="text-lg text-gray-900 dark:text-white">House Keeping</p>
            </div>
            <div class="flex flex-col gap-2 items-center">
                <div class="rounded-full bg-orange-50 text-orange-500 size-[120px] flex items-center justify-center">
                    <p class="text-2xl font-semibold">6.8/10</p>
                </div>
                <p class="text-lg text-gray-900 dark:text-white">Security</p>
            </div>
        </div>

        <a href="/src/pages/report" class="text-primary-500 hover:bg-blue-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-blue-50 dark:focus:ring-blue-800">
            View Details
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>

    <div class="flex flex-row mt-6 gap-8">
        <div class="flex-1 flex flex-col">
            <p class="text-xl text-gray-900 dark:text-white mb-2">Kesimpulan</p>
            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-gray-500 dark:text-gray-400">
                <p>Sistem informasi yang ada di Hotel XYZ Cukup baik, hanya perlu evaluasi beberapa poin.</p>
            </div>
        </div>
        <div class="flex-1 flex flex-col">
            <p class="text-xl text-gray-900 dark:text-white mb-2">Evaluasi</p>
            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-gray-500 dark:text-gray-400">
                <p>Semua sudah baik, kecuali dua poin ini perlu ada evaluasi:</p>
                <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>Front office fasilitas dan tingkatan layanan ditingkatkan lagi</li>
                    <li>Security adalah hal yang penting sekarang, segera perbaiki.</li>
                </ul>
            </div>
        </div>
    </div>
</div>