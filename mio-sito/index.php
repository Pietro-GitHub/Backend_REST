<!DOCTYPE html>
<html>
<head>
    <title>Rest Service</title>
</head>
<body>

    <?php

        //crea un json
        $myObj = [
            'id'=>'10006',
            'birthDate'=>'1964-06-01',
            'firstName'=>'John',
            'lastName'=>'Smith',
            'gender'=>'M',
            'hireDate'=>'1985-11-20',
        ];

        echo json_encode($myObj);

        //prende il json dal file
        $data = file_get_contents("data.json");

        switch($_SERVER['REQUEST_METHOD']){

            case 'GET':
                echo $data;
            break;

            case 'POST':
               echo 'success POST';
               var_dump($myJSON); 
            break;
    
            case 'PUT':
                echo 'success PUT';
                var_dump($myJSON); 
            break;
    
            case 'DELETE':
                
            break;

            default:
                //404 status
                header("HTTP/1.1 404 Not Found");
            break;

        }
    ?>


</body>
</html>