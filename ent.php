<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = "Nombre y Apellidos: " . $_POST["nombre_apellidos"] . "\n";
    $datos .= "Fecha de Nacimiento: " . $_POST["fecha_nacimiento"] . "\n";
    $datos .= "Ocupación: " . $_POST["ocupacion"] . "\n";
    $datos .= "Contacto: " . $_POST["contacto"] . "\n";
    $datos .= "Nacionalidad: " . $_POST["nacio"] . "\n";

    $datos .= "Nivel de Inglés: " . $_POST["nivel_ingles"] . "\n";

    if (isset($_POST["lenguajes_programacion"]) && is_array($_POST["lenguajes_programacion"])) 
    {
        $lenguajes = implode(", ", $_POST["lenguajes_programacion"]);
        $datos .= "Lenguajes de Programación: " . $lenguajes . "\n";
    } else
     {
        $datos .= "Lenguajes de Programación: (Ninguno)\n";
    }

 
    if (!empty($_POST["aptitudes"])) 
    {
        $aptitudes = $_POST["aptitudes"];
        $datos .= "Aptitudes: " . $aptitudes . "\n";
    }

    
    if (!empty($_POST["habilidades"])) 
    {
        $habilidades = implode(", ", $_POST["habilidades"]);
        $datos .= "Habilidades: " . $habilidades . "\n";
    } else {
        $datos .= "Habilidades: (Ninguna)\n";
    }

    

    
    if (isset($_POST["experiencia_laboral"]) && is_array($_POST["experiencia_laboral"]))
    {
        $experiencias = implode("\n", $_POST["experiencia_laboral"]);
        $datos .= "Experiencia Laboral:\n" . $experiencias . "\n\n";
    } else 
    {
        $datos .= "Experiencia Laboral: (Ninguna)\n\n";
    }


    if (isset($_POST["formacion"]) && is_array($_POST["formacion"])) 
    {
        $formacion = implode("\n", $_POST["formacion"]);
        $datos .= "Formación:\n" . $formacion . "\n\n";
    } else 
    {
        $datos .= "Formación: (Ninguna)\n\n";
    }

    
    if (isset($_POST["idiomas"]) && is_array($_POST["idiomas"]))
     {
        $idiomas = implode("\n", $_POST["idiomas"]);
        $datos .= "Idiomas:\n" . $idiomas . "\n\n";
    } else
    {
        $datos .= "Idiomas: (Ninguno)\n\n";
    }

    $_SESSION["datos_guardados"] = $datos;

    header("Location: mostrar_datos.php");
    exit;
}
?>
