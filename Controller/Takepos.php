<?php
namespace FacturaScripts\Plugins\takepos\Controller;

use FacturaScripts\Core\Base\Controller;

class Takepos extends Controller
{
    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['title'] = 'TakePOS';
        $pageData['menu'] = 'TakePOS';
        $pageData['icon'] = 'fas fa-page';

        return $pageData;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
		$this->setTemplate('Takepos');
    }
}