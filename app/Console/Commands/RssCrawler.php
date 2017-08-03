<?php
namespace App\Console\Commands;

use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Console\Command;

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
        $crawler->filterXPath('//channel/item')->each(function($node){
            $this->info($node->filterXPath('//link')->text());
        });
        $this->info($url . ' executed');
    }
}
