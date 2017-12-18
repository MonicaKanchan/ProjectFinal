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

<h1>Email: <?php echo $data->email; ?></h1>
<h1>First Name: <?php echo $data->fname; ?></h1>
<h1>Last Name: <?php echo $data->lname; ?></h1>


<?php
//this is how you print something  $data contains the record that was selected on the table.

//print_r($data);
session_start();
print utility\htmlTable::generateTableFromOneRecord($data);

?>


<!-- <style>
 label
 {
 width: 5em;
 float: right;
 text-align: center;
 margin-right: 68.0em;
 display: block;
 }
 </style> -->
 <button onclick="enableProfileEdit()">Enable Edit</button>
 <form action="index.php?page=accounts&action=edit&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form1">
     email      : <input type="text" form="form1" id="email" name="email" value="<?php echo $data->email; ?>" readonly><br>
     fname      : <input type="text" form="form1" id="fname" name="fname" value="<?php echo $data->fname; ?>" readonly><br>
     lname      : <input type="text" form="form1" id="lname" name="lname" value="<?php echo $data->lname; ?>" readonly><br>
     phone      : <input type="text" form="form1" id="phone" name="phone" value="<?php echo $data->phone; ?>" readonly><br>
     birthday   : <input type="text" form="form1" id="birthday" name="birthday" value="<?php echo $data->birthday; ?>" readonly><br>
     gender     : <input type="text" form="form1"  id="gender" name="gender" value="<?php echo $data->gender; ?>" readonly><br>
     password   : <input type="password" form="form1"  id="password" name="password" value=''><br>
     <!-- <button type="submit" value="save"><a
     href="index.php?page=accounts&action=edit&id=42">save</a></button> -->
     <input type="submit" id="saveButton" name="save" style="display: none;" value="Save">
</form>
<!-- 
<form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>" method="post">


    First name:<input type="text" name="fname" value="<?php echo $data->fname; ?>" readonly><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>" readonly><br>
    Email:<input type="text" name="email" value="<?php echo $data->email; ?>" readonly><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>" readonly><br>
    Birthday: ><input type="text" name="birthday" value="<?php echo $data->birthday; ?>" readonly><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>" readonly><br>
    <button type="submit"><a href="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>">Edit</a></button>
    <input type="submit" value="Submit form"> 
</form> -->


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>

<h4><a href="index.php?page=tasks&action=all">Previous Page</a></h4>

<script src="js/script.js"></script>
</body>
</html>