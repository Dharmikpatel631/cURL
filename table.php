<?php
$header[] = "Content-Type: application/json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/php-rest-api/api-fetch-all.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);
// echo "<pre>";
$result = json_decode($result);

print_r($result);
curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <table class="table table-borderless">
        <thead>
            <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Students Name</th>
                <th scope="col">Student Age</th>
                <th scope="col">Student City</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $cut = 1;
            foreach ($result as $row) {
            ?>
                <tr>
                    <td><?php echo $cut;
                        $cut++; ?></td>
                    <td><?php echo $row->students_name ?></td>
                    <td><?php echo $row->age ?></td>
                    <td><?php echo $row->city ?></td>
                </tr>
            <?php
            }
            ?>


        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>