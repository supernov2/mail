<?php
namespace MailPartials\Mapper;

use MailPartials\Model\MailPartialInterface;

interface MailPartialMapperInterface
{
    public function find($id);

    public function findAll();

    public function save(MailPartialInterface $partial);

    public function edit(MailPartialInterface $partial);

    public function delete(MailPartialInterface $partial);
}
