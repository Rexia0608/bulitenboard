<?php
    require ('connection.php');
    session_start();

    
    $errors = array();
    $announcement = array();

    if(empty($_POST['subject-info']))
    {
        $errors[] = "Subject are empty please provide the subject for this anouncement.";
    }
    
    if(empty($_POST['details-info']))
    {
        $errors[] = "Details are empty please provide the informaton for this anouncement.";
    }
    
    if(strlen($_POST['subject-info']) < 8 || strlen($_POST['subject-info']) > 50 )
    {
        $errors[] = "Subject should cointain at least 8 character and not more than 50 character.";
    }
    
    if(strlen($_POST['details-info']) < 8 || strlen($_POST['details-info']) > 255)
    {
        $errors[] = "Details should not too. Kindly provide an appropriate information";
    }

    if(is_numeric($_POST['details-info']) || is_numeric($_POST['subject-info']))
    {
        $errors[] = "Your announcement contains number and it's not allowed please right it in a word instead.";
    }
    
    if(!empty($errors))
    {   
        $_SESSION['anouncement'] = array();
        $_SESSION['messages_errors'] = $errors;
        header('Location: index.php');
    }

    if(empty($errors))
    {   
        $_SESSION['messages_errors'] = array();
        header('Location: index.php');
        $query = "INSERT INTO `anouncement_table`(`subject`, `details`, `created_at`) VALUES ('{$_POST['subject-info']}','{$_POST['details-info']}', NOW())";
        if(run_mysql_query($query))
        {
            $announcement[] = "Anouncement already posted. Please visit the Bulletin Board View page to see the details.";
            $_SESSION['anouncement'] = $announcement;
        }
    }

    // ORDER BY created_at DESC not working 
    $query = "SELECT * FROM anouncement_table ORDER BY created_at DESC";
    $anouncement_table = fetch_all($query);

        if(fetch_all($query))
        {
            $_SESSION['anouncement_post'] = $anouncement_table;
            header('index.php');
        }
        
 
        
    
   
?>