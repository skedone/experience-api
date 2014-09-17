<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Tests\Model;

use XApi\Model\Agent;
use XApi\Model\Statement;
use XApi\Model\Verb;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StatementTest extends \PHPUnit_Framework_TestCase
{
    public function testGetStatementReference()
    {
        $statement = new Statement();
        $statement->setId('e05aa883-acaf-40ad-bf54-02c8ce485fb0');
        $statement->setActor(new Agent());
        $statement->setVerb(new Verb());
        $statementReference = $statement->getStatementReference();

        $this->assertInstanceOf(
            '\XApi\Model\StatementReferenceInterface',
            $statementReference
        );
        $this->assertEquals(
            'e05aa883-acaf-40ad-bf54-02c8ce485fb0',
            $statementReference->getStatementId()
        );
    }

    public function testGetVoidStatement()
    {
        $statement = new Statement();
        $statement->setId('e05aa883-acaf-40ad-bf54-02c8ce485fb0');
        $actor = new Agent();
        $actor->setMbox('mailto:edoardo.biraghi@gmail.com');
        $voidStatement = $statement->getVoidStatement($actor);

        /** @var \XApi\Model\StatementReferenceInterface $statementReference */
        $statementReference = $voidStatement->getObject();

        $this->assertEquals($actor, $voidStatement->getActor());
        $this->assertTrue($voidStatement->getVerb()->isVoidVerb());
        $this->assertInstanceOf(
            '\XApi\Model\StatementReferenceInterface',
            $statementReference
        );
        $this->assertEquals(
            'e05aa883-acaf-40ad-bf54-02c8ce485fb0',
            $statementReference->getStatementId()
        );
    }
}
