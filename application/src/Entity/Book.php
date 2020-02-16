<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="bigint", length=13, options={"unsigned": true})
     */
    private $ean;

    /**
     * @ORM\Column(type="bigint", length=10, options={"unsigned": true}, nullable=true)
     */
    private $isbn10;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $subTitle;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $publicationDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $summary;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $pagesCount;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $authors;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $publisher;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $format;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $collection;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="books")
     */
    private $addedBy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Language", inversedBy="books")
     * @ORM\JoinColumn(nullable=false)
     */
    private $language;

    public function getEan(): ?int
    {
        return $this->ean;
    }

    public function setEan(int $ean): void
    {
        $this->ean = $ean;
    }

    public function getIsbn10(): ?int
    {
        return $this->isbn10;
    }

    public function setIsbn10(?int $isbn10): void
    {
        $this->isbn10 = $isbn10;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    public function setSubTitle(?string $subTitle): void
    {
        $this->subTitle = $subTitle;
    }

    public function getPublicationDate(): ?\DateTimeImmutable
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(?\DateTimeImmutable $publicationDate): void
    {
        $this->publicationDate = $publicationDate;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): void
    {
        $this->summary = $summary;
    }

    public function getPagesCount(): ?int
    {
        return $this->pagesCount;
    }

    public function setPagesCount(?int $pagesCount): void
    {
        $this->pagesCount = $pagesCount;
    }

    public function getAuthors(): ?string
    {
        return $this->authors;
    }

    public function setAuthors(string $authors): void
    {
        $this->authors = $authors;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): void
    {
        $this->publisher = $publisher;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): void
    {
        $this->format = $format;
    }

    public function getCollection(): ?string
    {
        return $this->collection;
    }

    public function setCollection(string $collection): void
    {
        $this->collection = $collection;
    }

    public function getAddedBy(): ?User
    {
        return $this->addedBy;
    }

    public function setAddedBy(User $addedBy): void
    {
        $this->addedBy = $addedBy;
    }

    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    public function setLanguage(?Language $language): self
    {
        $this->language = $language;

        return $this;
    }
}
