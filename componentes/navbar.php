<header>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark nav nav-masthead justify-content-center">

		<a class="navbar-brand" href="#">E<small>&</small>D Soluções</a>

		

		<div class="collapse navbar-collapse" id="navbarCollapse">
			
			<a <?php
			if ($currentPage == "index"){
				echo 'class="nav-link active"';
			}else{
				echo 'class="nav-link"';
			}
			?> href="index.php"
			>Home</a>

			<a <?php
			if ($currentPage == "servicos"){
				echo 'class="nav-link active"';
			}else{
				echo 'class="nav-link"';
			}
			?> href="servicos.php">Serviços</a>
			
			<a <?php
			if ($currentPage == "quemsomos"){
				echo 'class="nav-link active"';
			}else{
				echo 'class="nav-link"';
			}
			?> href="quemsomos.php">Quem Somos</a>

			<a <?php
			if ($currentPage == "contato"){
				echo 'class="nav-link active"';
			}else{
				echo 'class="nav-link"';
			}
			?> href="contato.php">Contato</a>

			<a <?php
			if ($currentPage == "parceiros"){
				echo 'class="nav-link active"';
			}else{
				echo 'class="nav-link"';
			}
			?> href="parceiros">Parceiros</a>

		</div>
	</nav>
</header>