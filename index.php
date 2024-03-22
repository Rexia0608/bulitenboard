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
        <title>Bulletin Board</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <main class="container d-flex justify-content-center align-items-center background">    
        <ol>
<?php   if(!empty($_SESSION['messages_errors']))
        {
            foreach($_SESSION['messages_errors'] as $err_messages)
            {?>
                <li class="text-light fs-5"><?=$err_messages?></li>
<?php       }   
        }   $_SESSION['messages_errors'] = array();
        if(!empty($_SESSION['anouncement']))
        { 
            foreach($_SESSION['anouncement'] as $anouncement)
            {?>
            <li class="text-light fs-5"><?=$anouncement?></li>         
<?php       }
        } $_SESSION['anouncement'] = array();
        ?>    
        </ol>
            <form class="col-md-8 rounded" action="process.php" method="post">
                <h1 class="d-block text-center text-light">Bulletin Board Entry</h1>

                <div class="form-group m-4 d-flex ">
                    <span class="input-group-text">Subject: </span>
                    <input name="subject-info" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="form-group m-4 d-flex">
                    <span class="input-group-text">Details: </span>
                    <textarea name="details-info" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
               
                <div id="form-footer" class="me-md-4 d-flex justify-content-end">
                    <input class="btn btn-success me-md-4"  type="submit" value="Add">
                    <a type="button" class="btn btn-primary" href="main.php">Skip</a>
                </div>
            </form>
               
        </main>
    </body>
</html>