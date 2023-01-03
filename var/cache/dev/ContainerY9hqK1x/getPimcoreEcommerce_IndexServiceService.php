<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreEcommerce_IndexServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore_ecommerce.index_service' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\IndexService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/IndexService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/Worker/WorkerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/Worker/AbstractWorker.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/Worker/DefaultMysql.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/Config/ConfigInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/Config/AbstractConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/Config/MysqlConfigInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/Config/DefaultMysql.php';
        include_once \dirname(__DIR__, 4).'/src/Ecommerce/IndexService/Config/MySqlConfig.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/IndexService/Config/AttributeFactory.php';

        $a = new \App\Ecommerce\IndexService\Config\MySqlConfig('default', ['name' => ['type' => 'varchar(255)', 'filter_group' => 'string', 'name' => 'name', 'field_name' => 'OSName', 'locale' => NULL, 'options' => [], 'getter_id' => NULL, 'getter_options' => [], 'interpreter_id' => NULL, 'interpreter_options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'manufacturer_name' => ['type' => 'varchar(255)', 'interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\ObjectValue', 'interpreter_options' => ['target' => ['fieldname' => 'name', 'locale' => 'en']], 'filter_group' => 'string', 'name' => 'manufacturer_name', 'field_name' => 'manufacturer', 'locale' => NULL, 'options' => [], 'getter_id' => NULL, 'getter_options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'manufacturer' => ['interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\DefaultObjects', 'filter_group' => 'relation', 'name' => 'manufacturer', 'field_name' => NULL, 'type' => NULL, 'locale' => NULL, 'options' => [], 'getter_id' => NULL, 'getter_options' => [], 'interpreter_options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'bodyStyle' => ['interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\DefaultObjects', 'filter_group' => 'relation', 'name' => 'bodyStyle', 'field_name' => NULL, 'type' => NULL, 'locale' => NULL, 'options' => [], 'getter_id' => NULL, 'getter_options' => [], 'interpreter_options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'carClass' => ['type' => 'varchar(255)', 'filter_group' => 'string', 'name' => 'carClass', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'getter_id' => NULL, 'getter_options' => [], 'interpreter_id' => NULL, 'interpreter_options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'color' => ['type' => 'varchar(255)', 'filter_group' => 'multiselect', 'name' => 'color', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'getter_id' => NULL, 'getter_options' => [], 'interpreter_id' => NULL, 'interpreter_options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'country' => ['type' => 'varchar(10)', 'filter_group' => 'string', 'name' => 'country', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'getter_id' => NULL, 'getter_options' => [], 'interpreter_id' => NULL, 'interpreter_options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'milage' => ['type' => 'double', 'interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue', 'interpreter_options' => ['onlyValue' => true], 'getter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence', 'getter_options' => ['source' => [0 => ['brickfield' => 'saleInformation', 'bricktype' => 'SaleInformation', 'fieldname' => 'milage']]], 'name' => 'milage', 'filter_group' => 'double', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'length' => ['type' => 'double', 'interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue', 'interpreter_options' => ['onlyValue' => true], 'getter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence', 'getter_options' => ['source' => [0 => ['brickfield' => 'attributes', 'bricktype' => 'dimensions', 'fieldname' => 'length']]], 'name' => 'length', 'filter_group' => 'double', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'width' => ['type' => 'double', 'interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue', 'interpreter_options' => ['onlyValue' => true], 'getter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence', 'getter_options' => ['source' => [0 => ['brickfield' => 'attributes', 'bricktype' => 'dimensions', 'fieldname' => 'width']]], 'name' => 'width', 'filter_group' => 'double', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'wheelbase' => ['type' => 'double', 'interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue', 'interpreter_options' => ['onlyValue' => true], 'getter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence', 'getter_options' => ['source' => [0 => ['brickfield' => 'attributes', 'bricktype' => 'dimensions', 'fieldname' => 'wheelbase']]], 'name' => 'wheelbase', 'filter_group' => 'double', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'weight' => ['type' => 'double', 'interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue', 'interpreter_options' => ['onlyValue' => true], 'getter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence', 'getter_options' => ['source' => [0 => ['brickfield' => 'attributes', 'bricktype' => 'dimensions', 'fieldname' => 'weight']]], 'name' => 'weight', 'filter_group' => 'double', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'power' => ['type' => 'double', 'interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue', 'interpreter_options' => ['onlyValue' => true], 'getter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence', 'getter_options' => ['source' => [0 => ['brickfield' => 'attributes', 'bricktype' => 'engine', 'fieldname' => 'power']]], 'name' => 'power', 'filter_group' => 'double', 'field_name' => NULL, 'locale' => NULL, 'options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []], 'segments' => ['getter_id' => 'App\\Ecommerce\\IndexService\\SegmentGetter', 'interpreter_id' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\DefaultObjects', 'filter_group' => 'relation', 'name' => 'segments', 'field_name' => NULL, 'type' => NULL, 'locale' => NULL, 'options' => [], 'getter_options' => [], 'interpreter_options' => [], 'hide_in_fieldlist_datatype' => false, 'placeholders' => []]], [0 => 'name', 1 => 'manufacturer_name', 2 => 'color', 3 => 'carClass'], [], []);
        $a->setAttributeFactory(new \Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Config\AttributeFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Ecommerce\\IndexService\\SegmentGetter' => ['privates', 'App\\Ecommerce\\IndexService\\SegmentGetter', 'getSegmentGetterService', false],
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence' => ['privates', 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence', 'getDefaultBrickGetterSequenceService', true],
        ], [
            'App\\Ecommerce\\IndexService\\SegmentGetter' => '?',
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Getter\\DefaultBrickGetterSequence' => '?',
        ]), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\DefaultObjects' => ['privates', 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\DefaultObjects', 'getDefaultObjectsService', true],
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\ObjectValue' => ['privates', 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\ObjectValue', 'getObjectValueService', true],
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue' => ['privates', 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue', 'getQuantityValue2Service', true],
        ], [
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\DefaultObjects' => '?',
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\ObjectValue' => '?',
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Interpreter\\QuantityValue' => '?',
        ])));

        return $container->services['pimcore_ecommerce.index_service'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\IndexService(($container->services['pimcore_ecommerce.environment'] ?? $container->getPimcoreEcommerce_EnvironmentService()), [0 => new \Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\Worker\DefaultMysql($a, ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()))], 'default');
    }
}