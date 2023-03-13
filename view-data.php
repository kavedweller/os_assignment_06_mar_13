<?php
$users = array_map('str_getcsv', file('users.csv'));
?>


<!doctype html>
<html lang="en">
<head>
    <title>View csv data</title>
</head>
<body>


<h2>Users Information:</h2>
<!--  Display users information from CSV file    -->
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Photo</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user)
    {
        ?>
        <tr>

            <td><?php echo $user[0]; ?></td>
            <td><?php echo $user[1]; ?></td>
            <td><img src="uploads/<?php echo $user[2]; ?>" alt="User's photo" height="50"></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

</body>
</html>