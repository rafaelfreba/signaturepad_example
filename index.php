<!DOCTYPE html>
<html>
<head>
	<title>Capturando assinaturas via celular ou tablet</title>	
	
	<!--CSS Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!--CSS Customizado-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!--JQuery-->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<!--Signature Pad -->
	<script type="text/javascript" src='bibliotecas/SignaturePad/signature_pad.min.js'></script>
	<!--Script Customizado-->
	<script type="text/javascript" src='js/assinatura.js'></script>

</head>

<body>

<section class='m-5'>	
	
	<div class="col" id="assinatura">			
	</div>	

	<div class="wrapper border t">
		<canvas id="signature-pad" class="signature-pad" width='400px' height='200px'></canvas>
	</div>
	
	<div class="mt-2 t">
		<button id="btn_assinar" class="btn btn-button btn-primary">Assinar</button>
		<button id="btn_limpar" class="btn btn-button btn-danger">Limpar</button>
	</div>	

</section>

</body>
</html>