<?php

namespace App\Http\Livewire;

use App\Models\Attendance;
use Livewire\Component;

class AttendingForm extends Component
{
    public string $name = '';

    public string $email = '';

    protected function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:attendances',
        ];
    }

    public function render()
    {
        return view('livewire.attending-form');
    }

    public function save()
    {
        $this->resetErrorBag();
        $this->validate();

        $this->dispatchBrowserEvent('attending-success', [
            'title' => __('Success'),
            'content' => __('Thank you for being with us'),
        ]);

        Attendance::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->reset('name', 'email');
    }
}
