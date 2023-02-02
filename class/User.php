<?php 
class User {

    // private attribute
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    // public constructor
    public function __construct(string $firstName, $lastName, $email)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    // public getter
    public function getId() : int
    {
        return $id->id;
    }

    // public setter
    public function setId(int $id) : int
    {
        $this->id = $id;
    }
    
    
    // public getter
    public function getFirstnameame() : string
    {
        return $firstName->firstName;
    }
    // public setter
    public function setFirstname(string $firstName) : string
    {
        $this->firstName = $firstName;
    }
    
    
    // public getter
    public function getLastName() : string
    {
        return $this->lastName;
    }
    // public setter
    public function setLastName(string $lastName) : string
    {
        $this->lastName = $lastName;
    }
    
    
    // public getter
    public function getEmail() : string
    {
        return $this->email;
    }

    // public setter
    public function setEmail(string $email) : string
    {
        $this->email = $email;
    }

    // public method
    public function getFullName() : string
    {
        return ($this->firstName."".$this->lastName);
    }
}
?>