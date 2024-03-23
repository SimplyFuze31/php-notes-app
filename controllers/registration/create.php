<?php

if ($_SESSION != null){
    redirect('/notes');
}



view('registration/create.view.php');