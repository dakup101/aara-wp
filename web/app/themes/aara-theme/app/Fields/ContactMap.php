<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ContactMap extends Field
{
    public function fields()
    {
        // Define the 'contact_map' field group
        $contactMap = new FieldsBuilder('contact_map');

        // Set the location for the field group (customize as needed)
        $contactMap
            ->setLocation('options_page', '==', 'pola-globalne');

        // Define the individual fields for the 'contact_map' group
        $contactMap
            ->addGroup('global_contact_map', ['label' => 'Contact Map'])
                ->addText('title', ['label' => 'Map Title'])
                ->addWysiwyg('addr', ['label' => 'Address'])
                ->addUrl('maps_url', ['label' => 'Google Maps URL'])
            ->endGroup();

        return $contactMap->build();
    }
}