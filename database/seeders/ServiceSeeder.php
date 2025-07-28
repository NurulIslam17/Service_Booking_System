<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $services = [
            [
                'name' => 'Software Development',
                'description' => 'Custom business software built with modern technologies.',
                'price' => 50000,
                'status' => true,
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'iOS and Android apps with full backend integration.',
                'price' => 80000,
                'status' => true,
            ],
            [
                'name' => 'E-commerce Development',
                'description' => 'Online store solutions with payment and shipping integration.',
                'price' => 60000,
                'status' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
