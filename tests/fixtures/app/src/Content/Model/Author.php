<?php

/*
 * This file is part of the "Tom32i/Content" bundle.
 *
 * @author Thomas Jarrand <thomas.jarrand@gmail.com>
 */

namespace App\Content\Model;

class Author
{
    public string $slug;
    public string $firstname;
    public string $lastname;
    public string $nickname;
    public array $tags;
    public \DateTimeInterface $lastModified;
}
