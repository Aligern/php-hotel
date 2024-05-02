<?php

$template = "";
// here we print the table for each hotel with its properties
foreach ($hotels as $hotel) {
    $template .= "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
};

?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">
                Hotel
            </th>
            <th scope="col">
                Descrizione
            </th>
            <th scope="col">
                Posto auto
            </th>
            <th scope="col">
                Valutazione
            </th>
            <th scope="col">
                Distanza dal centro
            </th>
        </tr>
    </thead>
   <?php echo $template ?>
    <tbody>

    </tbody>
</table>