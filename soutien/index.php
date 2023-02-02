<?php 
require './operations.php';
$operation = array 
(
    'nb1' => 0,
    'nb2' => 0,
    'calcul' => "",
);


if (isset($_Post['nb1']))
{
    $operation['nb1'] = $_POST['nb1'];
}
if (isset($_Post['nb2']))
{
    $operation['nb2'] = $_POST['nb2'];
}
if (isset($_Post['calcul']))
{
    $operation['calcul'] = $_POST['calcul'];
}
if ($operation['calcul'] === "add")
{
    $result = add($operation['nb1'], $operation['nb2']);
}

else if ($operation['calcul'] === "substract")
{
    $result = substract($operation['nb1'], $operation['nb2']);
}

else if ($operation['calcul'] === "multiply")
{
    $result = multiply($operation['nb1'], $operation['nb2']);
}

else if ($operation['calcul'] === "divide")
{
    if ($operation['nb1'] !== 0)
    {
        $result= NULL ;
    }
    else
    {
        $result = divide($operation['nb1'], $operation['nb2']);
    }
    
}

else if ($operation['calcul'] === "modulo")
{
    if ($operation['nb1'] === 0)
    {
        $result= NULL ;
    }
    else
    {
        $result = modulo($operation['nb1'], $operation['nb2']);
    }
}


var_dump($result);


require './calculator.phtml';
?>