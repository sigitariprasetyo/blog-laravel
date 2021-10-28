<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sigit Ari Prasetyo',
            'username' => 'sigit.ari',
            'email' => 'sigitari111@gmail.com',
            'password' => bcrypt(123456)
        ]);
        // User::create([
        //     'name' => 'Reyna Utari',
        //     'email' => 'reyna@gmail.com',
        //     'password' => bcrypt(123456)
        // ]);

        User::factory(4)->create();

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid nostrum accusamus sequi adipisci quibusdam,ipsum dolor sit amet consectetur adipisicing elit.',
        //     'slug' => 'judul-pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid nostrum accusamus sequi adipisci quibusdam, odio quam doloribus blanditiis. Sequi deleniti asperiores ipsam error blanditiis sint aliquid ad vero labore sapiente quam mollitia et libero magnam quia, totam beatae.</p> <p>Eligendi sunt minima debitis explicabo reprehenderit pariatur at recusandae, nostrum doloremque expedita non itaque eum similique ipsa libero veniam ad est dolorum soluta. Facere impedit vitae molestias quia assumenda harum rerum, sint maiores quae eos aperiam quis adipisci error nobis aliquid ea cumque facilis vel dicta hic ratione rem? Obcaecati, iusto velit aperiam perferendis sequi at, minima eligendi exercitationem ducimus porro excepturi nihil aut inventore itaque saepe culpa dolorem ipsa consectetur optio alias! Exercitationem hic nemo tenetur doloremque, quas molestiae eligendi, sequi deleniti voluptatibus rem soluta sed qui facere officia necessitatibus provident! Et beatae eius voluptatem, dolores doloremque tempore minus ipsum adipisci, fuga quam porro omnis iste explicabo cum nemo iusto!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolore nam eveniet asperiores consequuntur optio ratione eius quam aperiam maxime natus omnis sit recusandae quod, modi harum voluptas beatae itaque?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid nostrum accusamus sequi adipisci quibusdam,ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid nostrum accusamus sequi adipisci quibusdam,',
        //     'slug' => 'judul-kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid nostrum accusamus sequi adipisci quibusdam, odio quam doloribus blanditiis. Sequi deleniti asperiores ipsam error blanditiis sint aliquid ad vero labore sapiente quam mollitia et libero magnam quia, totam beatae.</p> <p>Eligendi sunt minima debitis explicabo reprehenderit pariatur at recusandae, nostrum doloremque expedita non itaque eum similique ipsa libero veniam ad est dolorum soluta. Facere impedit vitae molestias quia assumenda harum rerum, sint maiores quae eos aperiam quis adipisci error nobis aliquid ea cumque facilis vel dicta hic ratione rem? Obcaecati, iusto velit aperiam perferendis sequi at, minima eligendi exercitationem ducimus porro excepturi nihil aut inventore itaque saepe culpa dolorem ipsa consectetur optio alias! Exercitationem hic nemo tenetur doloremque, quas molestiae eligendi, sequi deleniti voluptatibus rem soluta sed qui facere officia necessitatibus provident! Et beatae eius voluptatem, dolores doloremque tempore minus ipsum adipisci, fuga quam porro omnis iste explicabo cum nemo iusto!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolore nam eveniet asperiores consequuntur optio ratione eius quam aperiam maxime natus omnis sit recusandae quod, modi harum voluptas beatae itaque?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid nostrum accusamus sequi adipisci quibusdam,ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid nostrum accusamus sequi adipisci quibusdam, Facere impedit vitae molestias quia assumenda harum rerum,',
        //     'slug' => 'judul-ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid nostrum accusamus sequi adipisci quibusdam, odio quam doloribus blanditiis. Sequi deleniti asperiores ipsam error blanditiis sint aliquid ad vero labore sapiente quam mollitia et libero magnam quia, totam beatae.</p> <p>Eligendi sunt minima debitis explicabo reprehenderit pariatur at recusandae, nostrum doloremque expedita non itaque eum similique ipsa libero veniam ad est dolorum soluta. Facere impedit vitae molestias quia assumenda harum rerum, sint maiores quae eos aperiam quis adipisci error nobis aliquid ea cumque facilis vel dicta hic ratione rem? Obcaecati, iusto velit aperiam perferendis sequi at, minima eligendi exercitationem ducimus porro excepturi nihil aut inventore itaque saepe culpa dolorem ipsa consectetur optio alias! Exercitationem hic nemo tenetur doloremque, quas molestiae eligendi, sequi deleniti voluptatibus rem soluta sed qui facere officia necessitatibus provident! Et beatae eius voluptatem, dolores doloremque tempore minus ipsum adipisci, fuga quam porro omnis iste explicabo cum nemo iusto!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolore nam eveniet asperiores consequuntur optio ratione eius quam aperiam maxime natus omnis sit recusandae quod, modi harum voluptas beatae itaque?</p>'
        // ]);
    }
}
