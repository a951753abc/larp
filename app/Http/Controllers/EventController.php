<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventInd;
use App\UserEvent;
use Illuminate\Http\Request;
use Auth;

class EventController extends Controller
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
        $user = Auth::user();
        $event = UserEvent::where('user_id', $user->id)->get();

        return view('events.index', ['events' => $event]);
    }

    public function adminIndex($type)
    {
        $user = Auth::user();
        if ($user->type != config('const.admin')) {
            return redirect('/event');
        }
        $event = Event::where('type', $type)->orderBy('id', 'asc')->get();
        return view('events.admin-index', ['events' => $event, 'type' => $type]);
    }

    /**
     * 只有管理者可以新增
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->type != config('const.admin')) {
            return redirect('/event');
        }
        return view('events.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->type = $request->input('type');
        $event->name = $request->input('name');
        $event->content = $request->input('content');
        $event->save();
        return redirect('/admin/'.$request->input('type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        /** 檢查有無存入此事件，若否返回情報頁 */
        try {
            UserEvent::where('user_id', $user->id)->where('event_id', $id)->firstOrFail();
            $event = Event::findOrFail($id);
            if (count($event->ind) > 0) {
                $events = $event->ind;

                foreach ($events as $eventValue) {
                    $user_id_array = array_filter(explode(',', $eventValue->user_id_array));
                    if (in_array($user->id, $user_id_array)) {
                        $event->content = $eventValue->content;
                        break;
                    }
                }
            }
        }
        catch (\Exception $e) {
            return redirect('/event');
        }
        return view('events.event', ['event' => $event]);
    }

    public function eventShow($id)
    {
        $user = Auth::user();
        $this->eventStore($user->id, $id);
        return redirect('/event/'.$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if ($user->type != config('const.admin')) {
            return redirect('/event');
        }
        try {
            $event = Event::findOrFail($id);
        }
        catch (\Exception $e) {
            return redirect('/event');
        }

        return view('events.store', ['event' => $event]);
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
        try {
            $event = Event::findOrFail($id);
        }
        catch (\Exception $e) {
            return redirect('/event');
        }

        $event->name = $request->input('name');
        $event->content = $request->input('content');
        $event->type = $request->input('type');
        $event->save();
        return redirect('/event/'.$id.'/edit');
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

    private function eventStore($user_id, $id)
    {
        UserEvent::firstOrCreate(['user_id' => $user_id, 'event_id' => $id]);
    }
}
