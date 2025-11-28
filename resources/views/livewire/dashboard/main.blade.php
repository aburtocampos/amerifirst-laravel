<div class="p-6">

    <h1 class="text-xl md:text-3xl lg:text-4xl font-bold mb-6">Lender Dashboard</h1>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-2 gap-6">

        <div class="p-5 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Total Loans</h2>
            <p class="text-xl md:text-3xl lg:text-4xl font-bold mt-2">{{ $totalLoans }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Total Principal</h2>
            <p class="text-xl md:text-3xl lg:text-4xl font-bold mt-2">${{ number_format($totalPrincipal, 2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Total Interest</h2>
            <p class="text-xl md:text-3xl lg:text-4xl font-bold mt-2">${{ number_format($totalInterest, 2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Total Amount Loaned</h2>
            <p class="text-xl md:text-3xl lg:text-4xl font-bold mt-2">${{ number_format($totalPaid, 2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Total Payments Made</h2>
            <p class="text-xl md:text-3xl lg:text-4xl font-bold mt-2">${{ number_format($totalPayments, 2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Outstanding Balance</h2>
            <p class="text-xl md:text-3xl lg:text-4xl font-bold mt-2 text-red-600">${{ number_format($outstanding, 2) }}</p>
        </div>

    </div>

</div>
