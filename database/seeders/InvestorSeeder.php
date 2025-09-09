<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvestorSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                "id" => 1,
                "name" => "Dwight Cormier",
                "email" => "etillman@example.org",
                "contact_number" => "rerum",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 2,
                "name" => "Murray Haley",
                "email" => "ozieme@example.org",
                "contact_number" => "similique",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 3,
                "name" => "Zoe Parker",
                "email" => "macejkovic.shanon@example.com",
                "contact_number" => "non",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 4,
                "name" => "Ms. Amara Frami Jr.",
                "email" => "rahul.cremin@example.org",
                "contact_number" => "in",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 5,
                "name" => "Foster Schowalter",
                "email" => "bshields@example.org",
                "contact_number" => "impedit",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 6,
                "name" => "Tania Luettgen",
                "email" => "kaylie01@example.com",
                "contact_number" => "fugit",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 7,
                "name" => "Suzanne Anderson",
                "email" => "jstehr@example.org",
                "contact_number" => "voluptas",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 8,
                "name" => "Francisca Wunsch",
                "email" => "godfrey.kuhlman@example.net",
                "contact_number" => "et",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 9,
                "name" => "Prof. Frederique Stoltenberg",
                "email" => "theresa.cummerata@example.net",
                "contact_number" => "aliquam",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ],
            [
                "id" => 10,
                "name" => "Fabian Hodkiewicz",
                "email" => "reynolds.jazlyn@example.net",
                "contact_number" => "aut",
                "created_at" => "2025-09-09 02:12:16",
                "updated_at" => "2025-09-09 02:12:16"
            ]
        ];

        foreach ($data as $row) {
            DB::table('investors')->updateOrInsert(['id' => $row['id']], $row);
        }
    }
}
