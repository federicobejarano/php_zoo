<?php
    class AnimalMarino extends Animal
    {
        private $tipoDeAgua;

        public function getTipoDeAgua() : ?string
        {
            return $this->tipoDeAgua;
        }

        public function setTipoDeAgua($tipoDeAgua) : void
        {
            $this->tipoDeAgua = $tipoDeAgua;
        }

        public function __construct($nombre, $especie, $alimento, $tipoDeAgua)
        {
            parent::__construct($nombre, $especie, $alimento);
            $this->tipoDeAgua = $tipoDeAgua;
        }
    }
?>