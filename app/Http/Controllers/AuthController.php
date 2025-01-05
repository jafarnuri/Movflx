<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\DeleteUserConfirmation;

class AuthController extends Controller
{
    public function register_user(AuthRequest $request)
    {

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // 3. Login səhifəsinə yönləndir
        return redirect()->route('admin.user_show')->with('success', 'Qeydiyyat uğurla tamamlandı!');
    }

    public function login_user(LoginRequest $request)
    {
        // Email və password-u alırıq
        $credentials = $request->only('email', 'password');

        // Auth::attempt ilə istifadəçini yoxlayırıq
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Admin panelinə yönləndiririk
            return redirect()->route('admin.home')->with('success', 'Admin panelinə xoş gəldiniz!');
        }

        // Əgər giriş uğursuz olarsa, səhv mesajını qaytarırıq
        return back()->withErrors([
            'email' => 'Email və ya şifrə yanlışdır.',
        ])->withInput();
    }

    public function logout()
    {
        // İstifadəçini çıxarır
        Auth::logout();

        // İstifadəçini login səhifəsinə yönləndirir
        return redirect()->route('home')->with('success', 'Çıxış uğurla tamamlandı!');
    }

    public function sendConfirmationEmail($id)
    {
        $user = User::find($id);
    
        if ($user) {
            // Testik kodunu yaradın
            $confirmationCode = Str::random(32);
    
            // Testik kodunu istifadəçinin məlumatlarına əlavə et
            $user->confirmation_code = $confirmationCode;
            $user->save();
    
            // Default e-poçt ünvanını alırıq
            $defaultEmail = env('DEFAULT_CONFIRMATION_EMAIL'); 
    
            // Testik kodunu göndəririk
            Mail::to($defaultEmail)->send(new DeleteUserConfirmation($confirmationCode));
    
            return view('admin.users.confirm_delete', ['user' => $user]);
        }
    
        return redirect()->route('admin.user_show')->with('error', 'İstifadəçi tapılmadı.');
    }
    
    public function confirmDelete(Request $request, $id)
{
    $request->validate([
        'confirmation_code' => 'required|string',
    ]);

    $user = User::find($id);

    if ($user && $user->confirmation_code === $request->input('confirmation_code')) {
        // Testik kodu doğru daxil edildikdə istifadəçini silirik
        $user->delete();
        return redirect()->route('admin.user_show')->with('success', 'İstifadəçi uğurla silindi.');
    }

    return redirect()->route('admin.user_show')->with('error', 'Testik kodu səhvdir.');
}


}
