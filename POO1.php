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


//Exercici2
//Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt.
//Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
// Clase base Shape
class Shape {
    public $Altura;
    public $Amplada;

    // Constructor que inicializa las propiedades de altura y anchura
    public function __construct($Altura, $Amplada) {
        $this->Altura = $Altura;
        $this->Amplada = $Amplada;
    }

    // Método que será sobrescrito en las subclases
    public function area() {
        return 0;
    }
}

// Subclase Triangle que hereda de Shape
class Triangle extends Shape {

    // Sobrescribe el método area para calcular el área de un triángulo
    public function area() {
        return ($this->Altura * $this->Amplada) / 2;
    }
}

// Subclase Rectangle que hereda de Shape
class Rectangle extends Shape {

    // Sobrescribe el método area para calcular el área de un rectángulo
    public function area() {
        return $this->Altura * $this->Amplada;
    }
}


$triangle = new Triangle(15, 20);
echo "Área del triángulo: " . $triangle->area() . "<br/>";

$rectangle = new Rectangle(19, 20);
echo "Área del rectángulo: " . $rectangle->area();



























?>
