<?php

namespace Backend\Modules\ContentBlocks\Tests\Action;

use Backend\Core\Tests\BackendWebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

class IndexTest extends BackendWebTestCase
{
    public function testAuthenticationIsNeeded(Client $client): void
    {
        $this->assertAuthenticationIsNeeded($client, '/private/en/content_blocks/index');
    }

    public function testIndexHasNoItems(Client $client): void
    {
        $this->login($client);

        $this->assertPageLoadedCorrectly(
            $client,
            '/private/en/content_blocks/index',
            [
                'There are no items yet.',
                'Add content block',
            ]
        );
    }
}
