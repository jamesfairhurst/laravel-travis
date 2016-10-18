<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }

    /**
     * A basic database test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        $user = factory(App\User::class)->create();

        $this->seeInDatabase('users', [
            'email' => $user->email
        ]);
    }
}
