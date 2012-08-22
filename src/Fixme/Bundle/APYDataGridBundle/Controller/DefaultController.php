<?php

namespace Fixme\Bundle\APYDataGridBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use APY\DataGridBundle\Grid\Source\Entity;

class DefaultController extends Controller
{
    /**
     * @Route("/datagrid")
     * @Template()
     */
    public function indexAction()
    {
        $grid = $this->get('grid');
        $grid->setSource(new Entity('FixmeAPYDataGridBundle:User'));
		return $grid->getGridResponse('FixmeAPYDataGridBundle:Default:index.html.twig');
    }
}