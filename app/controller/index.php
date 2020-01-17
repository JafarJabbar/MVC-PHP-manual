<?php
/**
 * Created by PhpStorm.
 * User: Djeff
 * Date: 9/7/2019
 * Time: 10:22 PM
 */
 $meta=[
    'title'=> setting('title'),
    'description'=> setting('description'),
    'keywords'=> setting('keywords')
];


require view('index');