<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["linguagens"])) {
        $linguagens = $_POST["linguagens"];

        echo "<h3> Você escolheu as seguintes linguagens:</h3>";
        foreach ($linguagens as $ling) {
            echo "- " . htmlspecialchars($ling) . "<br>";
        }
    } else {
        echo " Nenhuma linguagem foi selecionada.";
    }

} else {
    echo "Formulário não enviado corretamente.";
}
?>
