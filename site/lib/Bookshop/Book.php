<?php 
namespace Bookshop;

class Book extends Entity {

    private int $categoryId; 
    private string $title; 
    private string $author; 
    private float $price;


    public function __construct(int $id, int $categoryId, string $title, string $author, float $price) {
        parent::__construct($id);
        $this->categoryId = $categoryId;
        $this->author = $author; 
        $this->title = $title; 
        $this->price = $price;
    }
    
    public function getCategoryId() : int {
        return $this->categoryId;
    }
        
    public function getTitle() : string {
        return $this->title;
    }

    public function getAuthor() : string {
        return $this->author;
    }

    public function getPrice() : float {
        return $this->price;
    }
    








}