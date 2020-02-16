<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LanguageRepository")
 */
class Language
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="smallint", options={"unsigned": true}))
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $bcp47Code;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Book", mappedBy="language")
     */
    private $books;

    public function __construct(string $name, string $bcp47Code)
    {
        $this->name = $name;
        $this->bcp47Code = $bcp47Code;
        $this->books = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBcp47Code(): ?string
    {
        return $this->bcp47Code;
    }

    public function setBcp47Code(string $bcp47Code): self
    {
        $this->bcp47Code = $bcp47Code;

        return $this;
    }

    /**
     * @return Collection|Book[]
     */
    public function getBooks(): Collection
    {
        return $this->books;
    }

    public function addBook(Book $book): self
    {
        if (!$this->books->contains($book)) {
            $this->books[] = $book;
            $book->setLanguage($this);
        }

        return $this;
    }

    public function removeBook(Book $book): self
    {
        if ($this->books->contains($book)) {
            $this->books->removeElement($book);
            // set the owning side to null (unless already changed)
            if ($book->getLanguage() === $this) {
                $book->setLanguage(null);
            }
        }

        return $this;
    }
}
