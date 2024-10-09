<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class OfferCategory extends Field
{
    public function fields()
    {
        $this->set_args();

        $category = new FieldsBuilder('offer_cat');

        $category
            ->setLocation('taxonomy', '==', 'offer_cat');

        $category
            ->addImage('thumb', $this->offer_img_args);

        return $category->build();
    }

    private function set_args()
    {
        $this->offer_img_args = [
            'label' => 'Grafika',
            'return_format' => 'url',
            'preview_size' => 'thumbnail',
            'library' => 'all',
        ];
    }
}