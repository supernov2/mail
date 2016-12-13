<?php
namespace MailTemplates\Controller;

use Doctrine\ORM\EntityManager;
use Zend\Form\FormInterface;
use Zend\Mvc\Controller\AbstractActionController;
use MailTemplates\Model\{Template,Partial};

class WriteTemplateController extends AbstractActionController
{
  protected $mailTemplateService;
  protected $templateForm;

  public function __construct(
              EntityManager $mailTemplateService,
              FormInterface $_templateForm)
  {
    $this->mailTemplateService = $mailTemplateService;
    $this->templateForm = $_templateForm;
  }

  public function addAction()
  {
    $request = $this->getRequest();

    if($request->isPost())
    {

      $template = new Template();

      $this->templateForm->setData($request->getPost());
      $this->templateForm->setInputFilter($template->getInputFilter());
      // $this->templateForm->setObject(new Template());
      $data = $request->getPost();

      if($this->templateForm->isValid())
      {
        try {
          $id = $data->toArray()["partial"];
          $p = $this->mailTemplateService->find('MailTemplates\Model\Partial',$id);
          $data = $this->templateForm->getData();
          $data["partial"] = $p;
          $template->exchangeArray($data);
          $this->mailTemplateService->persist($template);
          $this->mailTemplateService->flush();

          return $this->redirect()->toRoute('mail/templates');
        } catch (\Exception $e)
        {
          echo "Caught exception: " . get_class($e) . "\n";
          echo "Message: " . $e->getMessage() . "\n";
        }
      }
    }
    return ['form'=> $this->templateForm];
  }

  public function editAction()
  {
    return [];
  }
}
