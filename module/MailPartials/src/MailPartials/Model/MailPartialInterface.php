<?php
namespace MailPartials\Model;

interface MailPartialInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getContent(): string;
}
