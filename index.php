<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["nome"], $_POST["email"], $_POST["senha"])) {

        $nome = htmlspecialchars(trim($_POST["nome"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $senha = htmlspecialchars(trim($_POST["senha"]));

        if (empty($nome) || empty($email) || empty($senha)) {
            echo " Todos os campos devem ser preenchidos!";
        } elseif (strlen($senha) < 6) {
            echo " A senha deve ter pelo menos 6 caracteres!";
        } else {
            echo "<h3> Cadastro realizado com sucesso!</h3>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Senha: $senha <br>";
        }

    } else {
        echo "Erro: campos não encontrados no formulário.";
    }

} else {
    echo "Formulário não enviado corretamente.";
}
?>
