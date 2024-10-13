
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpofyKGjJUUq0cEj8SoG<\ctrl61>D6r4iY+IR+c5tdBG0uYJwl33GsXqO3+A1/nm==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../content/css/css.css">
     <style>

     </style>
</head>

<body>
    <div class="container">
        <?php require '../../site/trang-chinh/head.php'?>
        <header>
            <!-- <img src="" width="300px" height="80px" alt=""> -->
            <canvas id="canvas" width="360px" height="200px"></canvas>
            <script src="../../content/js.js"></script>
            <ul>
                <section class="right"> <?php require '../../site/trang-chinh/menu.php'?></section>
            </ul>
            <section class="left">

            </section>
        </header>
        
        <div class="row">
            <article class="col-sm-9">
            <?php 
                if(isset($VIEW_NAME) && !empty($VIEW_NAME)) {
                    require $VIEW_NAME;
                } else {
                    echo "<div class='alert alert-danger'>View name not set or empty</div>";
                }
            ?>
            </article>
            <aside class="col-sm-3">
                <?php require 'menu.php'?>
            </aside>
            
        </div>
    </div>
</body>
</html>
