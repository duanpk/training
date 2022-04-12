<?php

namespace Basic\Stack;

class Stack{
    private $stack = [];
    private $size = 0;
    
    public function push($value){
        $this->stack[] = $value;
        $this->size++;
    }
    
    public function pop(){
        if($this->isEmpty()){
            return null;
        }
        $this->size--;
        return array_pop($this->stack);
    }
    
    public function peek(){
        if($this->isEmpty()){
            return null;
        }
        return $this->stack[$this->size - 1];
    }
    
    public function isEmpty(){
        return $this->size == 0;
    }
    
    public function size(){
        return $this->size;
    }
}
