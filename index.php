<?php
echo "Holiwis, hemos llegado a PHP";
print "Holiwis desde el print";

$nombre = "Diegue";
print($nombre);

//fifo (estructura de datos) -> el primero en entrar va a ser el primero en salir, es lo mismo que una Queue
class Queue{
    public $queue;
    function __construct()
    {
        $this->queue = array();
    }
    function enqueue($value){
        array_push($this->queue, $value);
    }
    function dequeue(){
        return array_shift($this->queue);
    }
}

$caseta1 = new Queue();
$caseta1->enqueue("rafa");
print_r($caseta1);


class Node{
    public $value;
    public $next;

    function __construct($data){
        $this->value = $data;
        $this->next = null;
    }
}
class LinkedList{
    public $head;
    function __construct()
    {
        $this->head = null;
    }
    function insert($data){
        $newNode = new Node($data);
        if($this->head === null){
        $this->head = $newNode;
        }
        else{
            //variable auxiliar
            $aux = $this->head;
            while($aux->next !== null){
                $aux = $aux->next;
            }
            $aux->next = $newNode;
        }
    }

    function delete($data){
        $aux = $this->head;
        if($this->head->value === $data){
            print("se encontro");
            $this->head = $this->head->next;
            return "encontrado";
        }
        $aux = $this->head;
        while($aux->next !== null || $aux->next->value !== $data){
            $aux = $aux->next;
        }
        print_r($aux);
    }
}
$listita = new LinkedList();
$listita->insert(3);
print_r($listita);
?>