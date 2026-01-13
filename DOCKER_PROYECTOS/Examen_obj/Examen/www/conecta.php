<?php
class Conecta4
{
    public $tablero;
    public $turno;
    public $fin;
    public $ganador;

    public function __construct()
    {
        $this->reiniciar();
    }


    public function reiniciar()
    {
        $this->tablero = array();
        for ($f = 0; $f < 6; $f++) {
            $this->tablero[$f] = array("", "", "", "", "", "", "");
        }
        $this->turno = "R";
        $this->fin = false;
        $this->ganador = "";
    }


    public function tirar($col)
{
    $res = ""; 
    $fichaColocada = false;

    if (!$this->fin && $col >= 0 && $col <= 6 && $this->tablero[0][$col] == "") {
        
        $f = 5;
        while ($f >= 0 && !$fichaColocada) {
            if ($this->tablero[$f][$col] == "") {
                $this->tablero[$f][$col] = $this->turno;
                $fichaColocada = true;

                if ($this->victoria($f, $col, $this->turno)) {
                    $this->fin = true;
                    $this->ganador = $this->turno;
                    $res = "Ganador: " . ($this->turno == "R" ? "Rojo" : "Amarillo");
                } else {
                    $this->turno = ($this->turno == "R") ? "Y" : "R";
                    $res = "";
                }
            }
            $f--;
        }
    }

    return $res;
}



    private function victoria($f, $c, $color)
    {
        $res = false;

        $direcciones = [
            [0, 1],  // horizontal
            [1, 0],  // vertical
            [1, 1],  // diagonal \
            [1, -1]  // diagonal /
        ];

        $iDir = 0;
        while ($iDir < count($direcciones) && !$res) {
            $df = $direcciones[$iDir][0];
            $dc = $direcciones[$iDir][1];
            $count = 1;


            $i = $f + $df;
            $j = $c + $dc;
            while ($i >= 0 && $i < 6 && $j >= 0 && $j < 7 && $this->tablero[$i][$j] == $color) {
                $count++;
                $i += $df;
                $j += $dc;
            }


            $i = $f - $df;
            $j = $c - $dc;
            while ($i >= 0 && $i < 6 && $j >= 0 && $j < 7 && $this->tablero[$i][$j] == $color) {
                $count++;
                $i -= $df;
                $j -= $dc;
            }

            
            if ($count >= 4) {
                $res = true;
            }

            $iDir++;
        }

        return $res;
    }
    //METODO DE IA
    public function jugarIa()
{

    
    $col = rand(0,6);
    $this->tirar($col);
}
}