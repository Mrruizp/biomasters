<?php

session_name("biomasters_medical");
session_start();

unset($_SESSION["s_usuario"]);
unset($_SESSION["s_email"]);
unset($_SESSION["s_doc_id"]);
unset($_SESSION["s_codigo_usuario"]);
unset($_SESSION["s_tipo"]);
unset($_SESSION["perfil"]);
unset($_SESSION["cargo"]);

session_destroy();

header("location:../vista/index.php");
