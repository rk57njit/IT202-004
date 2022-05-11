<?php

function persistQueryString($page)
{
    $_GET["page"] = $page;
    //https://www.php.net/manual/en/function.http-build-query.php
    return http_build_query($_GET);
}