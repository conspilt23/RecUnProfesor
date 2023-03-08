<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use App\Models\Teacher;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera SiteMap de la aplicación.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SitemapGenerator::create('https://recomiendameunprofesor.com')->writeToFile(public_path('defaults.xml'));

        $sitemap = Sitemap::create();

        $teachers = Teacher::all();

        foreach ($teachers as $teacher) {
            $url = Url::create('/secciones/' . str(str_replace('-', ' ', $teacher->name))->slug())
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY);

            $sitemap->add($url);

            $url = Url::create('/opiniones/' . str(str_replace('-', ' ', $teacher->name))->slug())
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY);

            $sitemap->add($url);
        }

        $sitemap->writeToFile(public_path('teachers.xml'));

        $this->info('Sitemaps generados exitosamente, defaults.xml y teachers.xml');
    }
}
