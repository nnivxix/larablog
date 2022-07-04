<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
      'title' => 'Home'
    ]);
});

Route::get('/about', function() {
  return view('about', [
    'title' => 'About'
  ]);
});


Route::prefix('/blog')->group(function(){

  Route::get('/', function(){
    $blog_post = [
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
    return view('blogs', [
      'title' => 'Blogs',
      'blogs' => $blog_post
    ]);
  });

  Route::get('/{slug}', function($slug) {
    $blog_post = [
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

    $single = [];

    foreach ($blog_post as $blog) {
      if($blog['slug'] === $slug) {
        $single = $blog;
      }
    }

    return view('blog', [
      'title' => 'single blog',
      'post' => $single,
      'slug' => $slug

    ]);
  });
});
