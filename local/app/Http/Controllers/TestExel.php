<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\test;
class TestExel extends Controller
{
	public function getExel(){
		$data = [
			[
				'name' => 'Povilas',
				'surname' => 'Korop',
				'email' => 'povilas@laraveldaily.com',
				'twitter' => '@povilaskorop'
			],
			[
				'name' => 'Taylor',
				'surname' => 'Otwell',
				'email' => 'taylor@laravel.com',
				'twitter' => '@taylorotwell'
			]
		];
		Excel::fake();

		$this->actingAs($this->givenUser())
		->get('/invoices/store/xlsx');

		Excel::assertStored('filename.xlsx', 'diskName');
		// return Excel::download(new test($data), 'invoices.xlsx');
		Excel::assertStored('filename.xlsx', 'diskName',new test($data));
	}
}
