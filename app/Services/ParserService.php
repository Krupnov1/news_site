<?php declare(strict_types=1);

namespace App\Services;

use App\Contracts\ParserServiceContract;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService implements ParserServiceContract {

    public function getNews(string $url): array
    {

        $xml = XmlParser::load($url);

        return $xml->parse([
            'title' => [
               'uses' => 'channel.title' 
            ],
            'description' => [
                'uses' => 'channel.description' 
            ],
            'news' => [
                'uses' => 'channel.item[title,description]' 
            ]
        ]);
    }
}