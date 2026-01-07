<?php
class Persona
{
    private string $nombre;
    private string $apellidos;
   
    public function __construct(
        string $nombre = "",
        string $apellidos = ""
        
    ) {}
    public function getNombre()
    {
        return $this->nombre;
    }

 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }
    public function toHtml(Persona $p) : string {
        return "<p>". $p->getNombre(). "   ". $p->getApellidos(). "";
    }
}
