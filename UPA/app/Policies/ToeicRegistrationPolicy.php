<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ToeicRegistration;

class ToeicRegistrationPolicy
{
   public function update(User $user, ToeicRegistration $toeicRegistration)
{
    // Debug informasi dulu
    dd([
        'user_nim' => $user->nim,
        'regist_nim' => $toeicRegistration->nim,
        'equal' => $user->nim === $toeicRegistration->nim,
    ]);

    return $user->nim === $toeicRegistration->nim;
}
}

