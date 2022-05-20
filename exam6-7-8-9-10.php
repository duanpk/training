<?php
abstract class User
{
    private $firstName;
    private $lastName;
    protected $username;

    public function __construct(...$args)
    {
        $this->setFirstName($args[0] ?? 'John');
        $this->setLastName($args[1] ?? 'Doe');
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function hello()
    {
        echo "hello, " . $this->getFirstName() . "\n";
    }

    public function __destruct()
    {
        echo "say goodbye to " . $this->getFirstName() . "\n";
    }

    abstract public function stateYourRole();
}

class Admin extends User
{
    public function __construct()
    {
        // parent::__construct();
        echo "Admin constructor\n";
    }
    public function stateYourRole()
    {
        echo "I am an admin\n";
    }
    public function hello()
    {
        parent::hello();
        echo " and I am an admin\n";
    }
    public function __destruct()
    {
        echo "Admin destructor\n";
    }
}

// $obj = new User();
// $obj->hello();

$adm = new Admin();
$adm->hello();
