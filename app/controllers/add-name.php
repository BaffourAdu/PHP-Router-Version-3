<?php

App::get('database')->insert('users',[
    'username' => $_POST['name']
]);

redirect('');