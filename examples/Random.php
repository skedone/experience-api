<?php

require_once '../vendor/autoload.php';

class Random {

	public static function create() {
		return array(
			'agent' => self::getAgent(),
			'verb' => self::getVerb(),
			'object' => self::getObject(),
			'timestamp' => self::getDate()
			);
	}

	public static function getAgent() {

		$names = array(
			'Edoardo Biraghi', 'Flip van Haaren', 'Maurice Schotel',
			'Ralf Nieuwenhuizen', 'Renee Van Steensel', 'Soraya Limahelu',
			'Timon van Spronsen', 'Erik Schamper', 'Chris Van Dorp', 'Raymond Jelierse'
			);

		return array(
			'name' => $names[\mt_rand(0, \count($names) -1)]
			);
	}

	public static function getVerb() {

		$verbs_id = array(
			0 => 'http://adlnet.gov/expapi/verbs/commented',
			1 => 'http://adlnet.gov/expapi/verbs/completed',
			2 => 'http://adlnet.gov/expapi/verbs/experienced',
			3 => 'http://adlnet.gov/expapi/verbs/downloaded',
			4 => 'http://adlnet.gov/expapi/verbs/liked',
			5 => 'http://adlnet.gov/expapi/verbs/opened',
			6 => 'http://adlnet.gov/expapi/verbs/replied',
			7 => 'http://adlnet.gov/expapi/verbs/created'
			);

		$display = array(
			0 => array("en-US" => "commented"),
			1 => array("en-US" => "completed"),
			2 => array("en-US" => "experienced"),
			3 => array("en-US" => "downloaded"),
			4 => array("en-US" => "liked"),
			5 => array("en-US" => "opened"),
			6 => array("en-US" => "replied"),
			7 => array("en-US" => "created")
			);

		$rand = \mt_rand(0, \count($verbs_id) - 1);

		return array(
			'id' => $verbs_id[$rand],
			'display' => $display[$rand]
			);
	}

	public static function getObject() {
		$ids = array(
			'https://projectcamp.us/#!/projects/stage',
			'https://projectcamp.us/#!/projects/n-team-nokia-jmp-project',
			'https://projectcamp.us/#!/projects/po2-studio-13-gnguyen1011',
			'https://projectcamp.us/#!/projects/po2-studio-14',
			'https://projectcamp.us/#!/projects/po2-studio-15-team-jmp-proj'
		);

		return array(
			'id' => $ids[\mt_rand(0, \count($ids) -1)]
		);
	}

	public static function getDate() {
		$date = new DateTime();
		$date->setTimestamp(\mt_rand(1409529600,1410885289));
		return $date;
	}
}