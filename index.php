<?php   
$arreglo=["10","170","500","5000","1200","69","80","7506","4873","639","1500"];
$APar = array();
$Aimpar = array();
$contado=count($arreglo);

$suma= array_sum($arreglo);
//var_dump($suma);

function porcentaje($a,$b){
$percent = round($a/$b*100);
if ($percent<=100){
      echo $percent;
}
else {
	echo "100";
}
}

function par ($arreglo) {
    for ($i=0; $i <= count($arreglo); $i++) {
        if ($arreglo[$i] % 2 === 0 ) {
            array_push($APar[],$arreglo[$i]);
            var_dump($APar);
        }   
    } 
}

function impar ($arreglo, $Aimpar) {
    for ($i=0; $i <= count($arreglo); $i++) {
        if ($arreglo[$i] % 2 !== 0 ) {
            array_push($Aimpar[],$arreglo[$i]) ;
        }   
    } 
}

/*
//La funcion devuelve los pares e Impares del array.
$numPar = count($APar);
echo "Par : <br>";
for ($i=0; $i < $numPar; $i++) {
echo $APar[$i] . "<br/>";
}

$numImpar = count($Aimpar);
echo " Impares : <br>";
for ($i=0; $i < $numImpar; $i++) {
echo $Aimpar[$i] . "<br/>";
}

*/

function mayormil(){
    for ($i=0; $i <= count($arreglo); $i++) {
        if ($arreglo[$i] > 1000 ) {
            array_push($Aimpar[],$arreglo[$i]) ;
        }   
    } 
}

function menor(){

    
}

//$par=porcentaje(1200,$suma);
//$impar=porcentaje(1200,$suma);
//$mil=porcentaje(1200,$suma);

/*
echo "La cantidad total de elementos son: ".$contado."<br>";
echo "El pocentaje de numeros pares es: ".$contado."<br>";
echo "El pocentaje de numeros impares es: ".$contado."<br>";
echo "El pocentaje de numeros mayores a 1000 es: ".$contado."<br>";
echo "El mayor numero es: ".$contado."<br>";
echo "El menor numero es:  ".$contado."<br>";
*/

 

$pares=par($arreglo, $APar);


//var_dump($APar);


?>