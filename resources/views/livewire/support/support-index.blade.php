@extends('components.layouts.sideBar')

@section('content')

<div class="flex w-full">
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">
                Support Tickets
            </h1>
            <a href="{{ route('Support.Create') }}">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Open Tickets
                </button>
            </a>
        </div>
        <div class="bg-white p-6 rounded-md shadow-md">
            <div class="flex items-center mb-4">
                <input  class="border border-gray-300 rounded-md p-2" wire:model.live="search" placeholder="Search" type="text">
            </div>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">
                            No
                        </th>
                        <th class="py-2 px-4 border-b">
                            Department
                        </th>
                        <th class="py-2 px-4 border-b">
                            Subject
                        </th>
                        <th class="py-2 px-4 border-b">
                            Status
                        </th>
                        <th class="py-2 px-4 border-b">
                            Created at
                        </th>
                        <th class="py-2 px-4 border-b">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td class="py-2 px-4 border-b text-center">
                            {{ $item->id }}
                        </td>
                        <td class="py-2 px-4 border-b text-center">
                            {{ $item->department }}
                        </td>
                        <td class="py-2 px-4 border-b text-center">
                            {{ $item->subject }}
                        </td>
                        <td class="py-2 px-4 border-b text-center">
                            <span
                                class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">
                                {{ $item->status }}
                            </span>
                        </td>
                        <td class="py-2 px-4 border-b text-center">
                            {{ $item->created_at }}
                        </td>
                        <td class="py-2 px-4 border-b text-center text-lg-center">
                            <a class="m-2" href="{{ route('Support.Edit', $item->id) }}"><button
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button></a>
                            <button wire:click="Delete({{ $item->id }})"
                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
