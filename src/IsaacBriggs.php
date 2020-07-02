<?php

namespace SplinterCellOOP;

use SplinterCellOOP\FourthEchelonAgent;
use SplinterCellOOP\Weapon;
use SplinterCellOOP\Goggles;

/**
 *
 * @author Raphael da Silva
 *
 */
class IssacBriggs implements FourthEchelonAgent
{

	private $weapon;
	private $goggles;

	public function __construct(
		Weapon $weapon,
		Goggles $goggles
	){

		$this->weapon  = $weapon;
		$this->goggles = $goggles;

	}

	public function actStealth()
	{

		$this->goggles->enable();
		$this->weapon->use();

	}

}