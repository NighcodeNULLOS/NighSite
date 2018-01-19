
<?php
header('Content-Type: application/json');
	//$lol = isset($_POST['name']) ? $_POST['name'] : NULL;

	//$mdr = json_decode(stripslashes($_POST),true);
	


	$arr = array(array('id' => '456','name' => 'Star-Wars'),array('id' => '123','name' => 'Les Minions'));
	$bool = 0;

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {


		if (isset($_POST['name']))
		{

			
			$data = ['id' => strval(rand(1, 4000)),'name' => $_POST['name']]; 
			echo json_encode($data);
			// for ($i=0;$i<count($arr);$i++)
			// {
			// 	if ($arr[$i]['name'] == $seance_to_find) {
			// 		$answer = $arr[$i];
			// 		$bool = 1;
			// 		if ($bool == 1) {echo json_encode($answer);}
			// 	}
				
				

			// }
			// if ($bool == 0)
			// 	{
			// 		http_response_code(404);
			// 		die();
			// 	}
		}
		else
		{
			http_response_code(400);
			die();
		}

		

	}

	
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		echo json_encode($arr);
	}


?>