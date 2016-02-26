<?php
namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ExceptionListener
{
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();
        $response = new Response();
        $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);

        if ($exception instanceof HttpExceptionInterface) {
            if (400 < $exception->getStatusCode() && 500 > $exception->getStatusCode()) {
                $response->setStatusCode(Response::HTTP_NOT_FOUND);
                $response->headers->replace($exception->getHeaders());
            }
        }

        $event->setResponse($response);
    }
}