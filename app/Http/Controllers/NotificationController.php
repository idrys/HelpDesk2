<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Illuminate\Support\Facades\Log;
use Mail;
use App\Mail\NotificationEmail;
use Validator;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Notification::all();
      return response()->json($items);
      //return json_encode($items);
    }


    protected function validator(array $data){
      return Validator:: make( $data,[
        'desktopNr' => 'required',
        'email' => 'required|email',
        'tephon' => 'required|min:6',
        'message' => $data['message']
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      echo "Kontroler create";
      echo "\n";

      //$data = json_decode($request->getContent());
      //$data = $request->getContent();
      //dd(  $data );
      //Mail::to("idrys2@gmail.com")->send( new Notification($data));
      //return redirect('/');
      $data = json_decode($request->getContent());
      if(is_array($data)) {
          var_dump('To jest tablica');
      }
      else{
          var_dump('To nie tablica');
      }
      var_dump($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      //alert();
      echo "Kontroler store";
      var_dump("Kontroler store");
      echo "\n";

      $data = json_decode($request->getContent());
      if(is_array($data)) {
          var_dump('To jest tablica');
      }
      else{
          var_dump('To nie tablica');
      }
      var_dump($data);
      //dd(  $data[1]->email );
      Mail::to("idrys2@gmail.com")->send( new NotificationEmail($data) );

      return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        console.log("Controller show");
        console.log($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //console.log("Controller edit");
        //console.log($id);
        dd($id);
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
