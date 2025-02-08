<?php

namespace App\Livewire\Support;

use App\Models\Support;
use Livewire\Component;

class SupportEdit extends Component
{
    public $id, $department, $subject, $status;

    protected $rules = [
        'department' => 'required',
        'subject' => 'required',
        'status' => 'required',
    ];

    public function mount($id)
    {
        $data = Support::findOrFail($id);
        $this->id = $data->id;
        $this->department = $data->department;
        $this->subject = $data->subject;
        $this->status = $data->status;
    }


    public function update()
    {
        $this->validate();

        Support::find($this->id)->update([
            'department' => $this->department,
            'subject' => $this->subject,
            'status' => $this->status,
        ]);

        return redirect()->route('Support.Index');
    }
    public function render()
    {
        return view('livewire.support.support-edit');
    }
}
