<?php

namespace App\Console\Commands;

use App\Models\Pharmacy;
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
    $url = "";

    for ($i = 1; $i <= 562; $i++) {
      //maX PAGES = 562
      if ($i == 1) {
        $url = 'https://www.annuaire-gratuit.ma/pharmacies/';
        $crawler = $client->request('GET', $url);
        $crawler->filter("#principal > div.container-fluid > div.container-fluid > div > div.col-md-9 > div")->each(function ($node) use ($client) {
          $cards = $node->filter(".column_in_grey, .column_in")->each(function ($node) use ($client) {
            $pharmacie_detailslink =  $node->filter("a");
            $pharmacie_name =  $node->filter("a > div > h3")->each(function ($node) {
              return $node->text();
            });
            $pharmacie_ville =  "";
            if ($node->filter("a > div > span:nth-child(2)")->count() > 0) {
              $pharmacie_ville =  $node->filter("a > div > span:nth-child(2)")->each(function ($node) {
                return $node->text();
              });
            }

            $pharmacie_description =  $node->filter("a > div > p")->each(function ($node) {
              return $node->text();
            });

            $link = $pharmacie_detailslink->link();
            $subcrawler = $client->click($link);

            $pharmacie_reference = $subcrawler->filter(".ref")->text();

            $pharmacie_telephone = $subcrawler->filter('.infos_details .call_me')->count() > 0 ?   $subcrawler->filter(".infos_details .call_me")->text() : "";


            $pharmacie_address = $subcrawler->filter(".infos_details address")->count() > 0 ? $subcrawler->filter(".infos_details address")->text() : "";
            $latitude = "";
            $longitude = "";
            $pharmacie_googlemaps = "";
            if ($subcrawler->filter("address > a")->count() > 0) {
              $pharmacie_googlemaps = $subcrawler->filter("address > a")->attr("href");
              $queryString = parse_url($pharmacie_googlemaps, PHP_URL_QUERY);
              parse_str($queryString, $params);
              $latitude = explode(',', $params['q'])[0];
              $longitude = explode(',', $params['q'])[1];
            }

            $pharmacy = new Pharmacy();
            $pharmacy->name = $pharmacie_name[0];
            $pharmacy->ville = $pharmacie_ville[0];
            $pharmacy->address = $pharmacie_address;
            $pharmacy->description = $pharmacie_description[0];
            $pharmacy->longitude = $longitude;
            $pharmacy->latitude = $latitude;
            $pharmacy->phone1 = $pharmacie_telephone;
            $pharmacy->reference = $pharmacie_reference;
            $pharmacy->google_maps = $pharmacie_googlemaps;
            $pharmacy->save();
            echo  "inserting on database pharmacy : " .  $pharmacie_name[0];

            // return  [
            //   "name" => $pharmacie_name[0],
            //   "ville" => $pharmacie_ville[0],
            //   "telephone" => $pharmacie_telephone,
            //   "address" => $pharmacie_address,
            //   "description" => $pharmacie_description[0],
            //   "googlemaps" => $pharmacie_googlemaps,
            //   "latitude" => $latitude,
            //   "longitude" => $longitude,
            //   "reference" => $pharmacie_reference,
            // ];
          });

          // $file = fopen(storage_path('app/public/file.json'), 'a');
          // $json_data = json_encode($cards, JSON_PRETTY_PRINT);
          // fwrite($file, $json_data);
          // fclose($file);
        });
        echo "*************** Getting Data from : " . $url . " is Done .****************";
      } else {

          $url = 'https://www.annuaire-gratuit.ma/pharmacies-pg' . $i . '/';
          $crawler = $client->request('GET', $url);
          $crawler->filter("#principal > div.container-fluid > div.container-fluid > div > div.col-md-9 > div")->each(function ($node) use ($client) {
            $cards = $node->filter(".column_in_grey, .column_in")->each(function ($node) use ($client) {
              $pharmacie_detailslink =  $node->filter("a");
              $pharmacie_name =  $node->filter("a > div > h3")->each(function ($node) {
                return $node->text();
              });
              $pharmacie_ville =  "";
              if ($node->filter("a > div > span:nth-child(2)")->count() > 0) {
                $pharmacie_ville =  $node->filter("a > div > span:nth-child(2)")->each(function ($node) {
                  return $node->text();
                });
              }

              $pharmacie_description =  $node->filter("a > div > p")->each(function ($node) {
                return $node->text();
              });

              $link = $pharmacie_detailslink->link();
              $subcrawler = $client->click($link);

              $pharmacie_reference = $subcrawler->filter(".ref")->text();

              $pharmacie_telephone = $subcrawler->filter('.infos_details .call_me')->count() > 0 ?   $subcrawler->filter(".infos_details .call_me")->text() : "";


              $pharmacie_address = $subcrawler->filter(".infos_details address")->count() > 0 ? $subcrawler->filter(".infos_details address")->text() : "";
              $latitude = "";
              $longitude = "";
              $pharmacie_googlemaps = "";
              if ($subcrawler->filter("address > a")->count() > 0) {
                $pharmacie_googlemaps = $subcrawler->filter("address > a")->attr("href");
                $queryString = parse_url($pharmacie_googlemaps, PHP_URL_QUERY);
                parse_str($queryString, $params);

                // Check if the link contains an address or latitude and longitude values
                if (strpos($params['q'], ',') !== false) {
                  // The link contains latitude and longitude values
                  $latitude = explode(',', $params['q'])[0];
                  $longitude = explode(',', $params['q'])[1];
                }
              }

              $pharmacy = new Pharmacy();
              $pharmacy->name = $pharmacie_name[0];
              $pharmacy->ville = $pharmacie_ville[0];
              $pharmacy->address = $pharmacie_address;
              $pharmacy->description = $pharmacie_description[0];
              $pharmacy->longitude = $longitude;
              $pharmacy->latitude = $latitude;
              $pharmacy->phone1 = $pharmacie_telephone;
              $pharmacy->reference = $pharmacie_reference;
              $pharmacy->google_maps = $pharmacie_googlemaps;
              $pharmacy->save();
              echo  "inserting on database pharmacy : " .  $pharmacie_name[0];

              // return  [
              //   "name" => $pharmacie_name[0],
              //   "ville" => $pharmacie_ville[0],
              //   "telephone" => $pharmacie_telephone,
              //   "address" => $pharmacie_address,
              //   "description" => $pharmacie_description[0],
              //   "googlemaps" => $pharmacie_googlemaps,
              //   "latitude" => $latitude,
              //   "longitude" => $longitude,
              //   "reference" => $pharmacie_reference,
              // ];
            });

            // $file = fopen(storage_path('app/public/file.json'), 'a');
            // $json_data = json_encode($cards, JSON_PRETTY_PRINT);
            // fwrite($file, $json_data);
            // fclose($file);
          });
          echo "---------------------Getting Data from : " . $url . " is Done .-----------------------";

      }
    }
  }
}
