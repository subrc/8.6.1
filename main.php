<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Страница-визитка </title>
    <link rel="stylesheet" href="style1.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

          <h1>  <?php echo $p;?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/SF01_body.png">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo '<strong>' . $name, ' ', $surname . '</strong><br>';
                          echo 'город ', '<strong>' . $city . '</strong>'; ?>
                    </p>

                    <p> Мне
                    <?php  echo $age;?>
                    лет </p>
                    <ol>
                        <li> Я научилися создавать переменные в PHP </li><br>
                        <li> Я изучил простые операции с ними </li><br>
                    </ol>
                </div>
            </div>

            <div class="knowledge">

                    <?php  include 'knowledge.inc.php'; ?>
                    <?php echo $a;?> <br>

                    <?php
                        $a = 100;
                        $b = 50;
                        $c = $a + $b;
                        echo "Сумма чисел " . $a . " и " . $b . " равна " . $c;
                    ?>   <br>
                     <?php echo $d;?>

            </div>

            <div class="article">
                <a href="https://www.youtube.com/watch?v=yt64FKQFcrE&t=2s" target="_blank"> О себе :)</a>
                <p></p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>

</body>
</html>
