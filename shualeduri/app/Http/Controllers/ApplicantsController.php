<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function index(Request $request) {
        $count = $request->count;
        $applicantsData = Applicants::orderBy('experience_years','asc')->paginate($count);

        if($applicantsData->count() == 0)
            return 'applicants not found';
        return view('applicant.index',compact('applicantsData'));
    }

    public function show(Request $request) {
        $foundApplicant = Applicants::findOrFail($request->id);
        return view('applicant.show', compact('foundApplicant'));
    }

    public function edit(Request $request) {
        $foundApplicant = Applicants::findOrFail($request->id);
        $foundApplicant->name = $request->name;
        $foundApplicant->surname = $request->surname;
        $foundApplicant->experience_years = $request->experience_years;
        $foundApplicant->update();
        return redirect()->route('index');
    }

    public function isHiredUpdate(Request $request) {
        $toUpdate = Applicants::findOrFail($request->id);
        $toUpdate->is_hired = !$toUpdate->is_hired;
        $toUpdate->update();
        return redirect()->back();
    }

    public function delete(Request $request) {
        $toDelete = Applicants::findOrFail($request->id);
        $toDelete->delete();
        return redirect()->back();
    }
}
