<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UrlsTest extends TestCase
{
    /**
     * Testando Url home.
     *
     * @return void
     */
    public function testUrlHome()
    {
        $this->withoutMiddleware();
        $home = $this->get('/home');
        $home->assertStatus(200);
    }

    /**
     * Testando Url Login.
     *
     * @return void
     */
    public function testUrlLogin()
    {
        $home = $this->get('/login');
        $home->assertStatus(200);
    }
    /**
     * Testando Url Registro.
     *
     * @return void
     */
    public function testUrlRegistro()
    {
        $home = $this->get('/register');
        $home->assertStatus(200);
    }
    /**
     * Testando Url Reset Password.
     *
     * @return void
     */
    public function testUrlPassawordReset()
    {
        $home = $this->get('/password/reset');
        $home->assertStatus(200);
    }

    public function testUrlAdmin()
    {
        $this->withoutMiddleware();
        $home = $this->get('/admin');
        $home->assertStatus(200);
    }
    public function testUrlAdminAtleticas()
    {
        $this->withoutMiddleware();
        $home = $this->get('/admin/atleticas');
        $home->assertStatus(200);
    }

    public function testUrlAdminNovidades()
    {
        $this->withoutMiddleware();
        $home = $this->get('/admin/novidades');
        $home->assertStatus(200);
    }
    public function testUrlAdminAddNovidades()
    {
        $this->withoutMiddleware();
        $home = $this->get('/admin/add/novidades');
        $home->assertStatus(200);
    }
    public function testUrlNovidades()
    {
        $home = $this->get('/news');
        $home->assertStatus(200);
    }
}
