<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Animal Knowledge Homepage</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="main.js" defer></script>
    </head>
    <body>
        <header>
            <h1>Animal Knowledge</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="survey.php">Survey</a></li>
                    <li><a href="data.php" class="active">Data</a></li>
                </ul>
            </nav>
        </header>

        <div style="height: 370px; width: 100%;">
            <canvas id="myChart"></canvas>
        </div>

        <footer>
            <p>&copy; 2024 Animal Knowledge; Created by Liam Zadoorian</p>
        </footer>
    </body>
</html>