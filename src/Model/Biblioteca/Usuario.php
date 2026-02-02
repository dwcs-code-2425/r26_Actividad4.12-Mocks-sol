<?php
namespace App\Model\Biblioteca;
class Usuario
{

  
    private string $nombre;

    private string $email;

    private array $prestamos = []; // Array de Préstamos

    public function __construct(string $nombre, string $email, array $prestamos = [])
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->prestamos = $prestamos;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }


    public function addPrestamo(Prestamo $prestamo): void
    {

        $this->prestamos[] = $prestamo;

    }

    public function removePrestamo(Prestamo $prestamo): void
    {

        $indice = array_search($prestamo, $this->prestamos, true);
        if ($indice !== false) {
            unset($this->prestamos[$indice]);
            $this->prestamos = array_values($this->prestamos); // solo si queremos renumerar los índices del array

        }
    }

    /**
     * Get the value of prestamos
     */
    public function getPrestamos()
    {
        return $this->prestamos;
    }
}