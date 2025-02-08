@extends('components.layouts.sideBar')
@section('content')
<div class="flex-item">
    <h1 class="text-2xl font-bold mb-4">Buat Post Baru</h1>
    <form wire:submit.prevent="store" class="space-y-4">
        <div>
            <label for="department" class="block text-sm font-medium text-gray-700">Department</label>
            <input type="text" wire:model="department" id="department"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            @error('department') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
            <input type="text" wire:model="subject" id="subject"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            @error('subject') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <input type="text" wire:model="status" id="status"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            @error('status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <button type="submit"
            class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
            Simpan
        </button>
    </form>
</div>
@endsection
