<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Short-Term Opportunities</h1>

    @if($opportunities->count() == 0)
        <p class="text-gray-600">No opportunities available.</p>
    @else

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($opportunities as $o)
        <div class="bg-white shadow rounded p-5 hover:shadow-lg transition">

            <h2 class="text-xl font-semibold mb-2">{{ $o->opportunity_number }}</h2>

            <p class="text-gray-700">
                <strong>Customer:</strong> {{ $o->customer_name }}
            </p>

            <p class="text-gray-700">
                <strong>Principal:</strong> ${{ number_format($o->principal, 2) }}
            </p>

            <p class="text-gray-700">
                <strong>Interest:</strong> ${{ number_format($o->interest, 2) }}
            </p>

            <p class="text-gray-700">
                <strong>Turnaround:</strong> {{ $o->turnaround_days }} days
            </p>

            <button
                class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Fund Now
            </button>

        </div>
        @endforeach

    </div>

    @endif

</div>
