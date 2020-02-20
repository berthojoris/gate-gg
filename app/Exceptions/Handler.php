<?php

namespace App\Exceptions;

use Exception;
use ErrorException;
use Illuminate\Database\QueryException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Auth\Access\AuthorizationException;
use Laravel\Passport\Exceptions\OAuthServerException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        if ($request->ajax() || $request->isJson()) {
            if ($exception instanceof ModelNotFoundException) {
                return response()->json([
                    'error' => 'Entry for '.str_replace('App\\', '', $exception->getModel()).' not found',
                    'message' => $exception->getMessage(),
                    'code' => 404
                ], 404);
            } else if ($exception instanceof AuthorizationException) {
                return response()->json([
                    'error' => 'Authorization Exception',
                    'message' => $exception->getMessage(),
                    'code' => 401
                ], 401);
            } else if ($exception instanceof AuthenticationException) {
                return response()->json([
                    'error' => 'Authentication Exception',
                    'message' => $exception->getMessage(),
                    'code' => 403
                ], 403);
            } else if ($exception instanceof RequestException) {
                return response()->json([
                    'error' => 'Request Exception',
                    'message' => $exception->getMessage(),
                    'code' => 500
                ], 500);
            } else if ($exception instanceof MethodNotAllowedHttpException) {
                return response()->json([
                    'error' => 'Method Not Allowed Http Exception',
                    'message' => $exception->getMessage(),
                    'code' => 405
                ], 405);
            } else if ($exception instanceof TokenMismatchException) {
                return response()->json([
                    'error' => 'Token Mismatch Exception',
                    'message' => $exception->getMessage(),
                    'code' => 498
                ], 498);
            } else if ($exception instanceof NotFoundHttpException) {
                return response()->json([
                    'error' => 'Not Found Http Exception',
                    'message' => $exception->getMessage(),
                    'code' => 410
                ], 410);
            } else if ($exception instanceof OAuthServerException) {
                return response()->json([
                    'error' => 'OAuth Server Exception',
                    'message' => $exception->getMessage(),
                    'code' => 403
                ], 403);
            } else if ($exception instanceof ErrorException) {
                return response()->json([
                    'error' => 'Error Exception',
                    'message' => $exception->getMessage(),
                    'code' => 500
                ], 500);
            } else if ($exception instanceof QueryException) {
                return response()->json([
                    'error' => 'Query Exception',
                    'message' => $exception->getMessage(),
                    'code' => 500
                ], 500);
            }
        }
        return parent::render($request, $exception);
    }
}
