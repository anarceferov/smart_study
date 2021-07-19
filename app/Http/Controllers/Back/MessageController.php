<?php

namespace App\Http\Controllers\Back;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
    //  $counts = Message::select('status' , DB::raw('count(*) as count'))->groupBy('status')->get();
        $messages = Message::orderBy('created_at' , 'desc')->get();
        $counts = $messages->countBy('status')->all();
        return view('back.message.list' , compact('messages' , 'counts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Message::create(request()->all());
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $messages = Message::find($id);
    }

    public function update(Request $request, $id)
    {

        $message = Message::find($id) ?? abort(403, 'User not found');

        if($request->status==='baxilir')
        {
            $message->status   = 'baxilir';
            $message->baxilir_date= now();
            $message->user_name   =Auth::user()->name;
            $message->save();
            return redirect()->back();
        }
        
        if($request->status==='arasdirilir')
        {
            $message->status   = 'arasdirilir';
            $message->arasdirilir_date= now();
            $message->user_name   =Auth::user()->name;
            $message->save();
            return redirect()->back();
        }

        if($request->status==='tamamlanib')
        {
            $message->status   = 'tamamlanib';
            $message->tamamlanib_date= now();
            $message->user_name   =Auth::user()->name;
            $message->save();
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        //
    }

}
