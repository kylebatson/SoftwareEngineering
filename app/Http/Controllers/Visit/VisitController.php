<?php

namespace App\Http\Controllers\Visit;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $visits = null;
        if ($user->role == "const.admin") {
            $visits = Visit::all();
        } else {
            $visits = Visit::all()->where('userID', '=', $user->id);
        }

        $users = User::all(); //->where('role', '=', 'const.userDefault');
        return view('Visit/index')->with('visits', $visits)->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visit/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Visit::where('userID', '=', Auth::user()->id)->where('apptDate', '>', Carbon::now())->exists()) {
            // user not found
            Visit::create([
                'userID' => Auth::user()->id,
                'apptDate' => Carbon::now()->addDays(10),
                'status' => 'Pending',
            ]);
        }

        return redirect(url('visit'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visit = Visit::findOrFail($id);
        $user = User::find($visit->userID); //->where('role', '=', 'const.userDefault');
        return view('visit/show')->with('visit', $visit)->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visit = Visit::findOrFail($id);
        $user = User::find($visit->userID); //->where('role', '=', 'const.userDefault');
        $users = User::all()->pluck('firstname', 'id')->toArray();
        return view('visit/edit')->with('visit', $visit)->with('user', $user)->with('users', $users);
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
        $visit = Visit::find($id);
        $visit->userID = $request->userID;
        $visit->apptDate = $request->apptDate;
        $visit->status = $request->status;
        $visit->save();
        return redirect(url('visit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visit = Visit::findOrFail($id);
        $visit->delete();
        return redirect()->route('visit.index');
    }
}
