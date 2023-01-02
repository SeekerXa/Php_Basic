<?php

namespace App\Handlers\Cities;

use App\Models\City;
use App\Api\GeoapifyClient;
use App\Commands\Cities\CreateCityCommand;

class CreateCityHandler
{
    public function __construct(
        protected GeoapifyClient $apiGeoRequest, 
    ) {
    }

    public function __invoke(CreateCityCommand $command)
    {
        $cords = $this->apiGeoRequest->getCoordinates($command->cityName);
        $city = new City;
        $city->name = $command->cityName;
        $city->lat = $cords['lat'];
        $city->lon = $cords['lon'];
        $city->save();

        return $city;
    }
}