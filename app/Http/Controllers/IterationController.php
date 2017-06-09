<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IterationService;
use App\Services\IterationSettingService;

class IterationController extends Controller
{
	
    protected $iteration;
    protected $setting;
    
    function __construct(IterationService $service, IterationSettingService $settingService){
	    
	    $this->iteration = $service;
	    $this->setting   = $settingService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    if(session()->get('username')){
      $iterations = $this->iteration->getAll();
      return view('apps.listing', compact('iterations'));
	    }else{
   return redirect('../');		    
	    }
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
	    
	    	
	$logosFolder = 'logos/'.$request['name'];

        if(!\File::exists($logosFolder)) {
             $createDir         = \File::makeDirectory($logosFolder,0777,true);
        }

       $fileName          = $request->file('image')->getClientOriginalName();
       $fileFullPath      = $logosFolder.'/'.$fileName;

        if(!\File::exists($fileFullPath)) {

            $request->file('image')->move($logosFolder,$fileName);
            
        }


	    
	    
	    
	    
	$iterations = [
			'name' => $request['name'],
			'version' => $request['version'],
			'installs' => 0,
			];
			
	$iterationObj = $this->iteration->store($iterations);
	
	$settings = [
			
			'iteration_id' => $iterationObj->id,
			'endpoint' => $request['end_point'],
			'bg_image' => $fileName,
			'logo' => $request['logo'],
			];
		
	$this->setting->store($settings);
	return redirect('getAll');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iteration =  $this->iteration->getIteration($id);
	//return $iteration;
        return view('apps.edit',compact('iteration'));
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
