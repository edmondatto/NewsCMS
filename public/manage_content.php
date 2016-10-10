<?php
/**
 * Created by PhpStorm.
 * User: Edmond
 * Date: 10/6/2016
 * Time: 7:58 PM
 */
    require_once ('../includes/dbConnection.php');
    include ('../includes/layouts/header.php');
    require_once ('../includes/functions.php');



?>

<div id="main">
    <div id="navigation">
        <?php
            $subjectSet = findAllSubjects();
        ?>
        <ul class="subjects">
            <?php
                while ($subject = mysqli_fetch_assoc($subjectSet)){
            ?>
                    <li>
                    <?php
                    echo $subject["menu_name"];
                    ?>
                    <?php
                       $pageSet = findPagesForSubject($subject["id"]);
                    ?>
                       <ul class="pages">
                           <?php
                           while ($page = mysqli_fetch_assoc($pageSet)){
                           ?>
                           <li><?php echo $page["menu_name"]; ?></li>
                           <?php } ?>
                       </ul>
                    </li>
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
?>

