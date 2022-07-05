<?php

namespace App\Models;

class Post
{
  private static $posts = [
    [
      'title' => 'Post Pertama',
      'slug' => 'post-pertama',
      'author' => 'Hanasa',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis delectus omnis alias placeat obcaecati odit, quod nesciunt minima. Aperiam modi alias, nesciunt autem recusandae, qui unde fugiat harum quod in explicabo, soluta ut velit a officia possimus magni recusandae laudantium optio distinctio quisquam molestias maiores delectus eligendi veritatis, autem, repellat necessitatibus maxime cum. Blanditiis labore itaque animi debitis cupiditate molestias facere ipsam voluptatum incidunt eligendi.vero aut accusantium sit molestiae iusto, vitae sint optio neque blanditiis quas corrupti quisquam. Consequuntur, ipsam ratione! '
    ],
    [
      'title' => 'Post Kedua',
      'slug' => 'post-kedua',
      'author' => 'Sofari',
      'content' => ' Ipsam quis delectus omnis alias placeat obcaecati odit, quod nesciunt minima. Aperiam modi alias, nesciunt autem recusandae, qui unde fugiat vero aut accusantium sit Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur harum quod in explicabo, soluta ut velit a officia possimus magni recusandae laudantium optio distinctio quisquam molestias maiores delectus eligendi veritatis, autem, repellat necessitatibus maxime cum. Blanditiis labore itaque animi debitis cupiditate molestias facere ipsam voluptatum incidunt eligendi. molestiae iusto, vitae sint optio neque blanditiis quas corrupti quisquam. Consequuntur, ipsam ratione! '
    ]
  ];

  public static function all()
  {
    return collect(self::$posts);
  }

  public static function find($slug)
  {
    $posts = self::all();
    // $post = [];

    // foreach ($posts as $p) {
    //   if($p['slug'] === $slug) {
    //     $post = $p;
    //   }
    // }

    return $posts->firstWhere('slug', '===', $slug);
  }
}
