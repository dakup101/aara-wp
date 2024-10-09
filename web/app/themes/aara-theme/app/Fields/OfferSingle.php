<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Button;

class OfferSingle extends Field
{
    public function fields()
    {
        // Define the 'offer_single' field group
        $offerSingle = new FieldsBuilder('offer_single');

        $offerSingle
            ->setLocation('post_type', '==', 'offer');

        $button = new FieldsBuilder('btn');
        new ButtonField($button, "btn", "Przycisk");

        $offerSingle
            ->addWysiwyg('desc', ['label' => 'Description'])

            ->addRepeater('images', ['label' => 'Gallery'])
                ->addImage('img', ['label' => 'Image', 'return_format' => 'url'])
            ->endRepeater()

            ->addText('form', ['label' => 'Form Shortcode']);

        return $offerSingle->build();
    }


    // ***************************
    // old.single-offer.php Fields
    // ***************************


    // public function fields()
    // {
    //     // Define the 'offer_single' field group
    //     $offerSingle = new FieldsBuilder('offer_single');

    //     $offerSingle
    //         ->setLocation('post_type', '==', 'offer');

    //     $button = new FieldsBuilder('btn');
    //     new ButtonField($button, "btn", "Przycisk");

    //     $offerSingle
    //         ->addWysiwyg('desc', ['label' => 'Description'])

    //         ->addRepeater('properties', ['label' => 'Properties'])
    //             ->addText('title', ['label' => 'Title'])
    //             ->addTextarea('desc', ['label' => 'Description'])
    //             ->addImage('icon', ['label' => 'Icon', 'return_format' => 'url'])
    //         ->endRepeater()

    //         ->addGroup('desc_long', ['label' => 'Long Description'])
    //             ->addText('title', ['label' => 'Title'])
    //             ->addWysiwyg('desc', ['label' => 'Description'])
    //             ->addFields($button)
    //             ->addRepeater('pins', ['label' => 'Pins'])
    //                 ->addText('title', ['label' => 'Title'])
    //                 ->addWysiwyg('desc', ['label' => 'Description'])
    //                 ->addImage('img', ['label' => 'Image', 'return_format' => 'url'])
    //                 ->addNumber('pos_x', ['label' => 'Position X'])
    //                 ->addNumber('pos_y', ['label' => 'Position Y'])
    //             ->endRepeater()
    //             ->addImage('img', ['label' => 'Image', 'return_format' => 'url'])
    //         ->endGroup()

    //         ->addGroup('info', ['label' => 'Info'])
    //         ->addFile('info_pdf', ['label' => 'Info PDF', 'return_format' => 'url'])
    //         ->addImage('info_pdf_preview', ['label' => 'Info PDF Preview', 'return_format' => 'url'])
    //             ->addImage('steps', ['label' => 'Steps', 'return_format' => 'url'])
    //         ->endGroup();

    //     return $offerSingle->build();
    // }
}