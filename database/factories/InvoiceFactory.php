<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['billed', 'paid', 'void']);

        return [
            'customer_id' => \App\Models\Customer::factory(),
            'amount' => $this->faker->numberBetween(100, 10000),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $status === 'paid' ? $this->faker->dateTimeThisDecade() : NULL,
        ];
    }
}
