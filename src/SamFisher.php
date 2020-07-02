<?php

namespace SplinterCellOOP;

use SplinterCellOOP\ThirdEchelonAgent;
use SplinterCellOOP\FourthEchelonAgent;
use SplinterCellOOP\Goggles;

/**
 *
 * @author Raphael da Silva
 *
 */
class SamFisher implements ThirdEchelonAgent, FourthEchelonAgent
{

 	private $goggles;

 	public function __construct(
 		Goggles $goggles
 	){

 		$this->goggles = $goggles;

 	}

 	public function actStealth()
 	{

 		$this->goggles->enable();

 	}

}