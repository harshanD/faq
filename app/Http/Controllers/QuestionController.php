<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Questions;
use Illuminate\Http\Request;


class QuestionController extends Controller
{
    //
    public function listQuestionWithAnswers()
    {
        $questionWithAnswers = Questions::with('answers')->get();
        return view('faq.list', ['questionWithAnswers' => $questionWithAnswers]);
    }


    public function createQuestionWithAnswers(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);


        $question = Questions::create([
            'question' => $request->question,
            'status' => 0
        ]);

        Answer::create([
            'q_id' => $question->id,
            'answer' => $request->answer,
            'status' => 0
        ]);

        return redirect()->action('QuestionController@listQuestionWithAnswers')->with('message', 'Successfully Added ');
    }

    public function viewQuestionWithAnswers($id)
    {
        $questionWithAnswers = Questions::with('answers')->where('id', $id)->first();
        return view('faq.edit', ['questionWithAnswers' => $questionWithAnswers]);
    }

    public function editQuestion(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);

        Questions::where('id', $request->question_id)->update(['question' => $request->question]);
        Answer::where('id', $request->answer_id)->update(['answer' => $request->answer]);


        return redirect()->action('QuestionController@listQuestionWithAnswers')->with('message', 'Successfully Updated !');
    }

    public function delete($id)
    {
        Questions::where('id', '=', $id)->delete();
        return redirect()->action('QuestionController@listQuestionWithAnswers')->with('message', 'Successfully Deleted !');
    }
}
