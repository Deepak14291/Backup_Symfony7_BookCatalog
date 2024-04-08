<?php

namespace App\Entity;

use App\Repository\BooksRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BooksRepository::class)]
class Books
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "The book name field is required")]
    private ?string $book_name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "The book author field is required")]
    private ?string $book_author = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "The book genre field is required")]
    private ?string $book_genre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookName(): ?string
    {
        return $this->book_name;
    }

    public function setBookName(?string $book_name): static
    {
        $this->book_name = $book_name;

        return $this;
    }

    public function getBookAuthor(): ?string
    {
        return $this->book_author;
    }

    public function setBookAuthor(?string $book_author): static
    {
        $this->book_author = $book_author;

        return $this;
    }

    public function getBookGenre(): ?string
    {
        return $this->book_genre;
    }

    public function setBookGenre(?string $book_genre): static
    {
        $this->book_genre = $book_genre;

        return $this;
    }
}