<?php 
 function esPar(int $num) :bool{
    $res = false;
    if ($num %2 == 0){
        echo "El numero $num es un numero par";
        $res =true;
    } else {
        echo "El numero $num es un numero impar";
        $res = false;

    }
    return $res;

 }
 function arrayAleatorio(int $tam, int $min, int $max) : array {
    $res = array();


    for ($i=0;$i<$tam;$i++){
        $random=rand($min,$max);
        $res[$i] = $random;
    }
    return $res;
 }
 function arrayPares(array &$array): int {
    $res =0;
    for ($i=0;$i<count($array);$i++){
        if ($array[$i]%2 ==0) {
            $res ++;
        }
    }
    return $res;
 }
 function mayor(): int {
    $numeros = func_get_args();

    if (empty($numeros)) return 0;
    $numeroMayor = $numeros[0];

    foreach ($numeros as $numero){
        if ($numero > $numeroMayor){
            $numeroMayor = $numero;
        }
    }
    return $numeroMayor;

 }
function concatenar(...$palabras) : string {
    $res = "";
    foreach ($palabras as $palabra){
        $res += $palabra;
    }
    return $res;
}

function digitos(int $num, int $pos) : int {
    $res =0;
    if ($num ==0){
        $res ++;
    }

    while ($num>0) {
        $num = $num/10;
        $res++;
    }
    return $res;
}
function digitoN(int $num, int $pos): int {
    $res =0;
    $cadena_num = (string)$num;

    $digito_char = $cadena_num[$pos-1];

    return (int)$digito_char;
    
}
function quitaPorDetras(int $num, int $cant): int {
    $res ="";
    $cadena_num = (string)$num;
    $longitud = count_chars($cadena_num);
    for ($i=0;$i>$longitud-$cant;$i++){
        $res +=$cadena_num[$i];
    }

    return (int)$res;
    
}
function quitaPorDelante(int $num, int $cant): int {
    $res ="";
    $cadena_num = (string)$num;
    $longitud = count_chars($cadena_num);
    for ($i=$longitud-$cant;$i>$longitud;$i++){
        $res +=$cadena_num[$i];
    }

    return (int)$res;
}
// --- PRUEBA: esPar(int $num): bool ---
echo "### 1. esPar(int \$num): bool (Devuelve bool) ###\n";
echo "Posicional (6): "; esPar(6);
echo "Con Nombre (num: 13): "; esPar(13);
echo "\n### 2. arrayAleatorio(int \$tam, int \$min, int \$max) : array ###\n";
echo "Posicional (Tamaño 5, Rango 1-5):\n";
print_r(arrayAleatorio(5, 1, 5));
echo "Con Nombre (tam: 3, min: 20, max: 30):\n";
print_r(arrayAleatorio(3, 20, 30));
$arrayPares1 = [1, 2, 3, 4, 5, 6, 7];
$arrayPares2 = [10, 11, 12, 13, 14, 15];
echo "\n### 3. arrayPares(array &\$array): int ###\n";
echo "Array 1: "; print_r($arrayPares1);
echo "Pares (Posicional): " . arrayPares($arrayPares1) . "\n"; // Debería ser 3
echo "Array 2: "; print_r($arrayPares2);
echo "Pares (Con Nombre): " . arrayPares( $arrayPares2) . "\n"; // Debería ser 3
echo "\n### 4. mayor(): int (func_get_args) ###\n";
echo "Mayor de (10, 50, 5, 100): " . mayor(10, 50, 5, 100) . "\n"; // 100
echo "Mayor de (5, 2, 8): " . mayor(5, 2, 8) . "\n"; // 8

echo "\n### 5. concatenar(...$palabras) : string ###\n";
echo "Posicional: " . concatenar('Hola', 'Mundo', 'con', 'Espacios') . "\n";
echo "Con Nombre: " . concatenar('Esto', 'es', 'otro', 'ejemplo') . "\n";
echo "\n### 6. digitos(int \$num): int ###\n";
echo "Posicional (123456): " . digitos(123456,5) . "\n"; // 6
echo "Con Nombre (num: -7890): " . digitos(7890,3) . "\n"; // 4

echo "\n### 7. digitoN(int \$num, int \$pos): int ###\n";
echo "Posicional (12345, pos 1 [2]): " . digitoN(12345, 1) . "\n";
echo "Con Nombre (num: 9876, pos: 3 [6]): " . digitoN(9876,  3) . "\n";

echo "\n### 8. quitaPorDetras(int \$num, int \$cant): int ###\n";
echo "Posicional (12345, quitar 2 [123]): " . quitaPorDetras(12345, 2) . "\n";
echo "Con Nombre (num: 987654, cant: 3 [987]): " . quitaPorDetras(987654, 3) . "\n";

echo "\n### 9. quitaPorDelante(int \$num, int \$cant): int ###\n";
echo "Posicional (12345, quitar 2 [345]): " . quitaPorDelante(12345, 2) . "\n";
echo "Con Nombre (num: -9876, cant: 1 [-876]): " . quitaPorDelante(-9876, 1) . "\n";
?>