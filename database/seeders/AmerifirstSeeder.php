<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\LenderProfile;
use App\Models\Loan;
use App\Models\Payment;
use App\Models\Opportunity;


class AmerifirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
       // $this->call(AmerifirstSeeder::class);

        // ================================
        // 1. Crear un usuario Lender fake
        // ================================
        $user = User::create([
            'name' => 'John Lender',
            'email' => 'lender@example.com',
            'password' => bcrypt('password'),
        ]);

        // ============================================
        // 2. Crear perfil del lender
        // ============================================
        LenderProfile::create([
            'user_id' => $user->id,
            'address' => '123 Main Street',
            'phone' => '555-1234',
            'email' => 'lender@example.com',
            'legal_name' => 'Johnathan Lender LLC',
            'bank_name' => 'Bank of America',
            'bank_account' => '123456789',
            'bank_routing' => '987654321',
        ]);

        // ============================================
        // 3. Crear 5 loans para el lender
        // ============================================
        for ($i = 1; $i <= 5; $i++) {

            $loan = Loan::create([
                'user_id' => $user->id,
                'promissory_note' => "PN-00$i",
                'date_signed' => now()->subDays(rand(10, 60)),
                'principal' => rand(3000, 20000),
                'interest' => rand(150, 800),
                'total' => rand(3500, 22000),
                'due_date' => now()->addDays(rand(30, 120)),
                'file_url' => null,
            ]);

            // ================================
            // 4. Crear pagos para cada loan
            // ================================
            for ($p = 1; $p <= rand(3, 6); $p++) {
                Payment::create([
                    'loan_id' => $loan->id,
                    'payment_name' => "Payment $p",
                    'due_date' => now()->addDays(rand(1, 120)),
                    'status' => rand(0,1) ? 'completed' : 'scheduled',
                    'amount' => rand(200, 1200),
                    'concept' => rand(0,1) ? 'installment' : 'balloon',
                    'amortization' => rand(100, 400),
                    'interest' => rand(20, 90),
                    'balance' => rand(1000, 5000),
                ]);
            }
        }

        // ============================================
        // 5. Crear 6 oportunidades fake
        // ============================================
        for ($i = 1; $i <= 6; $i++) {
            Opportunity::create([
                'type' => rand(0,1) ? 'short' : 'long',
                'opportunity_number' => "OP-2025-$i",
                'customer_name' => "Customer $i",
                'contract_file' => null,
                'principal' => rand(5000, 50000),
                'interest' => rand(200, 3000),
                'turnaround_days' => rand(7, 30),
            ]);
        }
    }
}
