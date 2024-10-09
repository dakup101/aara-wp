<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class OptionsPartners extends Field
{
    public function fields()
    {
        // Define the 'partners' field group
        $partners = new FieldsBuilder('partners');
        $partnersCombined = new FieldsBuilder('partners_combined');

        $partnersCombined
            ->setLocation('options_page', '==', 'pola-globalne');

        $partners
            ->addText('title', ['label' => 'Partners Title'])
            ->addWysiwyg('text', ['label' => 'Partners Text'])
            ->addRepeater('logos', ['label' => 'Partners Logos'])
                ->addImage('logo', ['label' => 'Logo', 'return_format' => 'url'])
            ->endRepeater();

        // Group the fields under the 'partners_combined' parent group
        $partnersCombined
            ->addGroup('global_partners')
                ->addFields($partners)
            ->endGroup();

        return $partnersCombined->build();
    }
}