<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use KamranAhmed\Geocode\Geocode;

class StoreController extends Controller
{
    public function index()
    {

    	$products = Product::where('qty','>', \Config::get('app.indexstock'))
        ->where('visible','=', 1)
        ->get();
   
    	
    	return view('store.index', compact('products'));
    }

    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	//dd($product);

    	return view('store.show', compact('product'));
    }

    public function location(Request $request)
    {
        if (empty($request->input('street')))
        {

        return redirect('location');

        }
        $street = $request->input('street');

        // Optionally you can pass the API key for Geocoding https://github.com/kamranahmedse/php-geocode

        // Note: All the functions below accept a parameter as a default value that will be return if the reuqired value isn't found
        /*$location->getAddress( 'default value' ); 
        $location->getLatitude(); // returns the latitude of the address
        $location->getLongitude(); // returns the longitude of the address
        $location->getCountry(); // returns the country of the address
        $location->getLocality(); // returns the locality/city of the address
        $location->getDistrict(); // returns the district of the address
        $location->getPostcode(); // returns the postal code of the address
        $location->getTown(); // returns the town of the address
        $location->getStreetNumber(); // returns the street number of the address*/

        $geocode = new Geocode();
       
        // Get the details for the passed address
        $location = $geocode->get($street);
        
        
     

         $location = $location->streetAddress;
      
        return view('store.location', compact('location'));
    
    }

        public function locationshow()
    {

        $location = "";
        return view('store.location', compact('location'));
    
    }
}
