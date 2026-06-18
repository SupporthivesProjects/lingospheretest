<?php

namespace App\Helpers;

class ClientInfo
{
    public static function ipInfo()
    {
        //$ip = request()->ip();
        $ip = request()->header('X-Forwarded-For');

        if (!$ip) {
            $ip = request()->ip();
        }
        
        $ip = explode(',', $ip)[0];
        

        $data = [
            'ip'           => $ip,
            'city'         => null,
            'country'      => null,
            'country_code' => null,
            'longitude'    => null,
            'latitude'     => null,
        ];

        /*
        |--------------------------------------------------------------------------
        | FIRST API : ip-api.com
        |--------------------------------------------------------------------------
        */

        try {

            $response = json_decode(file_get_contents("http://ip-api.com/json/$ip"));

            if ($response && $response->status == 'success') {

                $data['city']         = $response->city ?? null;
                $data['country']      = $response->country ?? null;
                $data['country_code'] = $response->countryCode ?? null;
                $data['longitude']    = $response->lon ?? null;
                $data['latitude']     = $response->lat ?? null;
            }

        } catch (\Exception $e) {

        }

        /*
        |--------------------------------------------------------------------------
        | SECOND API : ipwho.is
        |--------------------------------------------------------------------------
        */

        if (
            empty($data['city']) ||
            empty($data['country']) ||
            empty($data['latitude']) ||
            empty($data['longitude'])
        ) {

            try {

                $response = json_decode(file_get_contents("http://ipwho.is/$ip"));

                if ($response && $response->success) {

                    $data['city']         = $data['city'] ?? ($response->city ?? null);

                    $data['country']      = $data['country'] ?? ($response->country ?? null);

                    $data['country_code'] = $data['country_code'] ?? ($response->country_code ?? null);

                    $data['longitude']    = $data['longitude'] ?? ($response->longitude ?? null);

                    $data['latitude']     = $data['latitude'] ?? ($response->latitude ?? null);
                }

            } catch (\Exception $e) {

            }
        }

        return $data;
    }

    public static function osBrowser()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

        $browser = null;
        $os = null;

        if (stripos($userAgent, 'Firefox') !== false) {
            $browser = 'Firefox';
        } elseif (stripos($userAgent, 'Chrome') !== false) {
            $browser = 'Chrome';
        } elseif (stripos($userAgent, 'Safari') !== false) {
            $browser = 'Safari';
        }

        if (stripos($userAgent, 'Windows') !== false) {
            $os = 'Windows';
        } elseif (stripos($userAgent, 'Mac') !== false) {
            $os = 'Mac';
        } elseif (stripos($userAgent, 'Linux') !== false) {
            $os = 'Linux';
        } elseif (stripos($userAgent, 'Android') !== false) {
            $os = 'Android';
        } elseif (stripos($userAgent, 'iPhone') !== false) {
            $os = 'iPhone';
        }

        return [
            'browser' => $browser,
            'os'      => $os,
        ];
    }
}