
<?php
header('Content-Type: application/json');
	//$lol = isset($_POST['name']) ? $_POST['name'] : NULL;

	//$mdr = json_decode(stripslashes($_POST),true);
	


	$arr = array(array('id' => '456','name' => 'Star-Wars'),array('id' => '123','name' => 'Les Minions'));
	$bool = 0;


	// print_r($_REQUEST);


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$json_str = file_get_contents('php://input');
		$json_obj = json_decode($json_str,true);
		if (isset($json_obj['name']))
		{

			
			$data = ['id' => strval(rand(1, 4000)),'name' => $json_obj['name']]; 
			echo json_encode($data);
		}
		else
		{
			http_response_code(400);
			//include('Error400.html');
			die();
		}

		

	}

	
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {

		if ($_GET['id'])
		{
			$seance_to_find = $_GET['id'];
			for ($i=0;$i<count($arr);$i++)
			{
				if ($arr[$i]['id'] == $seance_to_find) {
					$answer = $arr[$i];
					$bool = 1;
				}

			}
			
			if ($bool == 1) {
				echo json_encode($answer);
			}
			else {
				http_response_code(404);
				//include('Error404.html');
				die();
			}

		}
		else
		{
			echo json_encode($arr);
		}
		
		
	}


?>