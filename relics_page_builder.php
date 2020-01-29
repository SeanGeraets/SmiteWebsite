<?php require_once('library/session.php');?>

<?php 

	function buildRelics($item_name){
		loadCode();
		
		$caller = $item_name;
		
		require_once('procedures/pdo_connect.php');

		$sql = "CALL relicsCall('$caller')";
		
		
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
						echo '<div class = "col-sm text-center"style="border: 1px solid #000">';
							echo '<h5 class="card-title"style="font-size:250%;">'.$row['Name'].'</h5>';
						echo '</div>';
					echo '</div>';
					echo '<div class="row">';
						echo '<div class = "col-sm text-center" style="border: 1px solid #000">';
							echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
						echo '</div>';
						echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
							echo '<p class="card-text">'.$row['Description'].'</p>';
						echo '</div>';
						echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
							echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
						echo '</div>';
					echo '</div>';
				
			}
		}
		$connect = null;
		require('procedures/pdo_connect.php');
		if ($item_name == "Aegis Amulet"){
			$caller2 = "Aegis Amulet Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Belt of Frenzy"){
			$caller2 = "Belt of Frenzy Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Blink Rune"){
			$caller2 = "Blink Rune Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Bracer of Undoing"){
			$caller2 = "Bracer of Undoing Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Cursed Ankh"){
			$caller2 = "Cursed Ankh Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Heavenly Wings"){
			$caller2 = "Heavenly Wings Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Horrific Emblem"){
			$caller2 = "Horrific Emblem Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Magic Shell"){
			$caller2 = "Magic Shell Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Meditation Cloak"){
			$caller2 = "Meditation Cloak Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Phantom Veil"){
			$caller2 = "Phantom Veil Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Purification Beads"){
			$caller2 = "Purification Beads Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Shield of Thorns"){
			$caller2 = "Shield of Thorns Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Sundering Spear"){
			$caller2 = "Sundering Spear Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
				}
		}
		if ($item_name == "Teleport Glyph"){
			$caller2 = "Teleport Glyph Upgrade";
			$sql2 = "CALL relicsCall('$caller2')";
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
								echo '<img src="images/items/'.$row['Name'].'.jpg" alt="'.$row['Name'].'" width= "128"; height="128">';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">'.$row['Description'].'</p>';
							echo '</div>';
							echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
								echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
							echo '</div>';
						echo '</div>';
					}
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
		$item_name = $_POST['name'];
		buildRelics($item_name);
		require_once('library/footer.html');
	} else {
		loadCode();
		$item_name = @$_REQUEST['name'];
		buildRelics($item_name);
		require_once('library/footer.html');
	}
	
	
	require_once('library/footer.html');