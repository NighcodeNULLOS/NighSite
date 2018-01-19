
<?php
header('Content-Type: application/json');

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		if (isset($_GET['id']))
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
				//include('Error404.php');
				die();
			}

		}
		else
		{
			echo json_encode($arr);
		}
		
		
	}
?>
