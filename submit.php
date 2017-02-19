<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Form</title>
</head>
<body>
<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$sex = $_REQUEST['sex'];
if ($sex == 'male') {
    $genderWord = 'Male';
} else {
    $genderWord = 'Female';
}
$age = $_REQUEST['age'];
$gender = $_REQUEST['age2'];
if ($gender == 'young-men') {
    $gender2Word = 'Male';
} else {
    $gender2Word = 'Female';
}
$birthday = $_REQUEST['birth-date'];
$familyStatus = $_REQUEST['family'];
$socialStatus = $_REQUEST['status'];
$address = $_REQUEST['home'];
$activities = $_REQUEST['activities'];
$activity = '';
if (isset($activities)) {
    $activity = implode(', ', $activities);
};
$frequency = $_REQUEST['forms'];
$books = $_REQUEST['books'];
$comments = $_REQUEST['text'];
$multiple = $_REQUEST['pos'];
$multipleAsString = '';
if (isset($multiple)) {
    $multipleAsString = implode(', ', $multiple);
};
$comments2 = $_REQUEST['for-you'];
$spam = $_REQUEST['spam'];
$spamAsString = '';
if (isset($spam)) {
    $spamAsString = implode(', ', $spam);
}
$complexity = $_REQUEST['complexity'];
//Connection estaibilishment
$conn = mysqli_connect("localhost", "root", "root", "form");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $name);
$surname = mysqli_real_escape_string($conn, $surname);
$genderWord = mysqli_real_escape_string($conn, $genderWord);
$age = mysqli_real_escape_string($conn, $age);
$gender2Word = mysqli_real_escape_string($conn, $gender2Word);
$birthday = mysqli_real_escape_string($conn, $birthday);
$familyStatus = mysqli_real_escape_string($conn, $familyStatus);
$socialStatus = mysqli_real_escape_string($conn, $socialStatus);
$address = mysqli_real_escape_string($conn, $address);
$activity = mysqli_real_escape_string($conn, $activity);
$frequency = mysqli_real_escape_string($conn, $frequency);
$books = mysqli_real_escape_string($conn, $books);
$comments = mysqli_real_escape_string($conn, $comments);
$multipleAsString = mysqli_real_escape_string($conn, $multipleAsString);
$comments2 = mysqli_real_escape_string($conn, $comments2);
$spamAsString = mysqli_real_escape_string($conn, $spamAsString);
$complexity = mysqli_real_escape_string($conn, $complexity);
$sql = "INSERT INTO info(FirstName, Surname, Sex, Age, Birthday, FamilyStatus, SocialStatus, Address, Activities, 
Frequency, Books, Comments, Position, Comment, Spam, Complexity)" .
    "VALUES ('$name', '$surname', '$genderWord', '$age', '$birthday', '$familyStatus'," .
    "'$socialStatus', '$address', '$activity', '$frequency', '$books', '$comments', '$multipleAsString', '$comments2', '$spamAsString', '$complexity');";
//Sending check
$res = $conn->query($sql);
if ($res) {
    echo "Дані успішно додано в базу!";
} else {
    echo "Виникла помилка:" . $conn->error;
}
?>


<h1>Дякую, що заповнили нашу анкету!</h1>
<p>Перевірте, чи все вірно заповнено:</p>
<ul>
    <li>
        <strong>Ваше ім'я:</strong>
        <?php echo $name . " " . $surname; ?>
    </li>
    <li>
        <strong>Ваша стать:</strong>
        <?php
        if ($gender2Word != $genderWord) {
            echo 'Your gender does not match';
        } else {
            echo $genderWord;
        }
        ?>
    </li>
    <li>
        <strong>Ваш вік:</strong>
        <?php echo $age; ?>
    </li>
    <li>
        <strong>Ваш день народження:</strong>
        <?php echo $birthday; ?>
    </li>
    <li>
        <strong>Ваш сімейний стан:</strong>
        <?php echo $familyStatus; ?>
    </li>
    <li>
        <strong>Ваш соціальний статус:</strong>
        <?php echo $socialStatus; ?>
    </li>
    <li>
        <strong>Ваша домашня адреса:</strong>
        <?php echo $address; ?>
    </li>
    <li>
        <strong>На вихідних Ви:</strong>
        <?php echo $activity; ?>
    </li>
    <li>
        <strong>Ви вибрали частоту:</strong>
        <?php echo $frequency; ?>
    </li>
    <li>
        <strong>Ви прочитали книжок за все життя</strong>
        <?php echo $books; ?>
    </li>
    <li>
        <strong>Ваші коментарі:</strong>
    </li>
    <?php echo $comments; ?>
    <li>
        <strong>В прикладі з multiselect Ви вибрали:</strong>
        <?php echo $multipleAsString; ?>
    </li>
    <li>
        <strong>Ваше повідомлення:</strong>
        <?php echo $comments2; ?>
    </li>
    <li>
        <strong>Ви погодились на такі розсилки спаму:</strong>
        <?php echo $spamAsString; ?>
    </li>
    <li>
        <strong>Ви оцінили складність даного завдання як:</strong>
        <?php echo $complexity; ?>
    </li>
</ul>
<a href="index.html">Повернутися до форми</a>
</body>
</html>