<?php
namespace MailTemplates\Model;

class Template implements MailTemplateInterface
{
  protected $id;
  protected $nombre;

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
