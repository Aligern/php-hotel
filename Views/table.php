<?php
$template = "";
foreach ($hotels as $hotel) {
    $template .= "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
};

?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
   <?php echo $template ?>
    <tbody>

    </tbody>
</table>