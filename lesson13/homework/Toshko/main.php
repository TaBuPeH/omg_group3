<?php
	function Debug($obj)
	{
		echo "<pre>";
		print_r($obj);
		echo "</pre>";
	}

	require_once("Classes/Heroes/vampire.php");
	require_once("Classes/Heroes/werewolf.php");
	require_once("Classes/Heroes/human.php");
	require_once("Classes/Heroes/OPM.php");

	require_once("fight.php");

	/*	Stats:
			- damage          -> health taken from enemy on a turn
			- armor           -> a fighter's armor needs to be destoyed to start damaging his health directly
			- mana            -> special attack uses mana
			- health          -> obvious
			- criticalChance  -> a chance for the attacker to deliver a stronger attack(with 50% more damage)
			- speed           -> the fighter with more speed than the other attacks first
			- evasion         -> a chane for the attack to be evaded(cancelled)
	*/

	/*	Items:
			- Zerzolar's Sword    -> damage(+20), critical chance(+15%)
			- Saitama's Cape   	  -> evasion(+40%)
			- Mordekaizer's Armor -> armor(+30), health(+50)
			- Gandalf's Robe      -> mana(+100)
			- Hermes' Boots       -> speed(+1)
	*/

	/*	Special Attacks:
			- Werewolf -> attacks two times for the turn
			- Vampire  -> delivers from 10 to 30 damage to his enemy and heals himself with that much
			- Human    -> heales himself with radnom number(from 1 to 30)
	*/

	/*	Enrage:
			- Werewolf -> doubles his damage when under 20% health
	*/

	/*	OPM:
			- OnePunchMan -> kills everyone with only one punch
							 Please don't make 2 OPM objects,
							 God is only one!
	*/		

	//do not create more objects when viewing my homework, I have created objects for all cases
	//you can change the stats if you want to
	//do not create two objects of class OnePunchMan or a bug will occur
	//name, damage, armor, mana, health, critical chance(0-100%), speed, evasion(0-100%), item(human only)
	$vamp1 = new Vampire("Vladimir", 15, 40, 100, 300, 10, 2, 25);
	$vamp2 = new Vampire("Dracula", 15, 40, 100, 300, 10, 2, 25);

	$wolf1 = new Werewolf("Moon Moon", Rand(10, 20), 10, 50, 150, 60, 1.5, 50);
	$wolf2 = new Werewolf("Snowflake", Rand(10, 20), 10, 50, 150, 60, 1.5, 50);

	$human1 = new Hooman("Tosho", 10, 15, 100, 100, 10, 2, 50, "Zerzolar's Blade");
	$human2 = new Hooman("Gosho", 10, 15, 100, 100, 10, 2, 50, "Saitama's Cape");
	$human3 = new Hooman("Pesho", 10, 15, 100, 100, 10, 2, 50, "Mordekaizer's Armor");
	$human4 = new Hooman("Ivan", 10, 15, 100, 100, 10, 2, 50, "Gandalf's Robe");
	$human5 = new Hooman("Boris", 10, 15, 100, 100, 10, 2, 50, "Hermes' Boots");
	$human6 = new Hooman("Dancho", 10, 15, 100, 100, 10, 2, 50, "");

	$opm = new OnePunchMan();

	Debug($vamp1);
	Debug($vamp2);

	Debug($wolf1);
	Debug($wolf2);

	Debug($human1);
	Debug($human2);
	Debug($human3);
	Debug($human4);
	Debug($human5);
	Debug($human6);

	Debug($opm);

	//fight(fighter1, fighter2)
	fight($wolf1, $human4);
?>