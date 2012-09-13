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

        $categoriesColumn = $grid->getColumn('userCategories.category.name:GroupConcat');

        $categoryValues = array(
                'cat1' => 'cat1',
                'cat2' => 'cat2',
                'cat3' => 'cat3',
        );

        $categoryValues['cat'] = 'cat';

        $categoriesColumn->setValues(
            $categoryValues
        );

        $categoriesColumn->setOperators(
            array("like")
        );

		return $grid->getGridResponse('FixmeAPYDataGridBundle:Default:index.html.twig');
    }
}