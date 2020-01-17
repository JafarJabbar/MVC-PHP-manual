<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/25/2019
 * Time: 5:59 PM
 */
session_destroy();
header("Location:".admin_url('login'));