<?php 

	# Recebendo os dados do formulário
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	# Testar os dados para esse login
	if($email != "natan@natanet.xyz"){		
		header("location: minha_conta.php?msg=email_nao_encontrado");
	}elseif($senha != '1234'){
		header("location: minha_conta.php?msg=senha_incorreta");
	}else{
		header("location: usuario.php?msg=login_sucedido");
	}
?>