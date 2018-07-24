<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Core\Requests\JabtaskEventsRequest;
use Core\Services\JabtaskEventsServiceContract;

class JabtaskEventsController extends Controller
{
    protected $service;

    public function __construct(JabtaskEventsServiceContract $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('jabtask_events.index', [
            'events' => $this->service->paginate()
        ]);
    }

    public function create()
    {
        return view('jabtask_events.create');
    }

    public function store(JabtaskEventsRequest $request)
    {
        $this->service->store($request->all());
        flash('Book created!')->success();
        return redirect()->route('jabtask_events.index');
    }

    public function show($id)
    {
        return view('jabtask_events.show', [
            'user' => $this->service->find($id)
        ]);
    }

    public function edit($id)
    {
        return view('jabtask_events.edit', [
            'event' => $this->service->find($id)
        ]);
    }

    public function update(JabtaskEventsRequest $request, $id)
    {
        $this->service->update($id, ['close_at' => Carbon::now()]);
        flash('Událost <b>#' . $id . '</b> aktulizovana')->success();
        return redirect()->route('jabtask_events.index');
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        flash('Book deleted!')->important();
        return redirect()->route('jabtask_events.index');
    }
}