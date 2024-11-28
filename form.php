<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz z wynikami</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <h1>Lorem ipsum dolor</h1>
        <a href="index.html">
            <button>Back</button>
        </a>
    </header>
    <form action="" method="POST">
        <label for="firstName">Imię:</label>
        <input type="text" id="firstName" name="firstName" required><br><br>

        <label for="lastName">Nazwisko:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>

        <label for="street">Ulica:</label>
        <input type="text" id="street" name="street"><br><br>

        <label for="house">Dom:</label>
        <input type="text" id="house" name="house"><br><br>

        <label for="apartment">Mieszkanie:</label>
        <input type="text" id="apartment" name="apartment"><br><br>

        <label for="city">Miasto:</label>
        <input type="text" id="city" name="city"><br><br>

        <label for="birthDate">Data urodzenia:</label>
        <input type="date" id="birthDate" name="birthDate"><br><br>

        <label for="phone">Telefon:</label>
        <input type="tel" id="phone" name="phone"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="gender">Płeć:</label>
        <select id="gender" name="gender">
            <option value="male">Mężczyzna</option>
            <option value="female">Kobieta</option>
            <option value="other">Inna</option>
        </select><br><br>

        <label for="driverLicense">Prawo jazdy:</label>
        <input type="text" id="driverLicense" name="driverLicense"><br><br>

        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="notes">Uwagi:</label>
        <textarea id="notes" name="notes"></textarea><br><br>

        <button type="submit">Wyślij</button>
    </form>

    <?php
    // Проверяем, была ли форма отправлена
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Получаем данные из формы
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $street = htmlspecialchars($_POST['street']);
        $house = htmlspecialchars($_POST['house']);
        $apartment = htmlspecialchars($_POST['apartment']);
        $city = htmlspecialchars($_POST['city']);
        $birthDate = htmlspecialchars($_POST['birthDate']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $gender = htmlspecialchars($_POST['gender']);
        $driverLicense = htmlspecialchars($_POST['driverLicense']);
        $notes = htmlspecialchars($_POST['notes']);

        // Отображаем данные
        echo "<div class='result'>
                <h2>Wprowadzone dane:</h2>
                <p><strong>Imię:</strong> $firstName</p>
                <p><strong>Nazwisko:</strong> $lastName</p>
                <p><strong>Ulica:</strong> $street</p>
                <p><strong>Dom:</strong> $house</p>
                <p><strong>Mieszkanie:</strong> $apartment</p>
                <p><strong>Miasto:</strong> $city</p>
                <p><strong>Data urodzenia:</strong> $birthDate</p>
                <p><strong>Telefon:</strong> $phone</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Płeć:</strong> $gender</p>
                <p><strong>Prawo jazdy:</strong> $driverLicense</p>
                <p><strong>Uwagi:</strong> $notes</p>
            </div>";
    }
    ?>
</body>
</html>
