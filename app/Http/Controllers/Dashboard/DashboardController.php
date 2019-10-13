<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Library
use App\Library\Contracts\ContractHelper;
use App\Library\Lookups\LookupHelper;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('role:User');
    }

    public function index() {
        //Declare the contract helper
        $contractHelper = new ContractHelper;
        $lookupHelper = new LookupHelper;

        //Declare array variable
        $contracts = array();

        //Get the current amount of contracts availabe to the corporation for displaying on the dashboard with the relevant
        //information such as pickup and destination, jumps, and profit margin.
        $tempContracts = $contractHelper->GetContracts(98615428);

        foreach($tempContracts as $con) {
            if($con->status != 'finished') {

                $startStation = $lookupHelper->GetStationDetails($con->start_location_id);
                $endStation = $lookupHelper->GetStationDetails($con->end_location_id);

                dd($endStation);

                if(isset($startStation->system_id)) {
                    $startSystem = $lookupHelper->GetSolarSystemName($startStation->system_id);
                } else {
                    $startSystem = 'N/A';
                }

                if(isset($endStation->system_id)) {
                    $endSystem = $lookupHelper->GetSolarSystemName($endStation->system_id);
                } else {
                    $endStation = 'N/A';
                }
               
                //Compile the final array
                $final = [
                    'pickup' => $startSystem,
                    'destination' => $endSystem,
                    'type' => $con->type,
                    'volume' => $con->volume,
                    'expired' => $con->date_expired,
                    'collateral' => $con->collateral,
                    'reward' => $con->reward,
                    'availability' => $con->availability,
                ];

                array_push($contracts, $final);
            }
        }

        $num = sizeof($contracts);

        return view('dashboard.dashboard')->with('contracts', $contracts)
                                          ->with('num', $num);
    }

    public function profile() {
        $user = User::where(['character_id' => $this->user()->getId()])->first();

        return view('dashboard.profile')->with('user', $user);
    }
}
