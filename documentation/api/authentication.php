<?php

/**
 * @api {get} /api/user/me Get current user information
 * @apiName GetMe
 * @apiGroup Authentication
 *
 * @apiHeader (Authorization) {String} Bearer-Token Hash returned on login/register
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
{
"id": 1,
"name": "User",
"email": "user@example.com",
"email_verified_at": null,
"created_at": "2022-05-16T14:48:19.000000Z",
"updated_at": "2022-05-18T13:52:15.000000Z"
}
 */

/**
 * @api {get} /api/user/logout User logout
 * @apiName UserLogout
 * @apiGroup Authentication
 *
 * @apiHeader (Authorization) {String} Bearer-Token Hash returned on login/register
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
{
"message": "User has successfully logged out!"
}
 */



/**
 * @api {post} /api/user/login User login
 * @apiName UserLogin
 * @apiGroup Authentication
 *
 * @apiBody {String} email User email
 * @apiBody {String} password User password
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
{
"access_token": "12|KsdLSWodrF3WoTnd04DcyDBoXYShyJLp0oYN0wcE",
"token_type": "Bearer"
}
 */

/**
 * @api {post} /api/user/register User register
 * @apiName UserRegister
 * @apiGroup Authentication
 *
 * @apiBody {String} name Username
 * @apiBody {String} email User email
 * @apiBody {String} password User password
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
{
"access_token": "12|KsdLSWodrF3WoTnd04DcyDBoXYShyJLp0oYN0wcE",
"token_type": "Bearer"
}
 */

/**
 * @api {post} /api/user/forgot-password User forgot password
 * @apiName UserForgotPassword
 * @apiGroup Authentication
 *
 * @apiBody {String} email User email
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
{
"message": "We have emailed your password reset link!"
}
 */
