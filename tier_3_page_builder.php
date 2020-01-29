<?php require_once('library/session.php');?>

<?php 

	function buildTier3($item_name){
		loadCode();
		
		$caller = $item_name;
		
		require_once('procedures/pdo_connect.php');

		$sql = "CALL tier3Call('$caller')";
		
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
							echo '<p class="card-text">Cost: '.$row['Cost']. ' gold</p>';
						echo '</div>';
					echo '</div>';
					echo '<div class="row">';
						echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
							echo '<p class="card-text">'.$row['Description'].'</p>';
						echo '</div>';
						echo '<div class = "col-sm text-center "style = "border: 1px solid #000">';
							echo '<p class="card-text">'.$row['Stats'].'</p>';
						echo '</div>';
				echo '</div>';
			}
		}
	}
function loadCode(){
		require_once('library/head_sec.html');
		require_once('library/header_sec.html');
		require_once('library/main_menu.html');
	}
	if (ISSET($_POST['submit'])){
		loadCode();
		$item_name = $_POST['name'];
		buildTier3($item_name);
		require_once('library/footer.html');
	} else {
		loadCode();
		$item_name = @$_REQUEST['name'];
		buildTier3($item_name);
		require_once('library/footer.html');
	}
	
	
	require_once('library/footer.html');
	