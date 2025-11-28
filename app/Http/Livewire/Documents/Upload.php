<?php

namespace App\Http\Livewire\Documents;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Document;

class Upload extends Component
{

    use WithFileUploads;

    public $file;

    public function upload()
    {
        $this->validate([
            'file' => 'required|mimes:pdf,jpg,png,jpeg,doc,docx|max:20480'
        ]);

        $path = $this->file->store('documents', 'public');

        Document::create([
            'user_id' => auth()->id(),
            'name'    => $this->file->getClientOriginalName(),
            'path'    => $path,
        ]);

        $this->reset('file');

        session()->flash('message', 'File uploaded successfully!');
    }

    public function render()
    {
        $documents = Document::where('user_id', auth()->id())->get();

        return view('livewire.documents.upload', [
            'documents' => $documents
        ])->layout('layouts.app');
      //  return view('livewire.documents.upload');
    }
}
