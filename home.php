<?php
	session_start();
	if (!isset($_SESSION['user_id'])){
		echo "<script >
		alert('Esta área é restrita, faça login para acessar.');
		window.location='index.php';
		</script>";
	}
$user_id = $_SESSION['user_id'];
$user_first_name = $_SESSION['user_first_name'];
include('header.php'); ?>

<div class="top">
	<h1>Bem vindo <?php echo $user_first_name ?>!</h1>

</div>
<div class="main-content">
	<div class="nav-bar">
	<?php
		$array_botoes = getBotoes($user_id);
		foreach ($array_botoes as $chave => $valor) {
			echo $valor;
		}
	?>
	</div>
	<div class='section-replace' ></div>

</div>



<?php include('footer.php'); ?>