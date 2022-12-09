<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    public static $candidate;

    public static function createCandidate($request)
    {
        self::$candidate                = new Candidate();
        self::$candidate->name          = $request->name;
        self::$candidate->email         = $request->email;
        self::$candidate->description   = $request->description;
        self::$candidate->skills        = $request->skills;
        self::$candidate->save();
    }
}
