<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class Controller extends Controller
{
	public function redirectToProvider(Request $request){
    return \Laravel\Socialite\Facades\Socialite::driver('github')->setScopes(['read:user', 'user:email', 'admin:public_key', 'repo', 'public_repo'])->redirect();
}
public function handleProviderCallback(Request $request){
    $user = \Laravel\Socialite\Facades\Socialite::driver('github')->user();
return $user->token;
}
}