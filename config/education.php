<?php

return [
    'title' => 'Academic Journey',
    'subtitle' => 'Education',
    'description' => 'Latar belakang pendidikan, mata kuliah yang relevan, fokus pembelajaran, serta teknologi yang saya gunakan selama menempuh pendidikan di bidang Teknologi Informasi.',
    
    'cards' => [
        [
            'type' => 'education',
            'title' => 'Pendidikan',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>',
            'content' => [
                'degree' => 'S1 Teknologi Informasi',
                'university' => 'Universitas Negeri Yogyakarta',
                'period' => '2023 - Sekarang',
            ],
            'badge' => 'Semester 7',
            'info' => 'IPK 3.83 / 4.00'
        ],
        [
            'type' => 'list',
            'title' => '📖 Relevant Coursework',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477-4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>',
            'description' => 'Mata kuliah yang memberikan dasar pengetahuan dan pengalaman dalam pengembangan perangkat lunak, aplikasi web, serta sistem informasi selama menempuh studi di Universitas Negeri Yogyakarta.',
            'list' => [
                'Pemrograman Web',
                'Pemrograman Visual',
                'Rekayasa Perangkat Lunak',
                'Pengembangan Aplikasi Mobile',
                'Basis Data',
                'Perancangan dan Pengembangan Service API',
                'Interaksi Manusia Komputer',
                'Manajemen Sistem Informasi'
            ]
        ],
        [
            'type' => 'list',
            'title' => 'Learning Focus',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
            'description' => 'Bidang yang menjadi fokus pembelajaran dan pengembangan kompetensi selama perkuliahan.',
            'list' => [
                'Pengembangan Web',
                'UI/UX Design',
                'Sistem Informasi',
                'REST API',
                'Basis Data',
                'Rekayasa Perangkat Lunak'
            ]
        ],
        [
            'type' => 'list',
            'title' => 'Tools & Technologies',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
            'description' => 'Teknologi, framework, tools, dan software yang digunakan selama mengerjakan tugas, proyek, dan praktik industri.',
            'list' => [
                'Laravel',
                'PHP',
                'JavaScript',
                'Tailwind CSS',
                'MySQL',
                'Git',
                'GitHub',
                'Figma',
                'Postman',
                'Visual Studio Code'
            ]
        ]
    ]
];
