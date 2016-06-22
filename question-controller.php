<?php

$page = $_REQUEST['page'];

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

//determine what page to show
if ($page == 'show'){
	$id = $_REQUEST['id'];
	show($id);
}
elseif ($page == 'create') {
	create();
}

//load the show page
function show ($id){
	global $connection;

	$object = array(	
		'title' => '',
		'description' => '',
		'code' => '',
		'submitted_at' => ''
		 );

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

	//load the view file
	include 'question-show-view.php';
}

//load the create page
function create(){
	include 'question-create-view.php';
}
?>
