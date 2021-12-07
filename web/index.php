<?php

// - বাংলাদেশি টাকাতে ইউএস ডলার, কানাডিয়ান ডলার, পাউন্ড এ কনভাট করার একটি ফাংসন বানান

function currency( $amount , $type ){
    if( $type == 'dollar' ){
        $usd = ($amount * 0.012);
        return "BDT {$amount} = {$usd}";
    }else if( $type == 'pound' ){
      $pound = ($amount * 0.0088);
      return"BDT {$amount} = {$pound}";
    }else if( $type == 'canadian' ){
      $canadian = ($amount * 0.015);
      return"BDT {$amount} = {$canadian}";
    }
}
echo currency( 5 , 'pound' );

// - গ্রেড এবং জিপিএ বের করার জন্য একটি ফাংসন তৈরি করুন

function mark( $marks = 100 ){
    if( $marks >= 1 && $marks <= 32   ){
        $gpa = 0;
        $grade = 'F';
        return "GPA = " . $gpa  . "<br>" . "GRADE = " . $grade;
    }else if( $marks >= 33 && $marks <= 40 ){
        $gpa = 1.0;
        $grade = 'D';
        return "GPA = " . $gpa  . "<br>" . "GRADE = " . $grade;
    }else if( $marks >= 41 && $marks <= 50 ){
        $gpa = 2.50;
        $grade = 'C';
        return "GPA = " . $gpa  . "<br>" . "GRADE = " . $grade;
    }else if( $marks >= 51 && $marks <= 60 ){
        $gpa = 3.50;
        $grade = 'B';
        return "GPA = " . $gpa  . "<br>" . "GRADE = " . $grade;
    }else if( $marks >= 61 && $marks <= 70 ){
        $gpa = 4.0;
        $grade = 'A-';
        return "GPA = " . $gpa  . "<br>" . "GRADE = " . $grade;
    }else if( $marks >= 71 && $marks <= 80 ){
        $gpa = 4.50;
        $grade = 'A';
        return "GPA = " . $gpa  . "<br>" . "GRADE = " . $grade;
    }else if( $marks >= 81 && $marks <= 100 ){
        $gpa = 5.0;
        $grade = 'A+';
        return "GPA = " . $gpa  . "<br>" . "GRADE = " . $grade;
    }else{
        return"Sorry Your Type Is Not match";
    }
}
echo mark(55);

// -এমন একটি ফাংসন তৈরি করুন যেটাতে আপনার জন্ম সাল দিলে সে আপনার বয়স বের করে দিবে

function agecalculate( $name , $year ){
  $age = 2021 - $year ;
  return" Hello {$name} Your {$age} Years Old ";
}
echo agecalculate( "ovaydul" , 1997 );

// - একটা হেডিং এ বাংলায় লাল, সবুজ, নিল, হলুদ, বেগুনি, কাল এই রং গুলা দিয়ে হেডিং এর কালার টা চেঞ্জ করে এমন করে একটা ফাংসন বানান

function colorKullar( $head , $type ){
  if( $type == 'r' ){
    return "<h1 style=\" background-color:red; color:white  \" >" . $head . "</h1>";
  }else if( $type == 'g' ){
    return "<h1 style=\" background-color:green; color:white;  \" >" . $head . "</h1>";
  }else if( $type == 'b' ){
    return "<h1 style=\" background-color:blue; color:white;  \" >" . $head . "</h1>";
  }else if( $type == 'p' ){
    return "<h1 style=\" background-color:purple;color:white;  \" >" . $head . "</h1>";
  }else if( $type == 'bl' ){
    return "<h1 style=\" background-color:black;color:white;  \" >" . $head . "</h1>";
  }else{
    return"nothing";
  }
}
echo colorKullar( 'This Is Heading' , 'bl' );

// - বড় হাত, ছোট হাত, উভয় হাত এর লেখা কনভাসন করার জন্য একটিং ফাংসন বানান

function cplsml( $text , $type ){
  if( $type == 'c' ){
    return "<h1 style=\" text-transform:uppercase; \" >" . $text . "</h1>";
  }else if( $type == 's' ){
    return "<h1 style=\" text-transform:lowercase; \" >" . $text . "</h1>";
  }
}
  echo cplsml( 'mohammad ovaydul huqe bhuiyan' , 'c' );

// - এমন একটি ফাংসন বানান যেটা দিয়ে আয়তক্ষেত্র, বগক্ষেত্র, এবং বৃত্তে ক্ষেত্রফল বের করা যাবে

function area( $type , $length , $width = null){
  $area = (  $length * $width );
  if( $type == 'rec' ){
    return"type of rectangle = {$area}";
  }else if( $type == 'sq' ){
    $area = ($length * $length);
    return"type of square = {$area}";
  }else if( $type == 'tri' ){
        $area = ( .5 * $length * $width );
        return" type of triangle = {$area}";
  }else if( $type == 'ci' ){
    $area = ( 3.1456 * ( $length * $length ));
    return"Area of cricle = {$area}";
  }
}
echo area( 'ci' , 10 );

// - পি এইচ পি এর রিভাস ফাংসনের মতন একটি ফাংসন বানান

  function rev($name){
    return"<h1 style=\" transform: rotateY(157deg); position: absolute; \">{$name}</h1>";
  }
  echo rev('HB OVAYDUL');

  // - একটি হেডিং ফাংসন বানান যেটা দিয়ে ডাইনামিস হেডিং তৈরি করা যাবে

    function heading( $type , $text , $font_size = '25px', $font_family = 'inherit', $background = 'purple', $color = 'aqua', $body = '0px' ){
      return"<{$type} style = \" font-size: {$font_size}; font-family: {$font_family }; background: {$background}; color: {$color}; margin: {$body};\" >$text</{$type}>";
    }
    echo heading( 'h1' , 'Mohammad Ovaydul Huqe bhuiyan');

    // - একটি ইমেজ আপলোডিং ফাংসন বানান যেথানে ছবির নাম, হাইট, ওইদ দিয়ে ছবিটাকে মেনেজ কার যাবে

    function img( $src , $width = 'auto' , $height = 'auto' ){
      return"<img style = \" width: {$width}; height: {$height};\"  src=\"{$src}\" alt=\"\">";
    }
    echo img( 'images.jpg', '400px', '250px' );
  ?>




