<?php
declare(strict_types=1);

namespace App\DTO;

use JMS\Serializer\Annotation\SerializedName;

final class Test
{
    public function __construct(
        #[SerializedName('id')]
        private int $id,
        #[SerializedName('name')]
        private string $name
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}