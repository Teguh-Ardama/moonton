<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriptionPlans = [
        [
            'name' => 'Basic',
            'price' => 299000,
            'active_period_in_months' => 3,
            'features' => json_encode(['features1', 'features2']),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Premium',
            'price' => 899000,
            'active_period_in_months' => 6,
            'features' => json_encode(['features1', 'features2', 'features3', 'features4']),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ];

        SubscriptionPlan::insert($subscriptionPlans);
    }
}
