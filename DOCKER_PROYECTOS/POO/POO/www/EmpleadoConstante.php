<?php
class Empleado
{
    const SUELDO_TOPE = 3333;
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
}
