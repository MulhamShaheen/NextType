<?php


set_exception_handler(function ($exception) {
    echo "Exception: " . $exception->getMessage();
});

class CBase
{
    private static $params;
    private static $instance;

    public function __construct($params = false)
    {

        if (is_array($params))
            self::$params = $params;
    }

    public static function getInstance($array)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($array);
        }

        return self::$instance;
    }

    public static function getParam($property)
    {
        if (!is_null(self::$params) && isset(self::$params[$property]))
            return self::$params[$property];

        throw new \Exception('Oops, there is no such property!');
    }

    public static function getLinks($url){
        $html = file_get_contents($url);
        $pattern= '/<a\s+(?:.*?\s+)?href=(")(.*?)\1/';
        $matches = [];
        preg_match_all($pattern, $html, $matches);
        return $matches[2] ?? "No matches found";
    }

}
