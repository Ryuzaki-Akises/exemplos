<?php
    class Carro{
        //lista de atributos
        public $cor;
        public $qnt_porta;
        public $v_max;
        public $v_atual;

        //lista de metodos
        public function acelera($va, $t){ //va=v aceleraçao, v=velocidade
            //implementaçao
            $this->vat = 
                $this->vat + $va * $t;
        }
        public function frear($vf, $t){  // t=tempo, vat=v atual, vf=v freagem
            //implementaçao
            $this->vat = 
                $this->vat + $vf * $t;
        }
        public function virar($l){   //l= lado
            //implementaçao

        }
    }
?>