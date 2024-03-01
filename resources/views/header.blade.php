<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi pengajuan cuti</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 <style>
    /* Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

/* Reset styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Root variables */
:root {
    --body-color: #E4E9F7;
    --sidebar-color: #FFF;
    --primary-color: #f6f6f6;
    --primary-color-light: #f6f5ff;
    --toggle-color: #DDD;
    --text-color: #707070;
    --tran-02: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.4s ease;
    --tran-05: all 0.5s ease;
}

body {
    height: 100vh;
    background: var(--body-color);
    font-family: 'Poppins', sans-serif;
}

/* Gaya Sidebar */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
}

.sidebar .text {
    font-size: 12px;
    font-weight: 500;
    color: var(--text-color);
}

.sidebar li {
    height: 50px;
    background-color: rgb(248, 244, 245);
    margin-top: 5px; /* Mengurangi margin-top menjadi 5px */
    list-style: none;
    display: flex;
    align-items: center;
}


.sidebar li.icon {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 60px;
    font-size: 20px;
}

.sidebar li.icon,
.sidebar li .text {
    color: var(--text-color);
    transition: var(--tran-02);
}

.sidebar header {
    position: relative;
}

.sidebar .image-text img {
    width: 40px;
    border-radius: 6px;
}

.sidebar header .image-text {
    display: flex;
    align-items: center;
}

.header .image-text .header-text {
    display: flex;
    flex-direction: column;
}

.header-text .name {
    font-weight: 600;
}

.header-text .profession {
    margin-top: -2px;
}

.sidebar header .toggle {
    position: absolute;
    top: 50%;
    left: -25px;
    transform: translateY(-50%);
    height: 25px;
    width: 25px;
    background: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--sidebar-color);
    font-size: 22px;
}



.sidebar li a {
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 6px;
    transition: var(--tran-04);
}

.sidebar li a {
    background: var(--primary-color);
}

.sidebar li a:hover .icon,
.sidebar li a:hover .text {
    color: var(--sidebar-color);
}

.sidebar .menu-bar {
    height: calc(100% - 50px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.menu-bar .mode {
    margin-top: auto;
    margin-bottom: 10px;
    padding-top: 10px;
    border-top: 1px solid var(--primary-color);
    background: var(--primary-color-light);
}

.menu-bar .mode .moon-stars {
    height: 50px;
    width: 60px;
    display: flex;
    align-items: center;
}

.menu-bar .mode i {
    position: absolute;
}

.menu-bar .mode i.moon-stars {
    opacity: 0;
}

.menu-bar .mode .toggle-switch {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    min-width: 60px;
    cursor: pointer;
}

.toggle-switch {
    position: relative;
    width: 50px;
    height: 24px;
    background-color: #ddd;
    border-radius: 12px;
    display: inline-block;
    margin-left: 10px;
}

.switch {
    position: absolute;
    top: 0;
    left: 0;
    width: 24px;
    height: 24px;
    background-color: #fff;
    border-radius: 50%;
    transition: transform 0.3s ease;
}

.dark-mode .switch {
    transform: translateX(26px);
}

/* Gaya Toggle Dark Mode */
#toggleModeButton {
    width: 30px;
    height: 30px;
    background-color: var(--background-color);
    border: none;
    cursor: pointer;
}

/* Gaya Dark Mode */
.dark-mode {
    background-color: #1a1a1a;
    color: #ffffff;
}

.dark-mode-text {
    margin-right: 10px;
}

 </style>

 <script>

    document.addEventListener("DOMContentLoaded", function () {
    const toggleSwitch = document.querySelector('.toggle-switch');
    const body = document.querySelector('body');

    toggleSwitch.addEventListener('click', function () {
        body.classList.toggle('dark-mode');
        toggleSwitch.classList.toggle('dark-mode-text');
    });
});

 </script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<style>    
	</style>
</head>
<body>
</body>