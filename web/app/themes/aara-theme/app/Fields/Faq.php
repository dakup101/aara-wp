<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Faq extends Field
{
    public function fields()
    {
        $faq = new FieldsBuilder('faq_inner');
        $faqCombined = new FieldsBuilder('faq');

        $faqCombined
            ->setLocation('post_type', '==', 'page')
            ->and('page_type', '==', 'front_page')
            ->or('page_template', "==", 'template-contact.blade.php');

        $faq
            ->addText('title', ['label' => 'FAQ Title'])
            ->addRepeater('items', ['label' => 'FAQ Items'])
                ->addText('question', ['label' => 'Question'])
                ->addWysiwyg('answer', ['label' => 'Answer'])
            ->endRepeater();

        // Group the fields under the 'faq' parent group
        $faqCombined
            ->addGroup('faq')
                ->addFields($faq)
            ->endGroup();

        return $faqCombined->build();
    }
}