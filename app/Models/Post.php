<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Muhyiddin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aspernatur qui assumenda consequuntur animi mollitia eius cumque, maiores iusto eum veritatis, odit est illum molestiae beatae, vitae dolores blanditiis illo tempora voluptatibus magnam laborum fuga! Ad, esse ducimus iure deserunt illo est sunt velit quod, quidem placeat, non maxime! Rerum ad sunt nemo molestiae obcaecati distinctio impedit error voluptates iste, eligendi vitae corporis odit soluta architecto voluptas velit eveniet laborum delectus nihil, aliquid ex magni? Deserunt ex rem quaerat sed."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah ",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, fuga atque accusamus ad doloribus maxime dolor modi, quibusdam ut qui quis repellat animi eum sed corporis quidem unde obcaecati labore odit excepturi sapiente optio vel! Autem, aspernatur ea? Facere deserunt quos reiciendis quisquam eius quo iure cupiditate aut ut nemo distinctio possimus quibusdam illum quae laboriosam consequuntur ex dolorem ea, perferendis modi incidunt aperiam dolor. Deleniti nesciunt assumenda voluptatem nobis. Ab voluptates, distinctio et quaerat modi adipisci placeat nesciunt sequi laboriosam fugiat? Laudantium iusto aperiam animi sequi numquam temporibus, esse possimus quae odit, nostrum, veniam dicta fuga sed cum tempora."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts); 
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
