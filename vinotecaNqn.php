<?php

/******************************************/
/************** PROGRAMA PRINCIAL *********/
/******************************************/

/*------------------------------------------------------------------------------------------------*/

/******************************************/
/************** MODULOS *********/
/******************************************/

function calculos($vinos)
{
    $precioVinos = array();
    $precioVinos = [
        "malbec" => ["cantBotellas" => 0, "precioPromedio" => 0],
        "cabernet Sauvignon" => ["cantBotellas" => 0, "precioPromedio" => 0],
        "merlot" => ["cantBotellas" => 0, "precioPromedio" => 0]
    ];
    $cont1 = 0;
    $cont = 0;

    for ($i = 0; $i < 3; $i++) {
        $cont1 = $cont1 + $vinos["Malbec"]["cantBotellas"][$i];
        $cont = $cont + $vinos["Malbec"]["precioUnidad"][$i];
    }
    $precioVinos["malbec"]["cantBotellas"] = $cont1;
    $precioVinos["malbec"]["precioPromedio"] = ($cont / 3);
    $cont1 = 0;
    $cont = 0;
    for ($i = 0; $i < 3; $i++) {
        $cont1 = $cont1 + $vinos["Cabernet Sauvignon"]["cantBotellas"][$i];
        $cont = $cont + $vinos["Cabernet Sauvignon"]["precioUnidad"][$i];
    }
    $precioVinos["cabernet Sauvignon"]["cantBotellas"] = $cont1;
    $precioVinos["cabernet Sauvignon"]["precioPromedio"] = ($cont / 3);
    $cont1 = 0;
    $cont = 0;
    for ($i = 0; $i < 3; $i++) {
        $cont1 = $cont1 + $vinos["Merlot"]["cantBotellas"][$i];
        $cont = $cont + $vinos["Merlot"]["precioUnidad"][$i];
    }
    $precioVinos["merlot"]["cantBotellas"] = $cont1;
    $precioVinos["merlot"]["precioPromedio"] = ($cont / 3);
    return $precioVinos;
}
function main()
{
    $vinos = array();
    $vinos = [
        "Malbec" => [
            "variedad" => ["Dulce", "SemiSeco", "Seco"],
            "cantBotellas" => [400, 600, 700],
            "anyoProduccion" => [2012, 2009, 2008],
            "precioUnidad" => [300, 500, 600]
        ],
        "Cabernet Sauvignon" =>
        [
            "variedad" => ["Dulce", "Semi Seco", "Seco"],
            "cantBotellas" => [500, 300, 700],
            "anyoProduccion" => [2010, 2009, 2004],
            "precioUnidad" => [400, 600, 1000]
        ],
        "Merlot" =>
        [
            "variedad" => ["Dulce", "Semi Seco", "Seco"],
            "cantBotellas" => [800, 700, 700],
            "anyoProduccion" => [2012, 2010, 2007],
            "precioUnidad" => [400, 600, 700]
        ],
    ];

    $vinosDatos = calculos($vinos);

    echo "Los datos de los vinos Malbec son : \n";
    for ($i = 0; $i < 3; $i++) {
        echo   "Variedad: " . $vinos["Malbec"]["variedad"][$i] . "\n";
        echo "Sus cantidades de botellas : " . $vinos["Malbec"]["cantBotellas"][$i] . "\n";
        echo "Su respectivo año de produccion : " . $vinos["Malbec"]["anyoProduccion"][$i] . "\n";
        echo "El precio por unidad segun el tipo y año : " . $vinos["Malbec"]["precioUnidad"][$i] . "\n";
    }
    echo "Los datos de los vinos Cabernet Sauvignon son : \n";
    for ($i = 0; $i < 3; $i++) {
        echo   "Variedad: " . $vinos["Cabernet Sauvignon"]["variedad"][$i] . "\n";
        echo "Sus cantidades de botellas : " . $vinos["Cabernet Sauvignon"]["cantBotellas"][$i] . "\n";
        echo "Su respectivo año de produccion : " . $vinos["Cabernet Sauvignon"]["anyoProduccion"][$i] . "\n";
        echo "El precio por unidad segun el tipo y año : " . $vinos["Cabernet Sauvignon"]["precioUnidad"][$i] . "\n";
    }
    echo "Los datos de los vinos Merlot son : \n";
    for ($i = 0; $i < 3; $i++) {
        echo   "Variedad: " . $vinos["Merlot"]["variedad"][$i] . "\n";
        echo "Sus cantidades de botellas : " . $vinos["Merlot"]["cantBotellas"][$i] . "\n";
        echo "Su respectivo año de produccion : " . $vinos["Merlot"]["anyoProduccion"][$i] . "\n";
        echo "El precio por unidad segun el tipo y año : " . $vinos["Merlot"]["precioUnidad"][$i] . "\n";
    }
    echo "-------------------------------------------------------------------------------------------------------" . "\n";
    echo "Los datos adicionales de los vinos Malbec son : " . "\n";
    echo "La cantida dde botellas totales son: " . $vinosDatos["malbec"]["cantBotellas"] . "\n";
    echo "El precio promedio de los vinos es : " . $vinosDatos["malbec"]["precioPromedio"] . "\n";
    echo "Los datos adicionales de los vinos cavernet Sauvignon son : " . "\n";
    echo "La cantida dde botellas totales son: " . $vinosDatos["cabernet Sauvignon"]["cantBotellas"] . "\n";
    echo "El precio promedio de los vinos es : " . $vinosDatos["cabernet Sauvignon"]["precioPromedio"] . "\n";
    echo "Los datos adicionales de los vinos Merlot son : " . "\n";
    echo "La cantida dde botellas totales son: " . $vinosDatos["merlot"]["cantBotellas"] . "\n";
    echo "El precio promedio de los vinos es : " . $vinosDatos["merlot"]["precioPromedio"] . "\n";
}

main();
