<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;

class homecontroller
{
    //
    public function Name(){
        $nname= 'Khaled Saif';
        $specialty = ' INFORMATION TECHNOLOGY GRADUATE';
        $profiel1 = ' I am a dedicated and motivated IT graduate with a passion for learning
            and problem-solving.' ;
        $profiel2 = 'I finished my studies in the IT field and I have gained
            valuable experience through various internships and projects during my
            university years.';
        $profiel3 = 'I have a strong foundation in programming languages such as
            Java, Python, C\# and C++, and I am always eager to expand my knowledge
            and skills. I am a team player with excellent communication skills and I really
            enjoy collaborating with others to achieve common goals.';
        $profiel4='I am seeking
            opportunities to further develop my skills and contribute to the IT industry.';
        return view('home')
        ->with('n',$nname)
        ->with('sp',$specialty)
        ->with('p1',$profiel1)
        ->with('p2',$profiel2)
        ->with('p3',$profiel3)
        ->with('p4',$profiel4)
        

        ;
    }

    
   
}
