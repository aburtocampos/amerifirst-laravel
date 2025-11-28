<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">DocuSign Signature</h1>

    <div class="bg-white p-6 rounded shadow">

        <p class="text-gray-700 mb-4">
            This is a placeholder screen.
            In the final version, the system will automatically generate a DocuSign contract for this opportunity.
        </p>

        <p class="mb-6">
            Opportunity: <strong>{{ $opportunity->opportunity_number }}</strong><br>
            Principal: <strong>${{ number_format($opportunity->principal, 2) }}</strong><br>
            Interest: <strong>${{ number_format($opportunity->interest, 2) }}</strong><br>
        </p>

        <button
            wire:click="proceed"
            class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700">
            Continue to Payment
        </button>

    </div>

</div>
