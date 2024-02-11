<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\NoConfigurationException;

class Router {
    public function __invoke(RouteCollection $routes){
        $context = new RequestContext();
        $request = Request::createFromGlobals();
        $context->fromRequest($request);

        // handle incoming request
        $matcher = new UrlMatcher($routes, $context);
        try {
            $arrayUri = explode('?', $_SERVER['REQUEST_URI']);
            $matcher = $matcher->match($arrayUri[0]);
            array_walk($matcher, function(&$param){
                if (is_numeric($param)){
                    $param = (int)$param;
                }
            });
            $className = "\\App\\Controllers\\" . $matcher['controller'];
            $classInstance = new $className();
            $params = array_merge(
                array_slice($matcher, 2, -1), 
                array('routes' => $routes)
            );
            call_user_func_array(array($classInstance, $matcher['method']), $params);
        } catch (MethodNotAllowedException $e){
            echo $e;
        } catch (ResourceNotFoundException $e){
            echo $e;
        } catch (NoConfigurationException $e){
            echo $e;
        }
    }
}

$router = new Router();
$router($routes);