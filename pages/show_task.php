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
//print_r($data);

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

 <button type="submit" id='editEnable' value="edit">Edit</button>
 <form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>" method="get">
 
  
  Ownermail: <label> <input type="email" name="mail" value="<?php echo $data->Ownermail; ?>" readonly></label><br><br>
  Ownerid: <label><input type="number"  name="oid" value="<?php echo $data->Ownerid; ?>" readonly></label><br><br>
  Createddate: <label> <input type="date" name="createdate"  value="<?php echo $data->createddate; ?>" readonly></label><br><br>
  Duedate: <label><input type="date" name="duedate" value="<?php echo $data->duedate; ?>" readonly></label><br><br>
  Message: <label><input type="text" id="message" name="message" value="<?php echo $data->message; ?>" readonly></label><br><br>
  isDone: <label><input type="number" id="completedStatus" name="isdone" value="<?php echo $data->isdone; ?>" readonly></label><br><br>
  
  <button type="submit">Save</button>
 </form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<h3><a href="index.php?page=tasks&action=all">Previous Page</a></h3>

<script src="js/scripts.js">
	document.getElementById('editEnable').onclick = function() {
	    document.getElementById('message').removeAttribute('readonly');
	    document.getElementById('completedStatus').removeAttribute('readonly');
	 };
</script>
</body>
</html>
