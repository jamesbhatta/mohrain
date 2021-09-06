<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use  HasFactory, \Sushi\Sushi;

    protected $guarded = [];

    protected $rows = [
        [
            'icon' => 'fa fa-globe',
            'color' => 'icon-primary icon-bg-primary',
            'title' => 'Web Design &amp; Development',
            'description' => 'We have created hundred of websites, designed them beautifully. We always interact with our customers for the best looking web design and best performance of the website.'
        ],
        [
            'icon' => 'fas fa-server',
            'color' => 'icon-yellow icon-bg-yellow',
            'title' => 'Domain Registration & Hosting           ',
            'description' => 'You can reserve your business name (domain name) with us in a very reasonable price. And for the hosting, we can provide you any server you want, we are currently proving shared hosting plan to dedicated hosting plan.'
        ],
        [
            'icon' => 'fa fa-mobile-alt',
            'color' => 'icon-purple icon-bg-purple',
            'title' => 'Mobile App Development',
            'description' => 'Everything is mobile today. We have a very expertise team of Android and IOS developers to meet your business requirement for developing simple to very complex mobile applications at the best price.'
        ],
        [
            'icon' => 'fas fa-laptop',
            'color' => 'icon-cyan icon-bg-cyan',
            'title' => 'Software Development',
            'description' => 'We have developed various softwares for wide ranges of businesses. We build robust, fast and versatile software for making your work and managing everything superb.'
        ],
        [
            'icon' => 'fas fa-bullhorn',
            'color' => 'icon-red icon-bg-red',
            'title' => 'Digital Marketing',
            'description' => 'We help you to promote your business on major social networks like facebook, instagram, twitter and youtube. We make your business appear in search engines and We are newsletter experts.'
        ],
        [
            'icon' => 'fas fa-award',
            'color' => 'icon-green icon-bg-green',
            'title' => 'Training & Certification',
            'description' => 'We provide ability to consult directly with organizations for any number of employees. Our wide spectrum of technical courses and application courses are designed to suit every skill level. We make to work on live Project so that students gain Self Confidence in this competitive world.'
        ],
        [
            'icon' => 'fa fa-search-plus',
            'color' => 'icon-orange icon-bg-orange',
            'title' => 'SEO Optimization',
            'description' => 'Our team uses modern SEO services, backed by the best digital practices, to increase your traffic & rankings for vetted keywords and long-tail phrases that drive business to your site.'
        ],
        [
            'icon' => 'far fa-comments',
            'color' => 'icon-blue icon-bg-blue',
            'title' => 'IT consultancy',
            'description' => 'Our IT consulting services can empower your development teams with critical know-how to give your business a productivity boost. We have IT and business experts on board who are able to provide tailor-made insights that have an immediate impact on the cost and quality of operations.'
        ],
    ];
}
