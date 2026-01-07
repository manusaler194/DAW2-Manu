<?php 
class Empleado {
    private string $nombre,$apellidos;
    private float $sueldo;
    private array $telefonos =[];
    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000){
    $this->apellidos =$apellidos;
    $this->nombre =$nombre;
    $this->sueldo =$sueldo;
    
    }
    public function anyadirTelefono(int $telefono) : void {
        array_push($this->telefonos,$telefono);
    }
    public function listarTelefonos(): string {
        return implode(",",$this->telefonos);
    }
    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
    
    public function debePagarImpuestos() : bool {
        $res = false;
        if ($this->sueldo >= 3333){
            $res = true;
        }

        return $res;
    }


}



?>