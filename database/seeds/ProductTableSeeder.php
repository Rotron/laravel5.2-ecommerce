<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 			=> 'Playera 1',
				'slug' 			=> 'playera-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 27.00,
				'image' 		=> 'https://static1.squarespace.com/static/5306de99e4b041485bbf2c7c/53614c7be4b009fc8482e5fc/548673b3e4b062e01ab127bb/1418097588794/CamoStars.jpg?format=500w',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Playera 2',
				'slug' 			=> 'playera-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 25.00,
				'image' 		=> 'https://static1.squarespace.com/static/5306de99e4b041485bbf2c7c/53614c7be4b009fc8482e5fc/539f8a94e4b0212a40656343/1402964630564/Risk.jpg?format=500w',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Playera 3',
				'slug' 			=> 'playera-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 30.00,
				'image' 		=> 'https://static1.squarespace.com/static/5306de99e4b041485bbf2c7c/53614c7be4b009fc8482e5fc/539f89efe4b01da0d6a9cf53/1451615309273/Dreamerz.jpg?format=1000w',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Playera 4',
				'slug' 			=> 'playera-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 47.00,
				'image' 		=> 'https://static1.squarespace.com/static/5306de99e4b041485bbf2c7c/53614c7be4b009fc8482e5fc/539f8a0be4b01da0d6a9cf80/1451615346238/NeverStop.jpg?format=500w',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Playera 5',
				'slug' 			=> 'playera-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 28.00,
				'image' 		=> 'https://static1.squarespace.com/static/5306de99e4b041485bbf2c7c/53614c7be4b009fc8482e5fc/55273842e4b0ed599e33aaa7/1428633669818/StraightEvolHat.jpg?format=500w',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Playera 6',
				'slug' 			=> 'playera-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 27.50,
				'image' 		=> 'https://static1.squarespace.com/static/5306de99e4b041485bbf2c7c/53614c7be4b009fc8482e5fc/551e0897e4b0d9e1728adca4/1428031640254/ForeverSparkleTank.jpg?format=500w',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Playera 7',
				'slug' 			=> 'playera-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 27.50,
				'image' 		=> 'https://static1.squarespace.com/static/5306de99e4b041485bbf2c7c/53614c7be4b009fc8482e5fc/551e087ce4b0d9e1728adc1b/1428031614339/DreamsomniaMintT.jpg?format=500w',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Playera 8',
				'slug' 			=> 'playera-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 27.50,
				'image' 		=> 'https://static1.squarespace.com/static/5306de99e4b041485bbf2c7c/53614c7be4b009fc8482e5fc/539f8c11e4b0514810bf5f8f/1426109397044/TryAngleYellow.jpg?format=500w',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			
		);

		Product::insert($data);
    }
}
