<?php

//search.php verwerking

if(isset($_GET['zoekterm']) && !empty($_GET['zoekterm'])){

    if(isset($_GET['soort'])){
        $soort = $_GET['soort'];

        switch ($soort) {
            case 'brand':
                $soort = 'brand';
                break;
            case 'model':
                $soort = 'model';
                break;
            case 'year':
                $soort = 'year'; 
                break;
            case 'license_plate':
                $soort = 'license_plate';
                break;
            case 'fuel_type':
                $soort = 'fuel_type';
                break;
            case 'seats':
                $soort = 'seats';
                break;
            case 'transmission':
                $soort = 'transmission';
                break;
            case 'price_per_day':
                $soort = 'price_per_day';
                break;
            case 'status':
                $soort = 'status';
                break;
            default:
                $soort = 'id';
                break;
        }
        $zoekterm = $_GET['zoekterm'];
        
        require 'database.php';
        
        $sql = "SELECT * FROM car WHERE $soort LIKE '$zoekterm%' ";
        $result = mysqli_query($conn, $sql);
        $cars = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


    if(!empty($cars)):
        foreach($cars as $c):
            echo "<div>";
            echo $c['brand'] . " " . $c['model'] . " " . $c['year'] . " " . $c['license_plate'] . " " . $c['fuel_type'] . " " . $c['seats'] . " " . $c['transmission'] . " " . $c['price_per_day'] . " " . $c['status'];
            echo "</div>";
        endforeach;
    endif;

}

//search advanced.php verwerking

if(isset($_GET['zoekveld']) && !empty($_GET['zoekveld'])){

    if(strlen($_GET['zoekveld']) > 2 ){

        $zoekveld = $_GET['zoekveld']; //max
        $orderby = "";

        if(isset($_GET['sorteer'])){

            $sorteer = $_GET['sorteer'];

            switch ($sorteer) {
                case 'brand':
                    $orderby =  "ORDER BY brand ASC";
                    break;
                case 'model':
                    $orderby =   "ORDER BY model ASC";
                    break;
                case 'year':
                    $orderby =  "ORDER BY year ASC";
                    break;
                case 'license_plate':
                    $orderby =  "ORDER BY license_plate ASC";
                    break;
                case 'fuel_type':
                    $orderby =  "ORDER BY fuel_type ASC";
                    break;
                case 'seats':
                    $orderby =  "ORDER BY seats ASC";
                    break;
                case 'transmission':
                    $orderby =  "ORDER BY transmission ASC";
                    break;
                case 'price_per_day':
                    $orderby =  "ORDER BY price_per_day ASC";
                    break;
                case 'status':
                    $orderby =  "ORDER BY status ASC";
                    break;
                
                default:
                    $orderby = "";
                    break;
            }

        }

            
    
        require 'database.php';
        $sql = "SELECT * FROM car WHERE 
                                    brand LIKE '%$zoekveld%' OR
                                    model LIKE '%$zoekveld%' OR
                                    year LIKE '%$zoekveld%' OR
                                    license_plate LIKE '%$zoekveld%' OR
                                    fuel_type LIKE '%$zoekveld%' OR
                                    seats LIKE '%$zoekveld%' OR
                                    transmission LIKE '%$zoekveld%' OR
                                    price_per_day LIKE '%$zoekveld%' OR
                                    status LIKE '%$zoekveld%' 
                                    $orderby
                                    ";

        $result = mysqli_query($conn, $sql);
        $cars = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>brand</th>
                <th>model</th>
                <th>year</th>
                <th>license plate</th>
                <th>fuel type</th>
                <th>seats</th>
                <th>transmission</th>
                <th>price per day</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($cars)): ?>
                <?php foreach($cars as $c): ?>
                    <tr>
                        <td><?php echo $c['brand']?></td>
                        <td><?php echo $c['model']?></td>
                        <td><?php echo $c['year']?></td>
                        <td><?php echo $c['license_plate']?></td>
                        <td><?php echo $c['fuel_type']?></td>
                        <td><?php echo $c['seats']?></td>
                        <td><?php echo $c['transmission']?></td>
                        <td><?php echo $c['price_per_day']?></td>
                        <td><?php echo $c['status']?></td>
                    </tr>
                <?php endforeach; ?>
               
            <?php endif; ?>
        </tbody>
    </table>


</body>
</html>