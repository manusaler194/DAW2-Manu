<?php
class Empleado
{

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
        if ($this->sueldo >= 3333) {
            $res = true;
        }

        return $res;
    }
}
