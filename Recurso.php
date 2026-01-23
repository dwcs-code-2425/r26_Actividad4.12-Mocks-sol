<?php
abstract class Recurso implements Exportable{
    protected string $titulo;

    public function __construct(string $titulo) {
        $this->titulo = $titulo;
    }

    abstract public function getTipo(): string;

    public abstract function getDescripcion(): string;

     public function exportar(): string{
        return $this->getDescripcion();
     }
}