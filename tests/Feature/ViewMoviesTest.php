<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    public function the_main_page_shows_coreect_info(){

        $resp = $this->get('/');
        $resp->assertSuccessful();
    }
}
