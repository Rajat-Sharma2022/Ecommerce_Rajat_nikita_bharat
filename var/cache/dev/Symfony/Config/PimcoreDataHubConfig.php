<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreDataHub'.\DIRECTORY_SEPARATOR.'GraphqlConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class PimcoreDataHubConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $graphql;
    private $configurations;
    private $_usedProperties = [];

    public function graphql(array $value = []): \Symfony\Config\PimcoreDataHub\GraphqlConfig
    {
        if (null === $this->graphql) {
            $this->_usedProperties['graphql'] = true;
            $this->graphql = new \Symfony\Config\PimcoreDataHub\GraphqlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "graphql()" has already been initialized. You cannot pass values the second time you call graphql().');
        }

        return $this->graphql;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function configurations($value): self
    {
        $this->_usedProperties['configurations'] = true;
        $this->configurations = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'pimcore_data_hub';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('graphql', $value)) {
            $this->_usedProperties['graphql'] = true;
            $this->graphql = new \Symfony\Config\PimcoreDataHub\GraphqlConfig($value['graphql']);
            unset($value['graphql']);
        }

        if (array_key_exists('configurations', $value)) {
            $this->_usedProperties['configurations'] = true;
            $this->configurations = $value['configurations'];
            unset($value['configurations']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['graphql'])) {
            $output['graphql'] = $this->graphql->toArray();
        }
        if (isset($this->_usedProperties['configurations'])) {
            $output['configurations'] = $this->configurations;
        }

        return $output;
    }

}
