//put a page with in a form to edit an account

<!doctype html>

<html lang ="en">
<head>
	<meta charset="utf-8">
	<title>The HTML5 Herald</title>
	<meta name="Description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<link rel="stylesheet" href="css/styles.css?v=1.0">

	<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
	<?php

	print_r($data);
    session_start();
    print_r($_SESSION);

	?>

	<form action="index.php?page=accounts&action=edit&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form1">
	 email      : <input type="text" form="form1" name="email" value="<?php echo $data->email; ?>"<br>
     fname      : <input type="text" form="form1" name="fname" value="<?php echo $data->fname; ?>"><br>
     lname      : <input type="text" form="form1" name="lname" value="<?php echo $data->lname; ?>"><br>
     phone      : <input type="text" form="form1" name="phone" value="<?php echo $data->phone; ?>"><br>
     birthday   : <input type="text" form="form1" name="birthday" value="<?php echo $data->birthday; ?>"><br>
     gender     : <input type="text" form="form1"  name="gender" value="<?php echo $data->gender; ?>"><br>
     password   : <input type="password" form="form1"  name="password" value=''><br>
     <!-- <button type="submit" value="save"><a
     href="index.php?page=accounts&action=edit&id=42">save</a></button> -->
     <input type="submit" name="save" value="Save">
    </form>


    <script src="js/scripts.js"></script>
</body>
</html>
