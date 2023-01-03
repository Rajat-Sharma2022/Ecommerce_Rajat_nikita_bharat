<?php

namespace Symfony\Config\Httplug;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'AuthenticationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'CookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'HistoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'DecoderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'LoggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'RedirectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'RetryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'StopwatchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'ErrorConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PluginsConfig 
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
    private $_usedProperties = [];

    public function authentication(string $name, array $value = []): \Symfony\Config\Httplug\Plugins\AuthenticationConfig
    {
        if (!isset($this->authentication[$name])) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication[$name] = new \Symfony\Config\Httplug\Plugins\AuthenticationConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "authentication()" has already been initialized. You cannot pass values the second time you call authentication().');
        }

        return $this->authentication[$name];
    }

    /**
     * @return \Symfony\Config\Httplug\Plugins\CacheConfig|$this
     */
    public function cache($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = $value;

            return $this;
        }

        if (!$this->cache instanceof \Symfony\Config\Httplug\Plugins\CacheConfig) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Httplug\Plugins\CacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache;
    }

    /**
     * @return \Symfony\Config\Httplug\Plugins\CookieConfig|$this
     */
    public function cookie($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = $value;

            return $this;
        }

        if (!$this->cookie instanceof \Symfony\Config\Httplug\Plugins\CookieConfig) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\Httplug\Plugins\CookieConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }

        return $this->cookie;
    }

    /**
     * @return \Symfony\Config\Httplug\Plugins\HistoryConfig|$this
     */
    public function history($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['history'] = true;
            $this->history = $value;

            return $this;
        }

        if (!$this->history instanceof \Symfony\Config\Httplug\Plugins\HistoryConfig) {
            $this->_usedProperties['history'] = true;
            $this->history = new \Symfony\Config\Httplug\Plugins\HistoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "history()" has already been initialized. You cannot pass values the second time you call history().');
        }

        return $this->history;
    }

    public function decoder(array $value = []): \Symfony\Config\Httplug\Plugins\DecoderConfig
    {
        if (null === $this->decoder) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = new \Symfony\Config\Httplug\Plugins\DecoderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "decoder()" has already been initialized. You cannot pass values the second time you call decoder().');
        }

        return $this->decoder;
    }

    public function logger(array $value = []): \Symfony\Config\Httplug\Plugins\LoggerConfig
    {
        if (null === $this->logger) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Httplug\Plugins\LoggerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "logger()" has already been initialized. You cannot pass values the second time you call logger().');
        }

        return $this->logger;
    }

    public function redirect(array $value = []): \Symfony\Config\Httplug\Plugins\RedirectConfig
    {
        if (null === $this->redirect) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\Httplug\Plugins\RedirectConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "redirect()" has already been initialized. You cannot pass values the second time you call redirect().');
        }

        return $this->redirect;
    }

    public function retry(array $value = []): \Symfony\Config\Httplug\Plugins\RetryConfig
    {
        if (null === $this->retry) {
            $this->_usedProperties['retry'] = true;
            $this->retry = new \Symfony\Config\Httplug\Plugins\RetryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "retry()" has already been initialized. You cannot pass values the second time you call retry().');
        }

        return $this->retry;
    }

    public function stopwatch(array $value = []): \Symfony\Config\Httplug\Plugins\StopwatchConfig
    {
        if (null === $this->stopwatch) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = new \Symfony\Config\Httplug\Plugins\StopwatchConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "stopwatch()" has already been initialized. You cannot pass values the second time you call stopwatch().');
        }

        return $this->stopwatch;
    }

    /**
     * @return \Symfony\Config\Httplug\Plugins\ErrorConfig|$this
     */
    public function error($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['error'] = true;
            $this->error = $value;

            return $this;
        }

        if (!$this->error instanceof \Symfony\Config\Httplug\Plugins\ErrorConfig) {
            $this->_usedProperties['error'] = true;
            $this->error = new \Symfony\Config\Httplug\Plugins\ErrorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "error()" has already been initialized. You cannot pass values the second time you call error().');
        }

        return $this->error;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('authentication', $value)) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication = array_map(function ($v) { return new \Symfony\Config\Httplug\Plugins\AuthenticationConfig($v); }, $value['authentication']);
            unset($value['authentication']);
        }

        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = \is_array($value['cache']) ? new \Symfony\Config\Httplug\Plugins\CacheConfig($value['cache']) : $value['cache'];
            unset($value['cache']);
        }

        if (array_key_exists('cookie', $value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = \is_array($value['cookie']) ? new \Symfony\Config\Httplug\Plugins\CookieConfig($value['cookie']) : $value['cookie'];
            unset($value['cookie']);
        }

        if (array_key_exists('history', $value)) {
            $this->_usedProperties['history'] = true;
            $this->history = \is_array($value['history']) ? new \Symfony\Config\Httplug\Plugins\HistoryConfig($value['history']) : $value['history'];
            unset($value['history']);
        }

        if (array_key_exists('decoder', $value)) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = new \Symfony\Config\Httplug\Plugins\DecoderConfig($value['decoder']);
            unset($value['decoder']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Httplug\Plugins\LoggerConfig($value['logger']);
            unset($value['logger']);
        }

        if (array_key_exists('redirect', $value)) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\Httplug\Plugins\RedirectConfig($value['redirect']);
            unset($value['redirect']);
        }

        if (array_key_exists('retry', $value)) {
            $this->_usedProperties['retry'] = true;
            $this->retry = new \Symfony\Config\Httplug\Plugins\RetryConfig($value['retry']);
            unset($value['retry']);
        }

        if (array_key_exists('stopwatch', $value)) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = new \Symfony\Config\Httplug\Plugins\StopwatchConfig($value['stopwatch']);
            unset($value['stopwatch']);
        }

        if (array_key_exists('error', $value)) {
            $this->_usedProperties['error'] = true;
            $this->error = \is_array($value['error']) ? new \Symfony\Config\Httplug\Plugins\ErrorConfig($value['error']) : $value['error'];
            unset($value['error']);
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
            $output['cache'] = $this->cache instanceof \Symfony\Config\Httplug\Plugins\CacheConfig ? $this->cache->toArray() : $this->cache;
        }
        if (isset($this->_usedProperties['cookie'])) {
            $output['cookie'] = $this->cookie instanceof \Symfony\Config\Httplug\Plugins\CookieConfig ? $this->cookie->toArray() : $this->cookie;
        }
        if (isset($this->_usedProperties['history'])) {
            $output['history'] = $this->history instanceof \Symfony\Config\Httplug\Plugins\HistoryConfig ? $this->history->toArray() : $this->history;
        }
        if (isset($this->_usedProperties['decoder'])) {
            $output['decoder'] = $this->decoder->toArray();
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger->toArray();
        }
        if (isset($this->_usedProperties['redirect'])) {
            $output['redirect'] = $this->redirect->toArray();
        }
        if (isset($this->_usedProperties['retry'])) {
            $output['retry'] = $this->retry->toArray();
        }
        if (isset($this->_usedProperties['stopwatch'])) {
            $output['stopwatch'] = $this->stopwatch->toArray();
        }
        if (isset($this->_usedProperties['error'])) {
            $output['error'] = $this->error instanceof \Symfony\Config\Httplug\Plugins\ErrorConfig ? $this->error->toArray() : $this->error;
        }

        return $output;
    }

}
