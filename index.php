<?php 
// here we include the model
include __DIR__ . "/Models/model.php";

if (!empty($_GET['stats']) || (isset($_GET['stats']) && $_GET['stats'] == 0)) {
    $stats = $_GET['stats'];
    $hotelsP = array_filter($hotels, function ($hotel) use ($stats) {
        return $hotel['parking'] == $stats || $stats == "all";
    });
} else {
    $hotelsP = $hotels;
}

// here we include the header
include __DIR__ ."/Views/header.php";
?>

<main>
    <!-- here we include the table -->
<?php 
    include __DIR__ . "/Views/table.php";
?>
</main>

<!-- here we include the footer -->
<?php 
include __DIR__ ."/Views/footer.php";
?>