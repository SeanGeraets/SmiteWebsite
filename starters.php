<?php
	require_once('library/head_sec.html');
	require_once('library/header_sec.html');
	require_once('library/main_menu.html');
		echo '<div class="container">
			<div class="row">
				<p class="col-sm text-center" style="border: 1px solid #000">Starters</p>
			</div>
			<div class="row">
				<div class="col-sm text-center" style="border: 1px solid #000">
					<img src="images/items/assassins-blessing.jpg" alt="assassins blessing">
					<form method="post" action="item_page_builder.php">
						<input type="hidden" name="name" value="Assassins Blessing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm">Assassins Blessing</button>
					</form><br>
					<img src="images/items/hunters-blessing.jpg" alt="hunters blessing">
					<form method="post" action="item_page_builder.php">
						<input type="hidden" name="name" value="Hunters Blessing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm">Hunters Blessing</button>
					</form><br>
				</div>
				<div class="col-sm text-center" style="border: 1px solid #000">
					<img src="images/items/attackers-blessing.jpg" alt="attackers blessing">
					<form method="post" action="item_page_builder.php">
						<input type="hidden" name="name" value="Attackers Blessing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm">Attackers Blessing</button>
					</form><br>
					<img src="images/items/mages-blessing.jpg" alt="mages blessing">
					<form method="post" action="item_page_builder.php">
						<input type="hidden" name="name" value="Mages Blessing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm">Mages Blessing</button>
					</form><br>
				</div>
				<div class="col-sm text-center" style="border: 1px solid #000">
					<img src="images/items/defenders-blessing.jpg" alt="defenders blessing">
					<form method="post" action="item_page_builder.php">
						<input type="hidden" name="name" value="Defenders Blessing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm">Defenders Blessing</button>
					</form><br>
					<img src="images/items/specialists-blessing.jpg" alt="specialists blessing">
					<form method="post" action="item_page_builder.php">
						<input type="hidden" name="name" value="Specialists Blessing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm">Specialists Blessing</button>
					</form><br>
				</div>
				<div class="col-sm text-center" style="border: 1px solid #000">
					<img src="images/items/guardians-blessing.jpg" alt="guardians blessing">
					<form method="post" action="item_page_builder.php">
						<input type="hidden" name="name" value="Guardians Blessing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm">Guardians Blessing</button>
					</form><br>
					<img src="images/items/warriors-blessing.jpg" alt="warriors blessing">
					<form method="post" action="item_page_builder.php">
						<input type="hidden" name="name" value="Warriors Blessing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm">Warriors Blessing</button>
					</form><br>
				</div>
			</div>';
			require_once('library/footer.html');