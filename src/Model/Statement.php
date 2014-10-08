<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Model;

/**
 * An Experience API {@link https://github.com/adlnet/xAPI-Spec/blob/master/xAPI.md#statement Statement}.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class Statement implements StatementInterface
{
    /**
     * The unique identifier
     * @var string
     */
    protected $id;

    /**
     * The {@link VerbInterface Verb}
     * @var \XApi\Model\VerbInterface $verb
     */
    protected $verb;

    /**
     * The {@ActorInterface Actor}
     * @var \XApi\Model\ActorInterface
     */
    protected $actor;

    /**
     * The {@link Object}
     * @var \XApi\Model\ObjectInterface
     */
    protected $object;

    /**
     * The {@link ActivityInterface Activity} {@link ResultInterface Result}
     * @var \XApi\Model\ResultInterface
     */
    protected $result;

    /**
     * The {@link Object}
     * @var \XApi\Model\ContextInterface
     */
    protected $context;

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setVerb(VerbInterface $verb)
    {
        $this->verb = $verb;
    }

    /**
     * {@inheritDoc}
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * {@inheritDoc}
     */
    public function setActor(ActorInterface $actor)
    {
        $this->actor = $actor;
    }

    /**
     * {@inheritDoc}
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * {@inheritDoc}
     */
    public function setObject(ObjectInterface $object)
    {
        $this->object = $object;
    }

    /**
     * {@inheritDoc}
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * {@inheritDoc}
     */
    public function setResult(ResultInterface $result)
    {
        $this->result = $result;
    }

    /**
     * {@inheritDoc}
     */
    public function setContext(ContextInterface $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatementReference()
    {
        $reference = new StatementReference();
        $reference->setStatementId($this->id);

        return $reference;
    }

    /**
     * {@inheritDoc}
     */
    public function getVoidStatement(ActorInterface $actor)
    {
        $voidStatement = new Statement();
        $voidStatement->setActor($actor);
        $voidStatement->setVerb(Verb::createVoidVerb());
        $statementReference = new StatementReference();
        $statementReference->setStatementId($this->id);
        $voidStatement->setObject($statementReference);

        return $voidStatement;
    }
}
