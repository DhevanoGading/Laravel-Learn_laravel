<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Dhevano Gading',
        //     'email' => 'dhevanogading@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Muhammad Gading',
        //     'email' => 'muhammadgading@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
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
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium, sint expedita voluptas, aut ea consequatur ullam illum illo atque velit inventore sapiente harum at error. Officia, ad. Fuga esse fugiat neque! Distinctio explicabo dolorum laborum ipsa necessitatibus cupiditate adipisci nihil, impedit doloremque iste eveniet eaque iusto assumenda, dicta fugit eos voluptatibus, blanditiis sit voluptate commodi porro. Accusamus facilis obcaecati nulla similique deleniti nobis, magni laboriosam consectetur! Delectus odio totam sint illum sunt porro cupiditate repellat, cumque mollitia ullam laudantium, itaque esse sit culpa quod? Excepturi laboriosam reiciendis voluptate aliquid rem nobis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium, sint expedita voluptas, aut ea consequatur ullam illum illo atque velit inventore sapiente harum at error. Officia, ad. Fuga esse fugiat neque! Distinctio explicabo dolorum laborum ipsa necessitatibus cupiditate adipisci nihil, impedit doloremque iste eveniet eaque iusto assumenda, dicta fugit eos voluptatibus, blanditiis sit voluptate commodi porro. Accusamus facilis obcaecati nulla similique deleniti nobis, magni laboriosam consectetur! Delectus odio totam sint illum sunt porro cupiditate repellat, cumque mollitia ullam laudantium, itaque esse sit culpa quod? Excepturi laboriosam reiciendis voluptate aliquid rem nobis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium, sint expedita voluptas, aut ea consequatur ullam illum illo atque velit inventore sapiente harum at error. Officia, ad. Fuga esse fugiat neque! Distinctio explicabo dolorum laborum ipsa necessitatibus cupiditate adipisci nihil, impedit doloremque iste eveniet eaque iusto assumenda, dicta fugit eos voluptatibus, blanditiis sit voluptate commodi porro. Accusamus facilis obcaecati nulla similique deleniti nobis, magni laboriosam consectetur! Delectus odio totam sint illum sunt porro cupiditate repellat, cumque mollitia ullam laudantium, itaque esse sit culpa quod? Excepturi laboriosam reiciendis voluptate aliquid rem nobis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium, sint expedita voluptas, aut ea consequatur ullam illum illo atque velit inventore sapiente harum at error. Officia, ad. Fuga esse fugiat neque! Distinctio explicabo dolorum laborum ipsa necessitatibus cupiditate adipisci nihil, impedit doloremque iste eveniet eaque iusto assumenda, dicta fugit eos voluptatibus, blanditiis sit voluptate commodi porro. Accusamus facilis obcaecati nulla similique deleniti nobis, magni laboriosam consectetur! Delectus odio totam sint illum sunt porro cupiditate repellat, cumque mollitia ullam laudantium, itaque esse sit culpa quod? Excepturi laboriosam reiciendis voluptate aliquid rem nobis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
    // Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse assumenda aspernatur porro, saepe libero sunt repellendus praesentium, sint expedita voluptas, aut ea consequatur ullam illum illo atque velit inventore sapiente harum at error. Officia, ad. Fuga esse fugiat neque! Distinctio explicabo dolorum laborum ipsa necessitatibus cupiditate adipisci nihil, impedit doloremque iste eveniet eaque iusto assumenda, dicta fugit eos voluptatibus, blanditiis sit voluptate commodi porro. Accusamus facilis obcaecati nulla similique deleniti nobis, magni laboriosam consectetur! Delectus odio totam sint illum sunt porro cupiditate repellat, cumque mollitia ullam laudantium, itaque esse sit culpa quod? Excepturi laboriosam reiciendis voluptate aliquid rem nobis.
}
