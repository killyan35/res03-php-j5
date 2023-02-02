<?php 
$host = "db.3wa.io";
$port = "3306";
$dbname = "kilyangerard_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "kilyangerard";
$password = "e17f39e5cb4de95dba99a2edd6835ab4";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
require './User.php';


$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];
$user1 = new User ($user["firstName"],$user["lastName"],$user["email"]);


$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query->execute();
$users1 = $query->fetch(PDO::FETCH_ASSOC);

$user2 = new User ($users1["first_name"],$users1["last_name"],$users1["email"]);

$user2->setId($users1["id"]);





$query2 = $db->prepare('SELECT * FROM users');
$query2->execute();
$users2 = $query2->fetchAll(PDO::FETCH_ASSOC);

$newusers = [];
foreach ($users2 as $user4)
{
    $usertoAdd = new User ($user4["first_name"],$user4["last_name"],$user4["email"]);
    
    $usertoAdd->setId($user4["id"]);
    $newusers[] = $usertoAdd;
}
var_dump($db);





$query = $db->prepare('INSERT INTO users VALUES (null , :value1, :value2, :value3)');
$parameters = [
    'value1' => $user1->getFirstname(),
    'value2' => $user1->getLastName(),
    'value3' => $user1->getEmail()
    ];
$query->execute($parameters);


var_dump($db);
?>