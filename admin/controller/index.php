<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 11:00 PM
 */
if (!permission('index','show')){
    permission_page();
    exit;
}
require admin_view('index');