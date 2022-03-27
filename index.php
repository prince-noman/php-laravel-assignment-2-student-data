<?php
include_once './student_data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container my-5">
    <div class="row">
        
    <?php foreach ($devs as $dev) : ?>
    
    <div class="col-md-4 col-sm-6 my-2">
            <div class="card">
                <img class="card-img" style="height: 300px; object-fit: cover;" src="<?php echo $dev['photo']?>">
                <div class="card-body">
                    <h2 class="card-title">
                    <?php echo $dev['name']?>
                    </h2>
                    <h5><?php echo $dev['skill']?></h5>
                    <div class="card-text">
                    <?php echo $dev['desc']?>
                    </div>
                </div>
            </div>
        </div>

<?php endforeach; ?>

    </div>
</div>

</body>
</html>