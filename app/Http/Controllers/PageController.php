<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portofolio; 

class PageController extends Controller
{
    public function index()
    {
        $hero = [
            'title' => 'Selamat Datang di Website Portofolio Rifa Safitri',
            'subtitle' => 'Website perusahaan dengan desain modern dan elemen interaktif.'
        ];

        $about = [
            'intro' => 'Kami adalah platform yang berkomitmen untuk memberikan solusi digital yang informatif, mudah diakses, dan relevan dengan kebutuhan pengguna.
             Dengan mengutamakan kualitas dan inovasi, kami terus mengembangkan konten serta fitur yang bermanfaat. Kami percaya bahwa kepercayaan dan kepuasan pengguna adalah prioritas utama.',
            
            'visi' => 'Menjadi profesional yang terus berkembang dan memberikan dampak positif.',

            'values' => [
                'Integritas',
                'Profesionalisme',
                'Komitmen terhadap Kualitas',
                'Kemauan untuk Terus Belajar',
                'Kerja Sama dan Komunikasi'
            ]
        ];

        $services = Service::allDummy();
        $portofolios = Portofolio::allDummy();

        return view('index', compact('hero', 'about', 'services','portofolios'));
    } 

    public function login()
    {
        return view('login');
    } 
    
    public function data()
    {
        return view('data');
    } 

    public function project_show($slug)
    {
        $project = Portofolio::findBySlug($slug); 

        abort_if(!$project, 404);

        return view('project_show', compact('project'));
    }
}