<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotes = [
            [
                'text' => '"Life is short; eat dessert first." ',
                'author' => 'Jacques Torres',
            ],
            [
                'text' => '"Dessert is like a feel-good song, and the best ones make you dance."',
                'author' => 'Chef Edward Lee',
            ],
            [
                'text' => '"Stressed spelled backward is desserts. Coincidence? I think not!"',
                'author' => 'Unknown',
            ],
            [
                'text' => '"Happiness is knowing there is a dessert waiting for you." ',
                'author' => 'Unknown',
            ],
            [
                'text' => '"Life is uncertain. Eat dessert first." ',
                'author' => 'Ernestine Ulmer',
            ],
            [
                'text' => '"Dessert is where our hearts find joy and our souls find solace."',
                'author' => ' Unknown',
            ],
            [
                'text' => '"Dessert is a way of showing love, appreciation, and celebration."',
                'author' => 'Unknown',
            ],
            [
                'text' => '"Desserts are the punctuation marks to the perfect meal."',
                'author' => 'Unknown',
            ],
            [
                'text' => '"You can not buy happiness, but you can buy dessert, and that is kind of the same thing."',
                'author' => 'Unknown',
            ],
            [
                'text' => '"In the world of desserts, there is always room for one more bite." ',
                'author' => ' Unknown',
            ],
            [
                'text' => '"A dessert a day keeps the worries away." ',
                'author' => 'Unknown',
            ],
            [
                'text' => '"Life is too short to skip dessert. It is the cherry on top!"',
                'author' => 'Unknown',
            ],
            [
                'text' => '"Dessert is a silent symphony of flavors that speaks to the heart." ',
                'author' => 'Unknown',
            ],
            [
                'text' => '"Sweet dreams are made of desserts."',
                'author' => ' Unknown',
            ],
            [
                'text' => '"Dessert is a universal language of happiness."',
                'author' => ' Unknown',
            ],
        ];

        foreach ($quotes as $quote) {
            Quote::create($quote);
        }
    }
}
