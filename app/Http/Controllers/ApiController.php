<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public const HTTP_BAD_REQUEST = 'BAD REQUEST';

    /**
     * @param string $ean
     * @return PromiseInterface|\Illuminate\Http\Client\Response|Response
     */
    public function getProductByEAN(string $ean): PromiseInterface|\Illuminate\Http\Client\Response|Response
    {
        if ($this->validateEANCode($ean)) {
            $response = Http::withoutVerifying()->acceptJson()->get("https://world.openfoodfacts.org/api/v0/product/$ean.json");
            return $this->verifyResponseStatus($response);
        }
        return new Response(self::HTTP_BAD_REQUEST, Response::HTTP_BAD_REQUEST, ['content-type' => 'text/html']);
    }

    /**
     * @param string $ean
     * @return bool
     */
    private function validateEANCode(string $ean): bool
    {
        return (strlen($ean) == 8 || strlen($ean) == 13);
    }

    /**
     * @param PromiseInterface|\Illuminate\Http\Client\Response|Response $response
     * @return PromiseInterface|\Illuminate\Http\Client\Response|Response
     */
    private function verifyResponseStatus(PromiseInterface|\Illuminate\Http\Client\Response|Response $response): PromiseInterface|\Illuminate\Http\Client\Response|Response
    {
        if (isset($response['status']) && $response['status'] == 0) {
            $response = new Response(self::HTTP_BAD_REQUEST, Response::HTTP_BAD_REQUEST, ['content-type' => 'text/html']);
        }
        return $response;
    }
}
