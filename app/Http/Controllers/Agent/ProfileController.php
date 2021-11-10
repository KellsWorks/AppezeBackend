<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgentProfile;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        $profile = AgentProfile::where('agent_id', $request->agent_id)->firstOrFail();
        $profile->education = $request->education;
        $profile->about = $request->about;
        $profile->update();

        return response()->json([
            'message' => 'Profile updated successfully!'
        ], 200);
    }
}
