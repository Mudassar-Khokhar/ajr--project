<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
{
    // Contact Methods
    public function contactIndex()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact', compact('contacts'));
    }

    public function contactDestroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('admin.contact')->with('success', 'Contact message deleted successfully!');
    }

    // User Methods
    public function userIndex()
    {
        $users = User::latest()->get();
        return view('admin.user', compact('users'));
    }

    public function userDestroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->id === auth()->id()) {
            return redirect()->route('admin.user')->with('error', 'You cannot delete your own account!');
        }

        $user->delete();
        return redirect()->route('admin.user')->with('success', 'User deleted successfully!');
    }
}
