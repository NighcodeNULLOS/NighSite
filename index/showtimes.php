
<?php
header('Content-Type: application/json');
	//$lol = isset($_POST['name']) ? $_POST['name'] : NULL;

	//$mdr = json_decode(stripslashes($_POST),true);
	


	$arr = array(array('id' => '456','name' => 'Star-Wars'),array('id' => '123','name' => 'Les Minions'));
	$bool = 0;

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		if (isset($_POST['name']))
		{
			$seance_to_find = $_POST['name'];
			for ($i=0;$i<count($arr);$i++)
			{
				if ($arr[$i]['name'] == $seance_to_find) {
					$answer = $arr[$i];
					echo json_encode($answer);
					$bool = 1;
				}
				if ($bool == 0)
				{
					http_response_code(404);
					die();
				}
				

			}
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