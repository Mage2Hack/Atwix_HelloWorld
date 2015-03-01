<?php
namespace Atwix\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * Default customer account page
     *
     * @return void
     */
    public function execute()
    {
        echo 'Hello World! Magento 2';
    }
}
?>