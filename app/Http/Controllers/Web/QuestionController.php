<?php

namespace App\Http\Controllers\Web;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\str_plural;
use Session;

class QuestionController extends Controller
{
    public function index()
    {
        $data = array(
            'questions' => Question::latest()->paginate(5)
        );
        return view('questions.index', $data);
    }

    public function create()
    {
        $data = array(
            'questions' => new Question(),
        );
        return view('questions.create', $data);
    }

    public function store(Request $request)
    {
        $questionsData = $this->validateRequest();
        if (Question::create($questionsData)) {
            Session::flash('response', array('type' => 'success', 'message' => 'Question Added successfully!'));
        } else {
            Session::flash('response', array('type' => 'error', 'message' => 'Something Went wrong!'));
        }
        return redirect()->route('questions.index');
    }

    public function show(Question $question)
    {
        //
    }

    public function edit(Question $question)
    {
        //
    }

    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        //
    }
    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
    }
}