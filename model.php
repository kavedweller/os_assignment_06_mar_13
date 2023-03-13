<?php
/*echo '<pre>';
print_r($_POST);
print_r($_FILES);
echo '</pre>';*/

if (isset($_POST['submit_btn']))
{
    if ($_POST['name'] && $_POST['password'] && $_FILES['image']['name'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && isset($_POST['password']) && isset($_FILES['image']['name']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $imageName = $_FILES['image']['name'];
        $photo = date("Y-m-d-H-i-s") . '-' . $_FILES['image']['name'];
        $tempLocation = $_FILES['image']['tmp_name'];
        $directory = 'uploads/';

        move_uploaded_file($tempLocation, $directory . $photo);

        $userData = array($name, $email, $photo);

        if (file_exists('users.csv'))
        {
            $dataFile = fopen('users.csv', 'a');
        }
        else
        {
            $dataFile = fopen('users.csv', 'w');
        }

        fputcsv($dataFile, $userData);

        session_start();
        setcookie('userName', $name);

        header("Location: view-data.php");
    }
    else
    {
        echo('<h2><span style="color: red">Error:</span> Some information is misssing or invalid.</h2>');
    }
}