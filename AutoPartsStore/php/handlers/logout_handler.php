<?php
session_start();
session_destroy();
header("Location: ../AutoPartsStore.php");
