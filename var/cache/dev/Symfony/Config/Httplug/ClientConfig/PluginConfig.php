<?php

namespace Symfony\Config\Httplug\ClientConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AuthenticationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'CookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HistoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'DecoderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'LoggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'RedirectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'RetryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'StopwatchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ErrorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ReferenceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AddHostConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AddPathConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'BaseUriConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ContentTypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderAppendConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderDefaultsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderSetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderRemoveConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'QueryDefaultsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'VcrConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PluginConfig 
{
    private $authentication;
    private $cache;
    private $cookie;
    private $history;
    private $decoder;
    private $logger;
    private $redirect;
    private $retry;
    private $stopwatch;
    private $error;
    private $reference;
    private $addHost;
    private $addPath;
    private $baseUri;
    private $contentType;
    private $headerAppend;
    private $headerDefaults;
    private $headerSet;
    private $headerRemove;
    private $queryDefaults;
    private $vcr;
    private $_usedProperties = [];

    public function authentication(string $name, array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig
    {
        if (!isset($this->authentication[$name])) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication[$name] = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "authentication()" has already been initialized. You cannot pass values the second time you call authentication().');
        }

        return $this->authentication[$name];
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig|$this
     */
    public function cache($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = $value;

            return $this;
        }

        if (!$this->cache instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig|$this
     */
    public function cookie($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = $value;

            return $this;
        }

        if (!$this->cookie instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }

        return $this->cookie;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig|$this
     */
    public function history($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['history'] = true;
            $this->history = $value;

            return $this;
        }

        if (!$this->history instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig) {
            $this->_usedProperties['history'] = true;
            $this->history = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "history()" has already been initialized. You cannot pass values the second time you call history().');
        }

        return $this->history;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig|$this
     */
    public function decoder($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = $value;

            return $this;
        }

        if (!$this->decoder instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "decoder()" has already been initialized. You cannot pass values the second time you call decoder().');
        }

        return $this->decoder;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig|$this
     */
    public function logger($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value;

            return $this;
        }

        if (!$this->logger instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "logger()" has already been initialized. You cannot pass values the second time you call logger().');
        }

        return $this->logger;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig|$this
     */
    public function redirect($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = $value;

            return $this;
        }

        if (!$this->redirect instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "redirect()" has already been initialized. You cannot pass values the second time you call redirect().');
        }

        return $this->redirect;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig|$this
     */
    public function retry($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['retry'] = true;
            $this->retry = $value;

            return $this;
        }

        if (!$this->retry instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig) {
            $this->_usedProperties['retry'] = true;
            $this->retry = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "retry()" has already been initialized. You cannot pass values the second time you call retry().');
        }

        return $this->retry;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig|$this
     */
    public function stopwatch($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = $value;

            return $this;
        }

        if (!$this->stopwatch instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "stopwatch()" has already been initialized. You cannot pass values the second time you call stopwatch().');
        }

        return $this->stopwatch;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig|$this
     */
    public function error($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['error'] = true;
            $this->error = $value;

            return $this;
        }

        if (!$this->error instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig) {
            $this->_usedProperties['error'] = true;
            $this->error = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "error()" has already been initialized. You cannot pass values the second time you call error().');
        }

        return $this->error;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig|$this
     */
    public function reference($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['reference'] = true;
            $this->reference = $value;

            return $this;
        }

        if (!$this->reference instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig) {
            $this->_usedProperties['reference'] = true;
            $this->reference = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "reference()" has already been initialized. You cannot pass values the second time you call reference().');
        }

        return $this->reference;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig|$this
     */
    public function addHost($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['addHost'] = true;
            $this->addHost = $value;

            return $this;
        }

        if (!$this->addHost instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig) {
            $this->_usedProperties['addHost'] = true;
            $this->addHost = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "addHost()" has already been initialized. You cannot pass values the second time you call addHost().');
        }

        return $this->addHost;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig|$this
     */
    public function addPath($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['addPath'] = true;
            $this->addPath = $value;

            return $this;
        }

        if (!$this->addPath instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig) {
            $this->_usedProperties['addPath'] = true;
            $this->addPath = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "addPath()" has already been initialized. You cannot pass values the second time you call addPath().');
        }

        return $this->addPath;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig|$this
     */
    public function baseUri($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = $value;

            return $this;
        }

        if (!$this->baseUri instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "baseUri()" has already been initialized. You cannot pass values the second time you call baseUri().');
        }

        return $this->baseUri;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig|$this
     */
    public function contentType($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = $value;

            return $this;
        }

        if (!$this->contentType instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "contentType()" has already been initialized. You cannot pass values the second time you call contentType().');
        }

        return $this->contentType;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig|$this
     */
    public function headerAppend($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['headerAppend'] = true;
            $this->headerAppend = $value;

            return $this;
        }

        if (!$this->headerAppend instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig) {
            $this->_usedProperties['headerAppend'] = true;
            $this->headerAppend = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headerAppend()" has already been initialized. You cannot pass values the second time you call headerAppend().');
        }

        return $this->headerAppend;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig|$this
     */
    public function headerDefaults($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['headerDefaults'] = true;
            $this->headerDefaults = $value;

            return $this;
        }

        if (!$this->headerDefaults instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig) {
            $this->_usedProperties['headerDefaults'] = true;
            $this->headerDefaults = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headerDefaults()" has already been initialized. You cannot pass values the second time you call headerDefaults().');
        }

        return $this->headerDefaults;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig|$this
     */
    public function headerSet($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['headerSet'] = true;
            $this->headerSet = $value;

            return $this;
        }

        if (!$this->headerSet instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig) {
            $this->_usedProperties['headerSet'] = true;
            $this->headerSet = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headerSet()" has already been initialized. You cannot pass values the second time you call headerSet().');
        }

        return $this->headerSet;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig|$this
     */
    public function headerRemove($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['headerRemove'] = true;
            $this->headerRemove = $value;

            return $this;
        }

        if (!$this->headerRemove instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig) {
            $this->_usedProperties['headerRemove'] = true;
            $this->headerRemove = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headerRemove()" has already been initialized. You cannot pass values the second time you call headerRemove().');
        }

        return $this->headerRemove;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig|$this
     */
    public function queryDefaults($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['queryDefaults'] = true;
            $this->queryDefaults = $value;

            return $this;
        }

        if (!$this->queryDefaults instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig) {
            $this->_usedProperties['queryDefaults'] = true;
            $this->queryDefaults = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "queryDefaults()" has already been initialized. You cannot pass values the second time you call queryDefaults().');
        }

        return $this->queryDefaults;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig|$this
     */
    public function vcr($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['vcr'] = true;
            $this->vcr = $value;

            return $this;
        }

        if (!$this->vcr instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig) {
            $this->_usedProperties['vcr'] = true;
            $this->vcr = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "vcr()" has already been initialized. You cannot pass values the second time you call vcr().');
        }

        return $this->vcr;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('authentication', $value)) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication = array_map(function ($v) { return new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig($v); }, $value['authentication']);
            unset($value['authentication']);
        }

        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = \is_array($value['cache']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig($value['cache']) : $value['cache'];
            unset($value['cache']);
        }

        if (array_key_exists('cookie', $value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = \is_array($value['cookie']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig($value['cookie']) : $value['cookie'];
            unset($value['cookie']);
        }

        if (array_key_exists('history', $value)) {
            $this->_usedProperties['history'] = true;
            $this->history = \is_array($value['history']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig($value['history']) : $value['history'];
            unset($value['history']);
        }

        if (array_key_exists('decoder', $value)) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = \is_array($value['decoder']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig($value['decoder']) : $value['decoder'];
            unset($value['decoder']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = \is_array($value['logger']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig($value['logger']) : $value['logger'];
            unset($value['logger']);
        }

        if (array_key_exists('redirect', $value)) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = \is_array($value['redirect']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig($value['redirect']) : $value['redirect'];
            unset($value['redirect']);
        }

        if (array_key_exists('retry', $value)) {
            $this->_usedProperties['retry'] = true;
            $this->retry = \is_array($value['retry']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig($value['retry']) : $value['retry'];
            unset($value['retry']);
        }

        if (array_key_exists('stopwatch', $value)) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = \is_array($value['stopwatch']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig($value['stopwatch']) : $value['stopwatch'];
            unset($value['stopwatch']);
        }

        if (array_key_exists('error', $value)) {
            $this->_usedProperties['error'] = true;
            $this->error = \is_array($value['error']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig($value['error']) : $value['error'];
            unset($value['error']);
        }

        if (array_key_exists('reference', $value)) {
            $this->_usedProperties['reference'] = true;
            $this->reference = \is_array($value['reference']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig($value['reference']) : $value['reference'];
            unset($value['reference']);
        }

        if (array_key_exists('add_host', $value)) {
            $this->_usedProperties['addHost'] = true;
            $this->addHost = \is_array($value['add_host']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig($value['add_host']) : $value['add_host'];
            unset($value['add_host']);
        }

        if (array_key_exists('add_path', $value)) {
            $this->_usedProperties['addPath'] = true;
            $this->addPath = \is_array($value['add_path']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig($value['add_path']) : $value['add_path'];
            unset($value['add_path']);
        }

        if (array_key_exists('base_uri', $value)) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = \is_array($value['base_uri']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig($value['base_uri']) : $value['base_uri'];
            unset($value['base_uri']);
        }

        if (array_key_exists('content_type', $value)) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = \is_array($value['content_type']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig($value['content_type']) : $value['content_type'];
            unset($value['content_type']);
        }

        if (array_key_exists('header_append', $value)) {
            $this->_usedProperties['headerAppend'] = true;
            $this->headerAppend = \is_array($value['header_append']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig($value['header_append']) : $value['header_append'];
            unset($value['header_append']);
        }

        if (array_key_exists('header_defaults', $value)) {
            $this->_usedProperties['headerDefaults'] = true;
            $this->headerDefaults = \is_array($value['header_defaults']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig($value['header_defaults']) : $value['header_defaults'];
            unset($value['header_defaults']);
        }

        if (array_key_exists('header_set', $value)) {
            $this->_usedProperties['headerSet'] = true;
            $this->headerSet = \is_array($value['header_set']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig($value['header_set']) : $value['header_set'];
            unset($value['header_set']);
        }

        if (array_key_exists('header_remove', $value)) {
            $this->_usedProperties['headerRemove'] = true;
            $this->headerRemove = \is_array($value['header_remove']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig($value['header_remove']) : $value['header_remove'];
            unset($value['header_remove']);
        }

        if (array_key_exists('query_defaults', $value)) {
            $this->_usedProperties['queryDefaults'] = true;
            $this->queryDefaults = \is_array($value['query_defaults']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig($value['query_defaults']) : $value['query_defaults'];
            unset($value['query_defaults']);
        }

        if (array_key_exists('vcr', $value)) {
            $this->_usedProperties['vcr'] = true;
            $this->vcr = \is_array($value['vcr']) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig($value['vcr']) : $value['vcr'];
            unset($value['vcr']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['authentication'])) {
            $output['authentication'] = array_map(function ($v) { return $v->toArray(); }, $this->authentication);
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig ? $this->cache->toArray() : $this->cache;
        }
        if (isset($this->_usedProperties['cookie'])) {
            $output['cookie'] = $this->cookie instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig ? $this->cookie->toArray() : $this->cookie;
        }
        if (isset($this->_usedProperties['history'])) {
            $output['history'] = $this->history instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig ? $this->history->toArray() : $this->history;
        }
        if (isset($this->_usedProperties['decoder'])) {
            $output['decoder'] = $this->decoder instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig ? $this->decoder->toArray() : $this->decoder;
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig ? $this->logger->toArray() : $this->logger;
        }
        if (isset($this->_usedProperties['redirect'])) {
            $output['redirect'] = $this->redirect instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig ? $this->redirect->toArray() : $this->redirect;
        }
        if (isset($this->_usedProperties['retry'])) {
            $output['retry'] = $this->retry instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig ? $this->retry->toArray() : $this->retry;
        }
        if (isset($this->_usedProperties['stopwatch'])) {
            $output['stopwatch'] = $this->stopwatch instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig ? $this->stopwatch->toArray() : $this->stopwatch;
        }
        if (isset($this->_usedProperties['error'])) {
            $output['error'] = $this->error instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ErrorConfig ? $this->error->toArray() : $this->error;
        }
        if (isset($this->_usedProperties['reference'])) {
            $output['reference'] = $this->reference instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig ? $this->reference->toArray() : $this->reference;
        }
        if (isset($this->_usedProperties['addHost'])) {
            $output['add_host'] = $this->addHost instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig ? $this->addHost->toArray() : $this->addHost;
        }
        if (isset($this->_usedProperties['addPath'])) {
            $output['add_path'] = $this->addPath instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig ? $this->addPath->toArray() : $this->addPath;
        }
        if (isset($this->_usedProperties['baseUri'])) {
            $output['base_uri'] = $this->baseUri instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig ? $this->baseUri->toArray() : $this->baseUri;
        }
        if (isset($this->_usedProperties['contentType'])) {
            $output['content_type'] = $this->contentType instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig ? $this->contentType->toArray() : $this->contentType;
        }
        if (isset($this->_usedProperties['headerAppend'])) {
            $output['header_append'] = $this->headerAppend instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig ? $this->headerAppend->toArray() : $this->headerAppend;
        }
        if (isset($this->_usedProperties['headerDefaults'])) {
            $output['header_defaults'] = $this->headerDefaults instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig ? $this->headerDefaults->toArray() : $this->headerDefaults;
        }
        if (isset($this->_usedProperties['headerSet'])) {
            $output['header_set'] = $this->headerSet instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig ? $this->headerSet->toArray() : $this->headerSet;
        }
        if (isset($this->_usedProperties['headerRemove'])) {
            $output['header_remove'] = $this->headerRemove instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig ? $this->headerRemove->toArray() : $this->headerRemove;
        }
        if (isset($this->_usedProperties['queryDefaults'])) {
            $output['query_defaults'] = $this->queryDefaults instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig ? $this->queryDefaults->toArray() : $this->queryDefaults;
        }
        if (isset($this->_usedProperties['vcr'])) {
            $output['vcr'] = $this->vcr instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig ? $this->vcr->toArray() : $this->vcr;
        }

        return $output;
    }

}
