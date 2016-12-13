<?php
namespace MailPartials\Service;

use MailPartials\Mapper\MailPartialMapperInterface;
use MailPartials\Model\MailPartialInterface;


class PartialService implements PartialServiceInterface
{
  protected $partialMapper;

  public function __construct(MailPartialMapperInterface $partialMapper)
  {
    $this->partialMapper = $partialMapper;
  }

  public function findAllPartials()
  {
    
    return $this->partialMapper->findAll();
  }

  public function findPartial(int $id)
  {
    return $this->partialMapper->find($id);
  }

  public function savePartial(MailPartialInterface $template)
  {
    return $this->partialMapper->save($template);
  }
  public function deletePartial(MailPartialInterface $template)
  {
    return $this->partialMapper->delete($template);
  }
}
