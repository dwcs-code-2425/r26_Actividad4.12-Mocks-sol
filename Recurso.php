<?php
abstract class Recurso{
    protected string $titulo;
    protected Exportador $exportador;

    public function __construct(string $titulo) {
        $this->titulo = $titulo;
    }

    abstract public function getTipo(): string;

    public abstract function getDescripcion(): string;

     public function exportar(): string{
        return $this->exportador->exportar($this);
     }


    /**
     * Set the value of exportador
     *
     * @param Exportador $exportador
     *
     * @return self
     */
    public function setExportador(Exportador $exportador): self
    {
        $this->exportador = $exportador;

        return $this;
    }

    /**
     * Get the value of titulo
     *
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }
}