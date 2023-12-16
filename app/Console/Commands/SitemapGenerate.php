<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use DB;
class SitemapGenerate extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate automaticaly sitemap';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
	
	$path = public_path('sitemap.xml');
	if(file_exists($path)) unlink($path);
	$map = Sitemap::create('https://schoolball.ru');

	$clubs = DB::table('club')->get();
	$news = DB::table('news')->get();
        $map->add(Url::create('/login')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
        $map->add(Url::create('/register')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
       $map->add(Url::create('/championats')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
       $map->add(Url::create('/camp')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
       $map->add(Url::create('/camp/cao')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
       $map->add(Url::create('/camp/uvao')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
        $map->add(Url::create('/faq')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
        $map->add(Url::create('/clubs')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
	foreach($clubs as $item){
		$map->add(Url::create('/club/' . $item->id)
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
	}
        $map->add(Url::create('/news')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
        foreach($news as $item){ 
                $map->add(Url::create('/news/' . $item->id)
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
        }
	$map->writeToFile($path);
    }
}
