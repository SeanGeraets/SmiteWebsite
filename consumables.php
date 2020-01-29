<?php
	require_once('library/head_sec.html');
	require_once('library/header_sec.html');
	require_once('library/main_menu.html');
		echo '<div class="container">
			<div class="row">
				<p class="col-sm text-center" style="border: 1px solid #000">Consumables</p>
			</div>
			<div class="row">
				<div class="col-sm text-center" style="border: 1px solid #000">
					<img src="images/items/Healing Potion.jpg" alt="healing potion">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Healing Potion">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Healing Potion</button>
					</form><br>
					<img src="images/items/Sentry Ward.jpg" alt="sentry ward">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Sentry Ward">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Sentry Ward</button>
					</form><br>
					<img src="images/items/Chalice of the Oracle.jpg" alt="chalice of the oracle">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Healing Potion">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Chalice of the Oracle</button>
					</form><br>
					<img src="images/items/Elixir of Defense.jpg" alt="elixir of defense">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Elixir of Defense">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Elixir of Defense</button>
					</form><br>
				</div>
				<div class="col-sm text-center" style="border: 1px solid #000">
					<img src="images/items/Mana Potion.jpg" alt="mana potion">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Mana Potion">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Mana Potion</button>
					</form><br>
					<img src="images/items/Barons Brew.png" alt="barons brew">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Barons Brew">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Barons Brew</button>
					</form><br>
					<img src="images/items/Elixir of Speed.png" alt="elixir of speed">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Elixir of Speed">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Elixir of Speed</button>
					</form><br>
					<img src="images/items/Elixir of Power.jpg" alt="elixir of power">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Elixir of Power">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Elixir of Power</button>
					</form><br>
				</div>
				<div class="col-sm text-center" style="border: 1px solid #000">
					<img src="images/items/Multi Potion.jpg" alt="multi potion">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Multi Potion">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Multi Potion</button>
					</form><br>
					<img src="images/items/Chalice of Healing.jpg" alt="chalice of healing">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Chalice of Healing">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Chalice of Healing</button>
					</form><br>
					<img src="images/items/Potion of Physical Might.jpg" alt="potion of physical might">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Healing Potion">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Potion of Physical Might</button>
					</form><br>
				</div>
				<div class="col-sm text-center" style="border: 1px solid #000">
					<img src="images/items/Ward.jpg" alt="ward">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Ward">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Ward</button>
					</form><br>
					<img src="images/items/Chalice of Mana.jpg" alt="chalice-of-mana">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Chalice of Mana">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Chalice of Mana</button>
					</form><br>
					<img src="images/items/Potion of Magical Might.jpg" alt="potion of magical might">
					<form method="post" action="consumables_page_builder.php">
						<input type="hidden" name="name" value="Potion of Magical Might">
						<button type="submit" name="submit" value="" class="btn btn-secondary btn-sm"style="font-size:12px;">Potion of Magical Might</button>
					</form><br>
				</div>
			</div>';
			require_once('library/footer.html');