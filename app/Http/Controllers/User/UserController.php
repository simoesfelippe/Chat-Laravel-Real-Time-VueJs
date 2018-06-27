<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   public function profile() {



   	return view('users.profile');
   }

   public function profileUpdate(Request $request) {

   		$user = auth()->user();
   		$data = $request->all();

   		if(isset($request->email))
   			unset($data['email']);


   		if($request->password)
   			$data['password'] = bcrypt($data['password']);
   		else
   			unset($data['password']);


   		$user->update($data);
   		return redirect()
   					->route('profile')
   					->with('success', 'Atualizado com sucesso');







   }				

}
