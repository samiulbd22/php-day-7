<?php
namespace App\classes;

class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return[
            0=>[
                'title'         =>'A new Blog',
                'Description'   =>'Blog Description',
                'author'        =>'Shahabuddin',
                'image'         =>'prothomalo2.jpg'
            ],
            1=>[
                'title'         =>'Another Blog',
                'Description'   =>'Blog Description',
                'author'        =>'Rubel Khan',
                'image'         =>'prothomalo3.jpg'
            ],
            2=>[
                'title'         =>'About Bangladesh',
                'Description'   =>'Blog Description',
                'author'        =>'Jahed',
                'image'         =>'prothomalo4.jpg'
            ],
        ];
    }
}