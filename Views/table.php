<?php

$template = "";
// here we print the table for each hotel with its properties
foreach ($hotelsP as $hotel) {
    $template .= "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
};
?>

<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">
            <i class="fa-solid fa-hotel"></i>
            <span>
                Hotel
            </span>
            </th>
            <th scope="col">
            <i class="fa-solid fa-paragraph"></i>
                <span>
                    Descrizione
                </span>
            </th>
            <th scope="col">
             <i class="fa-solid fa-square-parking"></i>
                <span>
                    Posto auto
                </span>
            </th> 
            <th scope="col">
            <i class="fa-solid fa-check-to-slot"></i>
            <span>
                Valutazione
            </span>
            </th>
            <th scope="col">
            <i class="fa-solid fa-road-circle-check"></i>
            <span>
                Distanza dal centro
            </span>
            </th>
        </tr>
    </thead>
   
    <tbody>
    <?php echo $template ?>
    </tbody>
</div>

</table>