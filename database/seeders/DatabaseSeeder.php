<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      // User::create([
      //   'name' => 'Hanasa',
      //   'email' => 'hanasa@gmail.com',
      //   'password' => bcrypt('12')
      // ]);

      // User::create([
      //   'name' => 'Anisa',
      //   'email' => 'anisa@gmail.com',
      //   'password' => bcrypt('13')
      // ]);

      Category::create([
        'name' => 'Cake',
        'slug' => 'cake'
      ]);
      Category::create([
        'name' => 'Candy',
        'slug' => 'candy'
      ]);

      Post::factory(25)->create();
      /*
      Post::create([
        'title' => 'Macaroon cookie',
        'user_id' => 1,
        'category_id' => 1,
        'slug' => 'macaroon-cookie',
        'excerpt' => 'Macaroon cookie ice cream chupa chups sugar plum donut. Cotton candy fruitcake gingerbread dessert wafer. Apple pie soufflé biscuit oat cake dessert gummi bears. Sesame snaps jujubes ice cream jujubes powder. Lemon drops jelly beans dessert chocolate cake icing donut dragée sesame snaps. Oat cake danish carrot cake gingerbread chocolate bar caramels marshmallow marshmallow.',
        'body' => '<p>Macaroon cookie ice cream chupa chups sugar plum donut. Cotton candy fruitcake gingerbread dessert wafer. Apple pie soufflé biscuit oat cake dessert gummi bears. Sesame snaps jujubes ice cream jujubes powder. Lemon drops jelly beans dessert chocolate cake icing donut dragée sesame snaps. Oat cake danish carrot cake gingerbread chocolate bar caramels marshmallow marshmallow. I love donut liquorice chocolate cotton candy. Candy I love sweet roll ice cream sugar plum. I love gummies cheesecake muffin topping. I love jelly-o sweet macaroon I love cotton candy. I love chocolate bar powder marzipan biscuit danish fruitcake. Apple pie cheesecake donut danish pudding chocolate cake I love gummi bears liquorice. Icing I love jelly beans marshmallow topping cheesecake cake. Marzipan sesame snaps fruitcake oat cake powder.</p><p>Marshmallow chupa chups biscuit jelly-o soufflé ice cream. Shortbread jujubes soufflé topping bear claw jujubes pudding. Liquorice gummi bears sugar plum tootsie roll tart. Muffin candy canes apple pie bear claw halvah I love. Candy chocolate cake candy candy canes candy powder biscuit I love tootsie roll. I love I love cupcake powder halvah brownie. Jelly-o cotton candy sugar plum sweet roll I love soufflé topping. I love biscuit dessert cupcake carrot cake cheesecake chocolate cake pastry biscuit. Powder soufflé icing halvah I love carrot cake pudding cotton candy. Powder toffee donut carrot cake jelly I love wafer jelly. Powder bonbon marshmallow muffin bear claw carrot cake bonbon soufflé croissant. Carrot cake cheesecake muffin tootsie roll jelly-o croissant chupa chups shortbread. Tootsie roll oat cake lemon drops tiramisu bonbon.</p><p>Danish pudding chocolate cake cotton candy macaroon sugar plum donut I love. Pudding ice cream oat cake soufflé gingerbread candy sweet roll candy canes. Shortbread chocolate bar sugar plum chocolate cake biscuit sweet carrot cake. Sweet roll donut bear claw tiramisu cheesecake tiramisu lollipop chocolate cake tootsie roll. Chocolate cotton candy dragée lollipop powder dragée I love cake muffin. Toffee pie halvah biscuit liquorice. I love bonbon lemon drops candy canes chocolate. Croissant I love candy canes pastry donut cookie gingerbread lollipop wafer. I love chocolate sweet roll marzipan cupcake oat cake I love tiramisu jujubes. Dessert marzipan jelly croissant I love. Jelly beans pudding cupcake powder caramels fruitcake dessert. Cotton candy powder topping tootsie roll dessert jelly lollipop.</p>'
      ]);
      Post::create([
        'title' => 'Tootsie roll pastry',
        'user_id' => 2,
        'category_id' => 2,
        'slug' => 'Tootsie-roll-pastry',
        'excerpt' => 'Tootsie roll pastry pastry marzipan chocolate cake marshmallow I love. Soufflé sweet roll liquorice sugar plum marzipan. Dragée cake chocolate cake dessert toffee danish biscuit donut icing. Cupcake I love jelly muffin marzipan. Halvah toffee lollipop shortbread jelly beans liquorice candy candy canes chocolate cake. Soufflé marzipan pastry ice cream chupa chups biscuit cupcake macaroon lemon drops. Macaroon gummies danish gingerbread sesame snaps tootsie roll carrot cake sesame snaps.',
        'body' => '<p>Tootsie roll pastry pastry marzipan chocolate cake marshmallow I love. Soufflé sweet roll liquorice sugar plum marzipan. Dragée cake chocolate cake dessert toffee danish biscuit donut icing. Cupcake I love jelly muffin marzipan. Halvah toffee lollipop shortbread jelly beans liquorice candy candy canes chocolate cake. Soufflé marzipan pastry ice cream chupa chups biscuit cupcake macaroon lemon drops. Macaroon gummies danish gingerbread sesame snaps tootsie roll carrot cake sesame snaps. Fruitcake pastry liquorice I love fruitcake powder. I love macaroon shortbread jelly-o pie marzipan bear claw croissant sesame snaps. Topping chocolate bar marshmallow marshmallow halvah lemon drops danish. Shortbread I love sugar plum pastry jujubes. I love ice cream chocolate bar cake powder sweet ice cream marzipan cotton candy. Lollipop halvah gummi bears halvah cake marshmallow apple pie.</p><p>I love tiramisu bear claw chocolate bar wafer ice cream. Cupcake pastry bonbon powder wafer I love. I love pastry chupa chups wafer jelly beans carrot cake halvah powder apple pie. Sesame snaps tart pie I love cake gummi bears icing candy canes wafer. Cookie topping topping shortbread marshmallow. Jelly oat cake sugar plum sweet roll I love carrot cake chupa chups I love sweet. I love sesame snaps jelly shortbread dessert shortbread I love powder carrot cake. I love gummies biscuit danish I love lollipop. Jelly gummi bears sugar plum croissant wafer dragée. Chocolate jelly-o lollipop cake dragée I love jelly I love biscuit. Cookie jelly-o shortbread sweet roll chupa chups toffee sugar plum I love. Apple pie pudding I love sugar plum lemon drops jelly chocolate cake. Dragée liquorice brownie biscuit cake dessert I love jujubes wafer.</p><p>Sweet candy brownie gingerbread sesame snaps cookie. I love halvah croissant cookie chocolate bar topping chupa chups. Liquorice cookie sugar plum candy donut. Carrot cake wafer gummi bears gingerbread oat cake marzipan icing I love soufflé. Jelly cake powder macaroon sugar plum sugar plum. Croissant apple pie carrot cake macaroon toffee oat cake jujubes. Topping I love chocolate cake liquorice danish. Bear claw I love pudding halvah marshmallow macaroon lollipop. Icing cake jujubes pastry candy gummi bears chupa chups. I love sugar plum chocolate bar topping danish icing tiramisu I love. Candy canes sweet roll shortbread chocolate bar toffee jelly beans. Cookie tiramisu gummies brownie chupa chups topping gummi bears halvah jelly-o. Sweet lollipop cotton candy I love croissant. Dessert I love lollipop cheesecake marzipan cake toffee pudding I love.</p>'
      ]);
      Post::create([
        'title' => 'Cake croissant',
        'user_id' => 1,
        'category_id' => 1,
        'slug' => 'cake-croissant',
        'excerpt' => 'Cake croissant I love donut dessert caramels shortbread. I love halvah sesame snaps I love gummi bears chocolate cake chupa chups. I love I love tart donut liquorice oat cake sweet roll. ',
        'body' => '<p>Cake croissant I love donut dessert caramels shortbread. I love halvah sesame snaps I love gummi bears chocolate cake chupa chups. I love I love tart donut liquorice oat cake sweet roll. Icing I love apple pie pudding I love chocolate I love sugar plum apple pie. Cupcake topping gummies cupcake gummi bears. Lemon drops shortbread jelly-o wafer sweet roll biscuit. I love jelly beans biscuit cake danish. Liquorice gummies icing I love cake apple pie. Donut oat cake marshmallow marzipan I love croissant tootsie roll. Bear claw I love soufflé lollipop lollipop cake marshmallow macaroon muffin. Soufflé bear claw I love I love candy jelly-o toffee halvah donut. Cheesecake muffin caramels jujubes chocolate carrot cake. Sweet roll brownie topping cookie gingerbread chocolate I love pastry.</p><p>Bear claw jelly beans I love cookie sugar plum. Shortbread croissant candy canes gummi bears gummi bears. Muffin marzipan I love halvah oat cake pastry. Powder cake gummi bears chocolate donut. Jujubes icing tiramisu shortbread lollipop I love. Danish icing candy canes cake halvah toffee tootsie roll tootsie roll chocolate cake. Liquorice icing lollipop brownie chocolate cake I love. Sweet chocolate sweet roll sesame snaps ice cream marshmallow tart macaroon wafer. Wafer gummi bears fruitcake sesame snaps gummi bears tootsie roll. Topping bear claw pastry cookie sesame snaps pudding sweet roll. Biscuit I love lemon drops sugar plum chupa chups. Jujubes tart caramels sweet marshmallow I love cookie. Bonbon halvah carrot cake brownie I love cupcake toffee topping. Gummi bears cotton candy sweet tiramisu chocolate fruitcake lollipop I love.</p><p>Danish candy canes biscuit pastry bear claw dessert ice cream dragée cupcake. Soufflé sugar plum candy sugar plum cotton candy I love halvah jujubes chocolate bar. Toffee tart fruitcake candy canes jelly beans marshmallow powder I love candy. Cookie cookie jujubes jelly-o I love fruitcake dragée. Soufflé marzipan lollipop cheesecake jelly beans I love icing I love. Halvah I love halvah donut candy dessert. Icing halvah halvah gummies dragée. Gummi bears shortbread I love marshmallow marshmallow gingerbread brownie lemon drops toffee. Gummies gummies wafer wafer candy canes. Gummies croissant tart jelly beans topping macaroon I love. I love chocolate bar I love biscuit cotton candy soufflé I love. Chocolate cotton candy cupcake I love pastry marzipan. Dessert tiramisu macaroon sweet chocolate lollipop fruitcake shortbread.</p>'
      ]);
      */
    }
}
