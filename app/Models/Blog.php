<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog 
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul post pertama",
            "author" => "Bayu aditya",
            "body" => " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga ea illo labore pariatur expedita aspernatur unde maiores obcaecati quia laboriosam. ",
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul post pertama",
            "author" => "aira",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid laudantium illum inventore vitae? Earum doloremque nihil, quidem laudantium sapiente itaque. ",
        ]
        ];
        public static function all()
        {
            return self::$blog_posts;
        
        }
        public static function getBySlack($slack)
        {
            foreach (self::$blog_posts as $post){
                if ($post['slug'] === $slack){
                    return $post;
                }
            }
            return null; 
        }
}
