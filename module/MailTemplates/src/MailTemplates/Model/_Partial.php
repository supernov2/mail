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



    /**
     * Get the value of [$id description]
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of [$id description]
     *
     * @param int id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of [$name description]
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of [$name description]
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of [$content description]
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of [$content description]
     *
     * @param string content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

}
