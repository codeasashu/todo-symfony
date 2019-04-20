<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TodoListControllerTest extends WebTestCase {

    /**
     * @test
     */
    public function list_is_success() {
        $client = static::createClient();
        $client->request('GET', '/api/todo');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }


    /**
     * @test
     */
    public function add_is_success() {
        $todoItem = ['task' => 'buy milk'];


        $client = static::createClient();
        $client->request('POST',
            '/api/todo',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode($todoItem)
        );
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals($todoItem, json_decode($client->getResponse()->getContent(), true));
    }

}
