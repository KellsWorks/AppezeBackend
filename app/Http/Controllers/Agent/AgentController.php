<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgentSkills;

class AgentController extends Controller
{
    public function newSkill(Request $request)
    {
        $skill = AgentSkills::create([
            'agent_id' => $request->agent_id,
            'name' => $request->name,
            'icon' => $request->icon
        ]);

        return response()->json([
            'message' => 'Skill added successfully'
        ], 200);
    }

    public function getSkill(Request $request){

        $skills = AgentSkills::where('agent_id', $request->agent_id)->firstOrFail();

        return response()->json([
            'agent_skills' => $skills
        ], 200);

    }

    public function deleteSkill(Request $request){

        $skill = AgentSkills::find($request->id)->delete();

        return response()->json([
            'message' => 'Agent skill deleted successfully'
        ], 200);
    }
}
