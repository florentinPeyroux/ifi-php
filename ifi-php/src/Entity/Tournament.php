<?php
/**
 * Created by PhpStorm.
 * User: peyroux
 * Date: 29/11/17
 * Time: 11:20
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Tournament
 * @ORM\Entity
 * @ApiResource
 */
class Tournament
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * @ORM\Column(type="datetime")
     */
    public $createdAt;
}