<?php

namespace Benjaminniess\UserSwitcher;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class SwitchToController extends Controller
{
    public function switchTo(string $emailOrId): RedirectResponse
    {
        if (filter_var($emailOrId, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $emailOrId)->first();
        } elseif (filter_var($emailOrId, FILTER_VALIDATE_INT)) {
            $user = User::find((int)$emailOrId);
        }

        if (!$user) {
            abort(500);
        }

        Auth()->login($user);

        return redirect('/', 302);
    }
}
