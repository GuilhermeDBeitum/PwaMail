<!DOCTYPE html>
<html lang="PT-BR">

<head>

	<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('/sw.js', { scope: '/' })
				.then(function (registration) {
					console.log('Service Worker Registered');
				});

			navigator.serviceWorker.ready.then(function (registration) {
				console.log('Service Worker Ready');
			});
		}
	</script>

	<meta name="theme-color" content="#080909">
	<meta name='msapplication-TileColor' content='#080909'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<link rel="stylesheet" href="assets/css/style.css" as="style" />
</head>

<body>

	<div  class="row centered" align="center"
		data-animate-effect="fadeInLeft">

		<form id="contato" method="post" action="email.php">
			
			<h1> CONTATO PARA TRABALHOS </h1>
			<br>
			<br>
			<div>

				<table>

					<tr>
						<td>Nome: </td>
						<td>
							<input class="rounded" type="text" placeholder="Your Full Name" name="nome" maxlength="40" size="42px" aling="center"
								required />
						</td>
					</tr>
					<tr>
						<td>Telefone: </td>
						<td>
							<input class="rounded" input type="text" placeholder="(xx) x xxxx-xxxx" name="tel" maxlength="18" size="42px" required />
						</td>
					</tr>
					<tr>
						<td>E-mail: </td>
						<td>
							<input class="rounded" input type="email" placeholder="example@email.com" name="email" size="42px"
								required />
						</td>
					</tr>
					<tr>
						<td>MSG: </td>
						<td>
							<textarea class="rounded"  name="msg" class="msg" cols="39" rows="5" color="black"
								required></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<br>
							<input type="submit" class="btn btn-primary btn-send-message" value="ENVIAR">
						</td>
					</tr>
				</table>
		</form>


		<br>

		<div class="colorlib-text"><a
				href="https://api.whatsapp.com/send?phone=55041998272549&text=Olá!%20Sou%20o%20Guilherme;%20vamos%20conversar?%20Gostaria%20de%20ouvir%20sobre%20o%20seu%20projeto%20ou%20a%20sua%20proposta%20de%20neg%C3%B3cios!"
				target=_"blank" title="whatsapp">

				<p> +55 (041) 998272549</p>
			</a>
		<br>
			<p>Curitiba / Paraná</p>
		</div>
	    <br>
		<br>
		<p class="text-white text-center mt-5">Copyright &copy; 2021</h5>

	</div>
</body>

</html>
