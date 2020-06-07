<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit1\StandaloneXhtmlTemplateSkeleton\Model;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * getData
     *
     * @return array|\string[][][]
     */
    public function getData()
    {
        return [ 'list' => [
            0 =>
                [
                    'name'      => 'Veronica',
                    'lastname'  => 'Costello'
                ]
            ]
        ];
    }
}
