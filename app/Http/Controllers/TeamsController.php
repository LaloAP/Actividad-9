<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Cities;
use App\Models\Conferences;
use App\Models\Divisions;

class TeamsController extends Controller
{

    public function index()
    {
        
        $teams = Teams::all();
        $availableConferences = Conferences::all();
        $availableDivisions = Divisions::all();

        foreach ($teams as $team) {
            $randomConference = $availableConferences->random();
            $randomDivision = $availableDivisions->random();
    
            $team->conference_id = $randomConference->id;
            $team->division_id = $randomDivision->id;
    
            $team->save();
        }
    
        $teams = Teams::select('teams.id', 'teams.name', 'cities.name as city_name', 'conferences.Title as conference_title', 'divisions.Division as division_name')
            ->join('cities', 'teams.city_id', '=', 'cities.id')
            ->join('divisions', 'teams.division_id', '=', 'divisions.id')
            ->join('conferences', 'teams.conference_id', '=', 'conferences.id')
            ->get();
    
        return view('teams.index', compact('teams'));
    }
    
    
}

