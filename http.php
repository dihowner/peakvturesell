<?php
require_once MODEL_DIR.'Utility.php';
Class HttpRequest
{

    const POST = 'POST';
    const PUT = 'PUT';
    const GET = 'GET';
    const DELETE = 'DELETE';
    const PATCH = 'PATCH';

    private $body;
    private $options;
    private static $handle;
    private static $httpCode;
    private static $response;

    /**
     * send post request
     * @param url 
     * @param header
     * @param options
     * @param body
     * @return json object
     * 
     */

    public static function post(string $url, $body = "", array $header = []) {
        $curl = curl_init();
        $header[] = "Content-Type: application/json";

		curl_setopt_array($curl, array(CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => strtoupper(self::POST),
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => $header,
            ));
		$response = curl_exec($curl);
		return $response;
    }

    /**
     * send get request
     * @param url 
     * @param header 
     * @param options
     */
    public static function get($url, $body = [], $header = [], $options=[])
    {
        self::$handle = curl_init(); 
        
        $header[] = "Content-Type: application/json";

        curl_setopt(self::$handle, CURLOPT_URL, $url.'?'.http_build_query($body));
        curl_setopt(self::$handle, CURLOPT_HTTPHEADER, $header);
        curl_setopt_array(self::$handle, $options);
        curl_setopt(self::$handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(self::$handle, CURLOPT_CUSTOMREQUEST, self::GET);

        self::$response = curl_exec(self::$handle);
        self::$httpCode = curl_getinfo(self::$handle, CURLINFO_HTTP_CODE);

        curl_close(self::$handle);

        return self::$response;
    }

    public static function getResponse()
    {
        return self::$response;
    }

    public static function getHttpCode()
    {
        return self::$httpCode;
    }


    /**
     * send patch request
     */ 
    public static function patch()
    {
        /**
         * @todo 
         * implemets this method
         */
    }


    /**
     * send delete request
     */
    public static function delete()
    {
        /**
         * @todo 
         * implemets this method
         */
    }


    /**
     * send put request
     */
    public static function put()
    {
        /**
         * @todo 
         * implemets this method
         */
    }
}
?>