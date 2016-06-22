<?php
$id = $_REQUEST['id'];

$object = array(
	'title' => '',
	'description' => '',
	'code' => '',
	'submitted_at' => ''
	 );

// database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

//create connection
$connection = new mysqli($servername, $username, $password);

// check for an error
if ($connection->connect_error) {
	echo 'connection failed: '. $connection->connect_error;
	exit;
}

//otherwise, connected successfully!
echo 'connected successfully';


//connect to the "fitl" database
$connection->select_db('fitl');

//query to select the object
//SELECT * FROM questions WHERE id = 1
$sql = 'SELECT * FROM questions WHERE id = ' . $id;

// execute the query
$result = $connection->query($sql);

// check for and retrieve the object
if ($result->num_rows > 0) {
	$object = $result->fetch_assoc();
	// echo '<pre>';
	// print_r($object);
	// echo '</pre>';
}


// set the object variables
// based on the id value from the URL
/*
if ($id == 1) {
	$object = array(
		'title' => 'I\'m having trouble displaying a Javascript alert.', 
		'description' => 'I think I\'m using the correct function, but I cant\'t figure out what\'s wrong. could you point?', 
		'code' => 'alert(This is a message)', 
		'submitted_at' => 'June 11, 2015' 
		);
}
elseif ($id == 2) {
	$object = array(
		'title' => 'My HTML list isn\'t displaying properly.', 
		'description' => 'I think I\'m using the write list element, but it\'s not showing up correctly. Any thoughts?', 
		'code' => '&lt;ul&gt;
	        item 1
	        item 2 
	        item 3 
	        &lt;/ul&gt;', 
		'submitted_at' => 'June 16, 2015', 
		);
}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $object['title']; ?></title>
</head>
<body>
	<h1><?php echo $object['title'];?></h1>
	<p><?php echo $object['description']; ?></p>
	<pre>
		<?php echo $object['code']; ?>
	</pre>
	<p>Question Date: <?php echo $object['submitted_at']; ?></p>
</body>
</html> 