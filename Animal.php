<?php
    class Animal
    {
        private $nombre;
        private $especie;
        private $alimento;

        public function getNombre() : ?string
        {
            return $this->nombre;
        }

        public function setNombre($nombre) : void
        {
            $this->nombre = $nombre;
        }

        public function getEspecie() : ?string
        {
            return $this->especie;
        }

        public function setEspecie($especie) : void
        {
            $this->especie = $especie;
        }

        public function getAlimento() : ?string
        {
            return $this->alimento;
        }

        public function setAlimento($alimento) : void
        {
            $this->alimento = $alimento;
        }

        public function __construct($nombre, $especie, $alimento)
        {
            $this->nombre = $nombre;
            $this->especie = $especie;
            $this->alimento = $alimento;
        }
    }
?>