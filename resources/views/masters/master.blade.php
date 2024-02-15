<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-image: url('asset/bg.png');
    background-size: cover;
    background-position: top; /* Menempatkan gambar di bagian atas latar belakang */
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

        .login-container {
            
            color: #fff; /* Text color for better visibility on dark background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container img {
            width: 90%;
            height: 200%;
            /* object-fit: cover;
            border-radius: 50%; */
            margin-bottom: 20px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: whitesmoke;
        }

        .login-form input {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff; /* Tambahkan properti ini untuk mengatur warna teks menjadi putih */
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


        .login-form button {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #2980b9;
        }

        .forgot-password {
            margin-top: 10px;
            color: #3498db;
            text-decoration: none;
            display: inline-block;
            font-size: x-small;
        }
</style>
<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>