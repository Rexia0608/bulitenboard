<?php
    session_start();
?>

</html>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Bulletin Board View</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <main class="container d-block background">
            <h1 class="d-block text-center text-light">Bulletin Board View</h1>
            <section class="h-100vh overflow-auto h-50 m-4 rounded">               

<?php       if(!empty($_SESSION['anouncement_post']))
            {?>
<?php           foreach($_SESSION['anouncement_post'] as $anouncement_post)
                { ?>
                <div class="sample-announce m-3">
                    <strong><?=$anouncement_post['created_at'] . "-" . $anouncement_post['subject']?></strong>
                    <p class="fs-5"><?=$anouncement_post['details']?></p>
                </div>
<?php           }
            }
?>
            </section>
        </main>
    </body>
</html>