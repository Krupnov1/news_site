<?php declare(strict_types=1);

namespace App\Services;

use App\Contracts\SocialServiceContract;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User;

class SocialService implements SocialServiceContract {

    public function login(User $user): string {
        
        $userData = ModelsUser::where('name', $user->getName())->first();
        
        //$userData->email = $user->getEmail();

        if ($userData->save()) {
            Auth::loginUsingId($userData->id);
        }

        return route('account');
        
    }
}

