<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
   public static function allDummy() {
    return [
        [
            'title' => 'Web Company Profile',
            'slug' => 'web-company-profile',
            'thumbnail' => 'assets/hero/pexels-rebrand-cities-581004-1367271.jpg',
            'category' => 'Company Website',
            'short_description' => 'Website profile perusahaan modern.',
            'description' => 'Project ini dibuat untuk menampilkan profil perusahaan secara profesional dan modern.',
            'features' => [
                'Responsive Design',
                'Admin Dashboard',
                'Contact Form',
                'SEO Friendly'
            ],
            'images' => [
                'assets/hero/pexels-fauxels-3184291.jpg',
                'assets/hero/pexels-rebrand-cities-581004-1367271.jpg',
                'assets/hero/pexels-thirdman-7652188.jpg',
                'assets/hero/pexels-monoar-rahman-22660-109371.jpg'
            ],
            'client' => 'PT Cipta Solusi Mandiri',
            'year' => '2025',
            'tech_stack' => ['HTML', 'CSS', 'Laravel'],
            'url' => 'https://example.com'
        ],
        [
            'title' => 'Web Company Profile',
            'slug' => 'web-company-profile',
            'thumbnail' => 'assets/hero/pexels-fauxels-3184291.jpg',
            'category' => 'Company Website',
            'short_description' => 'Website profile perusahaan modern.',
            'description' => 'Project ini dibuat untuk menampilkan profil perusahaan secara profesional dan modern.',
            'features' => [
                'Responsive Design',
                'Admin Dashboard',
                'Contact Form',
                'SEO Friendly'
            ],
            'images' => [
                'assets/hero/pexels-mart-production-7643755.jpg',
                'assets/hero/pexels-fauxels-3184291.jpg',
                'assets/hero/pexels-mikhail-nilov-6930549.jpg',
                'assets/hero/pexels-monoar-rahman-22660-109371.jpg'
            ],
            'client' => 'PT Arah Digital Indonesia',
            'year' => '2026',
            'tech_stack' => ['HTML', 'CSS', 'Laravel'],
            'url' => 'https://example.com'
        ],
        [
            'title' => 'Web Company Profile',
            'slug' => 'web-company-profile',
            'thumbnail' => 'assets/hero/pexels-yankrukov-7698825.jpg',
            'category' => 'Company Website',
            'short_description' => 'Website profile perusahaan modern.',
            'description' => 'Project ini dibuat untuk menampilkan profil perusahaan secara profesional dan modern.',
            'features' => [
                'Responsive Design',
                'Admin Dashboard',
                'Contact Form',
                'SEO Friendly'
            ],
            'images' => [
                'assets/hero/pexels-pixabay-416405.jpg',
                'assets/hero/pexels-yankrukov-7698825.jpg',
                'assets/hero/pexels-rebrand-cities-581004-1367271.jpg',
                'assets/hero/pexels-pixabay-416405.jpg'
            ],
            'client' => 'PT Lumina Kreasi Indonesia',
            'year' => '2026',
            'tech_stack' => ['HTML', 'CSS', 'Laravel'],
            'url' => 'https://example.com'
        ]
    ];
}

    public static function findBySlug($slug) {
        return collect(self::allDummy())->firstWhere('slug', $slug);
    }
}