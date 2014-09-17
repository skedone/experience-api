<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Serializer;

use JMS\Serializer\SerializerInterface;
use XApi\Model\ActorInterface;

/**
 * Serialize and deserialize {@link ActorInterface actors}.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class ActorSerializer implements ActorSerializerInterface
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * {@inheritDoc}
     */
    public function serializeActor(ActorInterface $actor)
    {
        return $this->serializer->serialize($actor, 'json');
    }

    /**
     * {@inheritDoc}
     */
    public function deserializeActor($data)
    {
        return $this->serializer->deserialize($data, 'XApi\Model\Actor', 'json');
    }
}
