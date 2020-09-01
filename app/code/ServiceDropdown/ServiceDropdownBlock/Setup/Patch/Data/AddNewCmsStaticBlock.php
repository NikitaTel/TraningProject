<?php
/**
 * @author Rakesh Jesadiya
 * @package ServiceDropdown_ServiceDropdownBlock
 */

namespace ServiceDropdown\ServiceDropdownBlock\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Cms\Model\BlockFactory;
/**
 * Class AddNewCmsStaticBlock
 * @package ServiceDropdown\ServiceDropdownBlock\Setup\Patch\Data
 */
class AddNewCmsStaticBlock implements DataPatchInterface, PatchVersionInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var BlockFactory
     */
    private $blockFactory;

    /**
     * AddAccessViolationPageAndAssignB2CCustomers constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param PageFactory $blockFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        BlockFactory $blockFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->blockFactory = $blockFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $newCmsStaticBlock = [
            'title' => 'Service Dropdown',
            'identifier' => 'block-service-dropdown',
            'content' => '<div class="customer-service-dropdown">
                            <div class="service-title">Were here to help</div>
                            <div class="service-contacts">
                                <span>844-532-JMCL (5625)</span>
                                <span>M-F, 9:30am - 5:30pm EST</span>
                            </div>
                            <ul>
                                <li><a href="#">Email Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Track Your Order</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Sign up for Email</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                        '
            ,
            'is_active' => 1,
            'stores' => \Magento\Store\Model\Store::DEFAULT_STORE_ID
        ];


        $this->moduleDataSetup->startSetup();

        /** @var \Magento\Cms\Model\Block $block */
        $block = $this->blockFactory->create();
        $block->setData($newCmsStaticBlock)->save();

        $this->moduleDataSetup->endSetup();
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public static function getVersion()
    {
        return '2.0.0';
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}
