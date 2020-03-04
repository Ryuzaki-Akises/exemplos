<?php
    include "cabecalho.php";
?>
        <h1>criar objeto carro</h1>
        <form action="instanciar_carro.php" method="post">
            definir cor do carro:
            <input type="color" name="cor" />
            <br/>

            <input type="number" step="1" min="1" max="5" name="qnt_porta" placeholder="quantidade de portas..." />
            <br/>

            <input type="number" step="20" min="20" max="500" name="v_max" placeholder="velocidade maxima" />
            <br/>

            <input type="submit" value="criar carro" />
        </form>
    </body>
</html>