<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>
        <?php 
        echo 'Descrivint a Kurt Cagle'; 
        ?>
        </h1>
<h2>
        <?php 
        echo 'Les dades de Kurt son:'; 
        ?>
</h2>

    <div>
        <?php 
        $nom='Kurt';
        $edat=40;
        $any= date("1983-05-12");
        $phone= array("movil"=> 65434566,"telefon"=> 933332211);
        $direccio='Carrer de Turin, 15';
        $email='kurt.cagle@example.com';
        $treballa= True;
        $altura= 1.67;
        ?>
    </div>
    <div>
        <ul>
            <li>
            <?php
            echo 'Es diu: '. $nom;
            ?>
            </li>
            <li>
            <?php
            echo 'Te : '. $edat.' anys';
            ?>
            </li>
            <li>
            <?php
            echo 'Va neixer l\'any: <b>'. $any . '</b>';
            ?>
            </li>
            <li>
            <?php
            echo "Els seus telèfons són: {$phone['movil']} - {$phone['telefon']}" ;
            ?>
            </li>
            <li>
            <?php
            echo 'Viu a: '. $direccio;
            ?>
            </li>
            <li>
            <?php
            //Ternario echo $treballa?'Si':'No;
            /*if($treballa){
                echo 'Treballa: Si';
            } else
                echo 'Treballa: No'*/
            echo $treballa?'Treballa: Si':'Treballa: No';
            ?>
            </li>
            <li>
            <?php
            echo 'Medeix: '. $altura;
            ?>
            </li>
        </ul>
    </div>
    
</body>
</html>