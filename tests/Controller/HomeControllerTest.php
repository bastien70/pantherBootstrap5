<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\PantherTestCase;
use Symfony\Component\Panther\WebTestAssertionsTrait;

class HomeControllerTest extends PantherTestCase
{
    use WebTestAssertionsTrait;

    protected Client|KernelBrowser|AbstractBrowser $client;

    protected function setUp(): void
    {
        parent::setUp();

        $client = static::createPantherClient(
            [],
            [],
            [],
        );

        $client->manage()->window()->maximize();
        $this->client = $client;
    }

    public function testBootstrap4(): void
    {
        $crawler = $this->client->request('GET', '/bootstrap4');
        $btn = $crawler->filter('.btn-primary');
        $btn->click();
        $this->expectNotToPerformAssertions();
    }

    public function testBootstrap5(): void
    {
        $crawler = $this->client->request('GET', '/bootstrap5');
        $btn = $crawler->filter('.btn-primary');
        $btn->click();
        $this->expectNotToPerformAssertions();
    }
}