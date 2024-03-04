<?php

class Db
{
    protected $user;
    protected $localhost;
    protected $pass;
    protected $dbname;

    protected $dbh;

    public function __construct($user, $localhost, $pass, $dbname)
    {
        $this->dbh = new PDO('mysql:host=' . $this->localhost . ';dbname=' . $this->dbname . ';', $this->$user, $this->pass);
    }
}