<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;


class MessagesController extends Controller
{
    public function show(Message $message)
    {
     return view('messages.show',['message' => $message,]);
    }

    public function create(CreateMessageRequest $request)
    {
                $message = Message::create([
                    'content'=>$request->input('message'),
                    'image' => 'http://placeimg.com/640/480/any'.mt_rand(0,1000)
                    ]);

                    return redirect('/messages/'.$message->id);
    }


}
