<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Estrazione di tutti i progetti in $project
        $projects = Project::all();

        // impacchettamento di $project e formattazione della response API
        $data = [
            'result' => $projects,
            'success' => true,
        ];

        // ritorno una risposta in formatto json del pacchetto formattato
        return response()->json($data);    
    }

    public function show(string $projects)
    {
        $projects = Project::with(['type', 'technologies'])->where('slug', $projects)->first();

        $data = [
            'result' => $projects,
            'success' => true,
        ];

        return response()->json($data);
    }

}
