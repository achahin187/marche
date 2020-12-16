<?php

namespace App\Http\Controllers;

use App\message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\PrivateMessageEvent;



class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'message' => 'required',
            'receiver_id' => 'required'
         ]);
 
         $sender_id = Auth::id();
         $receiver_id = $request->receiver_id;
 
         $message = new message();
         $message->message = $request->message;
 
         if ($message->save()) {
             try {
                 $message->users()->attach($sender_id, ['receiver_id' => $receiver_id]);
                 $sender = User::where('id', '=', $sender_id)->first();
 
                 $data = [];
                 $data['sender_id'] = $sender_id;
                 $data['sender_name'] = $sender->name;
                 $data['receiver_id'] = $receiver_id;
                 $data['content'] = $message->message;
                 $data['created_at'] = $message->created_at;
                 $data['message_id'] = $message->id;
 
                 event(new PrivateMessageEvent($data));
 
                 return response()->json([
                    'data' => $data,
                    'success' => true,
                     'message' => 'Message sent successfully'
                 ]);
             } catch (\Exception $e) {
                 $message->delete();
             }
         }
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $users =User::where('id','!=',Auth::id())->get();


        $friendInfo=User::findOrFail($userId);
        $myInfo=User::find(Auth::id());
        
         
        return view('front.conversation',compact('users','friendInfo','myInfo'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        //
    }
}
