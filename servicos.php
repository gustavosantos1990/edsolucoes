<?php
$title = 'Serviços - E&D Soluções';
$currentPage = 'servicos';
?>
<?php include('componentes/head.php'); ?>
<?php include('componentes/navbar.php'); ?>

<div class="jumbotron background-images service-background" style="text-align: left;">
	<h1 class="display-4">Nossos Serviços</h1>
	<p class="lead">Todos os serviços ofertados são conduzidos por profissionais com vasta experiência no ensino, <br>sinta a diferença e comprove os resultados com o a E<small>&</small>D Soluções!</p>
	<hr class="my-4">
  <!--
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
-->
</div>

<div class="container">
	<div class="row">
		<div class="col-4 col-md">
			<ul>
				<li class="list-group-item active">Aulas Superior</li>
				<li class="list-group-item">Física</li>
				<li class="list-group-item">Cálculo</li>
				<li class="list-group-item">Resistência dos Materiais</li>
				<li class="list-group-item">Ciências dos Materiais</li>
				<li class="list-group-item">Teoria das Estruturas</li>
				<li class="list-group-item">Mecânica dos Fluidos</li>
				<li class="list-group-item">Mecânica Geral</li>
			</ul>
		</div>

		<div class="col-4 col-md">
			<ul class="list-group">
				<li class="list-group-item active">Monitoria</li>
				<li class="list-group-item">Interativas</li>
				<li class="list-group-item">Estudos Dirigidos</li>
				<li class="list-group-item">TCC I e II</li>
				<li class="list-group-item">Montagem de Relatórios Técnicos</li>
			</ul>
		</div>

		<div class="col-4 col-md">
			<ul class="list-group">
				<li class="list-group-item active">Aulas Fundamental e Médio</li>
				<li class="list-group-item">Matemática</li>
				<li class="list-group-item">Física</li>
			</ul>
			<br>
			<br>
			<ul class="list-group">
				<li class="list-group-item active">Inglês</li>
				<li class="list-group-item">Aulas Particulares</li>
				<li class="list-group-item">Tradução de Documentos</li>
			</ul>
		</div>
	</div>

	<br>
	<br>

	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Combine seu horário e agenda já a sua aula!</h5>
		</div>
		<div class="card-body">
			<p class="card-text">
				Atendimento em domicílio com taxa de locomoção.<br>
				Atendimento aos fins de semana a combinar.<br>
				Sem distinção de instituições, atendemos a qualquer aluno da região.
			</p>
			<br>
			<a href="contato.php" class="btn btn-primary btn-orange">Agende agora!</a>
			<br>
		</div>
		<br>
		<img class="card-img-bottom" src="images/service2.jpg" alt="Card image cap">
	</div>



</div>


<?php include('componentes/footer.php'); ?>