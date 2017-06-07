<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IterationService;

class IterationController extends Controller
{
	
    protected $iteration;
    
    function __construct(IterationService $service){
	    
	    $this->iteration = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return $this->iteration->getAll();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$iterations = [
			'name' => 'Ports',
			'version' => '3.2.7',
			'installs' => '39',
			];
			
	$this->iteration->store($iterations);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->iteration->getIteration($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	$iterations = [
			'name' => 'Ports',
			'version' => '3.2.8',
			'installs' => '39',
			];
			
	$this->iteration->update($id,$iterations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AffiliationRequest $request)
    {
	
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->iteration->deleteIteration($id);
    }
}
