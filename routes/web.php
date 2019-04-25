<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/addNew', function () {return view('faq.index');});
Route::get('/edit/{id}', 'QuestionController@viewQuestionWithAnswers');

Route::get('/', 'QuestionController@listQuestionWithAnswers');

Route::post('/saveQuestion', 'QuestionController@createQuestionWithAnswers');
Route::post('/editQuestion', 'QuestionController@editQuestion');
Route::get('/delete/{id}', 'QuestionController@delete');


