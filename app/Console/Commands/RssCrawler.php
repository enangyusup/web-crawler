<?php
namespace App\Console\Commands;

use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Console\Command;
use App\Models\Article;
use Carbon\Carbon;

class RssCrawler extends Command
{
    protected $signature = 'crawler:rss {url}';
    protected $description = 'Rss crawler';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $url = $this->argument('url');
        $rss_file = file_get_contents($url);
        $crawler = new Crawler($rss_file);
        $crawler->filterXPath('//channel/item')->each(function($node) {
            $article = new Article;
            $article->title        = trim($node->filterXPath('//title')->text());
            $article->source_url   = $node->filterXPath('//link')->text();
            $article->source_id    = $node->filterXPath('//guid')->text();
            $article->content      = $node->filterXPath('//description')->text();
            $article->publish_date = new Carbon($node->filterXPath('//pubDate')->text());
            $article->save();

            $this->info($article->title . ' saved');
        });
        $this->info($url . ' executed');
    }
}
