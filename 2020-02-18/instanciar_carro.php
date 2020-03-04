        <?php
            include "classCarro.php";
            include "cabecalho.php";
            $c = new Carro(); //cria novo objeto

            $c->cor = $_POST["cor"];
            $c->qnt_porta = $_POST["qnt_porta"];
            $c->v_max = $_POST["v_max"];
            $c->v_atual = 0;

            $_SESSION["carro"][] = $c;
        ?>
        <h3>carro inserido com sucesso</h3>
    </body>
</html>