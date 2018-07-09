<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>CI</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'application/modules/consulta/assets/css/consulta.css?v=0.1'; ?>">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"> -->
	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
	</script>
</head>
<body>

<div id="wrapper">
	<div class="limiter">
		
		<a href="<?php echo base_url(); ?>" class="back">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
		</a>

		<?php if($query == 1){ ?>
		<div class="container-table100">

			<div class="wrap-table100">
				<div class="table">

					<div class="row header">
						<div class="cell">Nome</div>
						<div class="cell">População Total</div>
						<div class="cell">População</div>
						<div class="cell">Percentual</div>
						<div class="cell">Quantidade de empresas</div>
					</div>
					
					<?php foreach ($data as $item) { ?>
					<div class="row">
						<div class="cell" data-title="Nome"><?php echo $item->nome; ?></div>
						<div class="cell" data-title="População Total"><?php echo $item->populacaototal; ?></div>
						<div class="cell" data-title="População"><?php echo $item->populacao; ?></div>
						<div class="cell" data-title="Percentual"><?php echo $item->percentual; ?></div>
						<div class="cell" data-title="Quantidade de empresas"><?php echo $item->quantempresa; ?></div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php } ?>


		<?php if($query == 2 || $query == 3){ ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table">

					<div class="row header">
						<div class="cell">Nome</div>
					</div>
					
					<?php foreach ($data as $item) { ?>
					<div class="row">
						<div class="cell" data-title="Nome"><?php echo $item->nome; ?></div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="<?php echo base_url() . 'application/modules/consulta/assets/js/consulta.js?v=0.1'; ?>"></script>
</body>
</html>