<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7 Q1</title>
</head>
<body>
    <?php
        $name = "Elysa Cassandra Donald";
        $matric = "AI250078";
        $course = "Bachelor of Software Engineering";
        $year = 2;
        $address = "Kota Belud";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>