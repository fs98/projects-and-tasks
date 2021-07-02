<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Auth\AuthenticationException;
use Throwable;

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
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Custom function for handling exceptions.
     *
     * @return void
     */
    public function render($request, Throwable $e)
    {
        if ($request->is('api*')) {
            
            if ($e instanceof ValidationException) {
            
                return response([
                    'status' => 'error',
                    'error' => $e->errors()
                ], 422);
    
            } 
            
            if ($e instanceof AuthorizationException) {
                
                return response([
                    'status' => 'error',
                    'error' => $e->getMessage()
                ], 403);

            }

            if ($e instanceof ModelNotFoundException || $e instanceof NotFoundHttpException) {
                
                return response([
                    'status' => 'error',
                    'error' => 'Resource Not Found.'
                ], 404);

            } 

            if ($e instanceof AuthenticationException) {
                
                return response([
                    'status' => 'error',
                    'error' => $e->getMessage()
                ], 401);

            }

            return response(['status' => 'Error', 'error' => 'Something went wrong.'], 500);

            // dd($e);

        }
        parent::render($request, $e);
    }
}
