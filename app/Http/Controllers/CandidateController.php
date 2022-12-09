<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index()
    {
        return view('candidates.index');
    }

    public function create(Request $request)
    {
        Candidate::createCandidate($request);
        return redirect()->back()->with('message','you are successfully added as a Candidates');
    }

    public function candidateList()
    {
        return view('candidates.list',[
            'candidates'=>Candidate::all(),
            ]);
    }

    public function candidateContact($id)
    {
        $user = User::find($id);
        $coin = $user->coin;
        $total = (int)$coin - (int)5;
        $user->coin = $total;
        $user->save();
        return redirect()->back()->with('message','You are contact a candidate and lost 5 coin please check profile');
    }

    public function candidateHire($id)
    {
        $user = User::find($id);
        $coin = $user->coin;
        $total = (int)$coin + (int)5;
        $user->coin = $total;
        $user->save();
        return redirect()->back()->with('message','You are Hire a candidate and back 5 coin please check profile');
    }
}
