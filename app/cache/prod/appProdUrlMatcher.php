<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // create
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  '_route' => 'create',);
        }

        // read
        if ($pathinfo === '/read') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::readAction',  '_route' => 'read',);
        }

        // update
        if ($pathinfo === '/update') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::updateAction',  '_route' => 'update',);
        }

        // delete
        if ($pathinfo === '/delete') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::deleteAction',  '_route' => 'delete',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
