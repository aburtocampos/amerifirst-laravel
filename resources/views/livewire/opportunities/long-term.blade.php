<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Long-Term Opportunities</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

        @foreach($opportunities as $o)
        <div
            class="bg-white shadow rounded p-5 hover:shadow-lg transition cursor-pointer"
            wire:click="selectOpportunity({{ $o->id }})">

            <h2 class="text-xl font-semibold mb-2">{{ $o->opportunity_number }}</h2>

            <p><strong>Customer:</strong> {{ $o->customer_name }}</p>
            <p><strong>Principal:</strong> ${{ number_format($o->principal, 2) }}</p>
            <p><strong>Total Interest:</strong> ${{ number_format($o->interest, 2) }}</p>
            <p><strong>Turnaround:</strong> {{ $o->turnaround_days }} days</p>

            <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                View Offer
            </button>

        </div>
        @endforeach

    </div>


    @if($selected)

    <div class="bg-white shadow rounded p-6">

        <h2 class="text-2xl font-bold mb-4">Repayment Schedule</h2>

        <p class="mb-4 text-gray-600">
            Opportunity: <strong>{{ $selected->opportunity_number }}</strong><br>
            Customer: <strong>{{ $selected->customer_name }}</strong><br>
        </p>

        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-4 text-left">Period</th>
                    <th class="py-3 px-4 text-left">Due Date</th>
                    <th class="py-3 px-4 text-left">Principal</th>
                    <th class="py-3 px-4 text-left">Interest</th>
                    <th class="py-3 px-4 text-left">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedule as $row)
                <tr class="border-b">
                    <td class="py-3 px-4 text-left">{{ $row['period'] }}</td>
                    <td class="py-3 px-4 text-left">{{ $row['due_date'] }}</td>
                    <td class="py-3 px-4 text-left">${{ number_format($row['principal'], 2) }}</td>
                    <td class="py-3 px-4 text-left">${{ number_format($row['interest'], 2) }}</td>
                    <td class="py-3 px-4 text-left">${{ number_format($row['total'], 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <button class="mt-6 bg-green-600 text-white px-5 py-2 rounded hover:bg-green-700">
            Accept Offer
        </button>

    </div>

    @endif

</div>
