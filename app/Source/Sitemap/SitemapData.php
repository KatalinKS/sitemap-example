<?php

namespace App\Source\Sitemap;

class SitemapData implements \KatalinKS\Sitemap\Contracts\SitemapDataContract
{

    public function get(): array
    {
        return [
            [
                "loc" => "https://site.ru/",
                "lastmod" => "2020-12-14",
                "priority" => 1,
                "changefreq" => "hourly"
            ],
            [
                "loc" => "https://site.ru/jkmjh",
                "lastmod" => "2020-12-14",
                "priority" => 1,
                "changefreq" => "weekly"
            ],
            [
                "loc" => "https://site.ru/1232",
                "lastmod" => "2020-12-14",
                "priority" => 0.7,
                "changefreq" => "weekly"
            ]
        ];
    }
}
