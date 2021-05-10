<?php
    
    if (isset)($_REQUEST['opciones'])) {
        $opcion=(int) $_REQUEST['opciones'];
    }else {
        $opcion=(int) 0;
    }
    $opcion = (int) $_REQUEST['opciones'];
    switch ($opcion) {
        case 1: echo "Hola soy el usuario Claudia"; goto pasar;
        case 2: echo "Hola soy el usuario Jaime"; goto pasar;
        case 3: echo "Hola soy el usuario Natha"; goto pasar; 
            pasar:
            echo "<br> soy la opción $opcion y estoy en un switch";
        break;
        
        default:
            echo "La opción $opcion no tiene un usuario registrado";
            break;
    }
    echo '<hr> <a href= "index.html">Volver</a>';
    //echo "enviar datos por medio del checkbox";
    //var_dump($_REQUEST['lista']);
    // OPCIONES EN sWITCH
    // $nombre=(string) "jaIME";
    
    // switch ($nombre) {
    //     case ('Claudia' == $nombre || 'claudia' ==$nombre || 'CLAUDIA'==$nombre): 
    //         echo "Usuario $nombre mañana vence el plazo <br>"; 
    //         goto pasar;
    //     case ('JAIME'== mb_strtoupper($nombre,'UTF-8')): echo "Usuario $nombre eres un usuario platino <br>"; goto pasar;
    //     case 'Diana':
    //         pasar: 
    //         echo "Puedes pasar a ver Netflix";
    //         break;
    //     default:
    //         echo "El usuario no está registrado";
    //         break;
    // }

 // function mensaje(...$arg){
    //     return "Hola estoy en el $arg[0] $arg[1] <br>";
    //}
    // $respuesta=(string)(false)
    //             ?mensaje('if',':)')
    //             :((false)? mensaje('elseif',':p')
    //             :((false)? mensaje('elseif2',':p')
    //             :mensaje('else',':(')));
    // echo $respuesta;
    //condicionales en una llinea
    // $respuesta =(string)(false) 
    //                     ? "Hola estoy en el if <br>" 
    //                     : (
    //                         (false) ?: "hola estoy en el elseif <br>") 
    //                         : (
    //                             (false) ?: "hola estoy en el elseif2 <br>") 
    //                             : "Hola estoy en el else"
    //                         )
    //                     );
                        
    // echo $respuesta;

    
    // if(false)
    //     echo "hola estoy en el if<br>";
    // elseif(true){
    //     echo "hola estoy en el elseif <br>" ;
    //     echo (5+2);
    // }
    // else
    //     echo "Hola estoy en el else";
    
?>