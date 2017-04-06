<?php

/**
 * ArangoDB PHP client: client exception
 *
 * @package   ArangoDBClient
 * @author    Jan Steemann
 * @copyright Copyright 2012, triagens GmbH, Cologne, Germany
 */

namespace ArangoDBClient;

/**
 * Client-Exception
 *
 * This exception type will be thrown by the client when there is an error
 * on the client side, i.e. something the server is not involved in.<br>
 * <br>
 *
 * @package   ArangoDBClient
 * @since     0.2
 */
class ClientException extends Exception
{
    /**
     * Return a string representation of the exception
     *
     * @magic
     *
     * @return string - string representation
     */
    public function __toString()
    {
        return __CLASS__ . ': ' . $this->getMessage();
    }

    protected $method, $url, $data;

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     * @return ClientException
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return ClientException
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return ClientException
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}

class_alias(ClientException::class, '\triagens\ArangoDb\ClientException');
