<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .profile-container {
            margin-top: 50px;
        }

        .profile-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            transition: transform 0.3s;
        }

        .profile-card:hover {
            transform: scale(1.02);
        }

        .profile-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 30px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin: -60px auto 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-body {
            padding: 20px;
            text-align: center;
        }

        .profile-body h2 {
            color: #007bff;
        }

        .profile-body p {
            color: #555;
        }

        .menu-item {
            padding: 15px;
            color: #007bff;
            text-align: center;
            border-top: 1px solid #ddd;
            transition: background-color 0.3s;
        }

        .menu-item:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    <div class="container-fluid profile-container">
        <div class="card profile-card">
            <div class="card-header profile-header">
                <div class="profile-image">
                    <img src="https://via.placeholder.com/120" alt="Profile Image">
                </div>
                <h1>Admin Name</h1>
                <p>Email: admin@example.com</p>
            </div>

            <div class="card-body profile-body">
                >
            </div>

            <div class="menu-item">Dashboard</div>
            <div class="menu-item">Leave Requests</div>
            <div class="menu-item">Settings</div>
            <div class="menu-item">Logout</div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

