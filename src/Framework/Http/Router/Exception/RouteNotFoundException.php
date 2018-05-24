<?php
namespace Framework\Http\Router\Exception;

class RouteNotFoundException extends \LogicException
{
    private $name;
    private $params;

    /**
     * RouteNotFoundException constructor.
     * @param string $name
     * @param array $params
     */
    public function __construct($name, array $params, \Throwable $previous = null)
    {
        parent::__construct('Route "' . $name . '" not found.',0, $previous);
        $this->name = $name;
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}