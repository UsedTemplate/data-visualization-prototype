<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-gray-100">

    <!-- Hero Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 min-h-[70vh] w-full bg-cover bg-center relative opacity-70 bg-overlay"
         style="background-image: url('headerBG2.jpg')">
        <div class="z-10 flex justify-center items-center px-4 sm:px-8 md:px-16">
            <div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold bg-gradient-to-r from-blue-200 to-blue-600 bg-clip-text text-transparent">
                    Ontdek Jouw Gezondheidswereld
                </h1>
                <p class="text-white mt-2 text-base sm:text-lg md:text-lg max-w-md">
                    Vergelijk je gezondheid met duizenden anderen en ontdek een magische
                    wereld die volledig is aangepast aan jouw unieke gezondheidsprofiel.
                </p>
            </div>
        </div>
        <div class="z-10 flex justify-center items-center px-4 sm:px-8 md:px-16">
            <div class="bg-gray-100 w-full max-w-md h-64 sm:h-80 md:h-96 rounded-lg"></div>
        </div>
        <a href="#next-section"
           class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white animate-bounce z-20">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
    </div>

    <!-- Steps Section -->
    <div id="next-section" class="mt-16 px-4 sm:px-8">
        <h1 class="flex justify-center text-3xl sm:text-4xl md:text-5xl font-bold">Zo werkt het</h1>
        <p class="flex text-base sm:text-lg md:text-xl justify-center text-[#8E8E8E]">
            In drie eenvoudige stappen naar jouw eigen avontuur
        </p>
    </div>

    <!-- Cards Section -->
    <div class="pt-12 p-4">
        <div class="mx-auto grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-7xl">
            <!-- Card 1 -->
            <div class="rounded-xl bg-white p-8 md:p-10 text-center hover:shadow-xl hover:scale-[1.02] transition duration-400">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-sky-500 shadow-sky-500/40 shadow-lg bg-linear-to-r from-[#4BE1FF] to-[#1CB0EA]">
                    <!-- SVG -->
                </div>
                <h1 class="text-sky-500 mb-3 text-3xl font-bold pt-3">01</h1>
                <h2 class="text-2xl font-semibold pb-2">Vul je gegevens in</h2>
                <p class="px-4 text-gray-500">Deel je gezondheidsgegevens veilig en anoniem. Van fysieke conditie tot leefstijl</p>
            </div>

            <!-- Card 2 -->
            <div class="rounded-xl bg-white p-8 md:p-10 text-center hover:shadow-xl hover:scale-[1.02] transition duration-400">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full shadow-lg bg-sky-500 shadow-sky-500/40 bg-linear-to-r from-[#4BE1FF] to-[#1CB0EA]">
                    <!-- SVG -->
                </div>
                <h1 class="text-sky-500 mb-3 text-3xl font-bold pt-3">02</h1>
                <h2 class="text-2xl font-semibold pb-2">Vergelijk met anderen</h2>
                <p class="px-4 text-gray-500">Zie hoe jouw gezondheid zich verhoudt tot duizenden anderen in jouw leeftijdsgroep</p>
            </div>

            <!-- Card 3 -->
            <div class="rounded-xl bg-white p-8 md:p-10 text-center hover:shadow-xl hover:scale-[1.02] transition duration-400">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full shadow-lg bg-sky-500 shadow-sky-500/40 bg-linear-to-r from-[#4BE1FF] to-[#1CB0EA]">
                    <!-- SVG -->
                </div>
                <h1 class="text-sky-500 pt-3 text-3xl font-bold">03</h1>
                <h2 class="text-2xl font-semibold pb-2">Ontdek je wereld</h2>
                <p class="px-4 text-gray-500">Stap binnen in een persoonlijke fantasiewereld die jouw gezondheidsreis weergeeft</p>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="relative w-full flex items-center justify-center py-16 bg-gray-100">
        <form method="POST" action="submit.php"
              class="form-container rounded-lg p-6 sm:p-8 md:p-12 lg:p-16 w-full max-w-4xl flex flex-col justify-center bg-white">
            <div class="form-content">
                <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold mb-2 text-center gradient-text leading-snug">Jouw gegevens</h1>
                <p class="text-base sm:text-lg md:text-lg text-[#0085CD] font-semibold mb-8 text-center">
                    Even een paar vragen over je gezondheid en leefstijl
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-6">
                    <!-- Age -->
                    <div class="flex flex-col items-start">
                        <label for="Leeftijd" class="mb-1 text-gray-700"><i class="fas fa-clock mr-2 text-[#0085CD]"></i>Leeftijd</label>
                        <input id="Leeftijd" name="Leeftijd" type="number" required min="0" max="120" placeholder="Uw leeftijd"
                               class="border border-gray-400 text-black bg-white px-2 py-2 rounded-lg w-full focus:border-black focus:outline-none hover:border-gray-600 transition-all duration-150" />
                    </div>
                    <!-- Height -->
                    <div class="flex flex-col items-start">
                        <label for="Lengte" class="mb-1 text-gray-700"><i class="fas fa-ruler-vertical mr-2 text-[#0085CD]"></i>Lengte (cm)</label>
                        <input id="Lengte" name="Lengte" type="number" required min="50" max="250" placeholder="Uw lengte"
                               class="border border-gray-400 text-black bg-white px-2 py-2 rounded-lg w-full focus:border-black focus:outline-none hover:border-gray-600 transition-all duration-150" />
                    </div>
                    <!-- Gender -->
                    <div class="flex flex-col items-start">
                        <label for="Gender" class="mb-1 text-gray-700"><i class="fas fa-venus-mars mr-2 text-[#0085CD]"></i>Gender</label>
                        <select id="Gender" name="Gender" required
                                class="border border-gray-400 text-black bg-white px-2 py-2 rounded-lg w-full focus:border-black focus:outline-none hover:border-gray-600 transition-all duration-150">
                            <option value="" disabled selected>Selecteer uw gender</option>
                            <option value="man">Man</option>
                            <option value="vrouw">Vrouw</option>
                        </select>
                    </div>
                    <!-- Gewicht -->
                    <div class="flex flex-col items-start">
                        <label for="Gewicht" class="mb-1 text-gray-700"><i class="fas fa-balance-scale mr-2 text-[#0085CD]"></i>Gewicht (kg)</label>
                        <input id="Gewicht" name="Gewicht" type="number" required min="20" max="300" placeholder="Uw gewicht"
                               class="border border-gray-400 text-black bg-white px-2 py-2 rounded-lg w-full focus:border-black focus:outline-none hover:border-gray-600 transition-all duration-150" />
                    </div>
                    <!-- Depressief -->
                    <div class="flex flex-col items-start">
                        <label for="Depressief" class="mb-1 text-gray-700"><i class="fas fa-cloud-rain mr-2 text-[#0085CD]"></i>Heeft u depressie</label>
                        <select id="Depressief" name="Depressief" required
                                class="border border-gray-400 text-black bg-white px-2 py-2 rounded-lg w-full focus:border-black focus:outline-none hover:border-gray-600 transition-all duration-150">
                            <option value="" disabled selected>Selecteer ja of nee</option>
                            <option value="ja">Ja</option>
                            <option value="nee">Nee</option>
                        </select>
                    </div>
                    <!-- Burnout -->
                    <div class="flex flex-col items-start">
                        <label for="Burnout" class="mb-1 text-gray-700"><i class="fas fa-fire mr-2 text-[#0085CD]"></i>Heeft u een burnout</label>
                        <select id="Burnout" name="Burnout" required
                                class="border border-gray-400 text-black bg-white px-2 py-2 rounded-lg w-full focus:border-black focus:outline-none hover:border-gray-600 transition-all duration-150">
                            <option value="" disabled selected>Selecteer ja of nee</option>
                            <option value="ja">Ja</option>
                            <option value="nee">Nee</option>
                        </select>
                    </div>
                </div>

                <!-- Alcohol -->
                <div class="mt-6 flex flex-col items-start w-full">
                    <label for="Alcohol" class="mb-1 text-gray-700"><i class="fas fa-wine-glass mr-2 text-[#0085CD]"></i>Alcohol inname (aantal glazen per week)</label>
                    <input id="Alcohol" name="Alcohol" type="number" required placeholder="Aantal glazen per week"
                           class="border border-gray-400 text-black bg-white px-2 py-2 rounded-lg w-full focus:border-black focus:outline-none hover:border-gray-600 transition-all duration-150" />
                </div>

                <button type="submit"
                        class="mt-10 w-full py-3 text-white text-xl font-bold rounded-lg transform transition-all duration-150 hover:scale-[1.02] hover:shadow-md"
                        style="background: #00B7FF;">
                    Bekijk resultaat
                </button>
            </div>
        </form>
    </div>

    <!-- PHP Results Section -->
    <?php
    $db = new SQLite3('data.db');
    $lastUser = $db->query("SELECT * FROM users ORDER BY id DESC LIMIT 1")->fetchArray(SQLITE3_ASSOC);
    $json = json_decode(file_get_contents('data.json'), true);
    $users = $json['users'];

    if ($lastUser) {
        $gender = strtoupper($lastUser['gender']);
        $ageMin = $lastUser['age'] - 3;
        $ageMax = $lastUser['age'] + 3;

        $filteredUsers = array_filter($users, fn($u) => strtoupper($u['gender']) === $gender && $u['age'] >= $ageMin && $u['age'] <= $ageMax);

        if (count($filteredUsers) === 0) $filteredUsers = $users;

        $fields = ['age', 'height', 'weight', 'alcohol_intake', 'depression', 'burnout'];
        $averages = [];
        foreach ($fields as $f) {
            $total = array_sum(array_column($filteredUsers, $f));
            $averages[$f] = $total / count($filteredUsers);
        }

        $labels = ['Leeftijd' => 'age', 'Lengte' => 'height', 'Gewicht' => 'weight', 'Alcohol' => 'alcohol_intake', 'Depressie' => 'depression', 'Burnout' => 'burnout'];

        echo '<div class="max-w-7xl mx-auto mt-12 grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">';

        foreach ($labels as $label => $key) {
            $userValue = $lastUser[$key];
            $avgValue = $averages[$key];
            $values = array_column($filteredUsers, $key);
            $min = min($values);
            $max = max($values);
            $percent = $max - $min ? ($userValue - $min) / ($max - $min) * 100 : 0;
            $avgPercent = $max - $min ? ($avgValue - $min) / ($max - $min) * 100 : 0;

            echo '<div class="bg-white rounded-lg shadow p-4 w-full h-[200px] flex flex-col justify-between">';
            echo "<h3 class='font-semibold text-[#8E8E8E] text-lg mb-2'>$label</h3>";
            echo "<h3 class='font-semibold text-lg mb-2'>$userValue</h3>";
            echo '<div class="flex-1 flex items-center">';
            echo '<div class="w-full bg-gray-200 h-4 rounded-full relative">';
            echo "<div class='bg-blue-500 h-4 rounded-full' style='width:$percent%'></div>";
            echo "<div style='position:absolute; top:0; left:$avgPercent%; width:2px; height:100%; background:red;'></div>";
            echo '</div>';
            echo '</div>';
            echo '<div class="flex justify-between text-xs"><span>' . $min . '</span><span>' . $max . '</span></div>';
            echo '</div>';
        }

        echo '</div>';
    }
    ?>

</body>
</html>
