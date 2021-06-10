<?php
	$data = str_replace("data:image/png;base64,", "", $_POST["img"]);
	$img_data = base64_decode($data);
	$img_res = imagecreatefromstring($img_data);
	imagesavealpha($img_res, true);
	imagepng($img_res, "image/" . $_GET["q0"] . "-" . $_GET["q1"] . ".png");
?>