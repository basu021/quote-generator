<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS and some other links -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="./style.css">


    <title>Document</title>
</head>

<body>
<?php

include 'conn.php';

$show_data = "select quotes from quotes where id = '1'";

$query = mysqli_query($conn, $show_data);

$result = mysqli_fetch_assoc($query);

?>
    <h1 class="text"><?php echo $result['quotes'] ?></h1>
</body>

</html>



