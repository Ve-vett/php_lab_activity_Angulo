<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Management System </title>
</head>
<body>

<style>
.button {
    border: none;
    color: white;
    padding: 10px 155px;
    text-align: center;
    display: inline-block;
    font-size: 1opx;
    margin: 4px 2px;
    cursor: pointer;
}

.button {border-radius: 8px; background-color: #0667b8;} 

.input {
    padding: 10px 1px;
}
</style>

<h1 style="text-align: center; font-family: arial;"> User Management System </h1>

<h3 style="font-family: arial;"> Add New User </h3>
<form method="post">
    <p style="font-family: arial; font-size: 15px;"> Full Name </p>
    <input type="text" class="input" placeholder="Enter Full Name" name="name" size="45" required> <br> <br>

    <p style="font-family: arial; font-size: 15px;"> Email Address </p>
    <input type="text" class="input" placeholder="Enter Email Address" name="email" size="45" required> <br> <br>

    <button type="submit" class="button" name="submit_btn"> Submit </button>
</form>
    
</body>
</html>