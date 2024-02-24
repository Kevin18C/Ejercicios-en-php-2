<?php
// If If-else
$hoy = date("y-m-d");
$fechaNacimiento = "2003-07-06";

$edad = date_diff(date_create($fechaNacimiento), date_create($hoy))->y;

echo "Tu edad es: " . $edad . " años.";

if ($edad < 18) {
    echo "Eres menor de edad.";
} else {
    echo "Eres mayor de edad.";
} echo "\n";



$primerNumero = 30;
$segundoNumero = 20;

if ($primerNumero > $segundoNumero) {
    echo "El primer número ($primerNumero) es mayor que el segundo número ($segundoNumero)";
} elseif ($primerNumero < $segundoNumero) {
    echo "El segundo número ($segundoNumero ) es mayor que el primer número ($primerNumero)";
} else {
    echo "Los dos números son iguales.";
}
echo "\n";


$numeroSeleccionado = 11;

if ($numeroSeleccionado % 2 == 0) {
    echo "El número " . $numeroSeleccionado . " es par.";
} else {
    echo "El número " . $numeroSeleccionado . " es impar.";
}
echo "\n";


//FOR-WHILE
$numeroBase = 5;
$factorial = 1;
$i = 1;
while ($i <= $numeroBase) {
    $factorial *= $i;
    $i++;
}
echo "El factorial de $numeroBase es $factorial . \n";



function generarAleatorio() {
    return rand(1, 100);
}

$numeros = array();
for ($i = 0; $i < 20; $i++) {
    $numeros[] = generarAleatorio();
}


for ($i = 0; $i < count($numeros) - 1; $i++) {
    for ($j = $i + 1; $j < count($numeros); $j++) {
        if ($numeros[$i] < $numeros[$j]) {
            $aux = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $aux;
        }
    }
}
echo "Números ordenados de mayor a menor: ";
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . " ";
}

echo "\n";




//Array y foreach
$alumnos = array(
    array(
        "alumno" => "Ana López",
        "curso" => "Matemáticas",
        "nota" => 90,
    ),
    array(
        "alumno" => "Juan Pérez",
        "curso" => "Física",
        "nota" => 89,
    ),
    array(
        "alumno"=> "Ana Garcia",
        "curso"=> "Matemáticas",
        "nota"=>88 ,
    ),
    array(
        "alumno"=> "Maria Lopez",
        "curso"=> "Física",
        "nota"=> 87,
    ),
    array(
        "alumno"=> "Pedro Martínez",
        "curso"=> "Matemáticas",
        "nota"=> 86,
    ),
    array(
        "alumno"=> "Isabel Fernandez" ,
        "curso"=> "Física" ,
        "nota"=>85 ,
    ),
    array(
        "alumno"=> "David Gonzáles",
        "curso"=> "Matemáticas",
        "nota"=> 84,
    ),
    array(
        "alumno"=> "Laura Rodriguez" ,
        "curso"=> "Física" ,
        "nota"=>83 ,
    ),
    array(
        "alumno"=> "Miguel sánchez",
        "curso"=> "Matemáticas" ,
        "nota"=> 82,
    ),
    array(
        "alumno"=> "Carmen Díaz",
        "curso"=> "Física",
        "nota"=> 81,
    ),
);


foreach ($alumnos as $alumno) {
    echo "Nombre:" . $alumno["alumno"] . "\n";
    echo "Curso:" . $alumno["curso"] . "\n";
    echo "Nota: " . $alumno["nota"] . "\n";
    echo "\n";
}
