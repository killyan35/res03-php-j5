<?php 
class User {

    // private attribute
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    // public constructor
    public function __construct(string $firstName, string $lastName, string $email)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }

    // public setter
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    
    // public getter
    public function getFirstname() : string
    {
        return $this->firstName;
    }
    // public setter
    public function setFirstname(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    
    
    // public getter
    public function getLastName() : string
    {
        return $this->lastName;
    }
    // public setter
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    
    
    // public getter
    public function getEmail() : string
    {
        return $this->email;
    }

    // public setter
    public function setEmail(string $email) : void
    {
        $this->email;
    }

    // public method
    public function getFullName() : string
    {
        return ($this->firstName."".$this->lastName);
    }
}
?>