<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PortfolioItem extends Field
{
    public function fields()
    {
        // Define the 'portfolio_item' field group
        $portfolioItem = new FieldsBuilder('portfolio_item');

        $portfolioItem
            ->setLocation('post_type', '==', 'portfolio'); // Adjust post type as needed

        $portfolioItem
            ->addText('brand', ['label' => 'Brand'])
            ->addRepeater('specs', ['label' => 'Specifications'])
                ->addText('label', ['label' => 'Label'])
                ->addText('value', ['label' => 'Value'])
            ->endRepeater()
            ->addPostObject('product_id', [
                'label' => 'Select Offer',
                'post_type' => ['offer'],
                'multiple' => false,
                'return_format' => 'id',
            ]);

        return $portfolioItem->build();
    }
}