<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Mary\Traits\Toast;

// #[Lazy()]
class Login extends Component
{
    use Toast;

    #[Validate('required|min:3')]
    public string $email;
    #[Validate('required|min:3')]
    public string $password;

    public function login(): void
    {
        if (Auth::attempt($this->validate(), true)) {
            redirect()->route('dashboard');
        } else {
            $this->error('Login Gagal', 'Email / password salah');
            $this->reset('password');
        }
    }

    #[Title('Login')]
    public function render()
    {
        return view('livewire.login');
    }
}
