<?php

$_SESSION=[];
session_destroy();
header("Location:". site_url());
exit();