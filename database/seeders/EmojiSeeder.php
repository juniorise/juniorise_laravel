<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EmojiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reaction_emoji')->insert(array (
            0 => array(
                'id' => 1,
                'emojiName' => 'like',
                'emojiImage' => '👍'
            ),
            1 => array(
                'id' => 2,
                'emojiName' => 'dislike',
                'emojiImage' => '👎'
            ),
            2 => array(
                'id' => 3,
                'emojiName' => 'love',
                'emojiImage' => '❤️'
            ),
            3 => array(
                'id' => 4,
                'emojiName' => 'clap',
                'emojiImage' => '👏'
            )
        ));
    }
}
