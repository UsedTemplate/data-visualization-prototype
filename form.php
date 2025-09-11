<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex justify-center">
      <form class="form flex flex-col w-32" method="POST" action="submit.php">
        <label for="Leeftijd">Leeftijd</label>
        <input id="Leeftijd" name="Leeftijd" type="number">

        <label for="Lengte">Lengte</label>
        <input id="Lengte" name="Lengte" type="number">

        <label for="Gender">Gender</label>
        <input id="Gender" name="Gender" type="text">

        <label for="Gewicht">Gewicht</label>
        <input id="Gewicht" name="Gewicht" type="text">

        <label for="Depressief">Depressief</label>
        <input id="Depressief" name="Depressief" type="text">

        <label for="Burnout">Burnout</label>
        <input id="Burnout" name="Burnout" type="text">

        <label for="Alcohol">Alcohol</label>
        <input id="Alcohol" name="Alcohol" type="text">

        <button type="submit" class="mt-2 p-2 bg-blue-500 text-white rounded">Save</button>
      </form>
    </div>

    <?php
        $str = file_get_contents('data.json');
        $json = json_decode($str, true);

        $totaalLeeftijd = 0;
        $totaalLengte = 0;
        $totaalGewicht = 0;
        $alcoholIname = 0;
        $totaalBurnout = 0;
        $totaalGender = 0;

        foreach ($json['users'] as $user) {
            $totaalLeeftijd += $user['age'];
            $totaalLengte += $user['height'];
            $alcoholIname += $user['alchohol_intake'];
        }

        echo "leeftijd: " . $totaalLeeftijd . PHP_EOL;
        echo "lengte: " . $totaalLengte . PHP_EOL;
        echo "aclohol: " . $alcoholIname . PHP_EOL;
    ?>

</body>
</html>