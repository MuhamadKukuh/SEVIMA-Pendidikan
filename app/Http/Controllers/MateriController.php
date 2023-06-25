<?php

namespace App\Http\Controllers;

use App\Models\LearningMaterial;
use App\Models\Subject;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['materials'] = LearningMaterial::where('teacher_id', Auth()->User()->Teacher->teacher_id)->get();

        return view('Admin.MaterialsTable', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['subjects'] = Subject::all();
        return view('Admin.MaterialsForm', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('material_content') && $request->material_content == null || ""){
            $result = OpenAI::completions()->create([
                'max-token' => 100,
                'model' => 'text-davinci-003',
                'prompt' => "Buatlah sebuah artikel website dengan materi ". $request->material_title ." Untuk Kelas ". $request->class ." SMA dengan Detail dan tag memiliki style agar artikel mudah di baca, dengan asumsi data akan di masukan ke dalam database dan data yang ingin di masukan hanya tag yang berada di dalam body"
            ]);
    
            $response = array_reduce(
                $result->toArray()['choices'],
                fn(string $result, array $choice) => $result . $choice["text"], ""
            );
        }else{
            $response = $request->material_content;
        }

        // dd($request->all());

        $data = LearningMaterial::create([
            'material_title' => $request->material_title,
            'material_cover' => $request->has('material_cover') ? $request->file('material_cover')->store('images') : null,
            'material_content' => $response,
            'subject_id' => $request->subject,
            'teacher_id' => Auth()->User()->Teacher->teacher_id,
        ]);

        return redirect('/materi-data')->with('success', 'Berhasil menambahkan Materi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data['material'] = LearningMaterial::where('material_id', $id)->first();
        

        return view('Admin.Material', $data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['subjects'] = Subject::all();
        $data['material'] = LearningMaterial::where('material_id', $id)->first();

        return view('Admin.MaterialsForm', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->has('material_content') && $request->material_content == null || ""){
            $result = OpenAI::completions()->create([
                'max-token' => 100,
                'model' => 'text-davinci-003',
                'prompt' => "Buatlah sebuah artikel website dengan materi ". $request->material_title ." Untuk Kelas ". $request->class ." SMA dengan Detail dan tag memiliki style agar artikel mudah di baca, dengan asumsi data akan di masukan ke dalam database dan data yang ingin di masukan hanya tag yang berada di dalam body"
            ]);
    
            $response = array_reduce(
                $result->toArray()['choices'],
                fn(string $result, array $choice) => $result . $choice["text"], ""
            );
        }else{
            $response = $request->material_content;
        }

        // dd($request->all());

        $data = LearningMaterial::where('material_id', $id)->update([
            'material_title' => $request->material_title,
            'material_cover' => $request->has('material_cover') ? $request->file('material_cover')->store('images') : null,
            'material_content' => $response,
            'subject_id' => $request->subject,
            'teacher_id' => Auth()->User()->Teacher->teacher_id
        ]);

        return redirect('/materi-data')->with('success', 'Berhasil mengubah Materi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LearningMaterial::where('material_id', $id)->delete();

        return back()->with('success', 'Berhasil menghapus Data');
    }
}
