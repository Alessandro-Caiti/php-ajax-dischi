<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Php ajax Dischi</title>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha256-usTqAE1ywvdMtksWzdeWzD75MsfJN0h0U7y2NtZL3N0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>

        <header>
            <nav class="flex">
                <div class="logo">
                    <h1>PhP Ajax Dischi</h1>
                </div>
            </nav>
        </header>

        <main>
            <div class="cards-container flex">

                <!-- CARD DI BASE -->

                <!-- <div class="card">
                    <div class="album-cover">
                        <img src="https://omahpsd.com/wp-content/uploads/2013/11/free-psd-CD-Album-Cover-mockup.jpg" alt="">
                    </div>
                    <div class="album-info flex">
                        <h3>Titolo album</h3>
                        <p>Nome gruppo</p>
                    </div>
                </div> -->

                <!-- VERSIONE PHP DIRETTO -->

                <?php
                    // include 'data.php';
                 ?>
                <?php /* foreach ($albums as $key => $album) {?>
                    <div class="card">
                        <div class="album-cover">
                            <img src="<?php echo $album['cover']; ?>" alt="cover">
                        </div>
                        <div class="album-info flex">
                            <h3><?php echo $album['title']; ?></h3>
                            <p><?php echo $album['author']; ?></p>
                        </div>
                    </div>
                <?php } */ ?>

                <!-- VERSIONE AJAX JQUERY -->


            </div>

        </main>

        <footer>

        </footer>

        <script id="card-template" type="text/x-handlebars-template">
            <div class="card">
                <div class="album-cover">
                    <img src="{{cover}}" alt="cover">
                </div>
                <div class="album-info flex">
                    <h3>{{title}}</h3>
                    <p>{{author}}</p>
                </div>
            </div>
        </script>


        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
