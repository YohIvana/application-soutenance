<?php

namespace App\Http\Livewire\ExampleLaravel;

use Livewire\Component;
use App\Models\User;
class UserManagement extends Component
{
    public $users,$name,$fonction,$email;
    public $updateNew=false;
    public function render()
    {
        $this->users=User::all();
    
    
        return view('livewire.example-laravel.user-management');
    }
}
