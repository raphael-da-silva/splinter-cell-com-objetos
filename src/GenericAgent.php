<?php

namespace SplinterCellOOP;

use SplinterCellOOP\ThirdEchelonAgent;
use SplinterCellOOP\Weapon;

/**
 *
 * @author Raphael da Silva
 *
 */
class GenericAgent implements ThirdEchelonAgent
{

	private $weapon;

	public function __construct(
		Weapon $weapon
	){

		$this->weapon = $weapon;

	}

	public function actStealth()
	{

		$this->weapon->use();
		echo 'Act like some spy.';

	}

}