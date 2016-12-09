<?php
namespace MailPartials\Model;


use BjyAuthorize\Provider\Role\ProviderInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="templates_partials")
 */
class Partial
{
    /**
     * [$id description]
     * @var int
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * [$name description]
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected $name;
    /**
     * [$content description]
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected $content;
}
