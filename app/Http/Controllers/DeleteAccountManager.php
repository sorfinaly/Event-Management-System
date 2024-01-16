<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DeleteAccountManager extends Controller
{
    public function confirmDelete()
    {
        return view('confirm-delete');
    }

    public function delete()
    {
        try {
            $user = Auth::user();
            $user->delete();

            // Logout the user after deleting the account
            Auth::logout();

            return Redirect::to('login')->with('success', 'Your account has been successfully deleted.');
        }

        catch (\Exception $e) {
            return Redirect::back()->with('error', 'Error deleting the account. Please try again.');
        }
    }
}
