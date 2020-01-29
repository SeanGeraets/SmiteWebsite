<?php require_once('library/session.php');?>

<?php 

	function buildGod($god_name){
		loadCode();
		
		$caller = $god_name;
		
		require_once('procedures/pdo_connect.php');

		$sql = "CALL godCall('$caller')";
		
		try {
			$query = $connect->query($sql);
			$query->setFetchMode(PDO::FETCH_ASSOC);
		} catch(PDOException $q_error){
			echo 'Damn it'. $q_error;
		}
		if (!$query){
			echo 'No gods found';
		} else {

			while ($row = $query->fetch()){
				echo '<div class="container" style="border: 1px solid #000">';
					echo '<div class="row">';
						echo '<img src="images/gods/'.$row['Name'] .' Banner.jpg" alt="banner" width= "100%"; >';
					echo '</div>';
					echo '<div class="row">';
						echo '<div class = "col-sm text-center"style="border: 1px solid #000">';
							echo '<h5 class="card-title" style="font-size:250%;">'.$row['Name'].'</h5>';
							echo '<h5 class="card-text">Pantheon: '.$row['Pantheon'].'</h5>';
							echo '<img src="images/pantheons/NewUI_Pantheon_'.$row['Pantheon'].'.png" alt="passive">';
							echo '<h5 class="card-text">Class: '.$row['Class'].'</h5>';
							echo '<img src="images/classes/NewUI_Class_'.$row['Class'].'.png" alt="passive">';
						echo '</div>';
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<div class="card-body">';
								echo '<p class="card-text">Health: '.$row['God Health'].'</p>';
								echo '<p class="card-text">Mana: '.$row['God Mana'].'</p>';
								echo '<p class="card-text">HP5: '.$row['God HP5'].'</p>';
								echo '<p class="card-text">MP5: '.$row['God MP5'].'</p>';
								echo '<p class="card-text">Movement Speed: '.$row['God Speed'].'</p>';
								echo '<p class="card-text">Physical Protections: '.$row['God Phys Prot'].'</p>';
								echo '<p class="card-text">Magical Protections: '.$row['God Mag Prot'].'</p>';
								echo '<p class="card-text">Damage: '.$row['God Damage'].'</p>';
								echo '<p class="card-text">Progression: '.$row['God Progression'].'</p>';
								echo '<p class="card-text">Attack Speed: '.$row['God Attack Speed'].'</p>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
					echo '<div class="row">';
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<h3 class="card-title">'.$row['Passive Name'].'</h3>';
						echo '</div>';
					echo '</div>';
					echo '<div class="row">';
						if ($row['Name'] == "Ullr" || $row['Name'] == "Tyr" || $row['Name'] == "Hel"){
							echo '<div class="col-sm style="border: 1px solid #000"">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_Passive.png" alt="passive" height="64" width="64">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_PassiveB.png" alt="passive">';
						} else {
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_Passive.png" alt="passive" height="64" width="64">';
						}
						echo '<p class="card-text">'.$row['Passive Description'].'</p>';
						echo '</div>';
						echo '<div class="col-sm" style="border: 1px solid #000">';
							echo '<p class="card-text">'.$row['Passive Stats'].'</p>';
						echo '</div>';
					echo '</div>';
//---------------------------------------------------------------------------------------------------------------
					echo '<div class="row">';
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<h3 class="card-title">'.$row['Ability 1 Name'].'</h3>';
						echo '</div>';
					echo '</div>';

					echo '<div class="row">';
						if ($row['Name'] == "Yemoja" || $row['Name'] == "Ullr" || $row['Name'] == "Tyr" || $row['Name'] == "King Arthur" || $row['Name'] == "Hel" || $row['Name'] == "Fafnir" || $row['Name'] == "Cu Chulainn" || $row['Name'] == "Artio"){
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A01.png" alt="ability1" height="64" width="64">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A01B.png" alt="ability1" height="64" width="64">';
						} else {
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A01.png" alt="ability1" height="64" width="64">';
						}
						echo '<p class="card-text">'.$row['Ability 1 Description'].'</p>';
						echo '</div>';
						echo '<div class="col-sm" style="border: 1px solid #000">';
							echo '<p class="card-text">'.$row['Ability 1 Stats'].'</p>';
						echo '</div>';
					echo '</div>';
//------------------------------------------------------------------------------------------------------------
					echo '<div class="row">';
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<h3 class="card-title">'.$row['Ability 2 Name'].'</h3>';
						echo '</div>';
					echo '</div>';
					echo '<div class="row">';
						if ($row['Name'] == "Ullr" || $row['Name'] == "Tyr" || $row['Name'] == "Olorun" || $row['Name'] == "King Arthur" || $row['Name'] == "Hel" || $row['Name'] == "Fafnir" || $row['Name'] == "Artio"){
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A02.png" alt="ability2" height="64" width="64">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A02B.png" alt="ability2" height="64" width="64">';
						} else {
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A02.png" alt="ability2" height="64" width="64">';
						}
						echo '<p class="card-text">'.$row['Ability 2 Description'].'</p>';
						echo '</div>';
						echo '<div class="col-sm" style="border: 1px solid #000">';
							echo '<p class="card-text">'.$row['Ability 2 Stats'].'</p>';
						echo '</div>';
					echo '</div>';
//-------------------------------------------------------------------------------------------------------------
					echo '<div class="row">';
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<h3 class="card-title">'.$row['Ability 3 Name'].'</h3>';
						echo '</div>';
					echo '</div>';
					echo '<div class="row">';
						if ($row['Name'] == "Ullr" || $row['Name'] == "Tyr" || $row['Name'] == "Set" || $row['Name'] == "King Arthur" ||$row['Name'] ==  "Hel" || $row['Name'] == "Fafnir" || $row['Name'] == "Cu Chulainn" || $row['Name'] == "Artio"){
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A03.png" alt="ability3" height="64" width="64">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A03B.png" alt="ability3" height="64" width="64">';
						} else {
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A03.png" alt="ability3" height="64" width="64">';
						}
						echo '<p class="card-text">'.$row['Ability 3 Description'].'</p>';
						echo '</div>';
						echo '<div class="col-sm" style="border: 1px solid #000">';
							echo '<p class="card-text">'.$row['Ability 3 Stats'].'</p>';
						echo '</div>';
					echo '</div>';
//----------------------------------------------------------------------------------------------------------------------
					echo '<div class="row">';	
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<h3 class="card-title">'.$row['Ultimate Name'].'</h3>';
						echo '</div>';
					echo '</div>';
					echo '<div class="row">';
						if ($row['Name'] == "Ullr" || $row['Name'] == "King Arthur" || $row['Name'] == "Hel" || $row['Name'] == "Cu Chulainn" || $row['Name'] == "Artio"){
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A04.png" alt="ultimate" height="64" width="64">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A04B.png" alt="ultimate" height="64" width="64">';
						} else {
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_A04.png" alt="ultimate" height="64" width="64">';
						}
						echo '<p class="card-text">'.$row['Ultimate Description'].'</p>';
						echo '</div>';
						echo '<div class="col-sm" style="border: 1px solid #000">';
							echo '<p class="card-text">'.$row['Ultimate Stats'].'</p>';
						echo '</div>';
					echo '</div>';
//---------------------------------------------------------------------------------------------------------------
				
			}
		}
	}
	function buildMerlin($god_name){
		loadCode();
		
		$caller = $god_name;
		
		require_once('procedures/pdo_connect.php');

		$sql = "CALL merlinCall('$caller')";
		
		try {
			$query = $connect->query($sql);
			$query->setFetchMode(PDO::FETCH_ASSOC);
		} catch(PDOException $q_error){
			echo 'Damn it'. $q_error;
		}
		if (!$query){
			echo 'No gods found';
		} else {

			while ($row = $query->fetch()){
				echo '<div class="container" style="border: 1px solid #000">';
//-----------------------------------------------------------------------------------------------------------------------
					echo '<div class="row">';
						echo '<img src="images/gods/'.$row['Name'] .' Banner.jpg" alt="banner" width= "100%"; >';
					echo '</div>';
					echo '<div class="row">';
						echo '<div class = "col-sm text-center"style="border: 1px solid #000">';
							echo '<h5 class="card-title" style="font-size:250%;">'.$row['Name'].'</h5>';
							echo '<h5 class="card-text">Pantheon: '.$row['Pantheon'].'</p>';
							echo '<h5 class="card-text">Class: '.$row['Class'].'</h5>';
						echo '</div>';
						echo '<div class = "col-sm text-center"style="border: 1px solid #000">';
							echo '<div class="card-body">';
								echo '<p class="card-text">Health: '.$row['Health'].'</p>';
								echo '<p class="card-text">Mana: '.$row['Mana'].'</p>';
								echo '<p class="card-text">HP5: '.$row['HP5'].'</p>';
								echo '<p class="card-text">MP5: '.$row['MP5'].'</p>';
								echo '<p class="card-text">Movement Speed: '.$row['Speed'].'</p>';
								echo '<p class="card-text">Physical Protections: '.$row['Physical Protection'].'</p>';
								echo '<p class="card-text">Magical Protections: '.$row['Magical Protection'].'</p>';
								echo '<p class="card-text">Damage: '.$row['Damage'].'</p>';
								echo '<p class="card-text">Range: '.$row['God Range'].'</p>';
								echo '<p class="card-text">Progression: '.$row['Progression'].'</p>';
								echo '<p class="card-text">Attack Speed: '.$row['Attack Speed'].'</p>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
//-------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Passive Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_'.$row['Name'].'_Passive.png" alt="passive">';
								echo '<p class="card-text">'.$row['Passive Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Passive Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//----------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Arcane Ability 1 Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_Merlin_Arcane_A01.png" alt="ability1">';
								echo '<p class="card-text">'.$row['Arcane Ability 1 Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Arcane Ability 1 Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//---------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Fire Ability 1 Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_Merlin_Fire_A01.png" alt="ability1">';
								echo '<p class="card-text">'.$row['Fire Ability 1 Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Fire Ability 1 Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//---------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Frost Ability 1 Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_Merlin_Ice_A01.png" alt="ability1">';
								echo '<p class="card-text">'.$row['Frost Ability 1 Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Frost Ability 1 Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//--------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Arcane Ability 2 Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_Merlin_Arcane_A02.png" alt="ability1">';
								echo '<p class="card-text">'.$row['Arcane Ability 2 Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Arcane Ability 2 Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Fire Ability 2 Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_Merlin_Fire_A02.png" alt="ability1">';
								echo '<p class="card-text">'.$row['Fire Ability 2 Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Fire Ability 2 Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//-----------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Frost Ability 2 Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_Merlin_Ice_A02.png" alt="ability1">';
								echo '<p class="card-text">'.$row['Frost Ability 2 Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Frost Ability 2 Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Ability 3 Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_Merlin_Arcane_A03.png" alt="ability1">';
								echo '<img src="images/gods/Icons_Merlin_Fire_A03.png" alt="ability1">';
								echo '<img src="images/gods/Icons_Merlin_Ice_A03.png" alt="ability1">';
								echo '<p class="card-text">'.$row['Ability 3 Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Ability 3 Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//-----------------------------------------------------------------------------------------------------------------------
						echo '<div class="row">';
							echo '<div class="col-sm text-center" style="border: 1px solid #000">';
								echo '<h3 class="card-title">'.$row['Ultimate Name'].'</h3>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<img src="images/gods/Icons_Merlin_Arcane_A04.png" alt="ability1">';
								echo '<img src="images/gods/Icons_Merlin_Fire_A04.png" alt="ability1">';
								echo '<img src="images/gods/Icons_Merlin_Ice_A04.png" alt="ability1">';
								echo '<p class="card-text">'.$row['Ultimate Description'].'</p>';
							echo '</div>';
							echo '<div class="col-sm" style="border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Ultimate Stats'].'</p>';
							echo '</div>';
						echo '</div>';
//----------------------------------------------------------------------------------------------------------------------------
					
				
			}
		}
	}
	function buildGodBuilds($god_name){
		$connect = null;
		require('procedures/pdo_connect.php');
		$caller2 = $god_name;

		$sql2 = "CALL buildCall('$caller2')";
		
		try {
			$query = $connect->query($sql2);
			$query->setFetchMode(PDO::FETCH_ASSOC);
		} catch(PDOException $q_error){
			echo 'Damn it'. $q_error;
		}
		if (!$query){
			echo 'No gods found';
		} else {
			while ($row = $query->fetch()){
				echo '<div class="row">';
					echo '<div class = "col-sm text-center" style="border: 1px solid #000">';
						echo '<h3>Builds</h3>';
					echo '</div>';
				echo '</div>';
//---------------------------------------------------------------------------------------------------------------------
				echo '<div class="row">';
					echo '<div class = "col-sm text-center" style="border: 1px solid #000">';
						echo '<h3>Starter Items</h3>';
					echo '</div>';
				echo '</div>';
				echo '<div class="row">';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Starter Relic'] .'.jpg" alt="starter relic">';
						echo '<p>'.$row['Starter Relic'].'</p>';
					echo '</div>';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Starter Blessing'] .'.jpg" alt="starter blessing">';
						echo '<p>'.$row['Starter Blessing'].'</p>';
					echo '</div>';
					if ($row['Starter Item'] !== NULL){
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<img src="images/items/'.$row['Starter Item'] .'.jpg" alt="starter item">';
							echo '<p>'.$row['Starter Item'].'</p>';
						echo '</div>';
					}
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Starter Pot 1'] .'.jpg" alt="starter pot">';
						echo '<p>'.$row['Starter Pot 1'].'</p>';
					echo '</div>';
					if ($row['Starter Pot 2'] !== NULL){
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<img src="images/items/'.$row['Starter Pot 2'] .'.jpg" alt="starter pot">';
							echo '<p>'.$row['Starter Pot 2'].'</p>';
						echo '</div>';
					}
				echo '</div>';
//--------------------------------------------------------------------------------------------------------------------
				echo '<div class="row">';
					echo '<div class = "col-sm text-center" style="border: 1px solid #000">';
						echo '<h3>Core Items</h3>';
					echo '</div>';
				echo '</div>';
				echo '<div class="row">';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Core Item 1'] .'.jpg" alt="core item 1">';
						echo '<p>'.$row['Core Item 1'].'</p>';
					echo '</div>';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Core Item 2'] .'.jpg" alt="core item 2">';
						echo '<p>'.$row['Core Item 2'].'</p>';
					echo '</div>';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Core Item 3'] .'.jpg" alt="core item 3">';
						echo '<p>'.$row['Core Item 3'].'</p>';
					echo '</div>';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Core Item 4'] .'.jpg" alt="core item 4">';
						echo '<p>'.$row['Core Item 4'].'</p>';
					echo '</div>';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Second Relic'] .'.jpg" alt="second relic">';
						echo '<p>'.$row['Second Relic'].'</p>';
					echo '</div>';
				echo '</div>';
//------------------------------------------------------------------------------------------------------------------------
				echo '<div class="row">';
					echo '<div class = "col-sm text-center" style="border: 1px solid #000">';
						echo '<h3>Situational Items</h3>';
					echo '</div>';
				echo '</div>';
				echo '<div class="row">';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Situational Item 1'] .'.jpg" alt="situational item ">';
						echo '<p>'.$row['Situational Item 1'].'</p>';
					echo '</div>';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Situational Item 2'] .'.jpg" alt="situational item">';
						echo '<p>'.$row['Situational Item 2'].'</p>';
					echo '</div>';
						echo '<div class="col-sm text-center" style="border: 1px solid #000">';
							echo '<img src="images/items/'.$row['Situational Item 3'] .'.jpg" alt="situational item">';
							echo '<p>'.$row['Situational Item 3'].'</p>';
						echo '</div>';
					echo '<div class="col-sm text-center" style="border: 1px solid #000">';
						echo '<img src="images/items/'.$row['Situational Item 4'] .'.jpg" alt="situational item">';
						echo '<p>'.$row['Situational Item 4'].'</p>';
					echo '</div>';
				echo '</div>';
//------------------------------------------------------------------------------------------------------------------------
			}
		}
		echo '</div>';
	}
	function loadCode(){
		require_once('library/head_sec.html');
		require_once('library/header_sec.html');
		require_once('library/main_menu.html');
	}
	if (ISSET($_POST['submit'])){
		loadCode();
		$god_name = $_POST['name'];
		if($god_name == "Merlin"){
			buildMerlin($god_name);
			buildGodBuilds($god_name);
		} else {
			buildGod($god_name);
			buildGodBuilds($god_name);
		}
		require_once('library/footer.html');
	} else {
		loadCode();
		$god_name = @$_REQUEST['name'];
		if($god_name == "Merlin"){
			buildMerlin($god_name);
			buildGodBuilds($god_name);
		} else {
			buildGod($god_name);
			buildGodBuilds($god_name);
		}
		require_once('library/footer.html');
	}
	
	
	require_once('library/footer.html');