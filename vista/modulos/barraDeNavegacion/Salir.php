<?php

if (isset($_SESSION["usuario"])) {
    session_destroy();
    header("location:Inicio");
}