<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="tudo">
            <form method="post" action="#">
                <h1>Calcular LE para PVU</h1><br>
                <label for="num1">Colocar quantos PVUs você quer:</label>
                <input name="num1" type="text"/>
                <input class="buttoncalc" name="submit" type="submit" value="Calcular"/>
            </form>
        </div>

        <?php

            if(isset($_POST['submit']))
                {
                    if(is_numeric($_POST['num1']))
                        {
                            $le = $_POST['num1'] * 665;
                            $total = $le + $le * 0.05;
                        }
                    
                    echo " <script>alert('para {$_POST['num1']} PVUs, vai precisar de {$total} LE');</script>";
                }
            

        ?>
    </body>
</html>