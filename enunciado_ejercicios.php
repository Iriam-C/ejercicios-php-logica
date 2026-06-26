<?php 
/* 
1. Gremio de Cazarrecompesas

El Gremio de Cazarrecompensas Espaciales te ha contratado para analizar su base de datos de 
objetivos. Tienes un array simple con las recompensas (en créditos) de varios fugitivos:
 [1500, 4200, 800, 2300, 9500, 1200]. Necesitas encontrar rápidamente la recompensa más alta para enviar a tu mejor agente. 

*/

//--------------- TU CODIGO VA AQUI ---------------- //
$recompensas =  [1500, 4200, 800, 2300, 9500, 1200];
 $maximo = max($recompensas); 
 echo $maximo;

/**
 * 2. Academia de hechiceria
 * En una academia de hechicería, los estudiantes se registran en un array bidimensional donde cada fila representa a un estudiante: 
 * [
 * ['nombre' => 'Luna', 'poder' => 85], 
 * ['nombre' => 'Cedric', 'poder' => 92], 
 * ['nombre' => 'Draco', 'poder' => 78],
 * ['nombre' => 'Snape', 'poder' => 95]]. 
 * 
 * Para el torneo anual, debes ordenar a los estudiantes de forma DESCENDENTE según su nivel de 'poder'.
 */


//--------------- TU CODIGO VA AQUI ---------------- //
$registros = [
    ['nombre' => 'Luna', 'poder' => 85], 
    ['nombre' => 'Cedric', 'poder' => 92], 
    ['nombre' => 'Draco', 'poder' => 78],
    ['nombre' => 'Snape', 'poder' => 95]
]; 
$poderes = [];
  foreach ($registros as $key => $registro) {
        $poderes[$key] = $registro['poder'];
    arsort($poderes);
        }

 print_r($poderes);
    
    

/**
 * 3. Tienda de pociones:
 * Estás diseñando el inventario de una tienda de pociones cyberpunk. El array contiene los nombres de las pociones disponibles: 
 * ['Curación', 'Maná', 'Invisibilidad', 'Velocidad', 'Fuerza']. 
 * El usuario busca la poción 'Invisibilidad' debes devolversela con un algoritmo de busqueda de forma manual. 
 */

//--------------- TU CODIGO VA AQUI ---------------- //
$posiones=['Curación', 'Maná', 'Invisibilidad', 'Velocidad', 'Fuerza'];
$buscar = "Invisibilidad";

function buscarPosion ($array, $buscar){
    
$resultado= "";


    foreach($array as $posion){
        if($buscar === $posion){
            $resultado = $posion;
            break;
        }else{
            $resultado = "Esa posion no existe";
        }
        
    }

    return $resultado;
}

print(buscarPosion($posiones,$buscar)); 

/**
 * 4. Altura en la montaña rusa 
 * El sistema de una montaña rusa registra las alturas de los pasajeros en una fila: [130, 145, 120, 160, 150]. 
 * Para optimizar el abordaje, debes implementar un algoritmo para ordenar de menor a mayor.
 */

$numerosRandom = [123,556,6121,12,23,57,5454,76];

$alturas = [130, 145, 120, 160, 150];
function ordenarAlturas($array){
    
    // Ordenar de menor a mayor
    sort($array);
    return $array;
}

$arrayOrdenado = ordenarAlturas($alturas);
$arrayOrdenadoNumeros = ordenarAlturas($numerosRandom);

echo "Alturas ordenadas: ";
print_r($arrayOrdenado);

echo "Numeros ordenados: ";
print_r($arrayOrdenadoNumeros);

//--------------- TU CODIGO VA AQUI ---------------- //

/**
 * 5. El Impuesto del Rey Enano
 * El Rey Enano ha decretado que todos los cargamentos de oro que entren a la montaña deben pagar un impuesto fijo de 5 monedas de oro, excepto los que traigan menos de 10 monedas, que no pagan nada.
//Tu Tarea: Recorre un array con los pesos de los cargamentos y devuelve un nuevo array con el oro neto que le queda a cada comerciante después de aplicar el impuesto.



//Datos de prueba: [50, 8, 100, 5, 24]
 **/

//--------------- TU CODIGO VA AQUI ---------------- //

$oro = [5,10, 20, 3] ;
function impuestos($array){
    $result = [];
    foreach ($array as $valor){
        if ($valor >= 10){
            $result[] = "Debes pagar el impuesto de 5 monedas de oro";
        } else {
            $result[] = "No debes pagar el impuesto de 5 monedas de oro";
        }
    }
    return $result;
}
$debespagar = impuestos($oro);
print_r($debespagar);




/*
 * 6. El Detector de Hackers (Filtrado de datos)
Contexto: El servidor de una academia de eSports fue atacado y se registraron puntajes sospechosos en el juego. Tienes un array con los puntajes de la última partida.
Tu Tarea: Escribe una función que reciba el array de puntajes y devuelva un nuevo array únicamente con los puntajes que sean mayores a 500 (los sospechosos de usar hacks) para pasárselos al administrador.

Datos de prueba: [150, 600, 420, 900, 310, 1250]
 * 
 */

//--------------- TU CODIGO VA AQUI ---------------- //
$puntajes = [150, 600, 420, 900, 310, 1250];


function detectorHackers ($puntajes){
    
    $sospechosos = [];
    foreach($puntajes as $puntaje){
        if($puntaje > 500){
            $sospechosos[] = $puntaje;
            }
    }
    return $sospechosos;
}

$resultadoHackers = detectorHackers($puntajes);
print_r($resultadoHackers);

/**
 * 
 * 7. El Contador de Chismes (Frecuencia de datos)
Contexto: En la cantina del pueblo se repiten mucho ciertas palabras. Queremos saber cuántas veces los aldeanos dicen la palabra "oro".
Tu Tarea: Recorre un array de strings (palabras) y utiliza un contador para decir exactamente cuántas veces aparece la palabra buscada.

Datos de prueba: ["taberna", "oro", "espada", "dragón", "oro", "poción", "oro"]

 */

//--------------- TU CODIGO VA AQUI ---------------- //
$palabras = ["taberna", "oro", "espada", "dragón", "oro", "poción", "oro"];

$buscar = "oro";
$contador = 0;

foreach($palabras as $palabra){
    if($palabra === $buscar){
        $contador++;
    }

 echo "La palabra '$buscar' $contador veces";   
    
}


/**
 * 
 * 8. Buscando la Poción del Olvido (Búsqueda manual)
Contexto: Un alquimista tiene un estante con frascos de pociones ordenados en un array de strings. Está buscando la "Poción de Olvido".
Tu Tarea: Recorre el array a mano. Si encontrás la poción, retorna su posición (índice). Si terminas de recorrer todo el estante y no estaba, retorna "La poción fue robada". (No uses in_array).

Datos de prueba: ["Curación", "Fuerza", "Invisibilidad", "Poción de Olvido", "Suerte"]
 */

//--------------- TU CODIGO VA AQUI ---------------- //

/**
 * 
 * 9. El Repartidor de Cartas (Separación de datos)
Contexto: En un casino temático, un crupier recibe una fila de cartas numeradas. Necesita separar las cartas pares para el Jugador A y las impares para el Jugador B.
Tu Tarea: Dado un array de números, genera un nuevo array asociativo que tenga dos claves: 'jugadorA' (con un array de los pares) y 'jugadorB' (con un array de los impares).

Datos de prueba: [14, 7, 22, 13, 9, 2]
 */

//--------------- TU CODIGO VA AQUI ---------------- //

 


$cartas = [14, 7, 22, 13, 9, 2];

function  paresono ($array) {
$res = [];
$pares =[];
$inpares =[];

foreach ($array as $carta ){
    if ((carta%2)=== 0 ){
        res[$pares][]= $carta;
    }

     else{
        res[$inpares][] = $carta;
     }

 
}
print_r ($paresono);



/**
 * 
 * 10. El Caza-Talentos de IT (Filtrado en Matriz)
Contexto: Tienes una lista de postulantes para una pasantía. Cada postulante es un array asociativo con su nombre, tecnología y experiencia (en meses).
Tu Tarea: Recorrer la lista y guardar en un nuevo array solo a los profesionales que dominen "React" y tengan más de 6 meses de experiencia.

Datos de prueba:

$postulantes = [
    ["nombre" => "Lucas", "tecnologia" => "React", "experiencia" => 3],
    ["nombre" => "Ana", "tecnologia" => "PHP", "experiencia" => 12],
    ["nombre" => "Mateo", "tecnologia" => "React", "experiencia" => 8],
];
 */

//--------------- TU CODIGO VA AQUI ---------------- //

$postulantes = [
    ["nombre" => "Lucas", "tecnologia" => "React", "experiencia" => 3],
    ["nombre" => "Ana", "tecnologia" => "PHP", "experiencia" => 12],
    ["nombre" => "Mateo", "tecnologia" => "React", "experiencia" => 8],
];

    $dominaReact = [];
        foreach ($postulantes as $postulante){
            if ($postulante ["tecnologia"]== "React" && $postulante["experiencia"] > 6){
                $dominaReact[]=$postulante;
       
                 }
        }

  print_r($dominaReact);      

/**
 * 
 * 11. La Factura del Cyberpunk (Acumulación)
Contexto: Un cliente va a una tienda de prótesis cibernéticas y compra varios artículos. Tu array bidimensional representa el carrito de compras, donde cada ítem tiene producto, cantidad y precio_unitario.
Tu Tarea: Calcular el costo total de la compra multiplicando la cantidad por el precio de cada producto y acumulando el resultado en una variable final.

Datos de prueba:

$carrito = [
    ["producto" => "Ojo Láser", "cantidad" => 2, "precio_unitario" => 500],
    ["producto" => "Brazo Titán", "cantidad" => 1, "precio_unitario" => 1200]
];
 */

//--------------- TU CODIGO VA AQUI ---------------- //

/**
 * 
 * 12. Ranking de Gladiadores (Ordenamiento Lógico Manual)
Contexto: En el coliseo romano, los gladiadores tienen un registro con su nombre y la cantidad de victorias. Queremos premiar al que tenga más victorias.
Tu Tarea: Recorre el array para encontrar manualmente al gladiador con el mayor número de victorias y retorna un string que diga: "El campeón es X con Y victorias". (Evita funciones automáticas, hacelo comparando en cada vuelta).

Datos de prueba:

$gladiadores = [
    ["nombre" => "Spartacus", "victorias" => 15],
    ["nombre" => "Maximus", "victorias" => 22],
    ["nombre" => "Crixus", "victorias" => 18]
];
 */

//--------------- TU CODIGO VA AQUI ---------------- //

/**
 * 
 * 13. Limpieza de Inventario (Eliminación/Filtrado inverso)
Contexto: En un videojuego de rol, el inventario del jugador se llenó de basura. Tienes un array de ítems donde cada uno tiene un nombre y un booleano es_basura.
Tu Tarea: Crea un nuevo array donde "limpies" el inventario, es decir, que solo conserve los ítems donde es_basura sea false.

Datos de prueba:

$inventario = [
    ["nombre" => "Espada de Acero", "es_basura" => false],
    ["nombre" => "Bota rota", "es_basura" => true],
    ["nombre" => "Escudo de madera", "es_basura" => false],
    ["nombre" => "Lata oxidada", "es_basura" => true]
];
 */

/**
 * 
 * 14. Generador de Credenciales (Formateo de Matriz)
Contexto: La academia necesita generar los nombres de usuario para el campus virtual de un grupo de alumnos.
Tu Tarea: Dado un array bidimensional con el nombre y apellido de los alumnos, genera un nuevo array simple de strings donde cada elemento sea el apellido en mayúsculas, seguido de un guion bajo y el nombre en minúsculas. (Tip: mirá cómo usaste las comillas dobles en el Ejercicio 2 de tu archivo).

Datos de prueba:

$alumnos = [
    ["nombre" => "Jairo", "apellido" => "Vega"],
    ["nombre" => "Hector", "apellido" => "Romero"],
    ["nombre" => "Ciro", "apellido" => "Ermacora"]

];
// Resultado esperado: ["VEGA_jairo", "GÓMEZ_hector"] (o similar sin importar acentos)
 */

/**
 *      ----------- BONUS -----------
 *  El Balance de Mapache Motorizado
Contexto:
Acabas de abrir un taller de motos llamado "Mapache Motorizado". Para ver cómo fue el primer mes, registraste las órdenes de trabajo en un array bidimensional. Cada orden tiene el modelo de la moto, el tipo de servicio ("Reparación" o "Mantenimiento") y el costo.

Tu Tarea:
Escribe un script en PHP que recorra las órdenes de trabajo utilizando bucles y calcule tres cosas diferentes en variables separadas:

El dinero total recaudado en el mes (acumulando todos los costos).

La cantidad total de motos que ingresaron por "Reparación".

Un nuevo array que contenga solo las motos de la marca "Guerrero" que pasaron por el taller.

Datos de prueba:

$ordenes = [
    ["moto" => "Honda Wave", "servicio" => "Mantenimiento", "costo" => 15000],
    ["moto" => "Guerrero GMX 150", "servicio" => "Reparación", "costo" => 32000],
    ["moto" => "Yamaha YBR", "servicio" => "Reparación", "costo" => 45000],
    ["moto" => "Guerrero Trip", "servicio" => "Mantenimiento", "costo" => 12000],
    ["moto" => "Motomel Skua", "servicio" => "Reparación", "costo" => 28000]
 */
?>