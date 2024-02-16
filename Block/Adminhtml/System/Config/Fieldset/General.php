<?php
declare(strict_types=1);

namespace Lotsofpixels\RedisMonitor\Block\Adminhtml\System\Config\Fieldset;


use Magento\Backend\Block\Template;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;


/**
 *
 */
class General extends Template implements RendererInterface
{

    /**
     * Class constructor.
     * @param Template\Context $context
     * @param \Magento\Framework\Module\ModuleList $moduleList
     * @param array $data
     */
    public function __construct(
        Template\Context                     $context,
        \Magento\Framework\Module\ModuleList $moduleList,
        array                                $data = []
    )
    {
        $this->_template = 'Lotsofpixels_RedisMonitor::redis_monitor.phtml';
        parent::__construct($context, $data);
        $this->moduleList = $moduleList;
    }
    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $_element = $element;
        return $this->toHtml();
    }


}
