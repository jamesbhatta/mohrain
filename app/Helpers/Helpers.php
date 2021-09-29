<?php

if (!function_exists('invalid_class')) {
    /**
     * Check for the existence of an error message and return a class name
     *
     * @param  string  $key
     * @return string
     */
    function invalid_class($key, $preset = null)
    {
        $errors = session()->get('errors') ?: new \Illuminate\Support\ViewErrorBag;
        $invalidClass = $preset ? 'border-red-500' : 'is-invalid';
        return $errors->has($key) ? $invalidClass : '';
    }
}


if (!function_exists('invalid_feedback')) {
    /**
     * Check if the route is active or not
     *
     * @param  string  $key
     * @return string
     */
    function invalid_feedback($key)
    {
        $key = str_replace(['\'', '"'], '', $key);
        $errors = session()->get('errors') ?: new \Illuminate\Support\ViewErrorBag;
        if ($message = $errors->first($key)) {
            return '<?= <div class="invalid-feedback">' . $message . '</div>; ?';
        }
    }
}

if (!function_exists('set_active')) {
    /**
     * Check if the route is active or not
     *
     * @param  string  $key
     * @return string
     */
    function set_active($path, $active = 'active')
    {
        return Request::routeIs($path) ? $active : '';
    }
}

if (!function_exists('site_name')) {
    function site_name()
    {
        return appSettings('site_name', config('app.name'));
    }
}

// if(!function_exists('tagline')){
//     function tagline()
//     {
//         return settings('tagline');
//     }
// }

if (!function_exists('site_logo_url')) {
    function site_logo_url()
    {
        if (appSettings()->get('site_logo')) {
            return asset('storage/' . appSettings()->get('site_logo'));
        }
        return asset('img/logo.png');
    }
}

if (!function_exists('favicon_url')) {
    function favicon_url()
    {
        if (appSettings()->get('favicon')) {
            return asset('storage/' . appSettings()->get('favicon'));
        }
        return;
    }
}

if (!function_exists('price_unit')) {
    function price_unit()
    {
        return appSettings()->get('price_unit', 'Nrs.');
    }
}

// Get the page Url By Slug
if (!function_exists('get_page_url_by_slug')) {
    function get_page_url_by_slug($slug)
    {
        if (!$slug) {
            return url('/');
        }
        return route('frontend.pages.show', $slug);
    }
}