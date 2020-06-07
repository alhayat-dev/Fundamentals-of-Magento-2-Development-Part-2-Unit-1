<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit1\JsDataProviderSkeleton\Model;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @return array|\string[][][]
     */
    public function getData()
    {
        return [ 'list' => [
            0 =>
                [
                    'name'      => 'Veronica',
                    'lastname'  => 'Costello'
                ],
            1 =>
                [
                    'name'      => 'John',
                    'lastname'  => 'Doe'
                ],
            2 =>
                [
                    'name'      => 'Jane',
                    'lastname'  => 'Doe'
                ]
            ]
        ];
    }
}
