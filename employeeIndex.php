
<?php 
		$emId = filter_input(INPUT_POST, 'emId');
		$emName = filter_input(INPUT_POST, 'emName');
		$emPassword = filter_input(INPUT_POST, 'emPassword');
		$emAddress = filter_input(INPUT_POST, 'emAddress');
		$emContact = filter_input(INPUT_POST, 'emContact');	
		if (!empty($emId)) {
			if (!empty($emName)) {
				if (!empty($emPassword)) {
					if (!empty($emAddress)) {
						if (!empty($emContact)) {

							//creating a connection
							$conn = new mysqli($emId,$emName,$emPassword,$emAddress,$emContact);
							if ($conn) {
INSERT INTO register(emId, emName, emPassword, emAddress, emContact)
VALUES('$emId','$emName','$emPassword','$emAddress','$emContact')
								
							}else{
								echo "error";
								die();
							}
							
						}else{
							echo "emContact should NOT be empty";
						}
					
					}else{
						echo "emAddress should NOT be empty";
					}
					
				}else{
					echo "Employee Password should NOT be empty";
				}
				
			}else{
				echo "emName should NOT be empty";
			}
														
		}else{
			echo "emId should NOT be empty";
		}					
 ?>
