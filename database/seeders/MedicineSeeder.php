<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicine;
use App\Models\Type;

class MedicineSeeder extends Seeder
{
    public function run(): void
    {
        
        $a = Type::create(['name' => 'Tablet']);
        $b = Type::create(['name' => 'Capsule']);
        $c = Type::create(['name' => 'Syrup']);


       Medicine::create([
            'name' => 'Paracetamol',
            'stock' => 100,
            'expiry_date' => '2027-03-15',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Ibuprofen',
            'stock' => 75,
            'expiry_date' => '2026-11-20',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Metformin',
            'stock' => 200,
            'expiry_date' => '2027-06-30',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Aspirin',
            'stock' => 150,
            'expiry_date' => '2026-12-18',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Losartan',
            'stock' => 80,
            'expiry_date' => '2028-04-22',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Simvastatin',
            'stock' => 110,
            'expiry_date' => '2028-02-28',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Amlodipine',
            'stock' => 95,
            'expiry_date' => '2027-05-19',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Mefenamic Acid',
            'stock' => 60,
            'expiry_date' => '2027-12-04',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Montelukast',
            'stock' => 45,
            'expiry_date' => '2027-04-09',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Prednisone',
            'stock' => 65,
            'expiry_date' => '2027-01-30',
            'type_id' => $a->id,
            'is_available' => true,
        ]);

        
        Medicine::create([
            'name' => 'Amoxicillin',
            'stock' => 50,
            'expiry_date' => '2026-08-10',
            'type_id' => $b->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Omeprazole',
            'stock' => 90,
            'expiry_date' => '2027-09-12',
            'type_id' => $b->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Azithromycin',
            'stock' => 40,
            'expiry_date' => '2026-07-14',
            'type_id' => $b->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Ciprofloxacin',
            'stock' => 25,
            'expiry_date' => '2026-09-25',
            'type_id' => $b->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Vitamin C (Ascorbic Acid)',
            'stock' => 250,
            'expiry_date' => '2028-05-15',
            'type_id' => $b->id,
            'is_available' => true,
        ]);

        
        Medicine::create([
            'name' => 'Cetirizine Syrup',
            'stock' => 120,
            'expiry_date' => '2028-01-05',
            'type_id' => $c->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Salbutamol Syrup',
            'stock' => 30,
            'expiry_date' => '2027-10-01',
            'type_id' => $c->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Multivitamin Syrup',
            'stock' => 180,
            'expiry_date' => '2028-08-11',
            'type_id' => $c->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Loratadine Syrup',
            'stock' => 130,
            'expiry_date' => '2028-06-17',
            'type_id' => $c->id,
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Metoclopramide Syrup',
            'stock' => 55,
            'expiry_date' => '2027-07-21',
            'type_id' => $c->id,
            'is_available' => true,
        ]);
    }
}