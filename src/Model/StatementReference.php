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
 * A reference to an existing {@link StatementInterface Statement}.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StatementReference extends Object implements StatementReferenceInterface
{
    /**
     * @var string The id of the referenced Statement
     */
    protected $statementId;

    /**
     * {@inheritDoc}
     */
    public function setStatementId($statementId)
    {
        $this->statementId = $statementId;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatementId()
    {
        return $this->statementId;
    }
}
