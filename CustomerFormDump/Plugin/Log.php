<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit1\CustomerFormDump\Plugin;

class Log
{

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * Log constructor.
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param \Magento\Customer\Model\Customer\DataProviderWithDefaultAddresses $subject
     * @param $result
     * @return mixed
     */
    public function afterGetData(\Magento\Customer\Model\Customer\DataProviderWithDefaultAddresses $subject, $result)
    {

        foreach($result as $customer){
            $this->logger->debug("Customer " , $customer);
        }

        return $result;
    }
}
