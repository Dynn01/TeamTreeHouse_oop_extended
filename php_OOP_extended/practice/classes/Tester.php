<?php

class Tester
{   //bisa di akses didalam class, global, maupun turunannya 
    public $extend="nama";
    // hanya bisa di akses didalam base class
    private $Test="Khoir";
    // hanya bisa di akses di base class dan turunannya
    protected $protect="Dinnnnnn";
    
   public function setTest($setTest)
   {
       $this->Test=$setTest;
   }

   public function getTest()
   {
       return $this->Test;
    }
    
}



