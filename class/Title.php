<?
error_reporting(E_ALL);
//define(fontCondensed,"fonts/DejaVuSansCondensed.ttf");
//define(fontCondensedBold,"fonts/DejaVuSansCondensed-Bold.ttf");
//define(fontVerdana,"fonts/verdanab.ttf");
//define(fontTimesNewRoman,"fonts/times.ttf");
class title
{	
    const fontCondensed = "fonts/DejaVuSansCondensed.ttf";
    const fontCondensedBold = "fonts/DejaVuSansCondensed-Bold.ttf";
    const fontVerdana = "fonts/verdanab.ttf";
    const fontTimesNewRoman = "fonts/times.ttf";
    private $font;
    private $text;
    private $fontsize;
    private $path;
    private $filaname;
    private $colors = array(
                                'red'=>0,
                                'green'=>0,
                                'blue'=>0,
                            );
    private $shadowcolors = array(
                                'sred'=>0,
                                'sgreen'=>0,
                                'sblue'=>0,
                                'salpha'=>0,
                            );
    private $point = array(
                                'x'=>0,
                                'y'=>0,
                            );
    private $imagesize = array(
                                'x'=>0,
                                'y'=>0,
                            );
    private $backgroundcolor = array(
                                'red'=>0,
                                'green'=>0,
                                'blue'=>0,
                            );

    function getListFonts()
    {    
        $listfonts = array ("fontCondensed","fontCondensedBold","fontVerdana","fontTimesNewRoman");
        $fonts = array (fontCondensed,fontCondensedBold,fontVerdana,fontTimesNewRoman);
        for($i=0;$i<sizeof($listfonts);$i++)
            echo $listfonts[$i]."<br>";
        return $fonts;
    }
    
    function setText($text)
    {
        $this->text=$text;
    }

    function getText()
    {
        return $this->text;
    }

    function setFilaname($filaname)
    {
        $this->filaname=$filaname;
    }

    function getFilaname()
    {
        return $this->filaname;
    }
                          
    function title()
    {    
        $this->text = "class title";
//        $this->font = fontVerdana;
        $this->font = title::fontVerdana;
        $this->path = "images/";
        $this->shadowcolors = array ('sred'=>180,'sgreen'=>180,'sblue'=>180,'salpha'=>126);
        $this->colors = array ('red'=>180,'green'=>180,'blue'=>180);
		$this->fontsize = 15;
        $this->point = array ('x'=>15,'y'=>25);
        $this->imagesize = array ('x'=>NULL,'y'=>NULL);
        $this->backgroundcolor = array ('red'=>255,'green'=>255,'blue'=>255);
    }	

    function setFont($font)
    {    
        $this->font = $font;
    }    

    function getFont()
    {    
        return $this->font;
    }    

    function setFontSize($size)
    {    
        $this->fontsize = $size;
    }

    function getFontSize()
    {    
        return $this->fontsize;
    }

    function setPath($path)
    {    
        $this->path=$path;
    }
    
    function getPath()
    {    
        return $this->path;
    }
/*
    function setPoint($x,$y)
    { 
        $this->point = array ('x'=>$x,'y'=>$y);
    }

    function setPointArray($point)
    { 
        $this->point=$point;
    }

    function getPoint()
    { 
        return $this->point;
    }

    function setX($x)
    { 
        $this->point["x"]=$x;
    }

    function setY($y)
    { 
        $this->point["y"]=$y;
    }
*/
    function getX()
    { 
        return $this->point["x"];
    }

    function getY()
    { 
        return $this->point["y"];
    }

    function setColorTitle($r,$g,$b)
    {    
        $this->colors = array ('red'=>$r,'green'=>$g,'blue'=>$b);
    }

    function setColorTitleArray($colors)
    {    
        $this->colors=$colors;
    }

    function getColorTitle()
    {    
        return $this->colors;
    }

    function setShadowColor($sr,$sg,$sb,$sa=126)
    {    
        $this->shadowcolors = array ('sred'=>$sr,'sgreen'=>$sg,'sblue'=>$sb,'salpha'=>$sa);
    }

    function setShadowColorArray($shadows)
    { 
        $this->shadowcolors=$shadows;
    }

    function getShadowColor()
    { 
        return $this->shadowcolors;
    }

    function setBackGroundColor($r,$g,$b)
    {    
        $this->backgroundcolor = array ('red'=>$r,'green'=>$g,'blue'=>$b);
    }

    function setBackGroundColorArray($colors)
    {    
        $this->backgroundcolor=$colors;
    }

    function getBackGroundColor()
    {    
        return $this->backgroundcolor;
    }

    function setColorRed($r)
    {
        $this->colors["red"]=$red;
    }

    function setColorGreen($g)
    {
        $this->colors["green"]=$g;
    }

    function setColorBlue($b)
    {
        $this->colors["blue"]=$b;
    }

    function getColorRed()
    {
        return $this->colors["red"];
    }

    function getColorGreen()
    {
        return $this->colors["green"];
    }

    function getColorBlue()
    {
        return $this->colors["blue"];
    }

    function setShadowColorRed($r)
    {
        $this->shadowcolors["sred"]=$red;
    }

    function setShadowColorGreen($g)
    {
        $this->shadowcolors["sgreen"]=$g;
    }

    function setShadowColorBlue($b)
    {
        $this->shadowcolors["sblue"]=$b;
    }

    function setShadowColorAlpha($a)
    {
        $this->shadowcolors["salpha"]=$a;
    }

    function getShadowColorRed()
    {
        return $this->shadowcolors["sred"];
    }

    function getShadowColorGreen()
    {
        return $this->shadowcolors["sgreen"];
    }

    function getShadowColorBlue()
    {
        return $this->shadowcolors["sblue"];
    }

    function getShadowColorAlpha()
    {
        return $this->shadowcolors["salpha"];
    }


    function setBackGroundColorRed($r)
    {
        $this->backgroundcolor["red"]=$red;
    }

    function setBackGroundColorGreen($g)
    {
        $this->backgroundcolor["green"]=$g;
    }

    function setBackGroundColorBlue($b)
    {
        $this->backgroundcolor["blue"]=$b;
    }

    function getBackGroundColorRed()
    {
        return $this->backgroundcolor["red"];
    }

    function getBackGroundColorGreen()
    {
        return $this->backgroundcolor["green"];
    }

    function getBackGroundColorBlue()
    {
        return $this->backgroundcolor["blue"];
    }

    function setImageSize($x,$y)
    { 
        $this->imagesize = array ('x'=>$x,'y'=>$y);
    }

    function setImageSizeArray($point)
    { 
        $this->imagesize=$point;
    }

    function getImageSize()
    { 
        return $this->imagesize;
    }

    function setImageSizeX($x)
    { 
        $this->imagesize["x"]=$x;
    }

    function setImageSizeY($y)
    { 
        $this->imagesize["y"]=$y;
    }

    function getImageSizeX()
    { 
        return $this->imagesize["x"];
    }

    function getImageSizeY()
    { 
        return $this->imagesize["y"];
    }

	function printTitle($texto,$fileName,$replace = true) 	
	{	
        if(is_file($fileName))
		{	
            if($replace)
				unlink($fileName);
			else
				return;
		}
	
        //$imagen = imagecreatetruecolor(strlen($texto)*18,40);
        $imagen = imagecreatetruecolor($this->getImageSizeX(),$this->getImageSizeY());

//        $this->imagesize["x"] = (!is_null($this->getImageSizeX()) && $this->getImageSizeX()!=0?$this->imagesize["x"]:strlen($texto)*$this->getFontSize());
//        $this->imagesize["y"] = (!is_null($this->getImageSizeY()) && $this->getImageSizeY()!=0?$this->imagesize["y"]:strlen($texto)*($this->getFontSize()/5));

        //$this->point["x"] = (!is_null($this->getX()) && $this->getX()!=0?$this->point["x"]:($this->getImageSizeX()-strlen($texto ))/2);
        
        //$this->point["y"] = (!is_null($this->getY()) && $this->getY()!=0?$this->point["y"]:imagesy($imagen)/2);
        //$imagewidth - ($textwidth)-2
        //imagesx($imagen)
        
        //$bg = imagecolorallocate($imagen,255,255,255);
        $bg = imagecolorallocate($imagen,$this->getBackGroundColorRed(),$this->getBackGroundColorGreen(),$this->getBackGroundColorBlue());
		//imagefill($imagen,0,0,$bg);
        imagefill($imagen,0,0,$bg);
		
//		$color = imagecolorallocate($imagen,$this->colors["red"],$this->colors["green"],$this->colors["blue"]);
//		$sombra = imagecolorallocatealpha($imagen,$this->shadowcolors["sred"],$this->shadowcolors["sgreen"],$this->shadowcolors["sblue"],$this->shadowcolors["salpha"]);
        $color = imagecolorallocate($imagen,$this->getColorRed(),$this->getColorGreen(),$this->getColorBlue());
        $sombra = imagecolorallocatealpha($imagen,$this->getShadowColorRed(),$this->getShadowColorGreen(),$this->getShadowColorBlue(),$this->getShadowColorAlpha());
        
        $fontangle=0;
        $box = @imageTTFBbox($this->getFontSize(),$fontangle,$this->getFont(),$texto);
        $textwidth = abs($box[4] - $box[0]);
        $textheight = abs($box[5] - $box[1]);
        $this->point["x"] = ($this->getImageSizeX() - $textwidth)/2;
        $this->point["y"] = ($this->getImageSizeY() + $textheight)/2;
        //$this->point["y"] = $this->getImageSizeY() - ($textheight/2);
        //$this->point["y"] = ($this->getImageSizeY()/2)+($textheight/2);
        
	    for($sy = 0; $sy < 10; $sy++) 
		{	
            //imprimir sombra
			for($sx = 0; $sx < 10; $sx++) 
				imagettftext($imagen,$this->getFontSize(),0,$this->getX()-15+$sx,$this->getY()+5+$sy,$sombra,$this->getFont(),$texto);            
			//imprimir texto        	
		    imagettftext($imagen,$this->getFontSize(),0,$this->getX(),$this->getY(),$color,$this->getFont(),$texto);
   		}								
		imagegif($imagen, $fileName); 
	}
    
    function setTitle($titulo=NULL,$replace=false)
    {    
        ?>
        <div align="left" class="title">        
        <? 
        $titulo = (!is_null($titulo)?$titulo:$this->getText());
        $filaname = (is_null($this->getFilaname())?$titulo:$this->getFilaname());


        $fontangle=0;
        $box = @imageTTFBbox($this->getFontSize(),$fontangle,$this->getFont(),$titulo);
        $textwidth = abs($box[4] - $box[0]);
        $textheight = abs($box[5] - $box[1]);

        $this->imagesize["x"] = (!is_null($this->getImageSizeX())?$this->imagesize["x"]:$textwidth*1.1);
        $this->imagesize["y"] = (!is_null($this->getImageSizeY())?$this->imagesize["y"]:$textheight*1.8);
        
        //$this->imagesize["x"] = (!is_null($this->getImageSizeX()) && $this->getImageSizeX()!=0?$this->imagesize["x"]:strlen($titulo)*$this->getFontSize());
        //$this->imagesize["y"] = (!is_null($this->getImageSizeY()) && $this->getImageSizeY()!=0?$this->imagesize["y"]:strlen($titulo)*($this->getFontSize()/5));

        $temptitle = strtolower($filaname);    
        $temptitle = str_replace("á","a",$temptitle);
        $temptitle = str_replace("é","e",$temptitle);
        $temptitle = str_replace("í","i",$temptitle);    
        $temptitle = str_replace("ó","o",$temptitle);
        $temptitle = str_replace("ú","u",$temptitle);
        $temptitle = str_replace("ñ","n",$temptitle);
    
        $namefile = "";
        $tok = strtok($temptitle," ");
        while ($tok !== false) 
        {    
            $namefile.= $tok;
            $tok = strtok(" \n\t");    
        }    
        
        $imagen = $this->path.$namefile.".gif";
        $this->printTitle($titulo,$imagen,$replace);    
        ?>
        <img src="<? echo $imagen?>" />
        </div>    
        <?
    }    
}
?>