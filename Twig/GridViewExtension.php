<?php


namespace Billizzard\GridView\Twig;


use Twig\Extension\AbstractExtension;
use Symfony\Component\HttpFoundation\RequestStack;

class GridViewExtension extends \Twig_Extension
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        //$this->requestStack = $requestStack;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'grid_view',
                array($this, 'gridView'),
                array('needs_environment' => true)
            ),
        );
    }

    public function gridView(\Twig_Environment $environment, $models)
    {
        echo $environment->render('Templates/table.html.twig', ['models' => $models]);
    }
}