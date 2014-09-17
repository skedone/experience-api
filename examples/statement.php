<?php

require_once '../vendor/autoload.php';
require_once 'Random.php';

use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;

use XApi\Model\Statement;
use XApi\Model\Agent;
use XApi\Model\Verb;
use XApi\Model\Activity;
use XApi\Model\Definition;

use XApi\Serializer\StatementSerializer;

use XApi\Model\ActorInterface;
use XApi\Model\StatementInterface;
use XApi\Model\StatementResultInterface;

use XApi\Serializer\Serializer;

use XApi\Validator\Validator;

$statementSerializer = new StatementSerializer(Serializer::createSerializer());

$data = array(
	'agent' => array(
		'name' => 'Edoardo Biraghi',
		),
	'verb' => array(
		'id' => 'http://adlnet.gov/expapi/verbs/commented',
		'display' => array(
			"en-US" => "commented",
			'it-IT' => "ha commentato"
			)
		),
	'object' => array(
		'id' => 'https://projectcamp.us/#!/projects/stage',
		'definition' => array(
			'name' => array(
				'nl-NL' => 'Stage'
				),
			'description' => array(
				'nl-NL' => 'Mijn werkzaamheden en opdrachten tijdens mijn stage bij Shareworks!'
				)
			)
		),
	'timestamp' => new \DateTime()
	);
/*
for($i = 0; $i < 100; $i++) {
	$data = Random::create();

	$statement = new Statement();
	$agent = new Agent();

	$actor = new Agent();
	$actor->setName($data['agent']['name']);

// $verb = Verb::create('commented');
	$verb = new Verb();
	$verb->setId($data['verb']['id']);
	$verb->setDisplay($data['verb']['display']);

	$object = new Activity();
	$object->setId($data['object']['id']);
	$definition = new Definition();

	$statement->setId(Uuid::uuid4());
	$statement->setActor($actor);
	$statement->setVerb($verb);
	$statement->setObject($object);

// print_r($statement);

	$serializedStatements = $statementSerializer->serializeStatement($statement);


	$deserialized = \json_decode($serializedStatements, true);


	$client->addEvent('app_project', $deserialized);

	print "\nCreated " . $i . " events";
}
*/

$statement = new Statement();

$actor = new Agent();
$actor->setName($data['agent']['name']);

// $verb = Verb::create('commented');
$verb = new Verb();
$verb->setId($data['verb']['id']);
$verb->setDisplay($data['verb']['display']);

$object = new Activity();
$object->setId($data['object']['id']);

$statement->setId(Uuid::uuid4());
$statement->setActor($actor);
$statement->setVerb($verb);
$statement->setObject($object);

$validator = Validator::createValidator();
$test = $validator->validate($statement);
print $test;

$serializedStatements = $statementSerializer->serializeStatement($statement);
print $serializedStatements;
// print_r($statementSerializer->deserializeStatement($serializedStatements));
/*
$lsr = new LearningRecordStore();
$lsr->storeStatement($serializedStatement);
*/
