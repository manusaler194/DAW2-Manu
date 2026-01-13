<?php
class Empleado
{
    static float $sueldoTope;
    public function __construct(
        string $nombre = "",
        string $apellidos = "",
        float $sueldo = 1000
    ) {}
    public function anyadirTelefono(int $telefono): void
    {
        array_push($this->telefonos, $telefono);
    }
    public function listarTelefonos(): string
    {
        return implode(",", $this->telefonos);
    }
    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }

    public function debePagarImpuestos(): bool
    {
        $res = false;
        if ($this->sueldo >= Empleado::SUELDO_TOPE) {
            $res = true;
        }

        return $res;
    }
    public function getSueldoTope()
    {
        return $this->sueldoTope;
    }
    public function setSueldoTope($sueldoTope)
    {
        $this->sueldoTope = $sueldoTope;

        return $this;
    }
}
