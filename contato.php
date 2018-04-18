<?php
$title = 'Contato - E&D Soluções';
$currentPage = 'contato';
?>
<?php include('componentes/head.php'); ?>
<?php include('componentes/navbar.php'); ?>

<div class="jumbotron background-images contato-background">
	<h1 class="display-4">Nossos Contatos</h1>
	<p class="lead">Ligue para nossa central ou se preferir nos envie um email.</p>
	<hr class="my-4">
</div>

<div class="row" style="padding-left: 60px; padding-right: 60px">
	<div class="col-md col-6">
		<div class="jumbotron" style="height: 100%">
			<h1>E-mail</h1>
			<p class="lead">Vamos falar sobre suas necessidades? Responderemos o quanto antes. Críticas e sugestões também são bem vindas!</p>
		</div>
	</div>
	<div class="col-md col-6">
		<form action="form.php" class="contact-form" method="post">

			<div class="form-group">
				<input type="text" class="form-control" id="name" name="nm" placeholder="Seu Nome" required="" autofocus="">
			</div>


			<div class="form-group form_left">
				<input type="email" class="form-control" id="email" name="em" placeholder="E-mail" required="">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Número de Telefone" required="">
			</div>
			<div class="form-group">
				<textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Sua mensagem..." required=""></textarea>
				<br>
				<button class="btn btn-secondary btn-block"> <span class="glyphicon glyphicon-send"></span> Enviar </button>
			</div>
		</form>
	</div>
</div>

<div class="card-deck">
	<div class="card">
		<div class="background-for-contacts">
			<span class="helper"></span><img src="images/icons/phone-47-64.png" alt="phone-47-64.png">
		</div>
		<div class="card-body">
			<h5 class="card-title">Telefone</h5>
			<p class="card-text">+55 31 98877-6655</p>
		</div>
	</div>
	<div class="card">
		<div class="background-for-contacts">
			<span class="helper"></span><img src="images/icons/message-outline-64.png" alt="message-outline-64.png">
		</div>
		<div class="card-body">
			<h5 class="card-title">Email</h5>
			<p class="card-text"><a href="mailto:contato@edsolucoes.com<">contato@edsolucoes.com</a></p>
		</div>
	</div>
	<div class="card">
		<div class="background-for-contacts">
			<span class="helper"></span><img src="images/icons/map-marker-2-64.png" alt="map-marker-2-64.png">
		</div>
		<div class="card-body">
			<h5 class="card-title">Endereço</h5>
			<p class="card-text">R. Potiguar, 150 - Iguaçu, Ipatinga - MG, 35162-110.</p>
		</div>
	</div>
</div>

<div class="bg-primary bg-dark">
	<div class="container">
		<div class="row py-4">
			<div class="col-md col-6">
				<h4 style="color: white;">Fique conectado em nossas redes sociais!</h4>
			</div>
			<div class="col-md col-6">
				<div class="row">
					<div class="col-md col-3"><a href="#"><img src="images/icons/instagram-48.png" alt="instagram_logo"></a></div>
					<div class="col-md col-3"><a href="#"><img src="images/icons/facebook-48.png" alt="facebook_logo"></a></div>
					<div class="col-md col-3"><a href="#"><img src="images/icons/twitter-48.png" alt="twitter_logo"></a></div>
					<div class="col-md col-3"><a href="#"><img src="images/icons/linkedin-48.png" alt="linkedin_logo"></a></div></div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('componentes/footer.php'); ?>