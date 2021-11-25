<?php

    /**
     * APIDOCS 사전 정의된 포맷
     */

    /**
     * @apiDefine CODE441
     *
     * @apiError {json} Results 범용 파라미터 오류
     * @apiErrorExample Error-Response:
     *  HTTP/1.1 200 OK
     * {
     *     "code": "441",
     *     "msg": "파라미터를 확인해주세요."
     * }
     */

    /**
     * @apiDefine CODE405
     *
     * @apiError {json} Results 허용되지 않은 메소드 호출
     * @apiErrorExample Error-Response:
     *  HTTP/1.1 200 OK
     * {
     *     "code": "405",
     *     "msg": "Method Not Allowed"
     * }
     */

    /**
     * @apiDefine CODE302
     *
     * @apiError {json} Results 요청 처리중 오류
     * @apiErrorExample Error-Response:
     *  HTTP/1.1 200 OK
     * {
     *     "code": "302",
     *     "msg": "처리중 오류가 발생하였습니다. 처음부터 다시 시도해주세요."
     * }
     */


    /**
     * @apiDefine TobeUpdated
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     * {
     *   "description": "노션 또는 샘플 요청 참조",
     * }
     */

?>