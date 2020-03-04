<?php
    class Carro{
        //lista de atributos
        private $cor;
        private $qnt_porta;
        private $v_max;
        private $v_atual;

        public function __construct($a1, $a2, $a3){ 
            $this->cor = $a1;   
            $this->qnt_porta = $a2;
            $this->v_max = $a3;
            $this->v_atual = 0;
        }
       
        public function get_cor(){ 
            return($this->cor);
        }

        public function get_qnt_porta(){
            return($this->qnt_porta);
        }

        public function get_v_max(){
            return($this->v_max);
        }

        public function get_v_atual(){
            return($this->v_atual);
        }


        //lista de metodos
        public function acelera($va, $t){ //va=v aceleraçao, v=velocidade
            //implementaçao
            $this->v_atual = 
                $this->v_atual + $va * $t;
        }
        public function frear($vf, $t){  // t=tempo, vat=v atual, vf=v freagem
            //implementaçao
            $this->v_atual = 
                $this->v_atual - $vf * $t;
        }
        public function virar($l){   //l= lado
            //implementaçao

        }
    }
?>