<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class TemplateAbout extends Field
{
    public function fields()
    {
        // Define the 'template_about' field group
        $templateAbout = new FieldsBuilder('template_about');

        $templateAbout
            ->setLocation('post_type', '==', 'page') // Adjust post type as needed
            ->and('post_template', '==', 'template-about.blade.php'); // Adjust template name as needed

        $templateAbout
            ->addWysiwyg('part_1', ['label' => 'About, Part 1'])
            ->addWysiwyg('part_2', ['label' => 'About, Part 2'])
            ->addText('title_1', ['label' => 'Title 1'])
            ->addText('title_2', ['label' => 'Title 2'])
            ->addImage('banner_1', ['label' => 'Banner 1', 'return_format' => 'url'])
            ->addImage('banner_2', ['label' => 'Banner 2', 'return_format' => 'url'])
            ->addImage('img', ['label' => 'Image', 'return_format' => 'url']);
            

        // Group the fields under the 'template_about_combined' parent group
        $templateAboutCombined = new FieldsBuilder('template_about_combined');
        $templateAboutCombined
            ->addGroup('template_about')
                ->addFields($templateAbout)
            ->endGroup();

        return $templateAbout->build();
    }
}