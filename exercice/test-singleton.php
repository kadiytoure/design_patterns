<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower(class);
    require 
}