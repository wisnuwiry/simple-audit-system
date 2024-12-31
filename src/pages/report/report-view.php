<?php
$data = [
    "reservation" => [
        "type" => "Reservation",
        "audits" => [
            [
                "question" => "Apakah tujuan sistem reservasi jelas terkait dengan kebutuhan operasional dan strategi bisnis hotel?",
                "note" => "Bagus",
                "rating" => 4
            ],
            [
                "question" => "Apakah sistem reservasi memiliki kontrol untuk mencatat dan mengelola log reservasi secara tepat dan lengkap?",
                "note" => "Ok",
                "rating" => 5
            ],
            [
                "question" => "Apakah laporan reservasi harian secara otomatis disinkronkan dengan sistem lain yang digunakan oleh hotel, seperti sistem akuntansi atau CRM?",
                "note" => "Ok",
                "rating" => 3
            ],
            [
                "question" => "Apakah ada pemantauan yang cukup terkait integrasi platform eksternal, untuk memastikan data dikirim dan diterima dengan benar?",
                "note" => "Ok",
                "rating" => 5
            ],
        ]
    ],
    "front-office" => [
        "type" => "Front Office",
        "audits" => [
            [
                "question" => "Apakah tujuan sistem reservasi jelas terkait dengan kebutuhan operasional dan strategi bisnis hotel?",
                "note" => "Bagus",
                "rating" => 4
            ],
            [
                "question" => "Apakah sistem reservasi memiliki kontrol untuk mencatat dan mengelola log reservasi secara tepat dan lengkap?",
                "note" => "Ok",
                "rating" => 5
            ],
            [
                "question" => "Apakah laporan reservasi harian secara otomatis disinkronkan dengan sistem lain yang digunakan oleh hotel, seperti sistem akuntansi atau CRM?",
                "note" => "Ok",
                "rating" => 3
            ],
            [
                "question" => "Apakah ada pemantauan yang cukup terkait integrasi platform eksternal, untuk memastikan data dikirim dan diterima dengan benar?",
                "note" => "Ok",
                "rating" => 5
            ],
        ]
    ],
    "security" => [
        "type" => "Security",
        "audits" => [
            [
                "question" => "Apakah tujuan sistem reservasi jelas terkait dengan kebutuhan operasional dan strategi bisnis hotel?",
                "note" => "Bagus",
                "rating" => 3
            ],
            [
                "question" => "Apakah sistem reservasi memiliki kontrol untuk mencatat dan mengelola log reservasi secara tepat dan lengkap?",
                "note" => "Ok",
                "rating" => 4
            ],
            [
                "question" => "Apakah laporan reservasi harian secara otomatis disinkronkan dengan sistem lain yang digunakan oleh hotel, seperti sistem akuntansi atau CRM?",
                "note" => "Ok",
                "rating" => 5
            ],
            [
                "question" => "Apakah ada pemantauan yang cukup terkait integrasi platform eksternal, untuk memastikan data dikirim dan diterima dengan benar?",
                "note" => "Ok",
                "rating" => 4
            ],
        ]
    ],
];

function renderItemAudit($question, $note, $rating)
{
    // Start the HTML output
    $output = "<div class='w-full flex flex-col gap-4 p-6 bg-white rounded-lg dark:bg-gray-800 border border-gray-300'>
        <div class='flex flex-row gap-1'>";

    // PHP loop for rendering SVG stars based on the rating
    for ($i = 1; $i <= $rating; $i++) {
        $output .= "<svg class='w-6 h-6 text-yellow-400' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>
            <path d='M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z'/>
        </svg>";
    }

    // Close the SVG loop and HTML content
    $output .= "</div>
        <p class='text-lg'>$question</p>
        <p class='text-gray-500'><span class='font-semibold'>Catatan:</span> $note</p>
    </div>";

    // Return the complete HTML output
    return $output;
}

function renderModule($module, $data)
{
    // Start the HTML output
    $output = "<div class='flex flex-row w-full justify-between'>
        <p class='text-xl'>$module</p>
        <a class='bg-green-100 text-green-500 rounded-md p-2 flex flex-row gap-2 items-center cursor-pointer' target='_blank' href='/assets/data/lampiran.pdf'>
            <svg class='w-6 h-6' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'>
                <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4' />
            </svg>
            <p class='text-sm'>Download</p>
        </a>
    </div>";

    // Close the SVG loop and HTML content
    foreach ($data as $item) {
        $question = renderItemAudit($item['question'], $item['note'], $item['rating']);
        $output .= $question;
    }

    // Return the complete HTML output
    return $output;
}

?>

<div class="flex flex-col gap-6 px-8 py-12">
    <?php
    echo renderModule($data['reservation']['type'], $data['reservation']['audits']);
    echo renderModule($data['front-office']['type'], $data['front-office']['audits']);
    echo renderModule($data['security']['type'], $data['security']['audits']);
    ?>

</div>