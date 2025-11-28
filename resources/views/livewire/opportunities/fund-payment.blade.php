<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Payment Form</h1>

    <div class="bg-white p-6 rounded shadow">

        <p class="mb-4">
            Opportunity: <strong>{{ $opportunity->opportunity_number }}</strong><br>
            Principal: <strong>${{ number_format($opportunity->principal,2) }}</strong><br>
            Interest: <strong>${{ number_format($opportunity->interest,2) }}</strong><br>
        </p>

        <h2 class="text-xl font-semibold mb-4">Choose Payment Method</h2>

        <!-- Payment Buttons -->
        <div class="flex gap-4 mb-6">
            <button
                wire:click="selectMethod('card')"
                class="px-4 py-2 rounded border {{ $payment_method === 'card' ? 'bg-blue-600 text-white' : 'bg-gray-100' }}">
                Credit Card
            </button>

            <button
                wire:click="selectMethod('ach')"
                class="px-4 py-2 rounded border {{ $payment_method === 'ach' ? 'bg-blue-600 text-white' : 'bg-gray-100' }}">
                ACH Debit
            </button>
        </div>

        <!-- Credit Card Form -->
        @if ($payment_method === 'card')
            <div class="p-4 border rounded mb-6">

                <h3 class="font-semibold mb-3">Credit Card Information (Placeholder)</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input class="border p-2 rounded" placeholder="Cardholder Name">
                    <input class="border p-2 rounded" placeholder="Card Number">
                    <input class="border p-2 rounded" placeholder="Expiration Date">
                    <input class="border p-2 rounded" placeholder="CVC">
                </div>

            </div>
        @endif

        <!-- ACH Form -->
        @if ($payment_method === 'ach')
            <div class="p-4 border rounded mb-6">

                <h3 class="font-semibold mb-3">ACH Debit Authorization (Placeholder)</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input class="border p-2 rounded" placeholder="Account Holder Name">
                    <input class="border p-2 rounded" placeholder="Account Number">
                    <input class="border p-2 rounded" placeholder="Routing Number">
                    <input class="border p-2 rounded" placeholder="Bank Name">
                </div>

            </div>
        @endif

        @if ($payment_method)
            <button
                wire:click="submit"
                class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700">
                Submit Payment
            </button>
        @endif

        @if (session('success'))
            <p class="mt-4 text-green-600 font-semibold">
                {{ session('success') }}
            </p>
        @endif

    </div>

</div>
