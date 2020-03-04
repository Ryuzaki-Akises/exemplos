    <?php
        include "classCarro.php";
        include "cabecalho.php";
        ?>
        <h2>objetos "carro" instanciados no sistema: </h2> <br/>

        <?php
            foreach($_SESSION["carro"] as $c){
                echo "cor: <span style='color:$c->cor'> $c->cor </span> <br/>
                qnt_porta: $c->qnt_porta <br/>
                v_max: $c->v_max <br/>
                v_atual: $c->v_atual 
                <hr/>";
            }
        ?>

    </body>
</html>