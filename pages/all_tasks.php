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

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>

<style>
 label
 {

    width: 5em;
    float: right;
    text-align: center;
    margin-right: 65.0em;
    display: block;
 }
</style>
<br>

 
<form action="index.php?page=tasks&action=insertTask" method="post">
    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
    Ownermail: <label> <input type="email" name="mail" ></label><br><br>
    Ownerid: <label><input type="number" name="oid" ></label><br><br>
    Createddate: <label> <input type="text" name="createdate" ></label><br><br>
    Duedate: <label><input type="text" name="duedate" ></label><br><br>
    Message: <label><input type="text" name="message" ></label><br><br>
    isDone: <label><input type="number" name="isdone" ></label><br><br>
    <input type="submit" value="Insert">
</form>

<br><h1><a href="index.php?page=accounts&action=edit&id=<?php echo $_SESSION['userID']; ?>">update profile</a></h1>
<br><h1><a href="index.php?page=accounts&action=logout">logout</a></h1>


<script src="js/scripts.js"></script>
</body>
</html>