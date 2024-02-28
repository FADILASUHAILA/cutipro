<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="asset/1.jpeg" alt="John" style="width:100%">
  <h1>Fadila Suhaila</h1>
  <p class="title">Admin</p>
  <p>Lhokseumawe</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>

=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Instagram-like Profile</title>

    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fafafa;
}

.profile-container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    border: 1px solid #e6e6e6;
    border-radius: 5px;
}

.profile-header {
    display: flex;
    align-items: center;
    padding: 20px;
    border-bottom: 1px solid #e6e6e6;
}

.profile-avatar {
    margin-right: 20px;
}

.avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-info {
    flex-grow: 1;
}

h1 {
    margin: 0;
    font-size: 1.2em;
}

.follow-button {
    background-color: #3498db;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.profile-details {
    padding: 20px;
}

h2 {
    color: #333;
    margin-bottom: 10px;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

strong {
    font-weight: bold;
    margin-right: 5px;
}

span {
    color: #3498db;
}

    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-avatar">
                <img src="user-avatar.jpg" alt="User Avatar" class="avatar">
            </div>
            <div class="profile-info">
                <h1 id="username">John_Doe</h1>
                <button class="follow-button">Follow</button>
            </div>
        </div>
        <div class="profile-details">
            <h2>Your Details</h2>
            <ul>
                <li><strong>Email:</strong> <span id="email">john.doe@example.com</span></li>
                <li><strong>Location:</strong> <span id="location">City, Country</span></li>
                <li><strong>Member Since:</strong> <span id="member-since">January 1, 2022</span></li>
            </ul>
        </div>
    </div>

    <script src="script.js"></script>
>>>>>>> 4bbf2f184a21d4ec8347577cb84a4351fb2c5f1d
</body>
</html>
