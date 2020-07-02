<?php

namespace SplinterCellOOP;

use SplinterCellOOP\Weapon;

/**
 *
 * @author Raphael da Silva
 *
 */
class NonLethalWeapon implements Weapon
{

	public function use()
	{

		echo 'Shoot with non lethal weapon.';

	}

}