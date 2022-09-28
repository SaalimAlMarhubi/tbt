<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = [
            [
                'title' => 'Example card',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laboriosam sunt obcaecati magnam harum qui temporibus porro atque corporis quibusdam.',
                'image' => 'https://placekitten.com/600/400',
            ],
            [
                'title' => 'Another example',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias praesentium neque ducimus unde mollitia optio?',
                'inverted' => true,
            ],
            [
                'title' => 'A card with an image',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut numquam ipsum quas aperiam rerum. Excepturi.',
                'date' => new DateTime(),
                'image' => 'https://placekitten.com/600/400?v=1',
            ],
            [
                'title' => 'This card is a link',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur mollitia esse perspiciatis iste suscipit!',
                'date' => new DateTime('2022-08-01'),
                'url' => 'https://example.com',
            ],
            [
                'title' => 'This has a CTA button',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis fugit sequi dolore delectus minus, cumque aut!',
                'cta' => [
                    'label' => 'Find out more',
                    'url' => 'https://example.com'
                ],
                'image' => 'https://placekitten.com/600/400?v=2',
            ],
            [
                'title' => 'Lorem ipsum',
                'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam commodi possimus temporibus neque nostrum ad repellat enim hic nulla molestias!',
                'date' => new DateTime('-4 days'),
                'inverted' => true,
            ]
        ];

        return view("home", compact('cards'));
    }
}
