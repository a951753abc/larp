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
        //
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

        $this->eventStore($user->id, $id);

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


        return view('events.event', ['event' => $event]);
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

    private function eventStore($user_id, $id)
    {
        UserEvent::firstOrCreate(['user_id' => $user_id, 'event_id' => $id]);
    }
}
