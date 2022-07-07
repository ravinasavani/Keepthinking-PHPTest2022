<?php
class Hierarchies
{
    public $locations = array(
        3 => array("Building1", 2),
        2 => array("Area1", 1),
        0 => array("Floor1", 3),
        1 => array("City1"),
        4 => array("Room1", 0),
    );
    public function findHieararchi($parent)
    {
        foreach ($this->locations as $key => $value) {
            if (count($value) == 2 && $value[1] == $parent) {
                echo " > " . $value[0];
                return $this->findHieararchi($key);
            }
        }
    }
}

$obj = new Hierarchies();

foreach ($obj->locations as $key => $value) {
    if (count($value) == 1) {
        echo $value[0];
        $obj->findHieararchi($key);
    }
}
