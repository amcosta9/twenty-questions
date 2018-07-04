<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo("Seeding pokemon table.\n");
        DB::table('pokemon')->insert([ 'name' => 'Bulbasaur', 'n_dex_number' => 1, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/2/21/001Bulbasaur.png/500px-001Bulbasaur.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Ivysaur', 'n_dex_number' => 2, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/73/002Ivysaur.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Venusaur', 'n_dex_number' => 3, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/a/ae/003Venusaur.png/500px-003Venusaur.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Charmander', 'n_dex_number' => 4, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/7/73/004Charmander.png/500px-004Charmander.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Charmeleon', 'n_dex_number' => 5, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/4a/005Charmeleon.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Charizard', 'n_dex_number' => 6, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/7/7e/006Charizard.png/500px-006Charizard.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Squirtle', 'n_dex_number' => 7, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/3/39/007Squirtle.png/500px-007Squirtle.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Wartortle', 'n_dex_number' => 8, 'image_url' => 'https://cdn.bulbagarden.net/upload/0/0c/008Wartortle.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Blastoise', 'n_dex_number' => 9, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/0/02/009Blastoise.png/500px-009Blastoise.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Caterpie', 'n_dex_number' => 10, 'image_url' => 'https://cdn.bulbagarden.net/upload/5/5d/010Caterpie.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Metapod', 'n_dex_number' => 11, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/cd/011Metapod.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Butterfree', 'n_dex_number' => 12, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/d/d1/012Butterfree.png/500px-012Butterfree.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Weedle', 'n_dex_number' => 13, 'image_url' => 'https://cdn.bulbagarden.net/upload/d/df/013Weedle.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Kakuna', 'n_dex_number' => 14, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/f/f0/014Kakuna.png/500px-014Kakuna.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Beedrill', 'n_dex_number' => 15, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/6/61/015Beedrill.png/500px-015Beedrill.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Pidgey', 'n_dex_number' => 16, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/5/55/016Pidgey.png/500px-016Pidgey.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Pidgeotto', 'n_dex_number' => 17, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/7/7a/017Pidgeotto.png/500px-017Pidgeotto.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Pidgeot', 'n_dex_number' => 18, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/5/57/018Pidgeot.png/500px-018Pidgeot.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Rattata', 'n_dex_number' => 19, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/4/46/019Rattata.png/500px-019Rattata.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Raticate', 'n_dex_number' => 20, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/f/f4/020Raticate.png/500px-020Raticate.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Spearow', 'n_dex_number' => 21, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/8b/021Spearow.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Fearow', 'n_dex_number' => 22, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/a0/022Fearow.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Ekans', 'n_dex_number' => 23, 'image_url' => 'https://cdn.bulbagarden.net/upload/f/fa/023Ekans.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Arbok', 'n_dex_number' => 24, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/cd/024Arbok.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Pikachu', 'n_dex_number' => 25, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/0/0d/025Pikachu.png/500px-025Pikachu.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Raichu', 'n_dex_number' => 26, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/8/88/026Raichu.png/500px-026Raichu.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Sandshrew', 'n_dex_number' => 27, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/9/9e/027Sandshrew.png/500px-027Sandshrew.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Sandslash', 'n_dex_number' => 28, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/0/0b/028Sandslash.png/500px-028Sandslash.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Nidoran ♀', 'n_dex_number' => 29, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/81/029Nidoran.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Nidorina', 'n_dex_number' => 30, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/cd/030Nidorina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Nidoqueen', 'n_dex_number' => 31, 'image_url' => 'https://cdn.bulbagarden.net/upload/b/bf/031Nidoqueen.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Nidoran ♂', 'n_dex_number' => 32, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/4a/032Nidoran.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Nidorino', 'n_dex_number' => 33, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/9f/033Nidorino.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Nidoking', 'n_dex_number' => 34, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/c6/034Nidoking.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Clefairy', 'n_dex_number' => 35, 'image_url' => 'https://cdn.bulbagarden.net/upload/f/f4/035Clefairy.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Clefable', 'n_dex_number' => 36, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/a9/036Clefable.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Vulpix', 'n_dex_number' => 37, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/6/60/037Vulpix.png/500px-037Vulpix.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Ninetales', 'n_dex_number' => 38, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/0/05/038Ninetales.png/500px-038Ninetales.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Jigglypuff', 'n_dex_number' => 39, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/3/3e/039Jigglypuff.png/500px-039Jigglypuff.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Wigglytuff', 'n_dex_number' => 40, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/92/040Wigglytuff.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Zubat', 'n_dex_number' => 41, 'image_url' => 'https://cdn.bulbagarden.net/upload/d/da/041Zubat.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Golbat', 'n_dex_number' => 42, 'image_url' => 'https://cdn.bulbagarden.net/upload/0/0c/042Golbat.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Oddish', 'n_dex_number' => 43, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/43/043Oddish.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Gloom', 'n_dex_number' => 44, 'image_url' => 'https://cdn.bulbagarden.net/upload/2/2a/044Gloom.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Vileplume', 'n_dex_number' => 45, 'image_url' => 'https://cdn.bulbagarden.net/upload/6/6a/045Vileplume.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Paras', 'n_dex_number' => 46, 'image_url' => 'https://cdn.bulbagarden.net/upload/d/d4/046Paras.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Parasect', 'n_dex_number' => 47, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/80/047Parasect.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Venonat', 'n_dex_number' => 48, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/ad/048Venonat.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Venomoth', 'n_dex_number' => 49, 'image_url' => 'https://cdn.bulbagarden.net/upload/d/d3/049Venomoth.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Diglett', 'n_dex_number' => 50, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/3/31/050Diglett.png/500px-050Diglett.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Dugtrio', 'n_dex_number' => 51, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/e/e5/051Dugtrio.png/500px-051Dugtrio.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Meowth', 'n_dex_number' => 52, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/d/d6/052Meowth.png/500px-052Meowth.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Persian', 'n_dex_number' => 53, 'image_url' => 'https://cdn.bulbagarden.net/upload/1/13/053Persian.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Psyduck', 'n_dex_number' => 54, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/5/53/054Psyduck.png/500px-054Psyduck.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Golduck', 'n_dex_number' => 55, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/f/fe/055Golduck.png/500px-055Golduck.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Mankey', 'n_dex_number' => 56, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/41/056Mankey.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Primeape', 'n_dex_number' => 57, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/9a/057Primeape.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Growlithe', 'n_dex_number' => 58, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/3/3d/058Growlithe.png/500px-058Growlithe.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Arcanine', 'n_dex_number' => 59, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/b/b8/059Arcanine.png/500px-059Arcanine.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Poliwag', 'n_dex_number' => 60, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/49/060Poliwag.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Poliwhirl', 'n_dex_number' => 61, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/a9/061Poliwhirl.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Poliwrath', 'n_dex_number' => 62, 'image_url' => 'https://cdn.bulbagarden.net/upload/2/2d/062Poliwrath.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Abra', 'n_dex_number' => 63, 'image_url' => 'https://cdn.bulbagarden.net/upload/6/62/063Abra.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Kadabra', 'n_dex_number' => 64, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/97/064Kadabra.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Alakazam', 'n_dex_number' => 65, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/cc/065Alakazam.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Machop', 'n_dex_number' => 66, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/85/066Machop.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Machoke', 'n_dex_number' => 67, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/8e/067Machoke.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Machamp', 'n_dex_number' => 68, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/8f/068Machamp.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Bellsprout', 'n_dex_number' => 69, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/a2/069Bellsprout.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Weepinbell', 'n_dex_number' => 70, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/9f/070Weepinbell.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Victreebel', 'n_dex_number' => 71, 'image_url' => 'https://cdn.bulbagarden.net/upload/b/be/071Victreebel.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Tentacool', 'n_dex_number' => 72, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/4e/072Tentacool.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Tentacruel', 'n_dex_number' => 73, 'image_url' => 'https://cdn.bulbagarden.net/upload/f/f6/073Tentacruel.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Geodude', 'n_dex_number' => 74, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/98/074Geodude.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Graveler', 'n_dex_number' => 75, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/75/075Graveler.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Golem', 'n_dex_number' => 76, 'image_url' => 'https://cdn.bulbagarden.net/upload/f/f2/076Golem.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Ponyta', 'n_dex_number' => 77, 'image_url' => 'https://cdn.bulbagarden.net/upload/3/3b/077Ponyta.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Rapidash', 'n_dex_number' => 78, 'image_url' => 'https://cdn.bulbagarden.net/upload/3/3f/078Rapidash.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Slowpoke', 'n_dex_number' => 79, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/70/079Slowpoke.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Slowbro', 'n_dex_number' => 80, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/80/080Slowbro.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Magnemite', 'n_dex_number' => 81, 'image_url' => 'https://cdn.bulbagarden.net/upload/6/6c/081Magnemite.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Magneton', 'n_dex_number' => 82, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/72/082Magneton.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Farfetch\'d', 'n_dex_number' => 83, 'image_url' => 'https://cdn.bulbagarden.net/upload/f/f8/083Farfetch%27d.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Doduo', 'n_dex_number' => 84, 'image_url' => 'https://cdn.bulbagarden.net/upload/5/54/084Doduo.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Dodrio', 'n_dex_number' => 85, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/93/085Dodrio.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Seel', 'n_dex_number' => 86, 'image_url' => 'https://cdn.bulbagarden.net/upload/1/1f/086Seel.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Dewgong', 'n_dex_number' => 87, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/c7/087Dewgong.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Grimer', 'n_dex_number' => 88, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/a0/088Grimer.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Muk', 'n_dex_number' => 89, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/7c/089Muk.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Shellder', 'n_dex_number' => 90, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/40/090Shellder.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Cloyster', 'n_dex_number' => 91, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/1/1d/091Cloyster.png/500px-091Cloyster.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Gastly', 'n_dex_number' => 92, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/ca/092Gastly.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Haunter', 'n_dex_number' => 93, 'image_url' => 'https://cdn.bulbagarden.net/upload/6/62/093Haunter.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Gengar', 'n_dex_number' => 94, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/c6/094Gengar.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Onyx', 'n_dex_number' => 95, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/9/9a/095Onix.png/500px-095Onix.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Drowzee', 'n_dex_number' => 96, 'image_url' => 'https://cdn.bulbagarden.net/upload/3/3e/096Drowzee.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Hypno', 'n_dex_number' => 97, 'image_url' => 'https://cdn.bulbagarden.net/upload/0/0a/097Hypno.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Krabby', 'n_dex_number' => 98, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/a7/098Krabby.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Kingler', 'n_dex_number' => 99, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/71/099Kingler.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Voltorb', 'n_dex_number' => 100, 'image_url' => 'https://cdn.bulbagarden.net/upload/d/da/100Voltorb.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Electrode', 'n_dex_number' => 101, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/84/101Electrode.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Exeggcute', 'n_dex_number' => 102, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/af/102Exeggcute.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Exeggutor', 'n_dex_number' => 103, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/2/24/103Exeggutor.png/500px-103Exeggutor.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Cubone', 'n_dex_number' => 104, 'image_url' => 'https://cdn.bulbagarden.net/upload/2/2a/104Cubone.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Marowak', 'n_dex_number' => 105, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/9/98/105Marowak.png/500px-105Marowak.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Hitmonlee', 'n_dex_number' => 106, 'image_url' => 'https://cdn.bulbagarden.net/upload/3/32/106Hitmonlee.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Hitmonchan', 'n_dex_number' => 107, 'image_url' => 'https://cdn.bulbagarden.net/upload/a/a3/107Hitmonchan.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Lickitung', 'n_dex_number' => 108, 'image_url' => 'https://cdn.bulbagarden.net/upload/0/00/108Lickitung.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Koffing', 'n_dex_number' => 109, 'image_url' => 'https://cdn.bulbagarden.net/upload/1/17/109Koffing.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Weezing', 'n_dex_number' => 110, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/42/110Weezing.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Rhyhorn', 'n_dex_number' => 111, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/9b/111Rhyhorn.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Rhydon', 'n_dex_number' => 112, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/47/112Rhydon.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Chansey', 'n_dex_number' => 113, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/cd/113Chansey.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Tangela', 'n_dex_number' => 114, 'image_url' => 'https://cdn.bulbagarden.net/upload/3/3e/114Tangela.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Kangaskhan', 'n_dex_number' => 115, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/4e/115Kangaskhan.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Horsea', 'n_dex_number' => 116, 'image_url' => 'https://cdn.bulbagarden.net/upload/5/5a/116Horsea.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Seadra', 'n_dex_number' => 117, 'image_url' => 'https://cdn.bulbagarden.net/upload/2/26/117Seadra.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Goldeen', 'n_dex_number' => 118, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/7b/118Goldeen.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Seaking', 'n_dex_number' => 119, 'image_url' => 'https://cdn.bulbagarden.net/upload/6/6a/119Seaking.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Staryu', 'n_dex_number' => 120, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/4f/120Staryu.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Starmie', 'n_dex_number' => 121, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/cd/121Starmie.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Mr. Mime', 'n_dex_number' => 122, 'image_url' => 'https://cdn.bulbagarden.net/upload/e/ec/122Mr._Mime.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Scyther', 'n_dex_number' => 123, 'image_url' => 'https://cdn.bulbagarden.net/upload/b/ba/123Scyther.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Jynx', 'n_dex_number' => 124, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/7c/124Jynx.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Electabuzz', 'n_dex_number' => 125, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/d/de/125Electabuzz.png/500px-125Electabuzz.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Magmar', 'n_dex_number' => 126, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/8/8c/126Magmar.png/500px-126Magmar.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Pinsir', 'n_dex_number' => 127, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/7/71/127Pinsir.png/500px-127Pinsir.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Tauros', 'n_dex_number' => 128, 'image_url' => 'https://cdn.bulbagarden.net/upload/b/b8/128Tauros.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Magikarp', 'n_dex_number' => 129, 'image_url' => 'https://cdn.bulbagarden.net/upload/0/02/129Magikarp.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Gyarados', 'n_dex_number' => 130, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/41/130Gyarados.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Lapras', 'n_dex_number' => 131, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/a/ab/131Lapras.png/500px-131Lapras.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Ditto', 'n_dex_number' => 132, 'image_url' => 'https://cdn.bulbagarden.net/upload/3/36/132Ditto.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Eevee', 'n_dex_number' => 133, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/e/e2/133Eevee.png/500px-133Eevee.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Vaporeon', 'n_dex_number' => 134, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/f/fd/134Vaporeon.png/500px-134Vaporeon.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Jolteon', 'n_dex_number' => 135, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/b/bb/135Jolteon.png/500px-135Jolteon.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Flareon', 'n_dex_number' => 136, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/d/dd/136Flareon.png/500px-136Flareon.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Porygon', 'n_dex_number' => 137, 'image_url' => 'https://cdn.bulbagarden.net/upload/6/6b/137Porygon.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Omanyte', 'n_dex_number' => 138, 'image_url' => 'https://cdn.bulbagarden.net/upload/7/79/138Omanyte.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Omastar', 'n_dex_number' => 139, 'image_url' => 'https://cdn.bulbagarden.net/upload/4/43/139Omastar.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Kabuto', 'n_dex_number' => 140, 'image_url' => 'https://cdn.bulbagarden.net/upload/f/f9/140Kabuto.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Kabutops', 'n_dex_number' => 141, 'image_url' => 'https://cdn.bulbagarden.net/upload/2/29/141Kabutops.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Aerodactyl', 'n_dex_number' => 142, 'image_url' => 'https://cdn.bulbagarden.net/upload/e/e8/142Aerodactyl.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Snorlax', 'n_dex_number' => 143, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/f/fb/143Snorlax.png/500px-143Snorlax.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Articuno', 'n_dex_number' => 144, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/4/4e/144Articuno.png/500px-144Articuno.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Zapdos', 'n_dex_number' => 145, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/e/e3/145Zapdos.png/500px-145Zapdos.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Moltres', 'n_dex_number' => 146, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/1/1b/146Moltres.png/500px-146Moltres.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Dratini', 'n_dex_number' => 147, 'image_url' => 'https://cdn.bulbagarden.net/upload/c/cc/147Dratini.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Dragonair', 'n_dex_number' => 148, 'image_url' => 'https://cdn.bulbagarden.net/upload/9/93/148Dragonair.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Dragonite', 'n_dex_number' => 149, 'image_url' => 'https://cdn.bulbagarden.net/upload/8/8b/149Dragonite.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Mewtwo', 'n_dex_number' => 150, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/7/78/150Mewtwo.png/500px-150Mewtwo.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
        DB::table('pokemon')->insert([ 'name' => 'Mew', 'n_dex_number' => 151, 'image_url' => 'https://cdn.bulbagarden.net/upload/thumb/b/b1/151Mew.png/500px-151Mew.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(), ]);
    }
}
