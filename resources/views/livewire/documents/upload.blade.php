<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Documents</h1>

    @if (session()->has('message'))
        <div class="p-3 bg-green-200 text-green-800 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="upload" class="mb-6 bg-white p-6 rounded shadow">

        <label class="block text-gray-700 font-semibold mb-2">Upload Document</label>

        <input type="file" wire:model="file" class="mb-4">

        @error('file')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror

        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Upload
        </button>
    </form>


    <h2 class="text-xl font-semibold mb-3">Your Documents</h2>

    @if ($documents->count() == 0)
        <p class="text-gray-600">No documents uploaded.</p>
    @else

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-4">Name</th>
                    <th class="py-3 px-4">Download</th>
                    <th class="py-3 px-4">Uploaded</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $doc)
                <tr class="border-b">
                    <td class="py-3 px-4">{{ $doc->name }}</td>
                    <td class="py-3 px-4">
                        <a href="{{ asset('storage/' . $doc->path) }}"
                           class="text-blue-600 underline"
                           target="_blank">Download</a>
                    </td>
                    <td class="py-3 px-4">
                        {{ $doc->created_at->format('Y-m-d') }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endif

</div>
