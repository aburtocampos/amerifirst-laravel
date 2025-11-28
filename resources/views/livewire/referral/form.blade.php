<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Referral Program</h1>

    @if(session('success'))
        <div class="p-3 bg-green-200 text-green-800 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif


    <!-- FORM -->
    <form wire:submit.prevent="submit" class="bg-white p-6 rounded shadow mb-8">

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name *</label>
            <input type="text" wire:model="name" class="w-full border rounded p-2">
            @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" wire:model="email" class="w-full border rounded p-2">
            @error('email') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Phone</label>
            <input type="text" wire:model="phone" class="w-full border rounded p-2">
            @error('phone') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Notes</label>
            <textarea wire:model="notes" class="w-full border rounded p-2" rows="3"></textarea>
            @error('notes') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Submit Referral
        </button>
    </form>


    <!-- LIST OF REFERRALS -->
    <h2 class="text-xl font-semibold mb-3">Your Referrals</h2>

    @if ($referrals->count() == 0)
        <p class="text-gray-600">No referrals submitted yet.</p>
    @else

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-4">Name</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Phone</th>
                    <th class="py-3 px-4">Notes</th>
                    <th class="py-3 px-4">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($referrals as $r)
                <tr class="border-b">
                    <td class="py-3 px-4">{{ $r->name }}</td>
                    <td class="py-3 px-4">{{ $r->email ?? '-' }}</td>
                    <td class="py-3 px-4">{{ $r->phone ?? '-' }}</td>
                    <td class="py-3 px-4">{{ $r->notes ?? '-' }}</td>
                    <td class="py-3 px-4">{{ $r->created_at->format('Y-m-d') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endif

</div>
