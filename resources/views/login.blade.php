@extends('layouts.app')
@section('title', 'login')
@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    
    <div class="bg-white shadow-lg rounded-lg overflow-hidden flex w-full max-w-4xl">

        <!-- BAGIAN GAMBAR -->
        <div class="w-1/2 hidden md:block">
            <img 
                src="assets/hero/pexels-monoar-rahman-22660-109371.jpg"
                alt="Login Image"
                class="h-full w-full object-cover"
            >
        </div>

        <!-- BAGIAN FORM -->
        <div class="w-full md:w-1/2 p-8">
            <h2 class="text-2xl font-bold mb-6 text-center text-white">LOGIN</h2>

            <form action="" name="login" method="post" onsubmit="return validatelogin()" class="space-y-5 shadow">
                <label class="block mb-2 font-medium text-slate-800" for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Username"
                    required
                    class="w-full mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-slate-500"
                >

                <label class="block mb-2 font-medium text-slate-800" for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    
                    name="password"
                    placeholder="Password"
                    required
                    class="w-full mb-6 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-slate-500"
                >

                <button
                    type="submit"
                    class="w-full bg-slate-600 hover:bg-slate-700 active:bg-slate-800 text-white py-3 rounded-lg font-semibold transition"
                >
                    Submit
                </button>
            </form>
        </div>

    </div>
    @endsection


@section('javascript')
    <script src="script.js"></script>
    <script>
        function validatelogin() {
            const username = document.getElementById("username").value.trim(); 
            const password = document.getElementById("password").value.trim(); 

            const users = [
                {
                    username: "admin",
                    password: "admin123",
                }
            ];

            const foundUser = users.find(
                user => user.username === username && user.password == password 
            );

            if (foundUser) {
                const authData = {
                    islogin: true,
                    user: {
                        username: foundUser.username
                    },
                    logintime: new Date().toISOString()
                };

                localStorage.setItem("auth", JSON.stringify(authData));

                window.location.href = "{{ route('data')}}";
                return false;
            } else {
                alert("Username atau Password salah")
            }
        }
    </script>
    @endsection