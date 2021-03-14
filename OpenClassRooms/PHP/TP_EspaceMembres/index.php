<?php
require('./controller/frontend.php');


$insertUser = new Adduser;
$insertUser->addUser();

require('./view/frontend/signInView.php');
