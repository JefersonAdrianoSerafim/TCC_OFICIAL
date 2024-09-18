<?php

namespace App\Http\Controllers;

use App\Models\Commitment;
use App\Models\Subject;
use Illuminate\Http\Request;

class CommitmentController extends Controller
{
    private $msgs =
        [
            "required" => "Obrigatório!",
            "max" => "[:attribute] só pode ter no máximo [:max] caracteres!",
            "min" => "[:attribute] deve ter no mínimo [:min] caracteres!",
            "unique" => "Esse [:attribute] já existe!"
        ];

    private $regras =
        [
            'subject_commitment' => 'required',
            'name_commitment' => 'required|max:50|min:5',
            'description_commitment' => 'required|max:50|min:5'
        ];
    public function index()
    {
        //
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
    public function store()
    {
        request()->validate($this->regras, $this->msgs);
        

        Commitment::create([
            'name_commitment' => request()->input('name_commitment'),
            'description_commitment' => request()->input('description_commitment'),
            'id_subject_fk' => request()->subject_commitment
        ]);

        return redirect()->back();
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
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $commitment = Commitment::find($id);

        $commitment->name_commitment = request()->name_commitment;
        $commitment->description_commitment = request()->description_commitment;
        $commitment->id_subject_fk = request()->subject_commitment->id;
        $commitment->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commitment = Commitment::find($id);

        if (isset($commitment)) {
            $commitment->categories()->detach();
            $commitment->delete();
            return redirect()->back();

        }
        return redirect()->back();
    }
}
