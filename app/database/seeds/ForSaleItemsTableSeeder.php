<?php

class ForSaleItemsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$forsaleitems = [
			[ 'title' => 'Agu Secco Condom', 'description' => 'Nýr aldrei notaður, Gulur Large', 'price' => '10000', 'sold' => FALSE, 'img' => 'img/forsale/agu_jacket.jpg'],
			[ 'title' => 'Asterisk spelkur', 'description' => 'Notað', 'price' => '25000', 'sold' => FALSE, 'img' => 'img/forsale/asterisk_brace.jpg'],
			[ 'title' => 'Thor Force Kneeguards', 'description' => 'Notað', 'sold' => FALSE, 'price' => '10000', 'img' => 'img/forsale/thor_knee.jpg'],
			[ 'title' => 'Thor Phase buxur', 'description' => 'Notað', 'sold' => FALSE, 'price' => '9000', 'img' => 'img/forsale/thor_pants.jpg'],
			[ 'title' => 'Thor Phase treyja', 'description' => 'Notað', 'sold' => FALSE, 'price' => '3000', 'img' => 'img/forsale/thor_jersey.jpg'],
			[ 'title' => 'Thor Hero goggles', 'description' => 'Notað, matt svört', 'sold' => FALSE, 'price' => '4000', 'img' => 'img/forsale/thor_goggle.jpg'],
			[ 'title' => 'Thor Vault', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2000', 'img' => 'img/forsale/thor_bag.jpg'],
			[ 'title' => 'Thor Race collar', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2500', 'img' => 'img/forsale/thor_collar.jpg'],
			[ 'title' => 'SixSixOne Race Knee-Shin Guard', 'description' => 'Notað', 'sold' => FALSE, 'price' => '3500', 'img' => 'img/forsale/661_knee.jpg'],
			[ 'title' => 'SixSixOne Race Elbow Guard', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2500', 'img' => 'img/forsale/661_elbow.jpg'],
			[ 'title' => 'SixSixOne Pressure Suit', 'description' => 'Notað', 'sold' => FALSE, 'price' => '10000', 'img' => 'img/forsale/661_armor.jpg'],
			[ 'title' => 'SixSixOne Bomber Shorts', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2500', 'img' => 'img/forsale/661_shorts.jpg'],
			[ 'title' => 'Harbinger Knee Pads', 'description' => 'Notað', 'sold' => FALSE, 'price' => '3000', 'img' => 'img/forsale/harbinger_knee.jpg'],
			[ 'title' => 'Harbinger Elbow Pads', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2000', 'img' => 'img/forsale/harbinger_elbow.jpg'],
			[ 'title' => 'Harbinger Wrist Guard', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2000', 'img' => 'img/forsale/harbinger_hand.jpg'],
			[ 'title' => 'Motocross/Enduro Handguards', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2000', 'img' => 'img/forsale/mx_handcover.jpg'],
			[ 'title' => 'CCM Hockey hanskar', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2000', 'img' => 'img/forsale/ccm_helmet.jpg'],
			[ 'title' => 'CCM Hockey hjálmur', 'description' => 'Notað', 'sold' => FALSE, 'price' => '2000', 'img' => 'img/forsale/ccm_gloves.jpg']
			//[ 'title' => '', 'description' => '', 'sold' => FALSE, 'price' => , 'img' => 'img/forsale/'],
		];

		DB::table('forsaleitems')->insert($forsaleitems);
	}

}