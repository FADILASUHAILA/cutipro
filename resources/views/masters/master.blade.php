<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aplikasi Pengajuan Cuti') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}

:root {
    --linear-grad: linear-gradient(to right, #141E30, #243B55);
    --grad-clr1: #141E30;
    --grad-clr2: #243B55;
}

body {
    height: 100vh;
    background: #f6f5f7;
    display: grid;
    place-content: center;
    font-family: 'Poppins', sans-serif;
}


footer {
    position: absolute;
    left: 50%;
    bottom: 30px;
    transform: translateX(-50%);
}
footer mark {
    padding: 8px 30px;
    border-radius: 7px;
}
footer a {
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    color: #003;
}
.container{
    position: relative;
    width: 850px;
    height: 500px;
    background-color: #FFF;
    box-shadow: 25px 30px 55px #5557;
    border-radius: 13px;
    overflow: hidden;
}

.form-container{
    position: absolute;
    width: 60%;
    height: 100%;
    padding: 0px 40px;
    transition: all 0.6s ease-in-out;
}

.sign-up-container{
    opacity:0;
    z-index: 1;
}

.sign-in-container{
    z-index: 2;
}

form{
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0px 50px;
}

h1{
    color: var(--grad-clr1);
}
.social-container{
    margin: 20px 0px;
}

.social-container a{
    border: 1px solid #DDD;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0px 5px;
    height: 40px;
    width: 40px;
}

span{
    font-size: 12px;
}

.infield{
    position: relative;
    margin: 8px 0px;
    width: 100%;
}

input{
    width: 100%;
    padding: 12px 15px;
    background-color: #f3f3f3;
    border: none;
    outline: none;
}

label{
    position: absolute;
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
    width: 0%;
    height: 2px;
    background: var(--linear-grad);
    transition: 0.3s;
}
input:focus ~ label{
    width: 100%;
}

a{
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0px;


}

a.forgot{
    padding-bottom: 3px;
    border-bottom: 2px solid #EEE;
}
button{
    border-radius: 20px;
    border: 1px solid var(--grad-clr1);
    background: var(--grad-clr2);
    color: #FFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.form-container button{
    margin-top: 17px;
    transition: 80ms ease-in;
}

.form-container button:hover{
    background: #FFF;
    color: var(--grad-clr1);
    
}

.overlay-container{
    position: absolute;
    top: 0;
    left: 60%;
    width: 40%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 9;
}
#overlayBtn{
    cursor: pointer;
    position: absolute;
    left: 50%;
    top: 304px;
    transform: translateX(-50%);
    width: 143.67px;
    height: 40px;
    border: 1px solid #FFF;
    background: transparent;
    border-radius: 20px;
}
.overlay{
    position: relative;
    background: var(--linear-grad);
    color: #FFF;
    left: -150%;
    height: 100%;
    width: 250%;
    transition: transform 0.6s ease-in-out;

}

.overlay-panel{
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0px 40px;
    text-align: center;
    height: 100%;
    width: 340px;
    transition:  0.6s ease-in-out;
}

.overlay-left{
    right: 60%;
    transform: translateX(-12%);
}
.overlay-right{
    right: 0%;
    transform: translateX(0%);
}

.overlay-panel h1{
    color: #FFF;

}
p{
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 25px 0px 35px;
}

.overlay-panel button{
    border: none;
    background-color: transparent;
}

</style>
<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
</body>