<?php


namespace BackendModule;


use Illuminate\Http\Request;

interface ControllerInterFace
{
    public function index(Request $request);
    public function create(Request $request);
    public function store(Request $request);
    public function edit(Request $request, $model);
    public function update(Request $request, $model);
    public function destroy(Request $request, $model);
    public function show(Request $request, $model);
}