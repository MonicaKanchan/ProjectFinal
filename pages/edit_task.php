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
//this is how you print something  $data contains the record that was selected on the table.

//print utility\htmlTable::generateTableFromOneRecord($data);
// print_r($data);
// print_r($_SESSION);
session_start();
// print_r($_SESSION);
$editButtonMessage = '';
if(empty($data)){
  $editButtonMessage = 'Create';
  $url = "index.php?page=tasks&action=create"; 
} else {
  $editButtonMessage = 'Edit';
  $url = "index.php?page=tasks&action=update&id=". $data->id;
}

?>

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

 <h3><a href="index.php?page=accounts&action=logout">LogOut</a></h3>

 <p> To <?php echo $editButtonMessage; ?> the task click Enable edit button </p>
 <button id='editEnable' onclick="editEnable();">Enable <?php echo $editButtonMessage; ?></button>
 <form action="<?php echo $url; ?>" method="post">
 
  
  Ownermail: <label> </label><input type="email" name="mail" value="<?php echo $_SESSION['userEmail']; ?>" readonly><br><br>
  Ownerid: <label></label><input type="number"  name="oid" value="<?php echo $_SESSION['userID']; ?>" readonly><br><br>
  Createddate: <label></label><input type="date" name="createdate"  value="<?php echo $data->createddate; ?>" readonly><br><br>
  Duedate: <label></label><input type="date" name="duedate" value="<?php echo $data->duedate; ?>" readonly><br><br>
  Message: <label></label><input type="text" id="message" name="message" value="<?php echo $data->message; ?>" readonly><br><br>
  isDone: <label></label><input type="number" id="completedStatus" name="isdone" value="<?php echo $data->isdone; ?>" readonly><br><br>
  
  <input type="submit" id="saveButton" style="display: none;" value="Save" />
  <!-- <button type="submit" id="saveButton" style="display: none;"><a href="index.php?page=tasks&action=update&id=<?php echo $data->id; ?>">Save</a></button> -->
 </form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<h3><a href="index.php?page=tasks&action=all">Previous Page</a></h3>

<script src="js/script.js"></script>
</body>
</html>