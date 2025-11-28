<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Payment History</h1>

    @if($payments->count() == 0)
        <p class="text-gray-600">No payments found.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-3 px-4">Payment Name</th>
                    <th class="py-3 px-4">Due Date</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Amount</th>
                    <th class="py-3 px-4">Concept</th>
                    <th class="py-3 px-4">Amortization</th>
                    <th class="py-3 px-4">Interest</th>
                    <th class="py-3 px-4">Balance</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $p)
                <tr class="border-b">
                    <td class="py-3 px-4">{{ $p->payment_name }}</td>
                    <td class="py-3 px-4">{{ $p->due_date }}</td>
                    <td class="py-3 px-4 capitalize">{{ $p->status }}</td>
                    <td class="py-3 px-4">${{ number_format($p->amount, 2) }}</td>
                    <td class="py-3 px-4 capitalize">{{ $p->concept }}</td>
                    <td class="py-3 px-4">${{ number_format($p->amortization, 2) }}</td>
                    <td class="py-3 px-4">${{ number_format($p->interest, 2) }}</td>
                    <td class="py-3 px-4">${{ number_format($p->balance, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

</div>
