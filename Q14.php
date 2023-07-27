<?php
class myclass{
   private $var;
   protected $var1;
   public $x, $y, $z;
   public function __construct(){
      $this->var="private variable";
      $this->var1=TRUE;
      $this->x=100;
      $this->y=200;
      $this->z=300;
   }
   public function iterate(){
      foreach ($this as $key => $value) {
         print "$key => $value
";
      }
   }
}
$obj = new myclass();
foreach($obj as $key => $value) {
   print "$key => $value
";
}
echo "
";
$obj->iterate();
?>
