<?php

namespace App\Controllers;

use CodeIgniter\View\View;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function welcome(): string
    {
        return view('welcome_message');
    }

    public function newsletters(): string
    {
        return view('news-letters');
    }

    public function institutions(): string{
        return view('institutions');
    }

       public function commissions(): string{
        return view('commissions');
    }

           public function institution_men(): string{
        return view('Institute_Men');
    }
           public function institution_women(): string{
        return view('Institute_Women');
    }
           public function Institute_Seminaries(): string{
        return view('Institute_Seminaries');
    }

           public function diocese_curia(): string{
        return view('diocese_curia');
    }

               public function Marriagetribunal(): string{
        return view('Marriagetribunal');
    }



                   public function Photo_Gallery(): string{
        return view('Photo_Gallery');
    }

    
   public function gallery_1(): string
    {
        return view('gallery/gallery_1');  
    }

        
   public function Video_gallery(): string
    {
        return view('Video_gallery');  
    }


       public function song_gallery(): string
    {
        return view('song_gallery');  
    }
 
     public function education(): string{
        return view('education');
    }

}
