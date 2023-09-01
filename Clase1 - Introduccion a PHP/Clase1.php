<?php 
    /* Leonel Alegre
    Aplicacion N°1
    Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
    supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
    se sumaron.
    */
    //SumarNumeros();

    function SumarNumeros(){
        $suma = 0;
        $numerosSumados = 0;
        $numeroActual = 1;

        while($suma + $numeroActual <= 1000){
            $suma += $numeroActual;
            $numerosSumados++;
            echo "Número sumado: $numeroActual <br>";
            $numeroActual++;
        }

        echo "Suma total: $suma <br>";
        echo "Cantidad de números sumados: $numerosSumados <br>";
    }

    /* Leonel Alegre
    Aplicacion N°2
    Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
    distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
    año es. Utilizar una estructura selectiva múltiple.
    */
    //MostrarFechaYEstacion();

    function MostrarFechaYEstacion(){
        $fechaActual = new DateTime();
        $fechaString = $fechaActual->format('d-m-Y H:i:s');
        $mes = $fechaActual->format('n');
        $dia = $fechaActual->format('d');
        $estacion;

        switch($mes){
            case 1:
                $estacion = "Verano";
                break;

            case 2:
                $estacion = "Verano";
                break;

            case 3:
                if($dia < 21){
                    $estacion = "Verano";
                }
                else $estacion = "Otoño";
                break;

            case 4:
                $estacion = "Otoño";
                break;
                            
            case 5:
                $estacion = "Otoño";
                break;
                                
            case 6:
                if($dia < 21){
                    $estacion = "Otoño";
                }
                else $estacion = "Invierno";
                break;
            
            case 7:
                $estacion = "Invierno";
                break;
            
            case 8:
                $estacion = "Invierno";
                break;
            
            case 9:
                if($dia < 21){
                    $estacion = "Invierno";
                }
                else $estacion = "Primavera";
                break;

            case 10:
                $estacion = "Primavera";
                break;

            case 11:
                $estacion = "Primavera";
                break;
            
            case 12:
                if($dia < 21){
                    $estacion = "Primavera";
                }
                else $estacion = "Verano";
                break;
        }
        
        echo "La fecha es actual es ${fechaString} y la estacion actual es ${estacion}";
    }

    /* Leonel Alegre
    Aplicacion N°3
    Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
    el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
    variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido. Ejemplo 1: $a
    = 6; $b = 9; $c = 8; => se muestra 8.
    Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
    */

    // ObtenerValorDelMedio(12, 18, 15);

    function ObtenerValorDelMedio($num1, $num2, $num3){
        // Valida que todos los numeros sean distintos
        if($num1 !== $num2 && $num1 !== $num3 && $num2 !== $num3) {
            $numeros = array($num1, $num2, $num3);
            sort($numeros); // Ordena el array en orden ascendente
            echo "numero del medio: ${numeros[1]} <br>";
        }
        // Algun valor se repite por lo tanto no hay valor del medio
        else{
            echo "No hay valor del medio";
        }
    }

    /* Leonel Alegre
    Aplicacion N°4 (Calculadora)
    Escribir un programa que use la variable $operador que pueda almacenar los símbolos
    matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
    símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
    resultado por pantalla.
    */

    // Calculadora('*', 10, 5);

    function Calculadora($operador, $op1, $op2){
        $mensaje;
        $resultado;
        switch($operador){
            case '+':
                $resultado = $op1 + $op2;
                $mensaje = "SUMA: ${op1} + ${op2} = ${resultado}";
                break;

            case '-':
                $resultado = $op1 - $op2;
                $mensaje = "RESTA: ${op1} - ${op2} = ${resultado}";
                break;

            case '/':
                $resultado = $op1 / $op2;
                $mensaje = "DIVISION: ${op1} / ${op2} = ${resultado}";
                break;

            case '*':
                $resultado = $op1 * $op2;
                $mensaje = "MULTIPLICACION: ${op1} * ${op2} = ${resultado}";
                break;

            default:
                $mensaje = "Error, operador no valido.";
                break;
        }

        echo $mensaje;
    }

    /* Leonel Alegre
    Aplicación No 5 (Números en letras)
    Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
    por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
    entre el 20 y el 60.
    Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
    */

    //EnteroAPalabra(35);

    function EnteroAPalabra($num){
        $mensaje = "Error. el numero no se encuentra en el rango, que es de 20 a 60.";

        if($num >= 20 && $num <= 60){
            $decenas = floor($num / 10);
            $unidades = $num % 10;

            switch($decenas){
                case 2:
                    if($unidades == 0){
                        $mensaje = "Veinte"; 
                    }
                    else $mensaje = "Veinti"; 
                    break;
                
                case 3:
                    $mensaje = "Treinta"; 
                    break;
                
                case 4:
                    $mensaje = "Cuarenta";
                    break;
                
                case 5:
                    $mensaje = "Cincuenta";
                    break;
                
                case 6:
                    $mensaje = "Sesenta";
                    break;
            }

            switch($unidades){
                case 1:
                    if($decenas == 2){
                        $mensaje = $mensaje . "uno"; 
                    }
                    else $mensaje = $mensaje . " y uno"; 
                    break;
                
                case 2:
                    if($decenas == 2){
                        $mensaje = $mensaje . "dos"; 
                    }
                    else $mensaje = $mensaje . " y dos"; 
                    break;
                
                case 3:
                    if($decenas == 2){
                        $mensaje = $mensaje . "tres"; 
                    }
                    else $mensaje = $mensaje . " y tres"; 
                    break;
                
                case 4:
                    if($decenas == 2){
                        $mensaje = $mensaje . "cuatro"; 
                    }
                    else $mensaje = $mensaje . " y cuatro"; 
                    break;
                
                case 5:
                    if($decenas == 2){
                        $mensaje = $mensaje . "cinco"; 
                    }
                    else $mensaje = $mensaje . " y cinco"; 
                    break;

                case 6:
                    if($decenas == 2){
                        $mensaje = $mensaje . "seis"; 
                    }
                    else $mensaje = $mensaje . " y seis"; 
                    break;

                case 7:
                    if($decenas == 2){
                        $mensaje = $mensaje . "siete"; 
                    }
                    else $mensaje = $mensaje . " y siete"; 
                    break;

                case 8:
                    if($decenas == 2){
                        $mensaje = $mensaje . "ocho"; 
                    }
                    else $mensaje = $mensaje . " y ocho"; 
                    break;
                
                case 9:
                    if($decenas == 2){
                        $mensaje = $mensaje . "nueve"; 
                    }
                    else $mensaje = $mensaje . " y nueve"; 
                    break;
            }
        }
        echo $mensaje;
    }

    /* Leonel Alegre
    Aplicación No 6 (Carga aleatoria)
    Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
    función rand). Mediante una estructura condicional, determinar si el promedio de los números
    son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
    resultado.
    */

    // CargaAleatoria();

    function CargaAleatoria(){
        $enteros = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));
        $total = 0;
        $promedio = 0;
        $mensaje;

        foreach($enteros as $numero){
            $total += $numero;
        }
        $promedio = $total / 5;

        if($promedio == 6){
            $mensaje = "Promedio igual a 6";
        }
        else if($promedio < 6){
            $mensaje = "Promedio menor a 6";
        }
        else {
            $mensaje = "Promedio mayor a 6";
        }

        echo $mensaje . "<br>";
        echo "Promedio: ${promedio}";
    }

    /* Leonel Alegre
    Aplicación No 7 (Mostrar impares)
    Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
    Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
    salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
    utilizando las estructuras while y foreach.
    */
    // Inicializacion del array
    // $array = array();
    // $n = 50;
    
    // for($i = 0; $i < $n; $i++){
    //     array_push($array, rand());
    // }

    // MostrarImpares($array);

    function MostrarImpares($array){
        $arrayImpares = array();

        for($i = 0; $i < count($array); $i++){
            if(count($arrayImpares) >= 10){
                break;
            }
            if($array[$i] % 2 != 0){
                array_push($arrayImpares, $array[$i]);
            }
        }

        foreach($arrayImpares as $numeroImpar){
            echo $numeroImpar . "<br>";
        }
    }

    /* Leonel Alegre
    Aplicación No 8 (Carga aleatoria)
    Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
    $v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';
    */
    
    // RecorrerArray();

    function RecorrerArray(){
        $v = array(1 => 90, 30 => 7, 'e' => 99, 'hola' => 'mundo');

        foreach($v as $k => $valor){
            echo  $valor . "<br>";
        }
    }

    /* Leonel Alegre
    Aplicación No 9 (Arrays de Arrays)
    Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
    contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
    Arrays de Arrays.
    */

    ArrayDeArray();

    function ArrayDeArray(){
        $lapiceras = array();

        $lapiceras[0] = array(
            'color' => 'Azul',
            'marca' => 'BIC',
            'trazo' => 'Medio',
            'precio' => 1.0
        );
        $lapiceras[1] = array(
            'color' => 'Negro',
            'marca' => 'Paper Mate',
            'trazo' => 'Medio',
            'precio' => 2
        );
        $lapiceras[2] = array(
            'color' => 'Negro',
            'marca' => 'Parker',
            'trazo' => 'Fino',
            'precio' => 3
        );

        $n = 0;
        foreach($lapiceras as $lapicera){
            echo "Lapicera N ${n} <br>";

            foreach($lapicera as $clave => $valor){
                echo "${clave} : ${valor} <br>";
            }
            echo "<br>";
            $n++;
        }
    }
?>