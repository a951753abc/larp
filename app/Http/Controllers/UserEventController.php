<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Event;
use App\User;
use App\UserEvent;

class UserEventController extends Controller
{
    public function __construct()
    {
        /** 驗證登入 */
        $this->middleware('auth');
    }

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
    public function create($event_id)
    {
        $user = Auth::user();
        if ($user->type != config('const.admin')) {
            return redirect('/event');
        }
        $event = Event::find($event_id);
        $userEvent = UserEvent::where('event_id', $event_id)->get();
        $user = User::where('type', config('const.user'))->get();
        return view('user-event.store', ['event' => $event, 'users' => $user, 'user_event' => $userEvent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event_id = $request->input('event_id');
        $event = Event::find($event_id);
        $users = $request->input('user');
        if ($users) {
            /** 刪除後重建 */
            UserEvent::where('event_id', $event_id)->delete();
            foreach ($users as $user) {
                $userEvent = new UserEvent();
                $userEvent->user_id = $user;
                $userEvent->event_id = $event_id;
                $userEvent->save();
            }
        }
        return redirect('/admin/'.$event->type);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
