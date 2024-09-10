<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'comment' => 'This post is very helpful I liked it.',
                'post_id' => 1,
                'user_id' => 3,
            ],
            [
                'comment' => 'I hope you write more information about this article.',
                'post_id' => 1,
                'user_id' => 4,
            ],
            [
                'comment' => 'This information is not accurate in my opinion.',
                'post_id' => 1,
                'user_id' => 5,
            ],

            [
                'comment' => 'This post is very helpful I liked it.',
                'post_id' => 2,
                'user_id' => 3,
            ],
            [
                'comment' => 'I hope you write more information about this article.',
                'post_id' => 2,
                'user_id' => 4,
            ],
            [
                'comment' => 'This information is not accurate in my opinion.',
                'post_id' => 2,
                'user_id' => 5,
            ],

            [
                'comment' => 'This post is very helpful I liked it.',
                'post_id' => 3,
                'user_id' => 3,
            ],
            [
                'comment' => 'I hope you write more information about this article.',
                'post_id' => 3,
                'user_id' => 4,
            ],
            [
                'comment' => 'This information is not accurate in my opinion.',
                'post_id' => 3,
                'user_id' => 5,
            ],

            [
                'comment' => 'This post is very helpful I liked it.',
                'post_id' => 4,
                'user_id' => 3,
            ],
            [
                'comment' => 'I hope you write more information about this article.',
                'post_id' => 4,
                'user_id' => 4,
            ],
            [
                'comment' => 'This information is not accurate in my opinion.',
                'post_id' => 4,
                'user_id' => 5,
            ],

            [
                'comment' => 'This post is very helpful I liked it.',
                'post_id' => 5,
                'user_id' => 3,
            ],
            [
                'comment' => 'I hope you write more information about this article.',
                'post_id' => 5,
                'user_id' => 4,
            ],
            [
                'comment' => 'This information is not accurate in my opinion.',
                'post_id' => 5,
                'user_id' => 5,
            ],

            [
                'comment' => 'This post is very helpful I liked it.',
                'post_id' => 6,
                'user_id' => 3,
            ],
            [
                'comment' => 'I hope you write more information about this article.',
                'post_id' => 6,
                'user_id' => 4,
            ],
            [
                'comment' => 'This information is not accurate in my opinion.',
                'post_id' => 6,
                'user_id' => 5,
            ],
        ]);
    }
}
