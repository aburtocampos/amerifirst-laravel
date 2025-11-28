<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Loan History</h1>

    @if($loans->count() == 0)
        <p class="text-gray-600">No loan history available.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-3 px-4">Promissory Note</th>
                    <th class="py-3 px-4">Date Signed</th>
                    <th class="py-3 px-4">Principal</th>
                    <th class="py-3 px-4">Interest</th>
                    <th class="py-3 px-4">Total</th>
                    <th class="py-3 px-4">Due Date</th>
                    <th class="py-3 px-4">File</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans as $loan)
                <tr class="border-b">
                    <td class="py-3 px-4">{{ $loan->promissory_note }}</td>
                    <td class="py-3 px-4">{{ $loan->date_signed }}</td>
                    <td class="py-3 px-4">${{ number_format($loan->principal, 2) }}</td>
                    <td class="py-3 px-4">${{ number_format($loan->interest, 2) }}</td>
                    <td class="py-3 px-4">${{ number_format($loan->total, 2) }}</td>
                    <td class="py-3 px-4">{{ $loan->due_date }}</td>
                    <td class="py-3 px-4">
                        @if($loan->file_url)
                        <a href="{{ $loan->file_url }}" class="text-blue-600 underline" target="_blank">View</a>
                        @else
                        -
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

</div>
