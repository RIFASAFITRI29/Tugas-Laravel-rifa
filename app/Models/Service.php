<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public static function allDummy()
    {
        return [
            [
                'title' => 'Web Development',
                'subtitle' => 'Pembuatan website cepat, aman, dan responsif sesuai kebutuhan bisnis.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 18l6-6m0 0l-6-6m6 6H8"/></svg>',
                'color' => 'blue'
            ],
            [
                'title' => 'UI / UX Design',
                'subtitle' => 'Desain antarmuka yang nyaman digunakan dan meningkatkan konversi.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L3 21l4-7.25M14.25 17L21 21l-4-7.25M12 3v10"/></svg>',
                'color' => 'purple'
            ],
            [
                'title' => 'Maintenance',
                'subtitle' => 'Perawatan dan pengembangan berkelanjutan untuk website Anda.',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/></svg>',
                'color' => 'green'
            ],
        ];
    }
}