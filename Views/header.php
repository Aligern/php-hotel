<!-- here we take the opening of our html and the body to be displayed into our index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>PHP Hotel</title>
</head>
<body>
    <header class="text-center bg-secondary text-white ">
        <h1>
            Hotels
        </h1>
    <div class="container d-flex justify-content-between pb-2">
        <form action="index.php" method="GET">
                <select name="stats">
                    <option value="all">
                        Tutti gli Hotel
                    </option>
                    <option value="0">
                        Solo senza Parcheggio
                    </option>
                    <option value="1">
                        Solo con Parcheggio
                    </option>
                </select>

                <select  action="index.php" name="stars" >
                    <option value="all">
                        Tutte le valutazioni
                    </option>
                    <option value="1">
                        1
                    </option>
                    <option value="2">
                        2
                    </option>
                    <option value="3">
                        3
                    </option>
                    <option value="4">
                        4
                    </option>
                    <option value="5">
                        5
                    </option>
                </select>

                <button type="submit" class="btn btn-danger">
                    Search
                </button>
            </form>
    </div>
    </header>