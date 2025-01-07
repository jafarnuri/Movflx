<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function new_contact(ContactRequest $request)
   {
       $validate = $request->validated();

       Contact::create($validate);

       return redirect()->route('contact');
   }
   

   public function contact_show()
   {
       $contacts = Contact::all();
       $unreadCount = Contact::where('is_read', false)->count(); // Unread message count
       return view('admin.settings.contact', compact('contacts', 'unreadCount'));
   }
    // Mark a message as read
    public function markAsRead($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = true;
        $contact->save();
    
        return response()->json(['status' => 'success']);
    }
    
    public function contact_delete($id)
    {
        $contact = Contact::findOrFail($id);
        // Avtomobili silirik
        $contact->delete();

        return redirect()->route('admin.contact_show');
    }
}