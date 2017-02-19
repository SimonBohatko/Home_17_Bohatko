<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Filled forms</title>
</head>
<body>
<h1>Таблиця даних, які заповнили юзери</h1>
<table border="2">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Family status</th>
        <th>Social status</th>
        <th>Address</th>
        <th>Activities</th>
        <th>Frequency</th>
        <th>Books</th>
        <th>Comments</th>
        <th>Position</th>
        <th>Comment</th>
        <th>Spam</th>
        <th>Complexity</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $conn = mysqli_connect("localhost", "root", "root", "form");
    $sql = "SELECT * FROM info;";
    $res = $conn->query($sql);
    if ($res) {
        while($row = $res->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['FirstName'] ?></td>
                <td><?= $row['Surname'] ?></td>
                <td><?= $row['Sex'] ?></td>
                <td><?= $row['Age'] ?></td>
                <td><?= $row['Birthday'] ?></td>
                <td><?= $row['FamilyStatus'] ?></td>
                <td><?= $row['SocialStatus'] ?></td>
                <td><?= $row['Address'] ?></td>
                <td><?= $row['Activities'] ?></td>
                <td><?= $row['Frequency'] ?></td>
                <td><?= $row['Books'] ?></td>
                <td><?= $row['Comments'] ?></td>
                <td><?= $row['Position'] ?></td>
                <td><?= $row['Comment'] ?></td>
                <td><?= $row['Spam'] ?></td>
                <td><?= $row['Complexity'] ?></td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
</body>
</html>