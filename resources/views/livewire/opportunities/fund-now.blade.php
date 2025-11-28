<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Fund Opportunity</h1>

    <div class="bg-white p-6 rounded shadow mb-6">

        <h2 class="text-xl font-semibold mb-4">Lender Information</h2>

        <form wire:submit.prevent="submit">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <label class="font-semibold">Name</label>
                    <input type="text" wire:model="name" class="w-full border p-2 rounded" readonly>
                </div>

                <div>
                    <label class="font-semibold">Email</label>
                    <input type="email" wire:model="email" class="w-full border p-2 rounded" readonly>
                </div>

                <div>
                    <label class="font-semibold">Phone</label>
                    <input type="text" wire:model="phone" class="w-full border p-2 rounded" readonly>
                </div>

            </div>

            <h2 class="text-xl font-semibold mt-8 mb-4">Opportunity Information</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <label class="font-semibold">Opportunity</label>
                    <input type="text" value="{{ $opportunity->opportunity_number }}" class="w-full border p-2 rounded" readonly>
                </div>

                <div>
                    <label class="font-semibold">Principal</label>
                    <input type="text" wire:model="principal" class="w-full border p-2 rounded" readonly>
                </div>

                <div>
                    <label class="font-semibold">Interest</label>
                    <input type="text" wire:model="interest" class="w-full border p-2 rounded" readonly>
                </div>

                <div>
                    <label class="font-semibold">Turnaround</label>
                    <input type="text" value="{{ $opportunity->turnaround_days }} days" class="w-full border p-2 rounded" readonly>
                </div>

            </div>

            <a
                href="{{ route('opportunities.review', $opportunity->id) }}"
                class="mt-6 inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
                Continue
            </a>


        </form>

        @if (session('success'))
            <p class="mt-4 text-green-600 font-semibold">
                {{ session('success') }}
            </p>
        @endif

    </div>

</div>
