<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<style>
 label
 {
 width: 5em;
 float: right;
 text-align: center;
 margin-right: 68.0em;
 display: block;
 }
 </style>

<form action="index.php?page=accounts&action=register" method="post">
    First name:<label> <input type="text" name="fname"></label><br>
    Last name: <label><input type="text" name="lname"></label><br>
    Email: <label><input type="text" name="email"></label><br>
    Phone: <label><input type="text" name="phone"></label><br>
    Birthday:<label><input type="text" name="birthday"></label><br>
    Gender: <label><input type="text" name="gender"></label><br>
    Password: <label><input type="password" name="password"></label><br>
    <input type="submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
