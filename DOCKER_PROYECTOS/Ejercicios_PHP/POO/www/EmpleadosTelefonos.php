<?php 
class Empleado {
    private string $nombre,$apellidos;
    private float $sueldo;
    private array $telefonos =[];
    public function __construct(string $nombre, string $apellidos, float $sueldo){
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
    public function setNombre(string $nom) {
        $this->nombre=$nom;
    }
    public function getNombre (){
        return $this->nombre;
    }
    public function setSueldo(string $sueldo) {
        $this->sueldo=$sueldo;
    }
    public function getPrecio (){
        return $this->sueldo;
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