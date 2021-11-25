<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Ew extends MY_Controller {
    private $params = [];

	function __construct() {
		parent::__construct();

        $ps = explode("/", realpath(__FILE__));
        $ps = (sizeof($ps) <= 1) ? explode("\\", realpath(__FILE__)) : $ps;
        $this->api_ver = $ps[sizeof($ps)-2];

        $this->params = !empty($this->input->get(null))?$this->input->get(null):$this->input->post(null);
        $this->load->model($this->api_ver."/Ew_model");
        $this->load->helper(['array', 'url', 'restapi_helper']);
	}


    function _remap($method,$args)
    {
        $method = $method."_".$_SERVER['REQUEST_METHOD'];

        if (method_exists($this, $method)) {
           $this->$method($args);
        }
        else {
            // code:405 허용되지 않은 메소드 호출 오류
            printJsonResult('405');
            exit;
        }
    }

    /**
     * @api {get} /v001/Test/time GET time
     * @apiDescription 테스트
     * 
     * @apiVersion 0.0.1
     * @apiName time
     * @apiGroup test
     * @apiPermission all
     * 
     * @apiParam {Number} [user_no] 사용자 고유키
     *
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     * {
     * 	"code": "200",
     * 	"msg": "",
     * 	"data": {}
     * }
     * @apiUse CODE405
     * @apiUse CODE441
     * @apiSampleRequest /test/time
     */
    function request_GET($user = 0)
    {
        try {
            $data = time();
            printJsonResult('200', '', $data);

        }catch(Exception $e) {
            printJsonResult($e->getCode(), $e->getMessage());
            exit;
        }
    }
}