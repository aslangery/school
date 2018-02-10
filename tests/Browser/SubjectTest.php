<?php

namespace Tests\Browser;

use App\Models\Subject;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SubjectTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $subject = factory(Subject::class)->create([
            'title' => 'математика',
        ]);
        $user = factory(User::class)->create([
            'email' => 'taylor@laravel.com',
        ]);

        $this->browse(function (Browser $browser) use ($subject, $user) {
            $browser->loginAs($user)
                ->visit('/subjects')
                ->assertSee('математика');
        });
    }

    public function testCreate()
    {
        $user = factory(User::class)->create([
            'email' => 'taylor@laravel.com',
        ]);
        $this->browse(function (Browser $browser) use($user) {
            $browser->loginAs($user)
                ->visit('/subjects/create')
                ->assertSee('Предметы');
        });
    }
}
