
<?php
 class ComparableCircle extends Circle implements Comparable {
     public function __construct($name, $radius)
     {
         parent::__construct($name, $radius);
     }
     public function compareTo($objOther)
     {
         $circleOtherRadius = $objOther->getRadius();

         if ($this->getRadius() > $circleOtherRadius){
          return 1;
      }elseif ($this->getRadius()< $circleOtherRadius){
          return -1;
      }else{
          return 0;
      }
     }
 }