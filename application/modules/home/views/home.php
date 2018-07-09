<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>CI</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'application/modules/home/assets/css/home.css?v=0.1'; ?>">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"> -->
	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
	</script>
</head>
<body>

<div id="wrapper">
	<div class="limiter">
		<div class="container-cards">
			<div class="card">
				<div class="card-content">
					<span class="card-title">Questão 1</span>
					<div class="text">
						Para cada município que tem coleta seletiva, mostrar: nome do município, população
						total, percentual da população atendida por coleta seletiva, quantidade total (em
						toneladas) de material recuperado pela coleta seletiva.

					</div>
				</div>
				<div class="card-action">
					<a href="<?php echo base_url() . 'consulta/1' ?>">Realizar Consulta</a>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<span class="card-title">Questão 2</span>
					<div class="text">
						<strong>(Com operador de União)</strong> Mostrar os nomes dos municípios que têm coletores e tem também coleta seletiva.
					</div>
				</div>
				<div class="card-action">
					<a href="<?php echo base_url() . 'consulta/2' ?>">Realizar Consulta</a>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<span class="card-title">Questão 3</span>
					<div class="text">
						<strong>(Com operador de Diferença)</strong> Mostrar os nomes dos municípios que não tem coleta seletiva.
					</div>
				</div>
				<div class="card-action">
					<a href="<?php echo base_url() . 'consulta/1' ?>">Realizar Consulta</a>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<span class="card-title">Questão 4</span>
					<div class="text">
						<strong>(Com operador de Intersecção)</strong> Mostrar os nomes dos municípios que têm coletores, frentes de trabalho temporárias e trabalhadores remunerados no ano de 2016.
					</div>
				</div>
				<div class="card-action">
					<a href="<?php echo base_url() . 'consulta/1' ?>">Realizar Consulta</a>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<span class="card-title">Questão 5</span>
					<div class="text">
						<strong>(Com operador de Intersecção)</strong> Mostrar a quantidade de trabalhadores envolvidos na coleta de resíduos
						sólidos por município, considerando coletores, frentes de trabalho
						temporárias e trabalhadores remunerados (no ano de 2016).
					</div>
				</div>
				<div class="card-action">
					<a href="<?php echo base_url() . 'consulta/1' ?>">Realizar Consulta</a>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<span class="card-title">Questão 6</span>
					<div class="text">
						<strong>(Com funções de agregação e agrupamento)</strong> Mostrar o total de resíduos (em toneladas) gerados por município, em ordem decrescente de quantidade.
					</div>
				</div>
				<div class="card-action">
					<a href="<?php echo base_url() . 'consulta/1' ?>">Realizar Consulta</a>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<span class="card-title">Questão 7</span>
					<div class="text">
						<strong>(Com funções de agregação e agrupamento)</strong> Mostrar o total de despesas de cada município com manejo e tratamento de
						resíduos sólidos (envolvendo pessoas e equipamentos: serviços de
						terceiros, despesas com limpeza urbana, despesas com manejo, gastos
						com coleta seletiva, etc).
					</div>
				</div>
				<div class="card-action">
					<a href="<?php echo base_url() . 'consulta/1' ?>">Realizar Consulta</a>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<span class="card-title">Questão 8</span>
					<div class="text">
						<strong>(Com outer join)</strong> Mostrar, para cada município, a quantidade total de catadores envolvidos
						com coleta seletiva (se o município não tiver coleta seletiva, mostrar a
						quantidade vazia ou igual a zero).
					</div>
				</div>
				<div class="card-action">
					<a href="<?php echo base_url() . 'consulta/1' ?>">Realizar Consulta</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="<?php echo base_url() . 'application/modules/home/assets/js/home.js?v=0.1'; ?>"></script>
</body>
</html>