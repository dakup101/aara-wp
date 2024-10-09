<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class IconsInfo extends Field
{
    public function fields()
    {
        // Define the 'icons_info' field group
        $iconsInfo = new FieldsBuilder('icons_info');

        // Set the location for the field group (customize as needed)
        $iconsInfo
            ->setLocation('options_page', '==', 'pola-globalne');

        // Define the individual fields for the 'icons_info' group
        $iconsInfo
            ->addGroup('global_icons_info', ['label' => 'Icons Info'])
                ->addText('title', ['label' => 'Icons Info Title'])
                ->addRepeater('icons', ['label' => 'Icons'])
                    ->addImage('icon', ['label' => 'Icon', 'return_format' => 'url'])
                    ->addText('title', ['label' => 'Icon Title'])
                    ->addWysiwyg('text', ['label' => 'Icon Text'])
                ->endRepeater()
            ->endGroup();

        return $iconsInfo->build();
    }
}