<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model as Eloquent;

class mongodb extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'my_collection'; // specify the MongoDB collection name

    // Define any other properties or methods needed
}
