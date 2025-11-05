<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\mailtest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailtestController extends Controller
{
    public function create()
    {
        return view('FormEmail');
    }

    public function store(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'password' => 'required|string|max:255',
            'password_confirmation' => 'required|string|max:255|same:password',
            'date_of_birth'  => 'required|date',
        ]);

        try {

            $userData = [
                'name'          => $validatedData['name'],
                'email'         => $validatedData['email'],
                'password'      => bcrypt($validatedData['password']),
                'date_of_birth' => $validatedData['date_of_birth'],
            ];
            $mailData = mailtest::create($userData);

            
            Mail::to($validatedData['email'])->send(new TestMail($mailData));
            

            return redirect()
                ->route('FormEmail.create')
                ->with('success', 'Pesan Anda berhasil dikirim dan disimpan! Silahkan cek email Anda.');

        } catch (\Exception $e) {
            return redirect()
                ->route('FormEmail.create')
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

