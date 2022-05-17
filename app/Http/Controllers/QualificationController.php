<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Qualification;
use App\Http\Requests\StoreQualificationRequest;
use App\Http\Requests\UpdateQualificationRequest;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;



class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employee = Employee::find($request->id);

        $qualification = QueryBuilder::for(Qualification::with('employee'))
            ->allowedFilters([
                AllowedFilter::exact('employee_id'),
                AllowedFilter::exact('degree_name'),
                AllowedFilter::exact('leave_status'),
                'degree_name',
                'degree_qualification_name',])
            ->where('employee_id', $request->id)
            ->paginate(10);
        return view('qualification.index', compact('qualification','employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $employee_id = $request->id;
        return view('qualification.create', compact('employee_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQualificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQualificationRequest $request)
    {
//        dd($request->all());


        if ($request->hasFile('attachment_1')) {
            $path = $request->file('attachment_1')->store('', 'public');
            $request->merge(['attachment' => $path]);
        }
        $qualification = Qualification::create($request->all());

        session()->flash('message', 'Qualification information successfully added.');
        return redirect()->route('employee.show',$request->employee_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function edit(Qualification $qualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQualificationRequest  $request
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQualificationRequest $request, Qualification $qualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification)
    {
        //
    }
}
