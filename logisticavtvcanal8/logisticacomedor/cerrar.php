<?php
session_start();
session_unset();
session_destroy();
header("Location:http://comedor.vtv.gov.ve/comidas/login/index.php");
