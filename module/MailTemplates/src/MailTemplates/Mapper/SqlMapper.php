<?php
namespace MailTemplates\Mapper;

use MailTemplates\Model\MailTemplateInterface;

class SqlMapper implements MailTemplateMapperInterface
{
  protected $dbAdapter;

  public function __construct(

    )
  {

  }

  public function find($id){

  }

  public function findAll()
  {
    return [];
  }

  public function edit(MailTemplateInterface $template)
  {

  }

  public function delete(MailTemplateInterface $template)
  {
    
  }
}
