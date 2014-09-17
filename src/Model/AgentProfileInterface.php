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
 * A {@link ProfileInterface Profile} related to an {@link AgentInterface Agent}.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
interface AgentProfileInterface extends ProfileInterface
{
    /**
     * Sets the agent.
     *
     * @param AgentInterface $agent The agent
     */
    public function setAgent(AgentInterface $agent);

    /**
     * Returns the agent.
     *
     * @return AgentInterface The agent
     */
    public function getAgent();
}
