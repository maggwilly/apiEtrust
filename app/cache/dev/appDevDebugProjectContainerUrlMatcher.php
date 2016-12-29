<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_app;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app',);
        }
        not_app:

        if (0 === strpos($pathinfo, '/produit')) {
            // produit
            if ($pathinfo === '/produit/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_produit;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::indexAction',  '_route' => 'produit',);
            }
            not_produit:

            // produit_show
            if ($pathinfo === '/produit/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_produit_show;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::showAction',  '_route' => 'produit_show',);
            }
            not_produit_show:

            // produit_create
            if ($pathinfo === '/produit/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_produit_create;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::createAction',  '_route' => 'produit_create',);
            }
            not_produit_create:

            // produit_edit
            if (preg_match('#^/produit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_produit_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::editAction',));
            }
            not_produit_edit:

            // produit_update
            if (preg_match('#^/produit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_produit_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::updateAction',));
            }
            not_produit_update:

            // produit_delete
            if (preg_match('#^/produit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_produit_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::deleteAction',));
            }
            not_produit_delete:

        }

        if (0 === strpos($pathinfo, '/u')) {
            // categories
            if ($pathinfo === '/utils') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categories;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::utilsAction',  '_route' => 'categories',);
            }
            not_categories:

            if (0 === strpos($pathinfo, '/user')) {
                // user_show
                if ($pathinfo === '/user/show') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',  '_route' => 'user_show',);
                }

                // user_create
                if ($pathinfo === '/user/register') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
                }

                // user_update
                if ($pathinfo === '/user/update') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::updateAction',  '_route' => 'user_update',);
                }
                not_user_update:

                // user_change_password
                if ($pathinfo === '/user/change/password') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_change_password;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::chagePasswordAction',  '_route' => 'user_change_password',);
                }
                not_user_change_password:

            }

        }

        if (0 === strpos($pathinfo, '/publicite')) {
            // publicite_index
            if (rtrim($pathinfo, '/') === '/publicite') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_publicite_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'publicite_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PubliciteController::indexAction',  '_route' => 'publicite_index',);
            }
            not_publicite_index:

            // publicite_show
            if ($pathinfo === '/publicite/show') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_publicite_show;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PubliciteController::showAction',  '_route' => 'publicite_show',);
            }
            not_publicite_show:

            // publicite_new
            if ($pathinfo === '/publicite/create') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_publicite_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PubliciteController::createAction',  '_route' => 'publicite_new',);
            }
            not_publicite_new:

            // publicite_update
            if (preg_match('#^/publicite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_publicite_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicite_update')), array (  '_controller' => 'AppBundle\\Controller\\PubliciteController::updateAction',));
            }
            not_publicite_update:

            // publicite_delete
            if ($pathinfo === '/publicite/delete') {
                if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                    goto not_publicite_delete;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PubliciteController::deleteAction',  '_route' => 'publicite_delete',);
            }
            not_publicite_delete:

        }

        if (0 === strpos($pathinfo, '/manage')) {
            // entity_show
            if (preg_match('#^/manage/(?P<entity_name>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_show')), array (  '_controller' => 'AppBundle\\Controller\\ManageController::showAction',));
            }

            // entity_update
            if (preg_match('#^/manage/(?P<entity_name>[^/]++)/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_entity_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_update')), array (  '_controller' => 'AppBundle\\Controller\\ManageController::updateAction',));
            }
            not_entity_update:

        }

        if (0 === strpos($pathinfo, '/auth-token')) {
            // auth-tokens
            if ($pathinfo === '/auth-token/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_authtokens;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AuthTokenController::postAuthTokensAction',  '_route' => 'auth-tokens',);
            }
            not_authtokens:

            // auth-tokens_delete
            if ($pathinfo === '/auth-token/delete') {
                if (!in_array($this->context->getMethod(), array('DELETE', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('DELETE', 'GET', 'HEAD'));
                    goto not_authtokens_delete;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AuthTokenController::removeAuthTokensAction',  '_route' => 'auth-tokens_delete',);
            }
            not_authtokens_delete:

        }

        // locals
        if ($pathinfo === '/locals/data') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_locals;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AppController::localsAction',  '_route' => 'locals',);
        }
        not_locals:

        // abaout
        if ($pathinfo === '/abaout') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_abaout;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AppController::abaoutAction',  '_route' => 'abaout',);
        }
        not_abaout:

        // help
        if ($pathinfo === '/help') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_help;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AppController::helpAction',  '_route' => 'help',);
        }
        not_help:

        // news
        if ($pathinfo === '/cgu') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_news;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AppController::cguAction',  '_route' => 'news',);
        }
        not_news:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
