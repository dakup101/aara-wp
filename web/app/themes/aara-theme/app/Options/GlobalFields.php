<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class GlobalFields extends Field
{
    public $name = 'Pola Globalne';

    public $title = 'Polga Globalne';

    public function fields()
    {
        $builder = new FieldsBuilder('global-fields');

        $builder
            ->setLocation('options_page', '==', 'pola-globalne');

        $builder
            ->addWysiwyg('global_offer_desc', ['label' => 'Opis Archiwum Oferty'])
            ->addWysiwyg('global_guide_desc', ['label' => 'Opis Archiwum Poradników'])
            
            ->addRepeater('global_offer_pdfs', ['label' => 'PDFy Archiwum Poradników'])
                ->addFile('url', ['label' => 'Plik', 'return_format' => 'url'])
                ->addText('name', ['label' => 'Nazwa pliku'])
            ->endRepeater()

            ->addRepeater('global_megamenu', ['label' => 'Megamenu'])
                // ->addTaxonomy('term', [
                //     'label' => 'Kategoria',
                //     'taxonomy' => 'offer_cat',
                //     'field_type' => 'select',
                //     'return_format' => 'object',
                // ])
                ->addPostObject('id', [
                    'label' => 'Oferta',
                    'post_type' => 'offer',
                    'return_format' => 'id',
                    'ui' => 1,
                ])
            ->endRepeater();

        return $builder->build();
    }
}