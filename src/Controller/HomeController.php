<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function show(): Response
    {
        return $this->render('home/show.html.twig', [
            'categories' => [
                [
                    'name' => 'Books',
                    'slug' => 'books',
                    'description' => 'The most interesting'
                ],

                [
                    'name' => 'Movies',
                    'slug' => 'movies',
                    'description' => 'New and popular'
                ],

                [
                    'name' => 'Audio',
                    'slug' => 'audio',
                    'description' => 'Your favorite'
                ],
            ],
            'items' => [
                [
                    "artist" => "Roni Loren",
                    "releaseDate" => "2020-09-30",
                    "name" => "Unvergesslich",
                    "isbn" => 567416074,
                    "coverUrl" => "https://is1-ssl.mzstatic.com/image/thumb/Publication113/v4/79/fc/44/79fc445d-5448-b26c-e3bd-c807b8e6f079/9783732588169.jpg/200x200bb.png",
                ],
                [
                    "artist" => "Karin Lindberg",
                    "releaseDate" => "2021-03-08",
                    "name" => "Frühling auf Schottisch",
                    "isbn" => 565416966,
                    "coverUrl" => "https://is5-ssl.mzstatic.com/image/thumb/Publication114/v4/1d/41/8f/1d418f47-8921-d60f-e22d-3897ab5493c4/1032645242.jpg/200x200bb.png",
                ],
                [
                    "artist" => "Lauren Layne",
                    "releaseDate" => "2021-03-01",
                    "name" => "Wolfes of Wall Street - Kennedy",
                    "isbn" => 629636073,
                    "coverUrl" => "https://is4-ssl.mzstatic.com/image/thumb/Publication114/v4/30/b1/18/30b11809-86e8-565b-8af4-6347d57f3ba5/9783736315112.jpg/200x200bb.png",
                ],
                [
                    "artist" => "Bausa",
                    "releaseDate" => "2021-02-26",
                    "name" => "100 Pro",
                    "label" => "Downbeat Records GmbH & Co. KG",
                    "coverUrl" => "https://is3-ssl.mzstatic.com/image/thumb/Music123/v4/7a/a2/55/7aa25575-d320-6051-2540-74bce1ce4f2c/190295194062.jpg/200x200bb.png",
                ],
                [
                    "artist" => "Kings of Leon",
                    "releaseDate" => "2021-03-05",
                    "name" => "When You See Yourself",
                    "label" => "RCA Records",
                    "coverUrl" => "https://is2-ssl.mzstatic.com/image/thumb/Music124/v4/4e/f6/dd/4ef6dd54-aea0-18b8-966a-e902750d8cd7/886448318903.jpg/200x200bb.png",
                ]
            ],

        ]);
    }
}
