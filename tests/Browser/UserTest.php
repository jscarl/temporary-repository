<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserTest extends DuskTestCase
{
    public function elements()
    {
        return [];
    }

    /**
     * @test
     * @group user
     * @return void
     */
    public function create_new_user_with_default_role()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAS(User::find(1))
                ->visit('/admin')
                ->click('#adminmenu > ul > li:nth-child(5)')
                ->click('div.container-fluid > div > div:nth-child(1) > a.btn.btn-success.btn-add-new')
                ->assertPathIs('/admin/users/create')
                ->type('name', 'User Automation')
                ->type('email', 'user@automate.com')
                ->type('password', 'user@123')
                ->select('role_id')
                ->press('Simpan')
                ->assertPathIs('/admin/users');
        });
    }

    /**
     * @test
     * @group user
     * @return void
     */
    public function read_new_user_created()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/admin/users')
                ->assertSee('User Automation')
                ->clickAtXPath('//*[@id="dataTable"]/tbody/tr[1]/td[8]/a[3]')
                ->assertSee('Melihat User')
                ->back()
                ->assertPathIs('/admin/users');
        });
    }

    /**
     * @test
     * @group user
     * @return void
     */
    public function edit_new_user_created()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/admin/users')
                ->assertSee('User Automation')
                ->clickAtXPath('//*[@id="dataTable"]/tbody/tr/td[8]/a[2]')
                ->assertSee('Ubah User')
                ->clear('name')
                ->type('name', 'Update User Automation')
                ->clear('email')
                ->type('email', 'update@automate.com')
                ->clear('password')
                ->type('password', 'user@123')
                ->press('Simpan')
                ->assertPathIs('/admin/users');
        });
    }

    /**
     * @test
     * @group user
     * @return void
     */

    public function delete_new_user_created()
    {
        $this->browse(function (Browser $browser) {
            // $id = $browser->value('data-id');
            $browser->assertPathIs('/admin/users')
                ->assertSee('User Automation')
                // ->clickAtXPath('//*[@id="delete-"'.$id.']')
                ->clickLink('Hapus')
                ->assertSee('Kamu yakin untuk menghapus ini user?')
                ->clickLink('Ya, Hapus!')
                ->assertPathIs('/admin/users');
        });
    }
}
