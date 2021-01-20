<?php

	foreach ($_POST as $key => $value) {
		
		$data_uri = str_replace('_', '+', $key);
		$encoded_image = explode(",", $data_uri)[1];
		$decoded_image = base64_decode($encoded_image);
		file_put_contents("assinatura.png", $decoded_image);

	}

?>