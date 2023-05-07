<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

use Goutte\Client;
use Illuminate\Support\Facades\Storage;

class WebScraping extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'web-scraping';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Get the data from website';

  /**
   * Execute the console command.
   */
  public function handle()
  {

    $client = new Client();
    $crawler = $client->request('GET', 'https://www.annuaire-gratuit.ma/pharmacies/');
    $results = [];
    $crawler->filter("#principal > div.container-fluid > div.container-fluid > div > div.col-md-9 > div")->each(function ($node) use ($client) {
      $cards = $node->filter(".column_in_grey")->each(function ($node) use ($client) {
        $pharmacie_detailslink =  $node->filter("a");
        $pharmacie_name =  $node->filter("a > div > h3")->each(function ($node) {
          return $node->text();
        });
        $pharmacie_ville =  $node->filter("a > div > span:nth-child(2)")->each(function ($node) {
          return $node->text();
        });
        $pharmacie_telephone =  $node->filter("a > div > span:nth-child(3)")->each(function ($node) {
          return $node->text();
        });
        $pharmacie_description =  $node->filter("a > div > p")->each(function ($node) {
          return $node->text();
        });

        $link = $pharmacie_detailslink->link();
        $subcrawler = $client->click($link);

        $pharmacie_reference = $subcrawler->filter(".ref")->text();
        $pharmacie_googlemaps = $subcrawler->filter(" address > a")->attr("href");

        $queryString = parse_url($pharmacie_googlemaps, PHP_URL_QUERY);
        parse_str($queryString, $params);
        $latitude = explode(',', $params['q'])[0];
        $longitude = explode(',', $params['q'])[1];

        return  [
          "name" => $pharmacie_name[0],
          "ville" => $pharmacie_ville[0],
          "telephone" => $pharmacie_telephone[0],
          "description" => $pharmacie_description[0],
          "googlemaps" => $pharmacie_googlemaps,
          "latitude" => $latitude,
          "longitude" => $longitude,
          "reference" => $pharmacie_reference,
        ];
      });
      $json_data = json_encode($cards, JSON_PRETTY_PRINT);
      Storage::disk("public")->put("file.json", $json_data);
      dd("Done");
    });
    dd($results);

  }
}
