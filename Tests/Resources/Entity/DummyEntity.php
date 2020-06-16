<?php declare(strict_types=1);

namespace RichCongress\UnitTestBundle\Tests\Resources\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class DummyEntity
 *
 * @package   RichCongress\UnitTestBundle\Tests\Resources\Entity
 * @author    Nicolas Guilloux <nguilloux@richcongress.com>
 * @copyright 2014 - 2019 RichCongress (https://www.richcongress.com)
 *
 * @ORM\Entity
 */
class DummyEntity extends AbstractDummyEntity
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $keyname;

    /**
     * @return integer|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getKeyname(): string
    {
        return $this->keyname;
    }

    /**
     * @param int $id
     *
     * @return static
     */
    public static function createFromId(int $id): self
    {
        $entity = new static();
        $entity->id = $id;

        return $entity;
    }

    /**
     * @param string $keyname
     *
     * @return static
     */
    public static function createFromKeyname(string $keyname): self
    {
        $entity = new static();
        $entity->keyname = $keyname;

        return $entity;
    }
}
