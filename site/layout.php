
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpofyKGjJUUq0cEj8SoG<\ctrl61>D6r4iY+IR+c5tdBG0uYJwl33GsXqO3+A1/nm==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../content/css/css.css">
    <!-- <script src="../../content/js.js"></script> -->
 </head>
<body>
    <div class="container">
        <?php require 'trang-chinh/head.php'?>
        <header>
            <canvas id="canvas" width="360px" height="200px"></canvas>
            <script src="../../content/js.js"></script>
            <ul>
                <section class="right"> <?php require 'trang-chinh/menu.php'?>
                <script src="../../content/js.js"></script>
            </section>
            </ul>
        </header>
        <div class="search">
            <?php require 'trang-chinh/search.php';?>
        </div>
        <main class="row">
            <article class="col-sm-9">
            <div class="row">
                <?php require  $VIEW_NAME;?>
            </div>
            <h1 class="header" style="width: 400px; padding:3px; font-size: 28px">Sản phẩm được yêu thích nhất</h1>
            <div class="row">
                <?php require "trang-chinh/top10.php"?>
            </div>
            </article>
            <aside class="col-sm-3">
                <?php require "trang-chinh/danh-muc.php"?>
                <?php require "trang-chinh/hang-moi-ve.php"?>           
            </aside>
        </main>
        <footer></footer>
    </div>

</body>
</html>