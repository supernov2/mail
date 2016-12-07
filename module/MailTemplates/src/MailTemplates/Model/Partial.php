<?php
namespace MailTemplates\Model;


use BjyAuthorize\Provider\Role\ProviderInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ZfcUser\Entity\UserInterface;
/**
 * @ORM\Entity
 * @ORM\Table(name="partials")
 */
class Partial {
  /**
   * [$id description]
   * @var int
   * @ORM\id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  /**
   * [$nombre description]
   * @var string
   * @ORM\Column(type="string", length=255)
   */
  protected $nombre;
}
