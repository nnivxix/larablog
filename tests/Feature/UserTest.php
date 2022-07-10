<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
  public function testViewLogin()
  {
    $this->get('/login')
      ->assertSee('Login');
  }

  public function testViewRegister()
  {
    $this->get('/register')
      ->assertSee('Register');
  }
}
