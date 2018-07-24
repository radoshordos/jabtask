<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Core\Requests\CreateBookRequest;
use Core\Requests\EditBookRequest;
use Core\Services\JabtaskUsersServiceContract;

class JabtaskUsersController extends Controller
{
    protected $service;

    public function __construct(JabtaskUsersServiceContract $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('jabtask_users.index', [
            'users' => $this->service->paginate()
        ]);
    }

    public function create()
    {
        return view('jabtask_users.create');
    }

    public function store(CreateBookRequest $request)
    {
        $this->service->store($request->all());
        flash('created!')->success();
        return redirect()->route('jabtask_users.index');
    }

    public function show($id)
    {
        return view('jabtask_users.show', [
            'user' => $this->service->find($id)
        ]);
    }

    public function edit($id)
    {
        $item = $this->service->find($id);
        return view('jabtask_users.edit', compact('item'));
    }

    public function update(EditBookRequest $request, $id)
    {
        $this->service->update($id, $request->all());
        flash('Book updated!')->success();
        return redirect()->route('jabtask_users.index');
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        flash('deleted!')->important();
        return redirect()->route('jabtask_users.index');
    }

}
