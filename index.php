<?php
include __DIR__ . "/Models/hotel.php";

// here we filter the hotels based on the stars and the parking
if (!empty($_GET['stats']) || (isset($_GET['stats']) && $_GET['stats'] == 0) && !empty($_GET['stars']) || (isset($_GET['stars']) && $_GET['stars'] == 0)) {
    $stats = $_GET['stats'];
    $stars = $_GET['stars'];
    $hotelsParks = array_filter($hotels, function ($hotel) use ($stats) {
        return $hotel['parking'] == $stats || $stats == "all";
    });
    $hotelStars = array_filter($hotelsParks, function ($hotel) use ($stars) {
        return $hotel['vote'] >= $stars || $stars == "all";
    });
} else {
    $hotelStars = $hotels;
}
// here we include the header
include __DIR__ ."/Views/header.php";
?>
<main class="vh-100">
    <!-- here we include the table -->
    <?php 
        include __DIR__ . "/Views/table.php";
    ?>
</main>
<!-- here we include the footer -->
<?php 
include __DIR__ ."/Views/footer.php";
?>