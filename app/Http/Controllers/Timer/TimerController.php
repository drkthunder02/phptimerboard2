<?php

namespace App\Http\Controllers\Timer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    /**
     * Constructor
     */
    public function __construct() {
        //Require the user to be logged in
        $this->middleware('auth');
        //Require the user to at least have the User role.
        $this->middleware('role:User');
    }

    /**
     * Display all current timers
     */
    public function dashboard() {

        return view('timers.dashboard');
    }

    /**
     * Display past timers
     */
    public function pastTimers() {

    }

    /**
     * Display new timer form
     */
    public function displayTimerForm() {

    }

    /**
     * Store New Timer
     */
    public function storeTimer(Request $request) {

    }

    /**
     * Delete Timer
     */
    public function deleteTimer(Request $request) {

    }
}
