<?php namespace joc;


/**
 * Created by PhpStorm.
 * User: spine
 * Date: 04/01/2016
 * Time: 19:10
 */

$dim = 4;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Board!</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<form action="/Controller/BoardController.php">
    <table border="1">

        <?php
        for ($i = 1; $i <= $dim; $i++) {
            ?>
            <tr></tr>
            <?php for ($j = 1; $j <= $dim; $j++) {
                ?>
                <td><input type="submit" value="<?php echo "$i, $j" ?>" id="<?php echo "$i, $j" ?> "
                           name="<?php echo "$i, $j" ?>" formmethod="post"></td>

            <?php }
        }
        ?>
    </table>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</body>
</html>
