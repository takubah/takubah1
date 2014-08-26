<?php

class OptionsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('options')->truncate();
		
		$options = [
			// Web
			[
				'name'			=> 'web_title',
				'description'	=> 'Your website title',
				'value'			=> 'My Website',
				'type'			=> '',
			],
			[
				'name'			=> 'web_email',
				'description'	=> 'Your website email, for email system',
				'value'			=> 'name@gmail.com',
				'type'			=> '',
			],
			[
				'name'			=> 'web_logo',
				'description'	=> 'Your website logo',
				'value'			=> json_encode([
					'small'	=> [
						'file'		=> 'logo.png',
						'mime'		=> 'image/png',
					],
					'medium' => [
						'file'		=> 'logo.png',
						'mime'		=> 'image/png',
					],
					'favicon' => [
						'file'		=> 'logo.ico',
						'mime'		=> 'image/ico',
					],
				]),
				'type'			=> 'json',
			],
			[
				'name'			=> 'web_location',
				'description'	=> 'Your website google maps location',
				'value'			=> '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.74453749257185!2d112.73792683505405!3d-7.245813755163173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x17880de8f5b6c07f!2sMonumen+Tugu+Pahlawan!5e0!3m2!1sen!2sid!4v1409005409994" width="600" height="450" frameborder="0" style="border:0"></iframe>',
				'type'			=> '',
			],
			[
				'name'			=> 'web_address',
				'description'	=> 'Your website address text',
				'value'			=> 'Indonesia, Surabaya, Simo Gunung Barat Tol',
				'type'			=> '',
			],
			[
				'name'			=> 'web_contact',
				'description'	=> 'Your website contact',
				'value'			=> json_encode([
					[
						'type' => 'phone',
						'name' => 'Customer Service',
						'description' => 'Sms Only',
						'value' => '+6285649787899',
					],
					[
						'type' => 'Pin BBM',
						'name' => 'Customer Service',
						'description' => 'Sms Only',
						'value' => '+6285649787899',
					],
				]),
				'type'			=> 'json',
			],
			[
				'name'			=> 'web_facebook',
				'description'	=> 'Your website facebook url',
				'value'			=> json_encode([
					'url'	=> 'http://www.facebook.com'
				]),
				'type'			=> 'json',
			],
			[
				'name'			=> 'web_twitter',
				'description'	=> 'Your website twitter url',
				'value'			=> json_encode([
					'url'	=> 'http://www.twitter.com'
				]),
				'type'			=> 'json',
			],
			[
				'name'			=> 'web_owner',
				'description'	=> 'Owner of this website',
				'value'			=> json_encode([
					'name'	=> 'John Doe',
					'email'	=> 'john@gmail.com',
					'description' => 'Web Developer at Surabaya, Simo'
				]),
				'type'			=> 'json',
			],
			[
				'name'			=> 'web_meta_title',
				'description'	=> 'your website meta title',
				'value'			=> 'My Awesome Website',
				'type'			=> '',
			],
			[
				'name'			=> 'web_meta_keyword',
				'description'	=> 'your website meta keyword',
				'value'			=> 'My Awesome Company Website',
				'type'			=> '',
			],
			[
				'name'			=> 'web_meta_description',
				'description'	=> 'your website meta description',
				'value'			=> 'My Awesome Company Website who services Event Organizer, MC, and other...',
				'type'			=> '',
			],
			// End Web

			
			// Media
			[
				'name'			=> 'media_image_watermark',
				'description'	=> 'your media image watermark ?',
				'value'			=> 'watermark.jpg',
				'type'			=> '',
			],
			[
				'name'			=> 'media_image_thumbnail',
				'description'	=> 'your media image thumbnail size',
				'value'			=> json_encode([
					'width' => '300px',
					'height' => '300px',
				]),
				'type'			=> 'json',
			],
			[
				'name'			=> 'media_image_large',
				'description'	=> 'your media image thumbnail size',
				'value'			=> json_encode([
					'width' => '720px',
					'height' => null,
				]),
				'type'			=> 'json',
			],
			[
				'name'			=> 'media_image_constraint',
				'description'	=> 'Image Large Size in pixel',
				'value'			=> json_encode([
					'aspectRatio' 	=> 1,
					'upsize' 		=> 1,
				]),
				'type'			=> 'json',
			],
			[
				'name'			=> 'media_image_default',
				'description'	=> 'Image Large Size in pixel',
				'value'			=> 'default.jpg',
				'type'			=> '',
			],
			// End Media


			// Post
			[
				'name'			=> 'post_perPage',
				'description'	=> 'default Post list per page',
				'value'			=> 10,
				'type'			=> '',
			],
			[
				'name'			=> 'post_sortir',
				'description'	=> 'default Post sortir',
				'value'			=> 'new',
				'type'			=> '',
			],
			// End Post
		];

		DB::table('options')->insert($options);
	}
}