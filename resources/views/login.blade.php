<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-image: url('asset/haha.png');
    background-size: cover;
    background-position: top; /* Menempatkan gambar di bagian atas latar belakang */
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

        .login-container {
            background-color: rgba(0, 0, 0, 0.5); /* Dark gray with 50% transparency */
            color: #fff; /* Text color for better visibility on dark background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
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

.login-form select {
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
</head>

<body>

<div class="login-container">
    <img src="asset/login.png" alt="Company Logo">
    <h2>Login</h2>
    <form class="login-form" action="#" method="post">
        <input type="text" name="nopeg" placeholder="Nomor Pegawai" required>
         
        <!-- Tambahkan input seleksi -->
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="karyawan">Karyawan</option>
        </select>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>
    <p href="#" class="forgot-password">Lupa Password?</p>
</div>

</body>
</html>
