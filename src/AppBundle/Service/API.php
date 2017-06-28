<?php
namespace WCS\BikeBundle\Services;

use Symfony\Component\Config\Definition\Exception\Exception;

class etsyCall
{
    private $apikey;
    private $shopid;

    public function __construct($apikey, $shopid)
    {
        $this->apikey = $apikey;
        $this->shopid = $shopid;
    }

    public function etsyAction ()
    {
        $shop = "/shops/" . $this->shopid . "/listings/active?method=GET&api_key=";
        $api = $this->apikey . "&fields=title,description,price,url&limit=100&includes=MainImage";

        $url = "https://openapi.etsy.com/v2" . $shop . $api;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (intval($status) != 200) throw new Exception("HTTP $status\n$result");

        curl_close($ch);

        $responseObject = json_decode($result);
        return $responseObject;
    }
}