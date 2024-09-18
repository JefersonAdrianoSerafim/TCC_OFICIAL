<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\User_Subject;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SubjectController extends Controller
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
            'name_subject' => 'required|max:50|min:5',
            'teacher_subject' => 'required|max:50|min:3'
        ];

    public function index($id)
    {

    }

    public function store()
    {
        request()->validate($this->regras, $this->msgs);
        
        $id_subject = Subject::create([
            'name_subject' => request()->input('name_subject'),
            'teacher_subject' => request()->input('teacher_subject'),
        ])->id;
        User_Subject::create([
            'id_subject_fk' => $id_subject,
            'id_user_fk' => auth()->user()->id
        ]);


        return redirect()->back();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }
    
    public function update(string $id)
    {
        $subject = Subject::find($id);

        $subject->name_subject = request()->name_subject;
        $subject->teacher_subject = request()->teacher_subject;
        $subject->save();
        return redirect()->back();
    }

    public function destroyCommitmentBySubject(Subject $subject)
    {   
        $cc = new CommitmentController();

        foreach($subject->commitments as $commitment)
        {
            $cc->destroy($commitment->id);
        }
    }

    public function destroy(string $id)
    {
        $subject = Subject::find($id);

        if (isset($subject)) {
            DB::table('user_subjects')->where('id_subject_fk', $subject->id)->delete();
            $this->destroyCommitmentBySubject($subject);
            $subject->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
}
