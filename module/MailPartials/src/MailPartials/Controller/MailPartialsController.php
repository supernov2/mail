<?php

namespace MailPartials\Controller;

use MailPartials\Service\PartialServiceInterface;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;

class MailPartialsController extends AbstractActionController
{
    protected $mailPartialService;

    public function __construct($mailPartialService)
    {
        $this->mailPartialService = $mailPartialService;
    }

    public function indexAction()
    {
        $partials = $this->mailPartialService->getRepository('MailPartials\Model\Partial')->findAll();
        $total = count($partials);
        return [
            'partials' => $partials,
            'total' => $total
        ];
    }

    public function addAction()
    {
        return [];
    }

    public function storeAction($partial)
    {
        return $partial;
    }

    public function editAction($id)
    {
        return $id;
    }

    public function updateAction($id)
    {
        return $id;
    }

    public function deleteAction($id)
    {
        return $id;
    }

}
