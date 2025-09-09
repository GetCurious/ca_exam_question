<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FundSeeder extends Seeder
{
	public function run(): void
	{
		$data = [
			[
				"id" => 1,
				"name" => "Fixed Deposit",
				"created_at" => "2025-09-03 04:01:51",
				"updated_at" => "2025-09-03 04:01:51"
			],
			[
				"id" => 2,
				"name" => "Trustee",
				"created_at" => "2025-09-03 04:01:51",
				"updated_at" => "2025-09-03 04:01:51"
			],
			[
				"id" => 3,
				"name" => "Family Trust",
				"created_at" => "2025-09-03 04:01:51",
				"updated_at" => "2025-09-03 04:01:51"
			],
			[
				"id" => 4,
				"name" => "KLSE Bond",
				"created_at" => "2025-09-09 02:10:07",
				"updated_at" => "2025-09-09 02:10:07"
			],
			[
				"id" => 5,
				"name" => "ETF",
				"created_at" => "2025-09-09 02:10:07",
				"updated_at" => "2025-09-09 02:10:07"
			],
			[
				"id" => 6,
				"name" => "Blockchain Fund",
				"created_at" => "2025-09-09 02:10:07",
				"updated_at" => "2025-09-09 02:10:07"
			]
		];

		foreach ($data as $row) {
			DB::table('funds')->updateOrInsert(['id' => $row['id']], $row);
		}
	}
}
