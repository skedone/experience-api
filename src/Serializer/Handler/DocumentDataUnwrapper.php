<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Serializer\Handler;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonSerializationVisitor;
use XApi\Model\Document;

/**
 * Unwraps the data of an xAPI document during the serialization process.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class DocumentDataUnwrapper implements SubscribingHandlerInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'XApi\Model\Document',
                'method' => 'unwrapData',
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'XApi\Model\ActivityProfileDocument',
                'method' => 'unwrapData',
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'XApi\Model\AgentProfileDocument',
                'method' => 'unwrapData',
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'XApi\Model\StateDocument',
                'method' => 'unwrapData',
            ),
        );
    }

    public function unwrapData(JsonSerializationVisitor $visitor, Document $document, array $type, Context $context)
    {
        $visitor->setRoot($document->getData());
    }
}
