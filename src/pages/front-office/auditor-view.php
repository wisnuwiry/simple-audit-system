<?php

$files = [
    'Laporan aktivitas check-in/check-out',
    'Log data tamu',
    'Survei kepuasan tamu'
];

$questions = [
    'Apakah sistem mencatat aktivitas check-in/check-out secara akurat dan dapat diakses dalam laporan yang mudah dipahami?',
    'Apakah data tamu terjaga kerahasiaanya, dan apakah ada kebijakan yang jelas tentang penyimpanan dan pengelolaan data tersebut?',
    'Apakah hasil survei kepuasan tamu diproses dan dianalisis untuk meningkatkan layanan dan kepuasan pelanggan?',
];

function renderItemFile($fileName)
{
    return "
    <a class='bg-green-100 text-green-500 rounded-md p-2 flex flex-row gap-2 items-center cursor-pointer' target='_blank' href='/assets/data/lampiran.pdf'>
        <svg class='w-6 h-6' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'>
            <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4' />
        </svg>
        <p class='text-sm'>$fileName</p>
    </a>";
}

function renderItemForm($question, $id)
{
    return "
        <div class='w-full flex flex-col gap-4 p-6 bg-white rounded-lg dark:bg-gray-800 border border-gray-300'>
            <div class='text-lg'>$question</div>
            <div>
                <label for='quantity-input-$id' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Nilai:</label>
                <div class='relative flex items-center max-w-[8rem]'>
                    <button type='button' id='decrement-button' data-input-counter-decrement='quantity-input-$id' class='bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none'>
                        <svg class='w-3 h-3 text-gray-900 dark:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 18 2'>
                            <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 1h16' />
                        </svg>
                    </button>
                    <input type='text' id='quantity-input-$id' data-input-counter data-input-counter-min='1' data-input-counter-max='5' aria-describedby='helper-text-explanation' class='bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' placeholder='0' required />
                    <button type='button' id='increment-button-$id' data-input-counter-increment='quantity-input-$id' class='bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none'>
                        <svg class='w-3 h-3 text-gray-900 dark:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 18 18'>
                            <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 1v16M1 9h16' />
                        </svg>
                    </button>
                </div>
            </div>
            <div>
                <label for='message-$id' class='block mb-2 text-md font-medium text-gray-900 dark:text-white'>Catatan:</label>
                <textarea id='message-$id' rows='4' class='block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' placeholder='Catatan tambahan'></textarea>
            </div>
        </div>
    ";
}

$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['success'])) {
    $success = true;
}

?>

<div class="flex flex-col px-8 py-12">
    <div class="flex flex-row items-start gap-6">
        <!-- Lampiran -->
        <div class="w-full h-auto max-w-xs p-6 bg-white rounded-lg dark:bg-gray-800 divide-y divide-gray-200">
            <div class="flex flex-row gap-2 text-gray-600 py-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                </svg>
                <p class="text-lg font-medium">Lampiran</p>
            </div>
            <div class="flex flex-col pt-4 gap-1.5">
                <?php
                foreach ($files as $file) {
                    echo renderItemFile($file);
                }
                ?>
            </div>
        </div>

        <!-- Form -->
        <div class="flex flex-col gap-6">
            <div class="text-xl font-medium">Form Audit</div>

            <?php if (isset($success) && $success == true) echo '<div id="alert-success" class="flex items-center p-4 mb-4 mt-8 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Success</span>
                <div class="ms-3 text-sm font-medium">
                    Berhasil mengirim data audit
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>' ?>
            
            <?php
            foreach ($questions as $index => $question) {
                echo renderItemForm($question, $index);
            }
            ?>
        </div>
    </div>

    <form class="flex flex-row justify-end w-full mt-10" method="GET">
        <input type="hidden" name="success" value="true"/>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>
    </form>
</div>