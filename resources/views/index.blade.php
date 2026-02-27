@extends('layouts.app')
@section('title', 'me')
@section('content')
		<!-- Navbar Start -->
			<nav class="flex justify-between items-center p-3 bg-slate-800 text-white fixed w-full top-0 z-50">
				<div class="text-xl font-bold">Brand Kita</div>
				<button id="menu-btn" class="md:hidden">
					<span class="material-symbols-outlined">
						menu
					</span>
				</button>
				
				<!--Website Menu View-->
				<ul class="hidden md:flex gap-6">
					<li>
						<a href="#" class="hover:text-slate-400 transition">Home</a>
					</li>
					<li>
						<a href="#" class="hover:text-slate-400 transition">About Us</a>
					</li>
					<li>
						<a href="#" class="hover:text-slate-400 transition">Service</a>
					</li>
					<li>
						<a href="#" class="hover:text-slate-400 transition">Portofolio</a>
					</li>
					<li>
						<a href="#" class="hover:text-slate-400 transition">Contact</a>
					</li>
					<li>
                        <a href="{{ route('data')}}" class="bg-slate-800 hover:bg-slate-700 active:bg-slate-800 text-white px-6 py-2 rounded-lg font-semibold transition">Login</a>
					</li>
				</ul>
				
				<!--Mobile View-->
				<div id="menu" class="hidden md:hidden bg-pink-700 px-6 pb-4">
					<ul class="flex flex-col gap-4 text-center">
						<li>
						<a href="#" class="hover:text-slate-400 transition">Home</a>
					</li>
					<li>
						<a href="#" class="hover:text-slate-400 transition">About Us</a>
					</li>
					<li>
						<a href="#" class="hover:text-slate-400 transition">Service</a>
					</li>
					<li>
						<a href="#" class="hover:text-slate-400 transition">Portofolio</a>
					</li>
					<li>
						<a href="#" class="hover:text-slate-400 transition">Contact</a>
					</li>
					<li>
						<a href="{{ route('data')}}" class="bg-slate-800 hover:bg-slate-700 active:bg-slate-800 text-white px-6 py-2 rounded-lg font-semibold transition">Login</a>
					</li>
					</ul>
				</div>
			</nav>
            <!-- Navbar End-->
		
		<!-- Home Section Start -->
		<header id="home" class="relative min-h-[80vh]  flex flex-col justify-center items-center text-center px-6 
        bg-[url('{{asset('assets/hero/inti.jpg')}}')] bg-cover bg-center">

            
                <div class="absolute inset-0 bg-black/70"></div>

                <div class="relative z-10">
                    <h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold text-white mb-4">Selamat Datang Di Website Kami
                </h1>
                <p class="mx-auto text-white mb-6">
                    Halaman ini adalah halaman utama  Website Perusahaan kami</p>
                <button type="button" class="bg-slate-800 hover:bg-slate-600 text-white px-8 py-3 rounded-lg font-semibold transition">Lihat Portofolio</button>
                </div>
			
		
                <div class="drop-shadow-md mt-8 flex flex-wrap justify-center gap-6 text-sm text-white">
                    <div>
                        <span class="font-bold text-white">50+</span> Project Selesai
                    </div>
                    <div>
                        <span class="font-bold text-white">30+</span> Klien
                    </div>
                    <div>
                        <span class="font-bold text-white">5</span> Tahun
                    </div>
                </div>

        </header>
		<!-- Home Section End -->


        <!-- About Us Start -->
    <section id="about" class="px-6 py-16 bg-white">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-start">


            <!-- KONTEN UTAMA -->
<div>
    <h2 class="text-3xl font-bold text-black">About Us</h2>

    <p class="text-black mb-4">
    {{ $about['intro'] }}
</p>
</div>

<!-- KONTEN PENDUKUNG -->
<div class="space-y-6">

    <!-- VISI -->
    <div class="bg-slate-800 p-8 rounded-xl shadow">
        <h3 class="text-xl font-semibold mb-2 text-white">Visi Kami</h3>

        <p class="text-white mb-3">
    {{ $about['visi'] }}
</p>
    </div>

    <!-- VALUES -->
    <div class="bg-slate-800 p-8 rounded-xl shadow">
        <h3 class="text-xl font-semibold text-white">Nilai yang Kami Pegang</h3>

        <ul class="space-y-2 text-white">
            @foreach ($about['values'] as $item)
                <li>• {{ $item }}</li>
            @endforeach
        </ul>
    </div>
    </div>


    </section>
    <!-- About Us End-->


    <!-- Layanan Kami Start-->
		 <section class="px-6 py-16 bg-gray-100">

        <h2 class="text-3xl font-bold text-center mb-10 text-gray-700">Layanan Kami</h2>


        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">


            <!-- Web Development -->

         @foreach ($services as $item)
           <div class="bg-white p-8 rounded-xl shadow transition hover:shadow hover:-translate-y-1">
               <div class="w-12 h-12 mb-4 flex items-center justify-center rounded-lg bg-{{$item['color']}}-100 text-{{$item['color']}}-600">
                    {!!$item['icon']!!}
               </div>

               <h3 class="text-xl font-semibold mb-2">
                   {{$item['title']}}
               </h3>
               
               <p class="text-gray-600">
                  {{$item['subtitle']}}
               </p>
           </div>
        @endforeach


        </div>

    </section>
        <!-- Maintanence End-->
        <!-- Layanan kami End-->


        <!-- ================= PORTFOLIO ================= -->
    <section id="portfolio" class="px-6 py-16 bg-gray-100">
        <h2 class="text-3xl font-bold text-center mb-10">
            Portfolio Kami
        </h2>


        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">


            @foreach ($portofolios as $item)
                <a href="{{route('project_show', $item['slug'])}}" class="bg-white rounded-xl shadow overflow-hidden transition hover:shadow-xl hover:-translate-y-1 block">


                    <!-- Thumbnail -->
                    <img src="{{ asset($item['thumbnail']) }}"
                        alt="{{ $item['title'] }}"
                        class="w-full h-48 object-cover">


                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            {{ $item['title'] }}
                        </h3>


                        <p class="text-gray-600 mb-3">
                            {{ $item['short_description'] }}
                        </p>


                        <p class="text-sm text-gray-500">
                            Tech:
                            {{ implode(', ', $item['tech_stack']) }}
                        </p>
                    </div>


                </a>
            @endforeach


        </div>
    </section>


        <!-- Kontak / Form  -->
        <section id="kontak" class="px-6 py-16 bg-white-800">
            <h2 class="text-3xl font-bold text-center mb-10 text-black">Kontak Kami</h2>
            <form name="namaform" method="post" class="max-w-xl mx-auto bg-gray-100 p-8 rounded-lg shadow space-y-4">

                <input name="name" type="text" id="nama" placeholder="Nama" class="w-full px-4 py-3 rounded-lg border focus:outline-none 
                focus:border-slate-700 focus:ring-2 focus:ring-slate-700">

                <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg border focus:outline-none 
                focus:border-slate-700 focus:ring-2 focus:ring-slate-700">

                <textarea type="text" name="pesan" id="pesan" placeholder="Pesan" rows="4" class="w-full px-4 py-3 rounded-lg border focus:outline-none 
                focus:border-slate-700 focus:ring-2 focus:ring-slate-700"></textarea>

                <button type="submit" class="w-full bg-slate-600 hover:bg-slate-700 active:bg-slate-800 text-white py-3 rounded-lg font-semibold transition">Kirim Pesan</button>

            </form>
        </section>

        <!-- Footer Start-->
		<footer class="bg-slate-800 text-white text-center p-6">
			<p>©2026 Brand Kita, semua hak dilindungi</p>
		</footer>
        <!-- Footer End-->
@endsection
@section('javascriptindex')
	<script>
    		const btn = document.getElementById('menu-btn');
    		const menu = document.getElementById('menu');

    		btn.addEventListener('click', () => {
        		menu.classList.toggle('hidden');
    		});
    
		</script>

        <script>
            function validateform() {
                let name = document.forms["namaform"]["name"].value;
                let email = document.forms["namaform"]["email"].value;
                let pesan = document.forms["namaform"]["pesan"].value;

                if (name === "") {
                    alert("Kolom nama harus diisi");
                    return false;
                }
                if (email === "") {
                    alert("Kolom email harus diisi");
                    return false;
                }
                if (pesan === "") {
                    alert("Kolom pesan harus diisi");
                    return false;
                }
                return true;
            }

            document.forms["namaform"].addEventListener("submit", function(e) {
                e.preventDefault();

                if (!validateform()) return;

                const data = {
                    name: this.name.value,
                    email: this.email.value,
                    pesan: this.pesan.value
                };

                let listdata = JSON.parse(localStorage.getItem("pesan")) || [];
                listdata.push(data);

                localStorage.setItem("pesan", JSON.stringify(listdata));

                alert("pesan berhasil disimpan");
                this.reset();
            });
            </script>
@endsection