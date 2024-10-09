<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Button;


class WhyUs extends Field
{
    public function fields()
    {
        $whyUs = new FieldsBuilder('why_us_items');
        
        $whyUsCombined = new FieldsBuilder('why_us');

        $whyUsCombined
        ->setLocation('post_type', '==', 'page')
        ->or('options_page', '==', 'pola-globalne')
        ->or('post_type', '==', 'page', 'and')
            ->or('page_type', '==', 'front_page')
            ->or('page_template', '==', 'template-about.blade.php');
    

        $button = new FieldsBuilder('btn');
        new ButtonField($button, "btn", "Przycisk");

        $whyUs
            ->addText('title', ['label' => 'Nagłówek'])
            ->addWysiwyg('text', ['label' => 'Treść'])
            ->addRepeater('icons', ['label' => 'Why Us Icons'])
                ->addImage('icon', ['label' => 'Icon', 'return_format' => "url"])
                ->addText('title', ['label' => 'Title'])
            ->endRepeater()
            ->addFields($button);

        
        $whyUsCombined
            ->addGroup('why_us')
                ->addFields($whyUs)                
            ->endGroup();

        return $whyUsCombined->build();
    }
}