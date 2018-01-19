
<?php
header('Content-Type: application/json');


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {


		$json_str = file_get_contents('php://input');
		$json_obj = json_decode($json_str,true);
		if (isset($json_obj))
		{
			$data = ['id' => $_GET['id'],'row' => $json_obj['row'],'seat' => $json_obj['seat']]; 
			echo json_encode($data);
		}
		else if (isset($_GET['id']))
		{

			
			$data = ['id' => $_GET['id'],'row' => strval(rand(1, 50)),'seat' => strval(rand(1, 50))]; 
			echo json_encode($data);
		}
		else
		{
			http_response_code(400);
			//include('Error400.html');
			die();
		}

		

	}

?>
