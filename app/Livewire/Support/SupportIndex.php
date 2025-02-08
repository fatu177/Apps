<?php

namespace App\Livewire\Support;

use App\Models\Support;
use Livewire\Attributes\Url;
use Livewire\Component;

class SupportIndex extends Component
{
    #[Url]
    public $search = '';

    public function Delete($Id)
    {
        Support::find($Id)->delete();
        session()->flash('message', 'Post deleted successfully.');
    }
    public function render()
    {
        if ($this->search != '') {
            $data = Support::where('department', 'like', '%' . $this->search . '%')->
            orWhere('subject', 'like', '%' . $this->search . '%')->get();
        } else {
            $data = Support::all();
        }

        return view('livewire.support.support-index', compact('data'));
    }
}
