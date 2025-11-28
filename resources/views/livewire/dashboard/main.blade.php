<div class="p-6">

    <h1 class="text-3xl font-bold mb-6">Lender Dashboard</h1>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-2 gap-6">

        <!-- Loan Status -->
        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Paid & Closed</h2>
            <p class="text-3xl font-bold">{{ $paidClosed }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">In Transit</h2>
            <p class="text-3xl font-bold">{{ $inTransit }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Invoiced</h2>
            <p class="text-3xl font-bold">{{ $invoiced }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">In Production</h2>
            <p class="text-3xl font-bold">{{ $inProduction }}</p>
        </div>

        <!-- Financials -->
        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Total Principal</h2>
            <p class="text-3xl font-bold">${{ number_format($totalPrincipal,2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Total Interest</h2>
            <p class="text-3xl font-bold">${{ number_format($totalInterest,2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Total Loan Amount</h2>
            <p class="text-3xl font-bold">${{ number_format($totalLoanAmount,2) }}</p>
        </div>

        <!-- Payments -->
        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Paid Principal</h2>
            <p class="text-3xl font-bold">${{ number_format($totalPaidPrincipal,2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Paid Interest</h2>
            <p class="text-3xl font-bold">${{ number_format($totalPaidInterest,2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Total Paid</h2>
            <p class="text-3xl font-bold">${{ number_format($totalPaid,2) }}</p>
        </div>

        <!-- Outstanding -->
        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Outstanding Principal</h2>
            <p class="text-3xl font-bold text-red-600">${{ number_format($outstandingPrincipal,2) }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Outstanding Interest</h2>
            <p class="text-3xl font-bold text-red-600">${{ number_format($outstandingInterest,2) }}</p>
        </div>

        <!-- Other -->
        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Promissory Notes</h2>
            <p class="text-3xl font-bold">{{ $promissoryCount }}</p>
        </div>

        <div class="p-5 bg-white shadow rounded">
            <h2 class="font-semibold">Scheduled Payments</h2>
            <p class="text-3xl font-bold">{{ $scheduledPayments }}</p>
        </div>

    </div>

</div>
