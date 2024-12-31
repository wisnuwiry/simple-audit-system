<?php

$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['success'])) {
    $success = true;
}

?>

<div class="flex flex-col gap-6 px-8 py-12">
    <div class="w-full flex flex-row gap-6 p-6 bg-white rounded-lg dark:bg-gray-800">
        <svg class="size-12 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <div class="flex flex-col gap-2">
            <p class="text-xl font-medium">Upload Lampiran Keperluan Audit Reservasi</p>
            <p class="text-sm text-gray-500">Harap masukan data lampiran sesuai dengan kenyataan dan sebenar-benarnya.</p>
        </div>
    </div>

    <form class="p-8 py-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" method="GET" action="">
        <p class="text-xl">Lampiran Reservasi</p>

        <?php if (isset($success) && $success == true) echo '<div id="alert-success" class="flex items-center p-4 mb-4 mt-8 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-medium">
                Berhasil upload lampiran
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>' ?>

        <div class="flex flex-row w-full flex-wrap justify-between gap-8 pt-8">
            <div class="basis-[48%]">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Log Reservasi</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF, Word, XLSX (MAX. 2MB).</p>
            </div>
            <div class="basis-[48%]">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Laporan Reservasi Harian</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF, Word, XLSX (MAX. 2MB).</p>
            </div>
            <div class="basis-[48%]">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Data Integrasi Platform Eksternal</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF, Word, XLSX (MAX. 2MB).</p>
            </div>
        </div>

        <div class="flex items-center mb-4 mt-8">
            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-checkbox" class="ms-2 text-sm text-gray-500 dark:text-gray-300">Saya, yakin data yang di unggah adalah data yang sebenar-benarnya tanpa adanya manipulasi baik saya pribadi atau pihak yang lain, jika ada terjadinya manipulasi, Saya bersedia menerima sansinya.</label>
        </div>

        <div class="flex flex-row w-full justify-end mt-8">
            <input type="hidden" name="success" value="true"/>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>
        </div>
    </form>
</div>