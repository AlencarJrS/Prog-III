<?php
//Login e redirect para a página de cadastro
include ('config.php');

if (@$_REQUEST['botao']=="Entrar")
{
	$login = $_POST['login'];
	$senha = ($_POST['senha']);
	
	$query = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha' ";
    $result = mysqli_query($con,$query);
	while ($coluna=mysqli_fetch_array($result)) 
	{
		header("Location: cadastro.php"); 
		exit; 
	}
}
else {"<script>
    alert('Senha Incorreta!');
    
</script>";}



?>