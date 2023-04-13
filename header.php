<?php wp_head() ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Visual Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__wrapper">

            <div class="header__logo">
                
                <img src="<?php echo get_template_directory_uri(); ?>./images/logo.png" alt="">
                <h1>Creative  <span id="spanLogo">Visual</span></h1>
            </div>
            <nav class="nav">
                <ul>
              <?php  wp_menu_li() ?>
                </ul>
                <div class="toggle__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
        
        
    </div>
</header>