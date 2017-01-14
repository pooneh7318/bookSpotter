<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;
use App\profile;

class BasketController extends Controller
{
    //
	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function add(Request $request)
    {
        if($request->ajax()) {
            $data = Input::all();
			
			if(Auth::check()) {
                $user = Auth::user();
                $profile = profile::where('id_user', '=', $user->id)->first();
                if($profile==null){
					$profile = new profile;
					$profile->id_user = $user->id;
					$profile->save();
				}
            } else {
				return "not authorized";
			}
			
            $basket = $profile->basket;
			if( strlen($basket) <=5 )
				$basket = [];
			else
				$basket = json_decode($basket, true);

            $new = true;
            foreach($basket as $key=>$item) {
                if( $item['id'] == $data['id']) {
                    $basket[$key]['num'] += $data['num'];
                    $new = false;
                }
            }
            if($new)
                $basket[] = $data;
            $basket = json_encode($basket);
            $profile->basket = $basket;
            $profile->save();
            return "true";
        }
        return "false";
    }
	
	 public function get(Request $request) {

        if(Auth::check()){
            $user = Auth::user();
            $user = $user->toArray();
            $profile = profile::where('id_user', '=', $user['id'])->first();
            if($profile != NULL){
                $profile_array = $profile->toArray();
                $db_basket = $profile_array['basket'];
            }
        }
        if(sizeof($db_basket)>0) {
            return $db_basket;
        }
		return "false";
    }
	
	public function remove(Request $request)
    {
        if($request->ajax()) {
            $data = Input::all();
			if(Auth::check()) {
                $user = Auth::user();
                $profile = profile::where('id_user', '=', $user['id'])->first();
                if($profile==null){
					$profile = new profile;
					$profile->id_user = $user->id;
					$profile->save();
				}
            }
			
            $basket = $profile->basket;
			if( strlen($basket) <=5 )
				$basket = [];
			else
				$basket = json_decode($basket, true);
			foreach($basket as $key=>$item) {
                if( $item['id'] == $data['id']) {
                    unset($basket[$key]);
                }
            }
            $basket = json_encode($basket);
            $profile->basket = $basket;
            $profile->save();
            return "true";
        }
        return "false";
    }
	
	

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
