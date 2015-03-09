<?php
namespace Atwix\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Atwix\HelloWorld\Helper\Data
     */
    protected $_coreHelper;

    /**
     * @param Context $context
     * @param \Atwix\HelloWorld\Helper\Data $coreHelper
     */
    public function __construct(
        Context $context,
       \Atwix\HelloWorld\Helper\Data $coreHelper

    )
    {
        parent::__construct($context);
        $this->_coreHelper = $coreHelper;
    }

    public function execute()
    {
         var_dump($this->_coreHelper->someFunction());
    }
}
?>