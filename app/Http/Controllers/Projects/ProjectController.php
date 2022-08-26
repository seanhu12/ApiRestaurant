<?php

namespace App\Http\Controllers\Projects;

use App\Http\Requests\Projects\StoreProjectRequest;
use App\Http\Requests\Projects\UpdateProjectRequest;
use App\Models\Projects\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::orderBy('id')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Projects\StoreProjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        return Project::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Projects\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return $project;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Projects\UpdateProjectRequest $request
     * @param \App\Models\Projects\Project $project
     * @return Project
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->all());
        return $project;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Projects\Project $project
     * @return string
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return 'Eliminado exitosamente';
    }
}
