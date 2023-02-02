<?php 
class Student {

    // private attribute
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private array $grades;
    // public constructor
    public function __construct(string $firstName, $lastName, $email)
    {
        $this->id = $id;
        $id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->grades = [];
    }

    // public getter
    public function getId() : int
    {
        return $id->id;
    }

    // public setter
    public function setId(string $id) : int
    {
        $this->id = $id;
    }
    
    
    // public getter
    public function getFirstname() : string
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
    
    // public getter
    public function getGrades() : array
    {
        return $grades->grades;
    }

    // public setter
    public function setGrades(array $grades) : array
    {
        $this->grades = $grades;
    }
// getFullName qui ne prend pas de paramètrres et renvoie une string. La string de retour contient le nom complet du Student.
// addGrade qui prend un int en paramètre, le rajoute au tableau grades et renvoie le tableau grades.
// removeGrade qui prend un int en paramètre, le retire au tableau grades et renvoie le tableau grades.
// getAverage qui ne prend pas de paramètres et renvoie un float qui représente la moyenne des notes du Student.
   
    public function getFullName() : string
    {
        return ($this->firstName."".$this->lastName);
    }
    public function addGrade(int $i) : array
    {
        $this->grades[] = $i;
        return $this->grades;
    }
    public function removeGrade(int $note) : array
    {
        for ($i = 0; $i < count($this->grades); $i++)
        {
            if ($this->grades[$i] === $note)
            {
               unset($this->grades[$i]);   
               return $this->grades;
            }
           
        }
        return $this->grades;
        
        
    }
    public function getAverage() : float
    {
        if (count($this->grades === 0))
        {
            return NULL;
        }
        else
        {
          $averagenote = array_sum($this->grades) / count($this->grades);
          return $averagenote;
        }
    }
}


?>