<?php

namespace App\Http\Controllers;

use App\Models\LearningMaterial;
use App\Models\StudyProgram;
use App\Models\Subject;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['subjects'] = Subject::all();
        $data['materials'] = LearningMaterial::paginate(20);
        $data['latest_materials'] = LearningMaterial::orderBy('created_at')->paginate(20);

        return view('Clients.Index', $data);
    }

    public function MaterialsIndex(Request $request)
    {
        // dd($request->order);
        if($request->has('search')){
            $data['materials'] = LearningMaterial::where('material_title', "LIKE", '%'. $request->search .'%')->paginate(20);
        }elseif($request->has('order')){
            $data['materials'] = $request->mp !== null || '' ? LearningMaterial::whereHas('Teacher', function ($query) use ($request) {
                $query->whereHas('ProgramStudy', function($query2) use($request){
                    $query2->where('program', $request->prodi);
                });
            })->whereHas('Subject', function($query3) use($request) {
                $query3->where('subject', $request->mp);
            })->orderBy('created_at', $request->order == "Terbaru" ? "ASC" : "DESC")->paginate(20) : $data['materials'] = LearningMaterial::whereHas('Teacher', function ($query) use ($request) {
                $query->whereHas('ProgramStudy', function($query2) use($request){
                    $query2->where('program', $request->prodi);
                });
            })->orderBy('created_at', $request->order == "Terbaru" ? "ASC" : "DESC")->paginate(20);
        }else{
            $data['materials'] = LearningMaterial::paginate(20);
        }

        $data['subjects'] = Subject::all();
        $data['prodi']  = StudyProgram::all();
        $data['latest_materials'] = LearningMaterial::orderBy('created_at')->paginate(20);

        return view('Clients.Materials', $data);
    }

    public function showMaterial(LearningMaterial $material){
        $data['material'] = $material;

        return view('Clients.Material', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
