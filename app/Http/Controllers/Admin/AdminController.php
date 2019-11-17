<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Consstructor
     */
    public function __construct(){
        //Require the user to be logged in
        $this->middleware('auth');
        //Require the user to at least have administrative privileges.
        $this->middleware('role:Admin');
    }

    /**
     * Display all users
     */
    public function displayUsers() {
        $users = User::orderBy('name', 'desc')->get()->paginate(50);

        return ('admin.user.displayUsers')->with('users', $users);
    }

    /**
     * Display Modify User form
     */
    public function displayModifyUser() {

    }

    /**
     * Modify Users
     */
    public function modifyUser(Request $request) {

    }

    /**
     * Display Allowed Entities
     */
    public function displayAllowed() {

    }

    /**
     * Add a new allowed entity
     */
    public function addAllowed(Request $request) {

    }

    /**
     * Delete an allowed entity
     */
    public function deleteAllowed(Request $request) {

    }
}
