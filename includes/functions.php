<?php
/**
 * Created by PhpStorm.
 * User: Ushber
 * Date: 10/6/2016
 * Time: 8:59 PM
 * @param $resultSet
 */

function confirmQuery ($resultSet) {
    if (!$resultSet){
        die('Database Query Failed!');
    }
}

/**
 * @return bool|mysqli_result
 */
function findAllSubjects(){
    global $dbconnection;
    $query = "SELECT * FROM SUBJECTS WHERE visible = 1 ORDER BY position ASC";
    $subjectSet = mysqli_query($dbconnection, $query);
    confirmQuery($subjectSet);
    return $subjectSet;
}

/**
 * @param $subjectID
 * @return bool|mysqli_result
 */
function findPagesForSubject($subjectID){
    global $dbconnection;
    $query2 = "SELECT * FROM pages WHERE visible = 1 AND pages.subject_id = {$subjectID} ORDER BY position ASC";
    $pageSet = mysqli_query($dbconnection, $query2);
    confirmQuery($pageSet);
    return $pageSet;
}