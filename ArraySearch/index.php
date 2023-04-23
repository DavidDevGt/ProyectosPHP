<?php
function process($busqueda, $tipo) {
    $clima = array(
        'Guatemala City' => 'mild',
        'Antigua Guatemala' => 'warm',
        'Quetzaltenango' => 'cool',
        'Flores' => 'tropical',
        'Puerto Barrios' => 'hot',
        'Chichicastenango' => 'mild',
        'Huehuetenango' => 'cool',
        'Coban' => 'humid'
    );

    $ubicacion = array(
        'Petén' => 'North',
        'Sololá' => 'South',
        'Alta Verapaz' => 'East',
        'San Marcos' => 'West'
    );

    $turismo = array(
        'Tikal' => 'Mayan Ruins',
        'Lake Atitlán' => 'Volcanoes',
        'Rio Dulce' => 'Nature Reserves',
        'Antigua Guatemala' => 'Colonial Architecture'
    );

    switch($busqueda) {
        case 'clima':
            echo array_search($tipo, $clima);
            break;
        case 'ubicacion':
            echo array_search($tipo, $ubicacion);
            break;
        case 'turismo':
            echo array_search($tipo, $turismo);
            break;
    }
}

//Aqui buscas con los valores
process("clima", "mild");

?>