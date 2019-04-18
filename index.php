<?php
if (isset($_POST['email']) && !empty($_POST['email'])){

	$email = $_POST['email'];
	/*criando um arquivo e mandando os emails que pediram para receber noticias*/
	file_put_contents("emails.txt", $email, FILE_APPEND);
	//tecnica anti-F5
	header("Location:messi.html");
}
?>