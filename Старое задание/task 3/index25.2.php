<?php 
	interface techiceInterface 
{
  public function forward();
  public function backward();
  public function abilityType();
}

abstract class techice implements techiceInterface 
{
  public $forward = 'Полный вперед';
  public $backward = 'Полный назад';
  public $ability;
  public function forward()
  {
  	echo $this->forward;
  }
  public function backward()
  {
  	echo $this->backward;
  }
  public function abilityType() 
  {
  	echo $this->ability;
  }
}
  
class auto extends techice
{
	public $ability = "Закись азота вперед!";
}

class tank extends techice
{
  public $ability = "Огонь со всех орудий!";
}

class specialTech extends techice
{
	public $ability = "Удар ковшом!!!";
}

$machine= new auto();
$machine2= new tank();
$machine3= new specialTech();

function testMachine($machine)
	{
		$machine->forward(); echo ' и ';
		$machine->abilityType();echo '<br>';
	}
 testMachine($machine);
 testMachine($machine2);
 testMachine($machine3);
 ?>