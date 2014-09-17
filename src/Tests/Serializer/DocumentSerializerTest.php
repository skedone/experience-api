<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Tests\Serializer;

use XApi\Serializer\DocumentSerializer;
use XApi\Tests\Fixtures\DocumentJsonFixtures;
use Xabbuh\XApi\DataFixtures\DocumentFixtures;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class DocumentSerializerTest extends AbstractSerializerTest
{
    /**
     * @var DocumentSerializer
     */
    private $documentSerializer;

    protected function setUp()
    {
        parent::setUp();
        $this->documentSerializer = new DocumentSerializer($this->serializer);
    }

    public function testDeserializeActivityProfileDocument()
    {
        /** @var \Xabbuh\XApi\Model\Document $document */
        $document = $this->documentSerializer->deserializeActivityProfileDocument(DocumentJsonFixtures::getDocument());

        $this->assertInstanceOf(
            '\Xabbuh\XApi\Model\ActivityProfileDocumentInterface',
            $document
        );
        $this->assertEquals('foo', $document['x']);
        $this->assertEquals('bar', $document['y']);
    }

    public function testDeserializeAgentProfileDocument()
    {
        /** @var \Xabbuh\XApi\Model\Document $document */
        $document = $this->documentSerializer->deserializeAgentProfileDocument(DocumentJsonFixtures::getDocument());

        $this->assertInstanceOf(
            '\Xabbuh\XApi\Model\AgentProfileDocumentInterface',
            $document
        );
        $this->assertEquals('foo', $document['x']);
        $this->assertEquals('bar', $document['y']);
    }

    public function testDeserializeStateDocument()
    {
        /** @var \Xabbuh\XApi\Model\Document $document */
        $document = $this->documentSerializer->deserializeStateDocument(DocumentJsonFixtures::getDocument());

        $this->assertInstanceOf(
            '\Xabbuh\XApi\Model\StateDocumentInterface',
            $document
        );
        $this->assertEquals('foo', $document['x']);
        $this->assertEquals('bar', $document['y']);
    }

    public function testSerializeDocument()
    {
        $document = DocumentFixtures::getDocument();

        $this->assertJsonEquals(
            DocumentJsonFixtures::getDocument(),
            $this->documentSerializer->serializeDocument($document)
        );
    }

    public function testSerializeActivityProfileDocument()
    {
        $document = DocumentFixtures::getActivityProfileDocument();

        $this->assertJsonEquals(
            DocumentJsonFixtures::getDocument(),
            $this->documentSerializer->serializeDocument($document)
        );
    }

    public function testSerializeAgentProfileDocument()
    {
        $document = DocumentFixtures::getAgentProfileDocument();

        $this->assertJsonEquals(
            DocumentJsonFixtures::getDocument(),
            $this->documentSerializer->serializeDocument($document)
        );
    }

    public function testSerializeStateDocument()
    {
        $document = DocumentFixtures::getStateDocument();

        $this->assertJsonEquals(
            DocumentJsonFixtures::getDocument(),
            $this->documentSerializer->serializeDocument($document)
        );
    }
}
