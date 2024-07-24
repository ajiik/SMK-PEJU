<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = [
            ['name' => 'ADEL', 'subject' => 'Sistem Operasi', 'image' => 'adell.jpeg'],
            ['name' => 'AGISTA', 'subject' => 'Pemrograman Web', 'image' => 'agista.jpeg'],
            ['name' => 'AJIE', 'subject' => 'Konsep Pemrograman', 'image' => 'aji.JPG'],
            ['name' => 'AMARA', 'subject' => 'Kalkulus I', 'image' => 'amara.JPG'],
            ['name' => 'ANDI', 'subject' => 'Bahasa Inggris I', 'image' => 'andi.jpeg'],
            ['name' => 'ANDRE', 'subject' => 'Sistem Digital', 'image' => 'andre.JPG'],
        ];
        $managementTeachers = [
            ['name' => 'ANISA', 'subject' => 'Manajemen Pemasaran', 'image' => 'anisa.jpeg'],
            ['name' => 'ARMAN', 'subject' => 'Manajemen Dasar', 'image' => 'arman.JPG'],
            ['name' => 'BELLA', 'subject' => 'Perilaku Organisasi', 'image' => 'bella.jpeg'],
            ['name' => 'BILAL', 'subject' => 'Manajemen Perubahan', 'image' => 'bilal.JPG'],
            ['name' => 'BIMA', 'subject' => 'Manajemen Keuangan', 'image' => 'bima.jpeg'],
            ['name' => 'CAKRA', 'subject' => 'Kewirausahaan', 'image' => 'cakra.jpeg'],
        ];
        $informationSystemTeachers = [
            [
                'name' => 'CITRA',
                'subject' => 'Analisis Sistem',
                'image' => 'citra.jpeg'
            ],
            [
                'name' => 'DAMAR',
                'subject' => 'Dasar-dasar Sistem Informasi',
                'image' => 'damar.jpeg'
            ],
            [
                'name' => 'FANI',
                'subject' => 'Keamanan Informasi',
                'image' => 'fani.JPG'
            ],
            [
                'name' => 'FITRI',
                'subject' => 'Sistem Informasi untuk e-Bisnis',
                'image' => 'fitri.jpeg'
            ],
            [
                'name' => 'GIA',
                'subject' => 'Cloud Computing',
                'image' => 'gia.jpeg'
            ],
            [
                'name' => 'GISEL',
                'subject' => 'User Experience (UX) Design',
                'image' => 'gisel.jpeg'
            ]
        ];
        $dkvTeachers = [
            [
                'name' => 'GITA',
                'subject' => 'Desain Grafis',
                'image' => 'gita.jpeg'
            ],
            [
                'name' => 'HANNA',
                'subject' => 'Teori Desain',
                'image' => 'hanna.jpeg'
            ],
            [
                'name' => 'HASNA',
                'subject' => 'Desain Web',
                'image' => 'hasna.jpeg'
            ],
            [
                'name' => 'ILHAM',
                'subject' => 'Desain Multimedia',
                'image' => 'ilham.JPG'
            ],
            [
                'name' => 'INTAN',
                'subject' => 'Fotografi dan Videografi',
                'image' => 'intan.jpeg'
            ],
            [
                'name' => 'JELITA',
                'subject' => 'Praktik Studio',
                'image' => 'jelita.jpeg'
            ]
        ];

    $pharmacyTeachers = [
        [
            'name' => 'KARIM',
            'subject' => 'Farmakologi',
            'image' => 'karim.JPG'
        ],
        [
            'name' => 'LESTARI',
            'subject' => 'Biofarmasi',
            'image' => 'lestari.jpeg'
        ],
        [
            'name' => 'MICHIE',
            'subject' => 'Farmasi Rumah Sakit',
            'image' => 'michie.jpeg'
        ],
        [
            'name' => 'NABILA',
            'subject' => 'Teknologi Farmasi',
            'image' => 'nabila.jpeg'
        ],
        [
            'name' => 'NADIA',
            'subject' => 'Toxikologi',
            'image' => 'nadia.jpeg'
        ],
        [
            'name' => 'NINDYA',
            'subject' => 'Farmakoekonomi',
            'image' => 'nindya.jpeg'
        ]
    ];
    $dokteachers = [
        [
            'name' => 'OKTA',
            'subject' => 'Anatomi',
            'image' => 'okta.JPG'
        ],
        [
            'name' => 'RIO',
            'subject' => 'Fisiologi',
            'image' => 'rio.JPG'
        ],
        [
            'name' => 'TAMA',
            'subject' => 'Histologit',
            'image' => 'tama.JPG'
        ],
        [
            'name' => 'TIARA',
            'subject' => 'Biokimia',
            'image' => 'tiara.jpeg'
        ],
        [
            'name' => 'YAZID',
            'subject' => 'Farmakologi',
            'image' => 'yazid.JPG'
        ],
        [
            'name' => 'YUDHA',
            'subject' => 'Mikrobiologi',
            'image' => 'yudha.JPG'
        ]
    ];

        return view('teacher_gallery', compact('teachers', 'managementTeachers','informationSystemTeachers', 'dkvTeachers','pharmacyTeachers','dokteachers'));
    }

    
    
}