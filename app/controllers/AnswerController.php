<?php

class AnswerController extends BaseController {


	public function showAnswer( $collection, $entry )
	{
        $answer	= Answer::where( 'collection', '=', $collection)->where( 'entry', '=', $entry )->first();
        return View::make( 'answers.index' )
		->with( 'answer', $answer->answer );
	}

}