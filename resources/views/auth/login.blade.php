<!-- @extends('layouts.app') -->
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .bg-image {
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            filter: blur(10px);
            -webkit-filter: blur(8px);
            position: fixed;
            width: 100%;
            z-index: -1;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.85);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-container {
            display: block;
        }

        .form-container h1 {
            margin-bottom: 20px;
        }

        .social-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .social-container a {
            border: 1px solid #ddd;
            border-radius: 50%;
            padding: 10px;
            margin: 0 5px;
            color: #333;
            text-decoration: none;
        }

        .infield {
            position: relative;
            margin-bottom: 20px;
        }

        .infield input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-check {
            margin-bottom: 20px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="bg-image"></div>
    <img src="{{asset('asset/dila.png')}}" style="width: 100%; height: auto;">

    <div class="container" id="container">
        <div class="form-container sign-up-container">
        </div>
        <div class="form-container sign-in-container">
        <form class="login-form" method="POST" action="/">
        @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Atau</span>
                <div class="infield">
                    <input type="text" placeholder="No Pegawai" name="no_peg" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <label></label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
        
                <button type="submit">Sign In</button>
                @if (Route::has('password.request'))
                            
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

            </form>
        </div>
        
    </div>
    <!-- js code -->
    <script>
    </script>

</body>
</html>
@endsection

