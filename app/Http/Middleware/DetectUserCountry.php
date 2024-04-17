<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;
use Symfony\Component\HttpFoundation\Response;

class DetectUserCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('user_country')) {
            $ip = $request->ip();

            // Check if the IP is a valid public IP address
            if ($this->isValidIpAddress($ip)) {
                try {
                    $reader = new Reader(storage_path('app/geoip/GeoLite2-Country.mmdb'));
                    $record = $reader->country($ip);
                    $countryCode = $record->country->isoCode;
                    session(['user_country' => $countryCode]);
                } catch (\Exception $e) {
                    session(['user_country' => 'US']); // Default country code
                }
            } else {
                session(['user_country' => 'US']); // Default country code
            }
        }


        return $next($request);
    }

    /**
     * Check if an IP address is a valid public IP.
     *
     * @param string $ip
     * @return bool
     */
    private function isValidIpAddress($ip)
    {
        return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false;
    }
}
