<?php
function sent($Json) {
    if (is_string($Json)) {
        $Json = json_decode($Json);
    }
    $json = json_encode($Json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    $json = str_replace("\\/","/",$json);
    return $json;
}
function refuse($code,$msg) {
    $echoJson['code'] = $code;
    $echoJson['msg'] = $msg;
    $echoJson['data'] = null;
    $echoJson['time'] = time();
    echo sent($echoJson);
    exit;
}
function allow($msg,$data) {
    $echoJson['code'] = 200;
    $echoJson['msg'] = $msg;
    $echoJson['data'] = $data;
    $echoJson['time'] = time();
    echo sent($echoJson);
    return true;
}
?>