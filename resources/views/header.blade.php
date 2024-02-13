<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Logo</title>
  <style>
  .navbar {
  background-color: #3498db; /* Ubah warna background sesuai keinginan Anda */
  height: 80px; /* Ubah tinggi header sesuai keinginan Anda */
  padding: 0 20px; /* Ubah padding header sesuai keinginan Anda */
}

.navbar-logo {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar-logo img {
  width: 120px; /* Ubah lebar logo sesuai keinginan Anda */
  height: auto;
  margin-right: 10px; /* Ubah margin kanan logo sesuai keinginan Anda */
}

.navbar-brand {
  font-size: 24px; /* Ubah ukuran font brand sesuai keinginan Anda */
  color: #fff; /* Ubah warna font brand sesuai keinginan Anda */
  font-weight: bold; /* Ubah ketebalan font brand sesuai keinginan Anda */
  margin-bottom: 0; /* Hilangkan margin bawah brand */
}

.navbar-nav {
  margin-left: auto; /* Pindahkan navigasi ke kanan */
}

.navbar-nav .nav-item {
  margin-right: 10px; /* Ubah jarak antar item navigasi */
}

.navbar-nav .nav-link {
  color: #fff; /* Ubah warna font navigasi */
  font-size: 16px; /* Ubah ukuran font navigasi */
  font-weight: normal; /* Ubah ketebalan font navigasi */
  text-transform: uppercase; /* Ubah huruf besar kecil navigasi */
}

.navbar-nav .nav-link:hover {
  color: #f8f9fa; /* Ubah warna font navigasi saat di-hover */
}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <div class="navbar-logo">
        <img src="asset/download.png" alt="Logo"> <a class="navbar-brand" href="#">Your Brand</a>
      </div>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ship">Shipping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>