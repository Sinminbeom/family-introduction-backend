<?php
    require_once __DIR__ . '/lib/mssql.php';
    require_once __DIR__ . '/lib/header.php';

    $boardseq= $_GET["BoardSeq"];

    //json 으로 변경
    $json = array(
        'BoardSeq' => $boardseq
    );

    //json -> string 으로 변경
    $json = json_encode($json);

    $result = mssql_dbconnet('CommentQuery',$json,'Query');

    echo $result;

?>