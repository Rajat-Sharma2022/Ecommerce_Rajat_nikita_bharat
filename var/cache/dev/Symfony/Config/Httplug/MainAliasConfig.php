<?php

namespace Symfony\Config\Httplug;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MainAliasConfig 
{
    private $client;
    private $psr18Client;
    private $messageFactory;
    private $uriFactory;
    private $streamFactory;
    private $psr17RequestFactory;
    private $psr17ResponseFactory;
    private $psr17StreamFactory;
    private $psr17UriFactory;
    private $psr17UploadedFileFactory;
    private $psr17ServerRequestFactory;
    private $_usedProperties = [];

    /**
     * @default 'httplug.client.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function client($value): self
    {
        $this->_usedProperties['client'] = true;
        $this->client = $value;

        return $this;
    }

    /**
     * @default 'httplug.psr18_client.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function psr18Client($value): self
    {
        $this->_usedProperties['psr18Client'] = true;
        $this->psr18Client = $value;

        return $this;
    }

    /**
     * @default 'httplug.message_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function messageFactory($value): self
    {
        $this->_usedProperties['messageFactory'] = true;
        $this->messageFactory = $value;

        return $this;
    }

    /**
     * @default 'httplug.uri_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uriFactory($value): self
    {
        $this->_usedProperties['uriFactory'] = true;
        $this->uriFactory = $value;

        return $this;
    }

    /**
     * @default 'httplug.stream_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function streamFactory($value): self
    {
        $this->_usedProperties['streamFactory'] = true;
        $this->streamFactory = $value;

        return $this;
    }

    /**
     * @default 'httplug.psr17_request_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function psr17RequestFactory($value): self
    {
        $this->_usedProperties['psr17RequestFactory'] = true;
        $this->psr17RequestFactory = $value;

        return $this;
    }

    /**
     * @default 'httplug.psr17_response_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function psr17ResponseFactory($value): self
    {
        $this->_usedProperties['psr17ResponseFactory'] = true;
        $this->psr17ResponseFactory = $value;

        return $this;
    }

    /**
     * @default 'httplug.psr17_stream_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function psr17StreamFactory($value): self
    {
        $this->_usedProperties['psr17StreamFactory'] = true;
        $this->psr17StreamFactory = $value;

        return $this;
    }

    /**
     * @default 'httplug.psr17_uri_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function psr17UriFactory($value): self
    {
        $this->_usedProperties['psr17UriFactory'] = true;
        $this->psr17UriFactory = $value;

        return $this;
    }

    /**
     * @default 'httplug.psr17_uploaded_file_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function psr17UploadedFileFactory($value): self
    {
        $this->_usedProperties['psr17UploadedFileFactory'] = true;
        $this->psr17UploadedFileFactory = $value;

        return $this;
    }

    /**
     * @default 'httplug.psr17_server_request_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function psr17ServerRequestFactory($value): self
    {
        $this->_usedProperties['psr17ServerRequestFactory'] = true;
        $this->psr17ServerRequestFactory = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }

        if (array_key_exists('psr18_client', $value)) {
            $this->_usedProperties['psr18Client'] = true;
            $this->psr18Client = $value['psr18_client'];
            unset($value['psr18_client']);
        }

        if (array_key_exists('message_factory', $value)) {
            $this->_usedProperties['messageFactory'] = true;
            $this->messageFactory = $value['message_factory'];
            unset($value['message_factory']);
        }

        if (array_key_exists('uri_factory', $value)) {
            $this->_usedProperties['uriFactory'] = true;
            $this->uriFactory = $value['uri_factory'];
            unset($value['uri_factory']);
        }

        if (array_key_exists('stream_factory', $value)) {
            $this->_usedProperties['streamFactory'] = true;
            $this->streamFactory = $value['stream_factory'];
            unset($value['stream_factory']);
        }

        if (array_key_exists('psr17_request_factory', $value)) {
            $this->_usedProperties['psr17RequestFactory'] = true;
            $this->psr17RequestFactory = $value['psr17_request_factory'];
            unset($value['psr17_request_factory']);
        }

        if (array_key_exists('psr17_response_factory', $value)) {
            $this->_usedProperties['psr17ResponseFactory'] = true;
            $this->psr17ResponseFactory = $value['psr17_response_factory'];
            unset($value['psr17_response_factory']);
        }

        if (array_key_exists('psr17_stream_factory', $value)) {
            $this->_usedProperties['psr17StreamFactory'] = true;
            $this->psr17StreamFactory = $value['psr17_stream_factory'];
            unset($value['psr17_stream_factory']);
        }

        if (array_key_exists('psr17_uri_factory', $value)) {
            $this->_usedProperties['psr17UriFactory'] = true;
            $this->psr17UriFactory = $value['psr17_uri_factory'];
            unset($value['psr17_uri_factory']);
        }

        if (array_key_exists('psr17_uploaded_file_factory', $value)) {
            $this->_usedProperties['psr17UploadedFileFactory'] = true;
            $this->psr17UploadedFileFactory = $value['psr17_uploaded_file_factory'];
            unset($value['psr17_uploaded_file_factory']);
        }

        if (array_key_exists('psr17_server_request_factory', $value)) {
            $this->_usedProperties['psr17ServerRequestFactory'] = true;
            $this->psr17ServerRequestFactory = $value['psr17_server_request_factory'];
            unset($value['psr17_server_request_factory']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['client'])) {
            $output['client'] = $this->client;
        }
        if (isset($this->_usedProperties['psr18Client'])) {
            $output['psr18_client'] = $this->psr18Client;
        }
        if (isset($this->_usedProperties['messageFactory'])) {
            $output['message_factory'] = $this->messageFactory;
        }
        if (isset($this->_usedProperties['uriFactory'])) {
            $output['uri_factory'] = $this->uriFactory;
        }
        if (isset($this->_usedProperties['streamFactory'])) {
            $output['stream_factory'] = $this->streamFactory;
        }
        if (isset($this->_usedProperties['psr17RequestFactory'])) {
            $output['psr17_request_factory'] = $this->psr17RequestFactory;
        }
        if (isset($this->_usedProperties['psr17ResponseFactory'])) {
            $output['psr17_response_factory'] = $this->psr17ResponseFactory;
        }
        if (isset($this->_usedProperties['psr17StreamFactory'])) {
            $output['psr17_stream_factory'] = $this->psr17StreamFactory;
        }
        if (isset($this->_usedProperties['psr17UriFactory'])) {
            $output['psr17_uri_factory'] = $this->psr17UriFactory;
        }
        if (isset($this->_usedProperties['psr17UploadedFileFactory'])) {
            $output['psr17_uploaded_file_factory'] = $this->psr17UploadedFileFactory;
        }
        if (isset($this->_usedProperties['psr17ServerRequestFactory'])) {
            $output['psr17_server_request_factory'] = $this->psr17ServerRequestFactory;
        }

        return $output;
    }

}
