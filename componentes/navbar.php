<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
	<header class="masthead mb-auto">
		<div class="inner">
			<img class="logo-img" src="images/icons/books-24.png" alt="logo-24">
			<h3 class="masthead-brand">E<small>&</small>D Soluções</h3>
			<nav class="nav nav-masthead justify-content-center">
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
				?> href="parceiros.php">Parceiros</a>
			</nav>
		</div>
	</header>
</div>