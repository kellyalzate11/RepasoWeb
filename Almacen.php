<?php
    
    $color = "rojo";
    $precio = 35000;
    
    $descuento = 0;
    $total = 0;

    if ($color == "rojo" ){$descuento = ($precio / 100) * 0.5;
        $total = $precio - $descuento;}
        else if (color == "verde"){$descuento = ($precio / 100) * 0.2;
            $total = $precio - $descuento;}
            else if (color == "amarillo"){$descuento = ($precio / 100) * 0.6;
                $total = $precio - $descuento;}
                else if (color == "dos colores"){$descuento = ($precio / 100) * 0.10;
                    $total = $precio - $descuento;}

                

                echo "precio = " . $precio . "<br>";
                echo "descuento = " . $descuento . "<br>";
                echo "total = " . $total . "<br>";
               
               
               ?>