@extends('layouts.app')
@section('title', 'data')
@section('content')
<div class="max-w-6xl mx-auto px-6 py-8 "> 
    <header class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-900">📩 Data Pesan Masuk</h1>

        <div class="flex gap-3 mt-4 md:mt-0">
            <a href="{{ route('index')}}" class="bg-slate-700 hover:bg-slate-800 active:bg-slate-900 text-white px-5 py-2 rounded-lg font-semibold transition">Kembali Ke Beranda</a>

            <button onclick="logout()" class="bg-slate-700 hover:bg-slate-800 active:bg-slate-900text-white px-5 py-2 rounded-lg font-semibold transition">Logout</button>
        </div>
    </header>

    <!-- Section -->
     <section class="bg-white rounded-xl shadow overflow-hidden">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-slate-800 text-white">
                    <tr>
                        <th class="px-4 py-3 text-center">No</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Pesan</th>
                    </tr>
                </thead>
                <tbody id="dataTable" class="divide-y">
                    <div id="Emptystate" class="hidden text-center py-10 text-slate-800">Belum Ada Data Pesan</div>
                </tbody>
            </table>
        </div>
     </section>
    </div>
@endsection


@section('javascript')
<!-- Script -->
     <script>
        const dataTable = document.getElementById('dataTable');
        const data = JSON.parse(localStorage.getItem("pesan")) || [];
        data.forEach((item, index)=> {
            const row = document.createElement('tr');
            row.innerHTML = `
            <td class="px-4 py-3 text-center"> ${index + 1}</td>
            <td class="px-4 py-3 text-center"> ${item.name}</td> 
            <td class="px-4 py-3 text-center"> ${item.email}</td>
            <td class="px-4 py-3 text-center"> ${item.pesan}</td>
            `;
            dataTable.appendChild(row);
        });
    </script>

    <script>
        const auth = JSON.parse(localStorage.getItem("auth"));
        
        if (!auth || auth.islogin !== true) {
            window.location.href = "{{ route('login')}}";
        }
    </script>

    <script>
        function logout() {
            localStorage.removeItem("auth");
            window.location.href = "{{ route('login')}}";
        }
    </script>
@endsection