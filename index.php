<html>

	<head>
		<title>Projeto Site PHP!</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script> $(function () {
			$( "#accordion" ).accordion();
		});
		</script>
		
		<style type="text/css">
			.linha {
				font-weght: bold;
				color: green;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
	</head>
	
	<body>
	
		<div id="accordion">
	
		<?php
			for ( $i = 0; $i <10; $i++ ) {
				print ( "<span class=\"linha\">Linha número " . $i . "</span><br />");
			}
		?>
		</div>
	
	</body>
	
	<script type="text/javascript">
		$(document).ready(function() {
			alert("Obrigado por acessar meu site!");
		});
	</script>
	
</html>