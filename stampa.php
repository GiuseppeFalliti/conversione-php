<!DOCTYPE html>
<html>
<body>
<?php
    echo $_POST;
    if(isset($_POST["number"]) && isset($_POST["type"])) {
        $number = $_POST["number"];
        $type = $_POST["type"];

       
        $converted_value = 0;

        
        switch ($type) {
            case "km":
                $converted_value = $number * 1000;
                break;
            case "m":
                $converted_value = $number;
                break;
            case "cm":
                $converted_value = $number / 100;
                break;
        }

        printf("Valore convertito: " . $converted_value);
    } 
?>
</body>
</html>
