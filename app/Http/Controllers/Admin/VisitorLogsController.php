<?php

namespace App\Http\Controllers\Admin;

use App\Models\VisitorLogs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VisitorRequest;

class VisitorLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisitorRequest $request)
    {
        VisitorLogs::create($request->except('terms'));

        return redirect(route('visitor'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitorLogs  $visitorLogs
     * @return \Illuminate\Http\Response
     */
    public function show(VisitorLogs $visitorLogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisitorLogs  $visitorLogs
     * @return \Illuminate\Http\Response
     */
    public function edit(VisitorLogs $visitorLogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisitorLogs  $visitorLogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisitorLogs $visitorLogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitorLogs  $visitorLogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitorLogs $visitorLogs)
    {
        //
    }
}
