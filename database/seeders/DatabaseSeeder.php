<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
 
        User::create([
            'name' => 'Azka Hanifassalam Rabbani',
            'username' => 'azka',
            'email' => 'azkahar@gmail.com',
            'password' => bcrypt('password'),
        ]);
        
        // User::create([
        //     'name' => 'Jerome Irwanto',
        //     'email' => 'jerome@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptate, nulla possimus ut minus harum, rerum officia a corporis saepe quod!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptate, nulla possimus ut minus harum, rerum officia a corporis saepe quod! Reprehenderit eaque facere in repellendus praesentium, non quia tempore aspernatur aliquid commodi deserunt minus. Suscipit, odio minima? Deserunt excepturi hic, enim dolores iusto magnam quae commodi repudiandae! Soluta rem impedit atque, nisi possimus quos sed veritatis harum unde cupiditate suscipit hic esse. Accusamus magni excepturi voluptas illo aliquid fugit ducimus tempora omnis eaque exercitationem, hic vitae. Excepturi necessitatibus illum, dignissimos modi rerum atque voluptatum id unde nemo, porro, doloremque quaerat. Dolore quisquam aperiam adipisci, aspernatur voluptas cumque quas molestiae!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptate, nulla possimus ut minus harum, rerum officia a corporis saepe quod!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptate, nulla possimus ut minus harum, rerum officia a corporis saepe quod! Reprehenderit eaque facere in repellendus praesentium, non quia tempore aspernatur aliquid commodi deserunt minus. Suscipit, odio minima? Deserunt excepturi hic, enim dolores iusto magnam quae commodi repudiandae! Soluta rem impedit atque, nisi possimus quos sed veritatis harum unde cupiditate suscipit hic esse. Accusamus magni excepturi voluptas illo aliquid fugit ducimus tempora omnis eaque exercitationem, hic vitae. Excepturi necessitatibus illum, dignissimos modi rerum atque voluptatum id unde nemo, porro, doloremque quaerat. Dolore quisquam aperiam adipisci, aspernatur voluptas cumque quas molestiae!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptate, nulla possimus ut minus harum, rerum officia a corporis saepe quod!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptate, nulla possimus ut minus harum, rerum officia a corporis saepe quod! Reprehenderit eaque facere in repellendus praesentium, non quia tempore aspernatur aliquid commodi deserunt minus. Suscipit, odio minima? Deserunt excepturi hic, enim dolores iusto magnam quae commodi repudiandae! Soluta rem impedit atque, nisi possimus quos sed veritatis harum unde cupiditate suscipit hic esse. Accusamus magni excepturi voluptas illo aliquid fugit ducimus tempora omnis eaque exercitationem, hic vitae. Excepturi necessitatibus illum, dignissimos modi rerum atque voluptatum id unde nemo, porro, doloremque quaerat. Dolore quisquam aperiam adipisci, aspernatur voluptas cumque quas molestiae!',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptate, nulla possimus ut minus harum, rerum officia a corporis saepe quod!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptate, nulla possimus ut minus harum, rerum officia a corporis saepe quod! Reprehenderit eaque facere in repellendus praesentium, non quia tempore aspernatur aliquid commodi deserunt minus. Suscipit, odio minima? Deserunt excepturi hic, enim dolores iusto magnam quae commodi repudiandae! Soluta rem impedit atque, nisi possimus quos sed veritatis harum unde cupiditate suscipit hic esse. Accusamus magni excepturi voluptas illo aliquid fugit ducimus tempora omnis eaque exercitationem, hic vitae. Excepturi necessitatibus illum, dignissimos modi rerum atque voluptatum id unde nemo, porro, doloremque quaerat. Dolore quisquam aperiam adipisci, aspernatur voluptas cumque quas molestiae!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

    }
}
