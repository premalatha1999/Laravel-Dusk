<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('name','prem')
                    ->type('email','premaaaa22@gmail.com')
                    ->type('password','prem@123')
                    ->type('password_confirmation','prem@123')
                    ->press('Register')
                    ->assertPathIs('/home');
        });
    }
}
