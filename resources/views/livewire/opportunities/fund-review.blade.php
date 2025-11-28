<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Review Opportunity Details</h1>

    <div class="bg-white p-6 rounded shadow mb-6">

        <h2 class="text-xl font-semibold mb-4">Lender Information</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">

            <div>
                <label class="font-semibold">Name</label>
                <p class="p-2 border rounded bg-gray-100">{{ $name }}</p>
            </div>

            <div>
                <label class="font-semibold">Email</label>
                <p class="p-2 border rounded bg-gray-100">{{ $email }}</p>
            </div>

            <div>
                <label class="font-semibold">Phone</label>
                <p class="p-2 border rounded bg-gray-100">{{ $phone }}</p>
            </div>

        </div>

        <h2 class="text-xl font-semibold mb-4">Opportunity Information</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">

            <div>
                <label class="font-semibold">Opportunity</label>
                <p class="p-2 border rounded bg-gray-100">{{ $opportunity->opportunity_number }}</p>
            </div>

            <div>
                <label class="font-semibold">Principal</label>
                <p class="p-2 border rounded bg-gray-100">${{ number_format($principal,2) }}</p>
            </div>

            <div>
                <label class="font-semibold">Interest</label>
                <p class="p-2 border rounded bg-gray-100">${{ number_format($interest,2) }}</p>
            </div>

            <div>
                <label class="font-semibold">Turnaround</label>
                <p class="p-2 border rounded bg-gray-100">{{ $opportunity->turnaround_days }} days</p>
            </div>

        </div>

        <div class="mt-4">
            <a href="{{ route('opportunities.fund', $opportunity->id) }}" class="text-blue-600 underline mr-4">
                ← Edit Information
            </a>

            <a
                href="{{ route('opportunities.docusign', $opportunity->id) }}"
                class="bg-green-600 text-white px-5 py-2 rounded hover:bg-green-700">
                Confirm & Continue
            </a>

        </div>

        @if (session('success'))
            <p class="mt-4 text-green-600 font-semibold">
                {{ session('success') }}
            </p>
        @endif

    </div>

</div>
