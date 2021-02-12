<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthenticationTest extends DuskTestCase
{
    const FAILURE_MSG = 'These credentials do not match our records.';

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function login_success_as_admin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                ->assertSee('SIGN IN DIBAWAH')
                ->type('email', 'admin@admin.com')
                ->type('password', 'password')
                ->press('MASUK')
                ->assertPathIs('/admin')
                ->logout();
        });
    }

    public function login_failure_with_messages()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                ->assertSee('SIGN IN DIBAWAH')
                ->type('email', 'admin@admin')
                ->type('password', 'wrong')
                ->press('MASUK')
                ->assertSee(self::FAILURE_MSG);
        });
    }
}
