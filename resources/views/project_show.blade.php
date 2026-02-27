@extends('layouts.app')
@section('title', $project['title'])
@section('content')
<!-- ================= HERO ================= -->
<section class="relative h-[60vh] bg-gray-900">
    <img
    src="{{ asset($project['thumbnail']) }}"
    alt="{{ $project['title'] }}"
    class="w-full h-full object-cover opacity-70"
>


    <div class="absolute inset-0 flex items-center">
        <div class="max-w-5xl mx-auto px-6 text-white">
            <p class="uppercase tracking-widest text-sm mb-2">
                {{ $project['category'] }}
            </p>
            <h1 class="text-4xl md:text-5xl font-bold">
                {{ $project['title'] }}
            </h1>
            <p class="mt-4 max-w-2xl text-gray-200">
                {{ $project['short_description'] }}
            </p>
        </div>
    </div>
</section>


<!-- ================= CONTENT ================= -->
<section class="max-w-5xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-3 gap-10">


    <!-- LEFT CONTENT -->
    <div class="md:col-span-2">
        <h2 class="text-2xl font-bold mb-4">
            Tentang Project
        </h2>


        <p class="text-gray-600 leading-relaxed mb-8">
            {{ $project['description'] }}
        </p>


        <!-- Features -->
        <h3 class="text-xl font-semibold mb-4">
            Fitur Utama
        </h3>


        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-10">
            @foreach ($project['features'] as $feature)
                <li class="flex items-center gap-3 text-gray-700">
                    <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>


        <!-- Gallery -->
        <h3 class="text-xl font-semibold mb-4">
            Galeri Project
        </h3>


        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach ($project['images'] as $image)
                <img
                    src="{{ asset($image) }}"
                    alt="{{ $project['title'] }}"
                    class="rounded-lg shadow"
                >
            @endforeach
        </div>
    </div>


    <!-- RIGHT SIDEBAR -->
    <aside class="bg-gray-50 rounded-xl p-6 h-fit shadow-sm">
        <h3 class="text-lg font-semibold mb-4">
            Informasi Project
        </h3>


        <ul class="space-y-3 text-sm text-gray-600">
            <li>
                <strong>Client:</strong><br>
                {{ $project['client'] }}
            </li>
            <li>
                <strong>Tahun:</strong><br>
                {{ $project['year'] }}
            </li>
            <li>
                <strong>Kategori:</strong><br>
                {{ $project['category'] }}
            </li>
            <li>
                <strong>Tech Stack:</strong><br>
                {{ implode(', ', $project['tech_stack']) }}
            </li>
        </ul>


        @if ($project['url'])
            <a href="{{ $project['url'] }}" target="_blank" class="mt-6 inline-block w-full text-center bg-rose-850 text-white py-3 rounded-lg hover:bg-rose-900 transition">
                Visit Website
            </a>
        @endif
    </aside>


</section>
@endsection