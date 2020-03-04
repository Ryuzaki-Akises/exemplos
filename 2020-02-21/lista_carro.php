        <?php
            include "classCarro.php";
            include "cabecalho.php";
        ?>
        <h2>objetos "carro" instanciados no sistema: </h2> <br/>

        <?php
            foreach($_SESSION["carro"] as $i=>$c){
                echo "cor: <span style='color:". $c->get_cor() ."'> ". $c->get_cor() ." </span> <br/>
                qnt_porta: ". $c->get_qnt_porta() ." <br/>
                v_max: ". $c->get_v_max() ." <br/>
                v_atual: ". $c->get_v_atual() ." <br/>

                <form method='post' action='acelerar_frear.php'>
                    <input type='number' name='tp' placeholder='tempo de aceleraçao / frenagem' />
                    <input type='number' name='af' placeholder='acelerar / frear' />
                    <br/>

                    <input type='radio' class='radio' name='tipo' value='a' /> acelerar
                    <input type='radio' class='radio' name='tipo' value='f' /> frear
                    <br/>

                    <input type='hidden' name='id' value='$i' />
                    <input type='submit' value='acelerar / frear' />
                </form>
                <hr/>";
            }
        ?>

    </body>
</html>