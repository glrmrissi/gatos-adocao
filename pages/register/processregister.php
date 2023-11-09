<?php
$email = $_POST['email'];
$psw= $_POST['psw'];
$pswrepeat = $_POST['psw-repeat'];


// Aqui você pode realizar operações de validação e inserção no banco de dados

// Por exemplo, redirecionamento após o registro bem-sucedido
header("Location: registro_sucesso.html");
?>