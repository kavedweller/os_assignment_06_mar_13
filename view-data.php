<?php
$csvFile = 'users.csv';
if (file_exists($csvFile))
{
    $users = array_map('str_getcsv', file($csvFile));
}
else
{
    echo('<h3 style="text-align: center">Error: CSV file not found.</h3>>');
}

?>


<!doctype html>
<html lang="en">
<head>
    <title>View csv data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-50 column-offset-25">

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
                        <td>
                            <img src="uploads/<?php echo $user[2]; ?>" alt="User's photo" style="width: 50px; height: 50px; object-fit: contain">
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>