<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvestmentSeeder extends Seeder
{
	public function run(): void
	{
		$data = [
			[
				"id" => 1,
				"uid" => "9eac807c-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-01 00:00:00",
				"capital_amount" => "15000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 5,
				"investor_id" => 1
			],
			[
				"id" => 2,
				"uid" => "9eac8400-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-03 00:00:00",
				"capital_amount" => "24000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 3,
				"investor_id" => 1
			],
			[
				"id" => 3,
				"uid" => "9eac849b-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-08-01 00:00:00",
				"capital_amount" => "31000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 6,
				"investor_id" => 2
			],
			[
				"id" => 4,
				"uid" => "9eac8794-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-08-12 00:00:00",
				"capital_amount" => "42000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 6,
				"investor_id" => 2
			],
			[
				"id" => 5,
				"uid" => "9eac87f4-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-08-29 00:00:00",
				"capital_amount" => "50000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 4,
				"investor_id" => 3
			],
			[
				"id" => 6,
				"uid" => "9eac8854-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-05 00:00:00",
				"capital_amount" => "61000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 5,
				"investor_id" => 3
			],
			[
				"id" => 7,
				"uid" => "9eac88ad-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-17 00:00:00",
				"capital_amount" => "73000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 5,
				"investor_id" => 4
			],
			[
				"id" => 8,
				"uid" => "9eac8901-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-07-01 00:00:00",
				"capital_amount" => "82000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 5,
				"investor_id" => 4
			],
			[
				"id" => 9,
				"uid" => "9eac8962-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-07-03 00:00:00",
				"capital_amount" => "91000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 3,
				"investor_id" => 5
			],
			[
				"id" => 10,
				"uid" => "9eac89b6-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-07-08 00:00:00",
				"capital_amount" => "100000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 2,
				"investor_id" => 5
			],
			[
				"id" => 11,
				"uid" => "9eac8a09-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-07-11 00:00:00",
				"capital_amount" => "17000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 5,
				"investor_id" => 6
			],
			[
				"id" => 12,
				"uid" => "9eac8a5b-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-07-21 00:00:00",
				"capital_amount" => "28000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 3,
				"investor_id" => 6
			],
			[
				"id" => 13,
				"uid" => "9eac8aad-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-07-23 00:00:00",
				"capital_amount" => "36000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 3,
				"investor_id" => 7
			],
			[
				"id" => 14,
				"uid" => "9eac8b00-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-07-25 00:00:00",
				"capital_amount" => "47000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 4,
				"investor_id" => 7
			],
			[
				"id" => 15,
				"uid" => "9eac8b51-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-08 00:00:00",
				"capital_amount" => "55000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 4,
				"investor_id" => 8
			],
			[
				"id" => 16,
				"uid" => "9eac8bb0-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-08 00:00:00",
				"capital_amount" => "66000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 4,
				"investor_id" => 8
			],
			[
				"id" => 17,
				"uid" => "9eac8c05-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-08 00:00:00",
				"capital_amount" => "75000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 1,
				"investor_id" => 9
			],
			[
				"id" => 18,
				"uid" => "9eac8c58-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-08 00:00:00",
				"capital_amount" => "88000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 4,
				"investor_id" => 9
			],
			[
				"id" => 19,
				"uid" => "9eac8cab-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-08 00:00:00",
				"capital_amount" => "96000",
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 4,
				"investor_id" => 10
			],
			[
				"id" => 20,
				"uid" => "9eac8cfe-8d22-11f0-b334-02679b003f23",
				"start_date" => "2025-09-09 00:00:00",
				"capital_amount" => "-19000", // Negative investment to test drawdown
				"status" => "active",
				"created_at" => "2025-09-09 02:12:16",
				"updated_at" => "2025-09-09 02:12:16",
				"fund_id" => 4,
				"investor_id" => 10
			]
		];

		foreach ($data as $row) {
			DB::table('investments')->updateOrInsert(['id' => $row['id']], $row);
		}
	}
}
