<?php

namespace Stephannyfladja\projeto01;

class User extends Model{

protected $username;
protected $password;

function __construct ($user, $pass){//definindo o construtor 
    $this->username = $user;
    $this->password = password_hash($pass, PASSWORD_DEFAULT);
}
}