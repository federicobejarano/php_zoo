<?php
    class Delfin extends AnimalMarino implements Nadador
    {
        public function __construct($nombre)
        {
            parent::__construct($nombre, "Delfín", "Peces y calamares", "Agua salada");
        }

        public function Nadar() : string
        {
            return "El delfín nada de manera ágil y rápida, haciendo movimientos en zigzag.";
        }

        public function HacerSaltosAcrobaticos() : string
        {
            return "El delfín realiza saltos acrobáticos espectaculares, lanzándose en ángulo y girando en el aire.";
        }
    }
?>