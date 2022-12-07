<?php 
	$conn = new mysqli('localhost', 'root', '', 'proyecto_final');
	if(!$conn->connect_errno){
		if(isset($_POST['action'])){
			switch ($_POST['action']){
				case 'get-states':
					$query = $conn->query("SELECT * FROM departamentos ORDER BY nombre");
					$data = array();
					while($key = $query->fetch_array()){
						$data[] = $key;
					}
					echo json_encode($data);
				break;
				
				case 'get-cities':
					$id = addslashes(trim($_POST['id']));
					$query = $conn->query("SELECT * FROM provincias WHERE departamento_id = '$id' ORDER BY nombre");
					$data = array();
					while($key = $query->fetch_array()){
						$data[] = $key;
					}
					echo json_encode($data);
				break;

				case 'get-districts':
					$id = addslashes(trim($_POST['id']));
					$query = $conn->query("SELECT * FROM distritos WHERE provincia_id = '$id' ORDER BY nombre");
					$data = array();
					while($key = $query->fetch_array()){
						$data[] = $key;
					}
					echo json_encode($data);
				break;
			}
		}
	}
?>