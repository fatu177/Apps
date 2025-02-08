<?php

namespace App\Livewire\Support;

use App\Models\Support;
use Livewire\Component;

class SupportCreate extends Component
{
    public $department, $subject, $status;

    protected $rules = [
        'department' => 'required',
        'subject' => 'required',
        'status' => 'required',
    ];

    public function store()
    {
        $this->validate();

        Support::create([
            'department' => $this->department,
            'subject' => $this->subject,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Post created successfully.');
        return redirect()->route('Support.Index');
    }
    public function render()
    {
        return view('livewire.support.support-create');
    }
}
