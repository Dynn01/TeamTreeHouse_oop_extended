<?php

include "Tester.php";

class extendTest extends Tester
{
//    tes properti public, private, protected
    public function tesProperti()
    {
       echo $this->extend;
       echo $this->protect;
    //    echo $this->Test;
    }

}

$new=new extendTest();
$new->tesProperti();
echo $new->extend;
// $new->setTest("Hello");
// echo $new->getTest();
// $new->extend=" World";
// echo $new->extend;
// $new->setProtect("Protect");
// echo $new->getProtect();


