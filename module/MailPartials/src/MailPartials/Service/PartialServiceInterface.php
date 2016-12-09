<?php
namespace MailPartials\Service;

use MailPartials\Model\MailPartialInterface;

interface PartialServiceInterface
{
    public function findAllPartials();

    public function findPartial(int $id);

    public function savePartial(MailPartialInterface $template);

    public function deletePartial(MailPartialInterface $template);
}

?>
