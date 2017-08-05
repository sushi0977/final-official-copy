<?php

require __DIR__ . '/../../domain/chatroom.php';
class chatroomTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreateChatroom()
    {
        $obj = new \domain\chatroom();

        $this->assertClassHasAttribute('userlist','domain\chatroom','Missing Userlist');
        $this->assertClassHasAttribute('subject', 'domain\chatroom', 'missing subject');
        $this->assertClassHasAttribute('Messages', 'domain\chatroom', 'Missing Messages');
        $this->assertClassHasAttribute('uuid', 'domain\chatroom', 'missing uuid');
        $this->assertClassHasAttribute('owner', 'domain\chatroom', 'missing owner');



    }
}