<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7 Q2</title>
</head>
<body>
    <?php
    
        $students = [
            [
                'name' => 'Elysa',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Ain',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Zara',
                'program' => 'BIT',
                'age' => 22
            ]
        ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>