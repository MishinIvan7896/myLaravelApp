<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->route('home')->with('success', 'Ура победа!');
    }

    public function allData(){
        $contact = Contact::all();
        return view('messages', ['data'=> $contact]);
    }

    public function showOneMessage($id){
        return view('one-message', ['data'=> Contact::find($id)]);
    }

    public function updateMessage($id){
        return view('update-message', ['data'=> Contact::find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $request)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success', 'Запись обновлена!');
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data', $id)->with('success', 'Запись удалена');
    }
}
