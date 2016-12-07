<?php
namespace MailTemplates\Model;


use BjyAuthorize\Provider\Role\ProviderInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ZfcUser\Entity\UserInterface;


/**
 * @ORM\Entity
 * @ORM\Table(name="templates")
 */
class Template implements MailTemplateInterface
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
   * [$nombre description]
   * @var string
   * @ORM\Column(type="string", length=255)
   */
  protected $nombre;

  /**
   * [$partials description]
   * @var \Doctrine\Common\Collections\Collection
   * @ORM\ManyToMany(targetEntity="partial")
   * @ORM\JoinTable(name="templates_partials",
   *      joinColumns={@ORM\JoinColumn(name="id_t", referencedColumnName="id")},
   *      inverseJoinColumns={@ORM\JoinColumn(name="id_p", referencedColumnName="id")}
   *    )
   */
  protected $partials;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getNombre() : string
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     * @return self
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}
