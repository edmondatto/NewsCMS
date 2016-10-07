<?php
/**
 * Created by PhpStorm.
 * User: Edmond
 * Date: 10/6/2016
 * Time: 7:58 PM
 */
    $dbconnection = mysqli_connect('localhost','root','','widget_corp');

    if (mysqli_connect_errno()){
        die("Database Connecton failed: ".
            mysqli_connect_error().
            "(".mysqli_connect_errno().")");
    }

    include ('../includes/layouts/header.php');

    $query = "SELECT * FROM SUBJECTS WHERE visible = 1 ORDER BY position ASC";

    $result = mysqli_query($dbconnection, $query);

    if (!$result){
        die("Database Query failed.");
    }

    require_once ('../includes/functions.php');
?>



<div id="main">
    <div id="navigation">
        <ul>
        <?php
        while ($subject = mysqli_fetch_assoc($result)){
        ?>

        <li> <?php echo $subject["menu_name"]." (" .
                $subject["id"].")";
        ?> </li>
        <?php
        }
        ?>
        </ul>
    </div>

    <div id="page">
        <h2>Manage Content</h2>
        <p>Welcome to the Content Management Area</p>

    </div>
</div>

<?php
    mysqli_free_result($result);
    include ('../includes/layouts/footer.php');
    mysqli_close($dbconnection);
?>

