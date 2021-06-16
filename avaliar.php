<?php
	session_start();
	include_once("conexao.php");

	if(!empty($_POST['estrela'])){
		$estrela = $_POST['estrela'];

		$result_avaliacoes = "INSERT INTO avaliacoes (, created) VALUES ('$estrela', NOW())";
		$resultado_avaliacoes = mysqli_query($conn, $result_avaliacoes);

		if(mysqli_insert_id($conn)){
			$_SESSION['msg'] = '<div class="mensagem_cadastrada">
									<img src="./img/sucesso.gif" class="img_sucesso"/>
									<p class="p_sucesso">Avaliação cadastrada com sucesso!</p>
								</div>';
			header("Location: index.php");
		}else{
			$_SESSION['msg'] = '<div class="mensagem_errado">
									<img src="./img/errado.gif" class="img_errado"/>
									<p class="p_errado">Ocorreu um erro ao cadastro a avalição no BD!</p>
								</div>';
			header("Location: index.php");
		}

	}else{
		$_SESSION['msg'] = '<div class="mensagem_estrtela">
								<img src="./img/err.gif" class="img_error"/>
								<p class="p_msg">selecione pelo menos 1 estrela!</p>
							</div>';
		header("Location: index.php");
	}
?>