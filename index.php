<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
    <style>
        body{font-family: "Segoe UI", sans-serif;}
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="column column-50 column-offset-25">
            <h3>Input form</h3>
            <form action="model.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name"/>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="text" name="email"/>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password"/>
                </div>
                <div>

                    <label for="image" >Profile picture:</label>
                    <input type="file" name="image" accept="image/*" style="font-size: 16px;padding-bottom: 10px"/>
                    <br/>
                </div>
                <div>
                    <input type="submit" name="submit_btn" value="Submit" class="column column-50 column-offset-25">
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>