<?php

    $sql1 = "SELECT * FROM table WHERE f1 > 19;";
    $sql2 = "SELECT * FROM table WHERE f1 = 20;";


$sql = new query($sql1);

$r = $sql->isSubSet($sql2);

var_dump($r);


class query {

    private $sql;

    public $table;

    public $field;

    public $value;

    public $operator;

    public function __construct($sql){
        $this->sql = $sql;
        $this->parseSql();
    }

    public function parseSql(){
        if(preg_match("/FROM\W?(\w+)\W?WHERE\W?(\w+)\W?(=|>|>=|<=|<)\W?(\w+)/", $this->sql, $matches)){
            $this->table = $matches[1];
            $this->field = $matches[2];
            $this->value = $matches[4];
            $this->operator = $matches[3];
            return true;
        }
        return false;
    }

    public function isSubSet($sql2){
        $obj2 = new query($sql2);

        if($this->table != $obj2->table){
            return -2;
        }

        if($this->field != $obj2->field){
            return -3;
        }

        if($this->operator == $obj2->operator){
            #var_dump($this->operator, $this->value, $obj2->value);
            if($this->operator == "=" && $this->value == $obj2->value){
                return 0;
            }elseif($this->operator == ">" && $this->value <= $obj2->value){
                return 1;
            }elseif($this->operator == "<" && $this->value >= $obj2->value){
                return 1;
            }
        }elseif($obj2->operator == "="){
            if($this->operator == ">" && $this->value <= $obj2->value){
                return 1;
            }elseif($this->operator == "<" && $this->value >= $obj2->value){
                return 1;
            }
        }

        return -1;
    }

}
