<?php
class Empleado extends Persona
{


    private float $sueldo;
    public function __construct(string $nombre = "", string $apellidos = "", array $telefonos, float $sueldo)
    {
        $this->sueldo = $sueldo;
        $this->telefonos = $telefonos;
        parent::__construct($nombre, $apellidos);
    }
    public function listarTelefonos(): string
    {
        return implode(",", $this->telefonos);
    }
    public function setSueldo(string $sueldo)
    {
        $this->sueldo = $sueldo;
    }
    public function getPrecio()
    {
        return $this->sueldo;
    }
    public function debePagarImpuestos(): bool
    {
        $res = false;
        if ($this->sueldo >= 3333) {
            $res = true;
        }

        return $res;
    }
    public function toHTML(Persona $p): string
    {
        $res = "";
        if ($p instanceof Empleado) {


            $res = "<p> $p->nombre $p->apellidos $p->sueldo   <br>  " . $p->listarTelefonos() . "</p>";
        }
        return $res;
    }
}
