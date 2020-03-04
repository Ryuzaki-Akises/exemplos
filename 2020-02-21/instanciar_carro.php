        <?php
            include "classCarro.php";
            include "cabecalho.php";

            $c = new Carro($_POST["cor"], $_POST["qnt_porta"], $_POST["v_max"]);

            $_SESSION["carro"][] = $c;
        ?>
        <h3>carro inserido com sucesso</h3>
    </body>
</html>