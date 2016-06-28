<?php

if (isset($_POST)) {
   $objForm = (object)$_POST;
}

print_r($objForm);
