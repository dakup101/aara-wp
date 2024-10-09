<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class GuideSingle extends Field
{
    public function fields()
    {
        // Define the 'guide_single' field group
        $guideSingle = new FieldsBuilder('guide_single');

        $guideSingle
            ->setLocation('post_type', '==', 'guide');

        $guideSingle
            ->addImage('icon', ['label' => 'Icon', 'return_format' => 'url'])
            ->addRepeater('pdfs', ['label' => 'PDFs'])
                ->addText('name', ['label' => 'PDF Name'])
                ->addFile('url', ['label' => 'PDF File', 'return_format' => 'url'])
            ->endRepeater();

        return $guideSingle->build();
    }
}