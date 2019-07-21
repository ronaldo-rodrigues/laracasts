<?php
//Don't Use "Else"

class User
{
	public function store()
	{
		$input = Request::all();
		$validation = Validator::make($input, ['username' => 'required']);

		if (date('l') !== 'Friday') {
			if ($validation->passes()) {
				Post::create($input);
				return Redirect::home();
			} else {
				return Redirect::back()->withinput()->withErrors($validation);
			}
		} else {
			throw new Exception("Não trabalhamos nas sextas!!");
		}
	}


	public function storeWithoutElse()
	{
		$input = Request::all();
		$validation = Validator::make($input, ['username' => 'required']);
		$this->validator->validate($input);
		Post::create($input);
		return Redirect::home();
	}
}
