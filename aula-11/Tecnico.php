<?php
    require_once 'Aluno.php';

    class Tecnico extends Aluno {
        private $registroProfissional;

        public function praticar() {

        }

        public function getRegistroProfissional() {
            return $this->registroProfissional;
        }

        public function setRegistroProfissional($r) {
            $this->registroProfissional = $r;
        }

    }