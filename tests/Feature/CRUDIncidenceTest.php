<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Incidence;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDIncidenceTest extends TestCase
{
    use RefreshDatabase;

    public function test_listIncidenceAppearInIncidenceView() {
        $this->withExceptionHandling();
        
        $incidences = Incidence::factory(2)->create();
        $incidence = $incidences[0];
        $response = $this->get(route('incidences.index'));
        $response->assertSee($incidence->description);
        $response->assertSuccessful()->assertViewIs('incidence.index');
        
    }

    public function test_anIncidenceCanBeCreated(){
        $this->withExceptionHandling();

        $incidence = Incidence::factory()->create();
        $response = $this->post(route('home'),
        [
            'userName' => 'userName',
            'category' => 'category',
            'area' => 'area',
            'location' => 'location',
            'description' => 'description',
            'state' => 'state',
        ]);

        $this->assertCount(1,Incidence::all()); 
    }

    public function test_anIncidenceCanBeDeleted() {
        $this->withExceptionHandling();

        $incidence = Incidence::factory(1)->create();
        $this->assertCount(1, Incidence::all());

        $response = $this->delete(route('incidences.destroy', $incidence->id));
        $response->assertStatus(204);
        $this->assertCount(0, Incidence::all());
    }

    public function test_anIncidenceCanBeUpdated(){
        $this->withExceptionHandling();

        $incidence= Incidence::factory()->create();
        $this->assertCount(1,Incidence::all());

        $response=$this->patch(route('incidences.update',$incidence->id), ['description'=>'New description']);
        $this->assertEquals('New description', Incidence::first()->description);
    }

    public function test_anIncidenceCanBeShowed(){
        $this->withExceptionHandling();
        $incidence=Incidence::factory()->create();
        $this->assertCount(1,Incidence::all());
        $response=$this->get(route('incidences.show', $incidence->id));
        $response->assertSee($incidence->description);
        $response->assertSuccessful()->assertViewIs('incidence.show');
    }

}