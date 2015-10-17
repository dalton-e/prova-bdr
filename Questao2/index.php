<?php

const SITE_GOOGLE = "http://www.google.com";
const LOGGED_IN = "loggedin";

if (isSessaoPresenteEeLogada() || isCookiePresenteEeLogado()) {
    redirecionarParaGoogle();
}

function isSessaoPresenteEeLogada()
{
    return isset($_SESSION[LOGGED_IN]) && $_SESSION[LOGGED_IN] == true;
}

function isCookiePresenteEeLogado()
{
    return isset($_COOKIE[LOGGED_IN]) && $_COOKIE[LOGGED_IN] == true;
}

function redirecionarParaGoogle()
{
    header("Location: " . SITE_GOOGLE);
    exit();
}
