<?php

namespace Symfony\Config\Httplug\Plugins\Cache;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConfigConfig 
{
    private $cacheKeyGenerator;
    private $cacheLifetime;
    private $defaultTtl;
    private $blacklistedPaths;
    private $hashAlgo;
    private $methods;
    private $cacheListeners;
    private $respectCacheHeaders;
    private $respectResponseCacheDirectives;
    private $_usedProperties = [];

    /**
     * This must be a service id to a service implementing Http\Client\Common\Plugin\Cache\Generator\CacheKeyGenerator
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheKeyGenerator($value): self
    {
        $this->_usedProperties['cacheKeyGenerator'] = true;
        $this->cacheKeyGenerator = $value;

        return $this;
    }

    /**
     * The minimum time we should store a cache item
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheLifetime($value): self
    {
        $this->_usedProperties['cacheLifetime'] = true;
        $this->cacheLifetime = $value;

        return $this;
    }

    /**
     * The default max age of a Response
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTtl($value): self
    {
        $this->_usedProperties['defaultTtl'] = true;
        $this->defaultTtl = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function blacklistedPaths($value): self
    {
        $this->_usedProperties['blacklistedPaths'] = true;
        $this->blacklistedPaths = $value;

        return $this;
    }

    /**
     * Hashing algorithm to use
     * @default null
     * @param ParamConfigurator|'md2'|'md4'|'md5'|'sha1'|'sha224'|'sha256'|'sha384'|'sha512/224'|'sha512/256'|'sha512'|'sha3-224'|'sha3-256'|'sha3-384'|'sha3-512'|'ripemd128'|'ripemd160'|'ripemd256'|'ripemd320'|'whirlpool'|'tiger128,3'|'tiger160,3'|'tiger192,3'|'tiger128,4'|'tiger160,4'|'tiger192,4'|'snefru'|'snefru256'|'gost'|'gost-crypto'|'adler32'|'crc32'|'crc32b'|'crc32c'|'fnv132'|'fnv1a32'|'fnv164'|'fnv1a64'|'joaat'|'murmur3a'|'murmur3c'|'murmur3f'|'xxh32'|'xxh64'|'xxh3'|'xxh128'|'haval128,3'|'haval160,3'|'haval192,3'|'haval224,3'|'haval256,3'|'haval128,4'|'haval160,4'|'haval192,4'|'haval224,4'|'haval256,4'|'haval128,5'|'haval160,5'|'haval192,5'|'haval224,5'|'haval256,5' $value
     * @return $this
     */
    public function hashAlgo($value): self
    {
        $this->_usedProperties['hashAlgo'] = true;
        $this->hashAlgo = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function methods($value): self
    {
        $this->_usedProperties['methods'] = true;
        $this->methods = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function cacheListeners($value): self
    {
        $this->_usedProperties['cacheListeners'] = true;
        $this->cacheListeners = $value;

        return $this;
    }

    /**
     * Whether we should care about cache headers or not [DEPRECATED]
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function respectCacheHeaders($value): self
    {
        $this->_usedProperties['respectCacheHeaders'] = true;
        $this->respectCacheHeaders = $value;

        return $this;
    }

    /**
     * A list of cache directives to respect when caching responses. Omit or set to null to respect the default set of directives.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function respectResponseCacheDirectives($value): self
    {
        $this->_usedProperties['respectResponseCacheDirectives'] = true;
        $this->respectResponseCacheDirectives = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cache_key_generator', $value)) {
            $this->_usedProperties['cacheKeyGenerator'] = true;
            $this->cacheKeyGenerator = $value['cache_key_generator'];
            unset($value['cache_key_generator']);
        }

        if (array_key_exists('cache_lifetime', $value)) {
            $this->_usedProperties['cacheLifetime'] = true;
            $this->cacheLifetime = $value['cache_lifetime'];
            unset($value['cache_lifetime']);
        }

        if (array_key_exists('default_ttl', $value)) {
            $this->_usedProperties['defaultTtl'] = true;
            $this->defaultTtl = $value['default_ttl'];
            unset($value['default_ttl']);
        }

        if (array_key_exists('blacklisted_paths', $value)) {
            $this->_usedProperties['blacklistedPaths'] = true;
            $this->blacklistedPaths = $value['blacklisted_paths'];
            unset($value['blacklisted_paths']);
        }

        if (array_key_exists('hash_algo', $value)) {
            $this->_usedProperties['hashAlgo'] = true;
            $this->hashAlgo = $value['hash_algo'];
            unset($value['hash_algo']);
        }

        if (array_key_exists('methods', $value)) {
            $this->_usedProperties['methods'] = true;
            $this->methods = $value['methods'];
            unset($value['methods']);
        }

        if (array_key_exists('cache_listeners', $value)) {
            $this->_usedProperties['cacheListeners'] = true;
            $this->cacheListeners = $value['cache_listeners'];
            unset($value['cache_listeners']);
        }

        if (array_key_exists('respect_cache_headers', $value)) {
            $this->_usedProperties['respectCacheHeaders'] = true;
            $this->respectCacheHeaders = $value['respect_cache_headers'];
            unset($value['respect_cache_headers']);
        }

        if (array_key_exists('respect_response_cache_directives', $value)) {
            $this->_usedProperties['respectResponseCacheDirectives'] = true;
            $this->respectResponseCacheDirectives = $value['respect_response_cache_directives'];
            unset($value['respect_response_cache_directives']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cacheKeyGenerator'])) {
            $output['cache_key_generator'] = $this->cacheKeyGenerator;
        }
        if (isset($this->_usedProperties['cacheLifetime'])) {
            $output['cache_lifetime'] = $this->cacheLifetime;
        }
        if (isset($this->_usedProperties['defaultTtl'])) {
            $output['default_ttl'] = $this->defaultTtl;
        }
        if (isset($this->_usedProperties['blacklistedPaths'])) {
            $output['blacklisted_paths'] = $this->blacklistedPaths;
        }
        if (isset($this->_usedProperties['hashAlgo'])) {
            $output['hash_algo'] = $this->hashAlgo;
        }
        if (isset($this->_usedProperties['methods'])) {
            $output['methods'] = $this->methods;
        }
        if (isset($this->_usedProperties['cacheListeners'])) {
            $output['cache_listeners'] = $this->cacheListeners;
        }
        if (isset($this->_usedProperties['respectCacheHeaders'])) {
            $output['respect_cache_headers'] = $this->respectCacheHeaders;
        }
        if (isset($this->_usedProperties['respectResponseCacheDirectives'])) {
            $output['respect_response_cache_directives'] = $this->respectResponseCacheDirectives;
        }

        return $output;
    }

}
