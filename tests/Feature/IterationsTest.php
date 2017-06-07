<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Services\IterationService;

class IterationsTest extends TestCase
{
	
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    /** @test */
    public function a_user_can_view_all_iterations(){
	    
	    $iteration = new IterationService();
	    $iteration1 = [ 'name' => 'Ports', 'version' => '3.2.7', 'installs' => '33' ];
	    $iteration2 = [ 'name' => 'AIMS', 'version' => '3.2.7', 'installs' => '49' ];
	    $iteration3 = [ 'name' => 'ENSKY', 'version' => '3.2.7', 'installs' => '10' ];
	    $iteration4 = [ 'name' => 'PROPIT', 'version' => '3.2.7', 'installs' => '15' ];
	    
	    $iteration->store($iteration1);
	    $iteration->store($iteration2);
	    $iteration->store($iteration3);
	    $iteration->store($iteration4);
	    
	    $this->assertCount(4,$iteration->getAll());
	    
	    
	    
	    
	    
    }
}
