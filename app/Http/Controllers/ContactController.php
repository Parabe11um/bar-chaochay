<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Notifications\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'consent' => 'accepted',
        ]);

        ContactMessage::create($data);

        Notification::route('mail', 'bar@chaochay.ru')
            ->notify(new ContactFormSubmitted(
                $data['name'], $data['email'], $data['message']
            ));

        return response()->json(['success' => true, 'message' => 'Спасибо! Мы получили ваше сообщение.']);
    }
}
