<?php

use App\Repositories\WebsiteRepository;

if (!function_exists('aFunctionName')) {
    function aFunctionName()
    {
        // Xử lý hàm aFunctionName()
    }
}

if (!function_exists('returnApi')) {
    function returnApi($success = false, $message = 'System error !', $data = [], $res_code = 200)
    {
        $array_result = [
            'success' => $success,
            'message' => $message,
        ];
        if (!empty($data)) {
            $array_result['data'] = $data;
        }
        return response()->json($array_result, $res_code);
    }
}

if (!function_exists('alertAds')) {
    function alertAds($userId = null)
    {
        if (empty($userId))
            $userId = \Illuminate\Support\Facades\Auth::user()->id;
        $website = \App\Models\Website::where('status', '!=', \App\Models\Website::STATUS_REJECTED)
            ->where('is_delete', \App\Services\Common::NOT_DELETE)
            ->where('user_id', $userId)
            ->where(function ($query) {
                $query->where('ads_status', '!=', \App\Models\Website::CODE_ACCEPT)
                    ->orWhereNull('ads_status');
            })
            ->first();
        if (!empty($website))
            return true;

        return false;
    }
}

if (!function_exists('totalSite')) {
    function totalSite($listPublisherAssign = null, &$listSiteId = null, $listUserId = null)
    {
        $query = App\Models\Website::query();
        if (!empty($listPublisherAssign)) {
            $listUser = App\Models\User::whereIn('api_publisher_id', $listPublisherAssign)->pluck('id')->toArray();
            $query->whereIn('user_id', $listUser);
        }
        if (!empty($listUserId)) {
            $query->whereIn('user_id', [$listUserId]);
        }
        $listSiteId = $query->where('is_delete', 0)->pluck('api_site_id')->toArray();
        return $query->count();
    }
}

if (!function_exists('alertWebZone')) {
    function alertWebZone($userId = null)
    {
        if (empty($userId)) $userId = \Illuminate\Support\Facades\Auth::user()->id;
        $siteService = new WebsiteRepository();
        $data['totalSite'] = totalSite(null, $listSiteId, $userId);
        if (empty($listSiteId)) {
            $listSiteId = [-1];
        }

        $data['websites'] = $siteService->getListSiteByUser($userId);
        $listWebsiteToBeAddedZone = $data['websites']
            ->filter(function ($website) {
                return $website->zones->count() == 0;
            })
            ->pluck('id')
            ->toArray();
        if (count($data['websites']) == 0) {
            return [
                'status' => true,
                'addSite' => false,
                'addZone' => false,
                'addAds' => false,
            ];
        } else {
            if (count($listWebsiteToBeAddedZone) > 0) {
                return [
                    'status' => true,
                    'addSite' => true,
                    'addZone' => false,
                    'addAds' => !alertAds($userId),
                    'website_to_be_added_zone' => $listWebsiteToBeAddedZone
                ];
            } else {
                return [
                    'status' => false,
                    'addSite' => true,
                    'addZone' => true,
                    'addAds' => !alertAds($userId),
                    'website_to_be_added_zone' => null
                ];
            }
        }
    }
}

if (!function_exists('convertUrl')) {
    function convertUrl($url)
    {
        $url = removeProUrl($url);
        if (!preg_match('#^https://#', $url)) {
            $url = 'https://' . $url;
        }
        $url = rtrim($url, '/');
        return $url;
    }
}

if (!function_exists('removeProUrl')) {
    function removeProUrl($url)
    {
        $url = preg_replace('#^https?://#', '', $url);
        $url = preg_replace('#^http?://#', '', $url);
        $url = preg_replace('#^www\.#', '', $url);

        $url_components = explode('/', $url);
        $domain = $url_components[0];

        return $domain;
    }
}

if (!function_exists('removeSubdomain')) {
    function removeSubdomain($url)
    {
        $url = preg_replace('#^https?://#', '', $url);
        $url = preg_replace('#^www\.#', '', $url);
        $url_components = explode('/', $url);

        $domain = $url_components[0];

        $domain_parts = explode('.', $domain);
        if (count($domain_parts) > 2) {
            $domain = $domain_parts[count($domain_parts) - 2] . '.' . $domain_parts[count($domain_parts) - 1];
        }

        return $domain;
    }
}

if (!function_exists('codeNormal')) {
    function codeNormal($items = [])
    {
        foreach ($items as $item)
        {
            if ($item['id'] == 'normal')
                return $item['code'] ?? '';
        }
        return '';
    }
}

if (!function_exists('truncate')) {
    function truncate($string, $length = 50, $suffix = '...')
    {
        if (strlen($string) <= $length) {
            return $string;
        }

        return substr($string, 0, $length) . $suffix;
    }
}

if (!function_exists('getHostUrl')) {
    function getHostUrl($url = null)
    {
        $parse = parse_url($url);
        return $parse['host'] ?? null;
    }
}
?>
