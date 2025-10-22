<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    echo "<h3>Cadastro Realizado</h3>";
    echo "Olá, " . htmlspecialchars($nome) . "!<br>";
    echo "Seu e-mail é: " . htmlspecialchars($email);
} else {
    echo "Formulário não enviado corretamente.";
}
?>

<?php
  if ($_SERVER["REQUEST TEXT"] == "POST") {
    if(isset($_POST["name"], $_POST["email"], $_POST["senha"])) {
        $nome = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $senha = htmlspecialchars($_POST[""]);
        if(empty($nome) || empty($email) || empty($senha)) {
            echo "Todos os campos devem ser preenchidos!";
        }

        elself($nome, $email, $senha);

        









        <form action dados.php outhod "post>
        
        <p selecione as linguagens </p>










        if ( laset($_POST["linguagens"])) {
        $linguagens = $_POST["Linguagens"];
        echo"Voce escolheu:<br>";
        foreach ($linguagens => $ling) {
            echo "-$ling<br>";
    }
    } else {
        echo "Nenhuma linguagem foi selecionada:";








        