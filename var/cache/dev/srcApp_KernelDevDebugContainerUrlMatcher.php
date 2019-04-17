<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DashController::index'], null, null, null, false, false, null]],
            '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\DashController::search'], null, null, null, false, false, null]],
            '/employees' => [[['_route' => 'employeesList', '_controller' => 'App\\Controller\\EmployeeController::index'], null, null, null, false, false, null]],
            '/addEmployee' => [[['_route' => 'addEmployee', '_controller' => 'App\\Controller\\EmployeeController::addEmployee'], null, null, null, false, false, null]],
            '/projects' => [[['_route' => 'projectsList', '_controller' => 'App\\Controller\\ProjectController::projectsList'], null, null, null, false, false, null]],
            '/addProject' => [[['_route' => 'addProject', '_controller' => 'App\\Controller\\ProjectController::addProject'], null, null, null, false, false, null]],
            '/jobs' => [[['_route' => 'jobsList', '_controller' => 'App\\Controller\\WorksController::jobsList'], null, null, null, false, false, null]],
            '/addJob' => [[['_route' => 'addJob', '_controller' => 'App\\Controller\\WorksController::addJob'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/archiveEmployee/(\\d+)(*:29)'
                    .'|/edit(?'
                        .'|Employee/(\\d+)(*:58)'
                        .'|Project/(\\d+)(*:78)'
                        .'|Job/(\\d+)(*:94)'
                    .')'
                    .'|/viewEmployee/(\\d+)(*:121)'
                    .'|/remove(?'
                        .'|Pro(?'
                            .'|dTime/(\\d+)(*:156)'
                            .'|ject/(\\d+)(*:174)'
                        .')'
                        .'|Job/(\\d+)(*:192)'
                    .')'
                    .'|/deliverProject/(\\d+)(*:222)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:261)'
                        .'|wdt/([^/]++)(*:281)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:327)'
                                .'|router(*:341)'
                                .'|exception(?'
                                    .'|(*:361)'
                                    .'|\\.css(*:374)'
                                .')'
                            .')'
                            .'|(*:384)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            29 => [[['_route' => 'archiveEmployee', '_controller' => 'App\\Controller\\EmployeeController::archiveEmployee'], ['id'], null, null, false, true, null]],
            58 => [[['_route' => 'editEmployee', '_controller' => 'App\\Controller\\EmployeeController::editEmployee'], ['id'], null, null, false, true, null]],
            78 => [[['_route' => 'editProject', '_controller' => 'App\\Controller\\ProjectController::editProject'], ['id'], null, null, false, true, null]],
            94 => [[['_route' => 'editJob', '_controller' => 'App\\Controller\\WorksController::editJob'], ['id'], null, null, false, true, null]],
            121 => [[['_route' => 'viewEmployee', '_controller' => 'App\\Controller\\EmployeeController::viewEmployee'], ['id'], null, null, false, true, null]],
            156 => [[['_route' => 'removeProdTime', '_controller' => 'App\\Controller\\EmployeeController::removeProdTime'], ['id'], null, null, false, true, null]],
            174 => [[['_route' => 'removeProject', '_controller' => 'App\\Controller\\ProjectController::removeProject'], ['id'], null, null, false, true, null]],
            192 => [[['_route' => 'removeJob', '_controller' => 'App\\Controller\\WorksController::removeJob'], ['id'], null, null, false, true, null]],
            222 => [[['_route' => 'deliverProject', '_controller' => 'App\\Controller\\ProjectController::deliverProject'], ['id'], null, null, false, true, null]],
            261 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            281 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            327 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            341 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            361 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            374 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            384 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
