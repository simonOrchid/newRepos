<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Классы</title>
</head>
<body>
	<?php
	interface AbstractAnimal
	{
		public function getKingdom();
		public function getPawNumb();
		public function getTailNumb();
		public function getWingNumb();
	}
	class BaseAnimal implements AbstractAnimal
	{
		protected $kingdom;
		protected $pawNumb;
		protected $tailNumb;
		protected $wingNumb;

		public function __construct($pawAmount, $tailAmount, $wingAmount)
		{
			$this->pawNumb = $pawNumb;
			$this->tailNumb = $tailNumb;
			$this->wingNumb = $wingNumb;
		}
		public function getKingdom()
		{
			return $this->kingdom;
		}
		public function getPawNumb()
		{
			return $this->pawNumb;
		}
		public function getTailNumb()
		{
			return $this->tailNumb;
		}
		public function getWingNumb()
		{
			return $this->wingNumb;
		}
	}
	class Animal extends BaseAnimal
	{
		protected $kingdom = 'Animal';
	}
	class Fish extends BaseAnimal
	{
		protected $kingdom = 'Fish';
	}
	class Bird extends BaseAnimal
	{
		protected $kingdom = 'Bird';
	}
	class AnimalFact
	{
		public static function createAnimal($pawNumb, $wingNumb, $tailNumb)
		{
			return new Animal($pawNumb, $wingNumb, $tailNumb);
		}
		public static function createFish($pawNumb, $wingNumb, $tailNumb)
		{
			return new Fish($pawNumb, $wingNumb, $tailNumb);
		}
		public static function createBird($pawNumb, $wingNumb, $tailNumb)
		{
			return new Bird($pawNumb, $wingNumb, $tailNumb);
		}
	}
	$fishy = AnimalFact::createAnimal(2,2,2);
	echo $fishy->getKingdom();
	?>
</body>
</html>