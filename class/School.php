<?php 
// Une School a 3 attributs privés :

// id qui est un int
// teacher qui est un User
// students qui est un tableau de Student
// Son constructeur prend teacher en paramètre et l'initialise. Il initialise students comme un tableau vide et id avec la valeur -1.

// Tous ses attributs ont des getters et des setters.

// School a en plus 2 méthodes publiques :

class School {

    // private attribute
    private int $id;
    private User $teacher;
    private array $students;

    // public constructor
    public function __construct(User $teacher)
    {
        $this->id = -1;
        $this->teacher = $teacher;
        $this->students = [];
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
    public function getTeacher() : User
    {
        return $teacher->teacher;
    }
    // public setter
    public function setTeacher(User $teacher) : User
    {
        $this->teacher = $teacher;
    }
    
    
    // public getter
    public function getStudents() : array
    {
        return $this->students;
    }
    // public setter
    public function setStudents(array $students) : array
    {
        $this->students = $students;
    }
    
    
    
// addStudent qui prend un Student en paramètre et l'ajoute au tableau des students et renvoie le tableau des students
// removeStudent qui prend un Student en paramètre et le retire du tableau des students et renvoie le tableau des students
    public function addStudents(Student $students) : array
    {
        $this->students[] = $students;
        return $this->students;
    }
    
    
    public function removeStudents(Student $students) : array
    {
         foreach($this->students as $key=>$stud){
            
            if($stud->getId() === $student->getId()){
                
                unset($this->students[$key]);
                
            }
            
        }
        return $this->students;
        
        
    }
}
?>