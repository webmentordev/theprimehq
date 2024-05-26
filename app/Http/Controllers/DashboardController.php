<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }

    public function contacts(){
        return view('dashboard.contacts', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function delete_contact(Contact $contact){
        $contact->delete();
        return back()->with('success', 'Contact has been deleted!');
    }
}