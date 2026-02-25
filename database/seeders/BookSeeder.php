<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $lesbian = Category::where('name', 'Lesbian Fiction')->first();
        $gay = Category::where('name', 'Gay Fiction')->first();
        $autobio = Category::where('name', 'Queer Autobiography')->first();
        $history = Category::where('name', 'LGBTQ+ History')->first();
        $trans = Category::where('name', 'Trans Studies')->first();
        $poetry = Category::where('name', 'Queer Poetry')->first();

        Book::create([
            'title' => 'Stone Butch Blues',
            'author' => 'Leslie Feinberg',
            'publication_year' => 1993,
            'description' => 'A foundational novel in lesbian and trans literature.',
            'category_id' => $lesbian?->id,
        ]);

        Book::create([
            'title' => 'This Arab is Queer',
            'author' => 'Elias Jahshan',
            'publication_year' => 2022,
            'description' => 'An anthology by LGBTQ+ Arab writters.',
            'category_id' => $autobio?->id,
        ]);

        Book::create([
            'title' => 'Tengo Miedo Torero',
            'author' => 'Pedro Lemebel',
            'publication_year' => 2001,
            'description' => 'Love story in 1986 Chile.',
            'category_id' => $trans?->id,
        ]);

        Book::create([
            'title' => 'Fable For the End of the World',
            'author' => 'Ava Reid',
            'publication_year' => 2024,
            'description' => 'We all do what we have to do in order to survive...',
            'category_id' => $lesbian?->id,
        ]);

        Book::create([
            'title' => 'Cuerpos Para Odiar',
            'author' => 'Claudia Rodriguez',
            'publication_year' => 2024,
            'description' => 'Retrato crudo, auténtico y conmovedor de la vida de las travestis.',
            'category_id' => $trans?->id,
        ]);

        Book::create([
            'title' => 'On earth we are briefly gorgeus',
            'author' => 'Ocean Vuong',
            'publication_year' => 2019,
            'description' => 'A letter from a son to a mother who cannot read.',
            'category_id' => $autobio?->id,
        ]);

        Book::create([
            'title' => 'Are you this? Or are you this?',
            'author' => 'Madian Al Jazerah',
            'publication_year' => 2021,
            'description' => 'Frank and moving memoir narrating Madians battles with adversity, racism and homophobia.',
            'category_id' => $autobio?->id,
        ]);

        Book::create([
            'title' => 'Laudes',
            'author' => 'Xelsoi',
            'publication_year' => 2025,
            'description' => 'Incómoda y provocativa que escupe en los relatos optimistas sobre el sexo, la imagen y el trabajo.',
            'category_id' => $gay?->id,
        ]);

        Book::create([
            'title' => 'This is how you lose the time war',
            'author' => 'Amal el Mohtar',
            'publication_year' => 2019,
            'description' => 'Among the ashes of a dying world, an agent on the Commandant finds a letter. It reads: Burn before reading.',
            'category_id' => $lesbian?->id,
        ]);

        Book::create([
            'title' => 'A little life',
            'author' => 'Hanya Yanagihara',
            'publication_year' => 2020,
            'description' => 'Four college classmates-broke, adrift, and buoyed only by their friendship and ambition.',
            'category_id' => $gay?->id,
        ]);

        Book::create([
            'title' => 'Ella, no',
            'author' => 'Val Flores',
            'publication_year' => 2025,
            'description' => '57 laconismos postapocalípticos - o la masacre de una lesbiana eremita.',
            'category_id' => $poetry?->id,
        ]);
    }
}