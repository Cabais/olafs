<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostItem;
use Intervention\Image\ImageManagerStatic as Image;

class PostItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Arjel - display data
        return PostItem::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        //Arjel - validate your form
        $this->validate($request,[
            'itemname' => 'required|string|max:191',
            'datefound' => 'required',
            'itemphoto' => 'required',
            'itemtype' => 'required',
            'description' => 'required|string'
            
        ]);

        //Arjel - converting file name 
        if($request->itemphoto){

            $name = time().'.' . explode('/', explode(':', substr($request->itemphoto, 0, 
            strpos($request->itemphoto, ';')))[1])[1];

            \Image::make($request->itemphoto)->save(public_path('img/founditem/').$name);
        }

        //Arjel - create data in database
        return PostItem::create([
            'itemname' => $request['itemname'],
            'datefound' => $request['datefound'],
            'itemphoto' => $name,
            'itemtype' => $request['itemtype'],
            'description' => $request['description']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
