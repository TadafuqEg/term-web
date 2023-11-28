<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuotationTitle;
use App\Models\QuotationList;
class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Keywords' => [
                [
                    'type' => 'normal',
                    'name' => 'restructioning/ Engineering Keyword',
                ],
                [
                    'type' => 'normal',
                    'name' => '1-5',
                ],
                [
                    'type' => 'normal',
                    'name' => '6-10',
                ],
                [
                    'type' => 'normal',
                    'name' => '10+',
                ],
            ],
            'Duration' => [
                [
                    'type' => 'normal',
                    'name' => '1 day',
                ],
                [
                    'type' => 'normal',
                    'name' => '1 week',
                ],
                [
                    'type' => 'normal',
                    'name' => '1 month',
                ],
                [
                    'type' => 'normal',
                    'name' => '3 months',
                ],
                [
                    'type' => 'normal',
                    'name' => '6 months',
                ],
                [
                    'type' => 'normal',
                    'name' => '1 year',
                ],
                [
                    'type' => 'years',
                    'name' => 'more than year',
                ],
                
            ],
            'Geolocation' => [
                [
                    'type' => 'country',
                    'name' => 'Country'
                ],
                [
                    'type' => 'normal',
                    'name' => 'Region'
                ],
                [
                    'type' => 'normal',
                    'name' => 'WorldWide'
                ],

            ],
            'Sources' => [
                [
                    'type' => 'dropdown_menu',
                    'name' => 'Social Media',
                ],
                [
                    'type' => 'normal',
                    'name' => 'WEB',
                ],
                [
                    'type' => 'normal',
                    'name' => 'Specific Sources',
                ],
            ],
            'Languages' => [
                [
                    'type' => 'dropdown_menu',
                    'name' => 'Languages',
                ],
                
            ],
            'Type Of Data' => [
                [
                    'type' => 'text',
                    'name' => 'Brand speaking',
                ],
                [
                    'type' => 'text',
                    'name' => 'Brand speaking + comment',
                ],
                [
                    'type' => 'text',
                    'name' => 'Brand & Web speaking',
                ],
                [
                    'type' => 'text',
                    'name' => 'Web speaking + Comments',
                ],
            ],
            'Analysis +' => [
                [
                    'type' => 'text',
                    'name' => 'Sentiment Analysis',
                ],
                [
                    'type' => 'text',
                    'name' => 'Semantic Analysis',
                ],
                [
                    'type' => 'text',
                    'name' => 'Authors / Influence Analysis',
                ],
                [
                    'type' => 'text',
                    'name' => 'Categorization by themes',
                ],
                [
                    'type' => 'text',
                    'name' => 'Categorization by types',
                ],
            ],
            'Reports' => [
                [
                    'type' => 'text',
                    'name' => 'Real time alerts',
                ],
                [
                    'type' => 'text',
                    'name' => 'Automatic Report',
                ],
                [
                    'type' => 'text',
                    'name' => 'Personalised Report',
                ],
                [
                    'type' => 'text',
                    'name' => 'Personalised Comparative report',
                ],
                [
                    'type' => 'text',
                    'name' => 'Consulting review',
                ],
            ],
            'Interval / frequency' => [
                [
                    'type' => 'normal',
                    'name' => 'one shot report',
                ],
                [
                    'type' => 'normal',
                    'name' => 'weekly reports',
                ],
                [
                    'type' => 'normal',
                    'name' => 'Every tow weeks',
                ],
                [
                    'type' => 'normal',
                    'name' => 'Monthly',
                ],
                [
                    'type' => 'normal',
                    'name' => 'Quarterly',
                ],
            ],
            'Social Engineering' => [
                [
                    'type' => 'normal',
                    'name' => 'on demand (please contact us)',
                ],
                
            ],
        ];

        foreach($data as $key => $item)
        {
            $title = QuotationTitle::create([
                'name' => $key
            ]);
            foreach($item as $itemm)
            {
                QuotationList::create([
                    'title' => $itemm['name'],
                    'type' => $itemm['type'],
                    'quotation_title_id' => $title->id,
                ]);
            }
        }
    }
}
