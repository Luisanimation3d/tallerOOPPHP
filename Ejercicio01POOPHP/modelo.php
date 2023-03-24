<?php

class Militar
{
        private $id;
        private $nameLastName;
        private $age;
        private $gender;
        private $hijoUnico;

        function __construct($id, $nameLastName, $age, $gender, $hijoUnico)
        {       
                $this->id = $id;
                $this->nameLastName = $nameLastName;
                $this->age = intval($age);
                $this->gender = $gender;
                $this->hijoUnico = ($hijoUnico == "Si") ? true : false;
        }
        public function getId()
        {
                return $this->id;
        }
        public function getHijoUnico()
        {
                return $this->hijoUnico;
        }
        public function setHijoUnico($hijoUnico)
        {
                $this->hijoUnico = ($hijoUnico == "Si") ? true : false;
        }
        public function getGender()
        {
                return $this->gender;
        }
        public function setGender($gender)
        {
                $this->gender = $gender;
        }
        public function getAge()
        {
                return $this->age;
        }
        public function setAge($age)
        {
                $this->age = $age;
        }
        public function getNameLastName()
        {
                return $this->nameLastName;
        }
        public function setNameLastName($nameLastName)
        {
                $this->nameLastName = $nameLastName;
        }

        function validar()
        {
                $message = "No cumple con los requisitos";
                if ($this->gender == "male" && $this->hijoUnico == false && $this->age > 17 && $this->age < 35) {
                        $message = "Cumple con los requisitos";
                }
                return $message;
        }
}
