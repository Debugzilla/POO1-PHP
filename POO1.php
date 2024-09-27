<?php
//Exercici1
class Employee {

    public $nombre = "Jose";
    public $Salario = 1000;


   
    public function initialize($nombre, $Salario) {
        $this->nombre = $nombre;
        $this->Salario = $Salario;
    }


    public function print() {
        if ($this->Salario >= 6000) {
            $texto = $this->nombre . " tiene que pagar impuestos";
        } else {
            $texto = $this->nombre . " NO tiene que pagar impuestos";
        }

        return $texto;
    }
}


$empleado = new Employee();
$empleado->initialize("Jose", 7000);
echo $empleado->print();

echo "<br/><br/>";













?>
