<?php
namespace MailTemplates\Mapper;

use MailTemplates\Model\MailTemplateInterface;

interface MailTemplateMapperInterface
{
  public function find($id);
  public function findAll();
  public function save(MailTemplateInterface $template);
  public function delete(MailTemplateInterface $template);
}
