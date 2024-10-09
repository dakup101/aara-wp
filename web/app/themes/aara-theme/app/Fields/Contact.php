<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Contact extends Field
{
    public function fields()
    {
        // Define the 'contact' field group
        $contact = new FieldsBuilder('contact');

        $contact
            ->setLocation('post_type', '==', 'page')
            ->and('page_template', '==', 'template-contact.blade.php');

        $contact
            ->addGroup('contact', ['label' => 'Contact'])
                ->addTextarea('addr', ['label' => 'Address'])
                ->addText('tel', ['label' => 'Telephone'])
                ->addText('tel_inline', ['label' => 'Inline Telephone'])
                ->addText('nip', ['label' => 'NIP'])
                ->addImage('map', ['label' => 'Map Image', 'return_format' => 'url'])
                ->addText('map_url', ['label' => 'Map URL'])
                ->addEmail('mail', ['label' => 'Email'])
                ->addText('form', ['label' => 'Form Shortcode'])
            ->endGroup()

            ->addRepeater('persons', ['label' => 'Persons'])
                ->addText('name', ['label' => 'Name'])
                ->addText('position', ['label' => 'Position'])
                ->addText('tel', ['label' => 'Telephone'])
                ->addText('tel_inline', ['label' => 'Inline Telephone'])
                ->addEmail('mail', ['label' => 'Email'])
                ->addImage('img', ['label' => 'Image', 'return_format' => 'url'])
            ->endRepeater();
        return $contact->build();
    }
}