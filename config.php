<?php
$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if (strpos($url, 'localhost')) {
    $homeUrl = "http://localhost/anken/test/lp/";
    $imgUrl = $homeUrl . "/img/";
} elseif (strpos($url, 'sunplads-staging.com')) {
    $homeUrl = "https://sunplads-staging.com/test_up/osaka/fujijuken.co.jp/hinoki_lp/";
    $imgUrl = $homeUrl . "/img/";
} else {
    $homeUrl = "";
    $imgUrl = $homeUrl . "/img/";
}
