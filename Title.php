<?
//session_start();
//error_reporting(E_ALL);
/*
//al declarar estas constantes cambio el header
define(fontCondensed,"/fonts/DejaVuSansCondensed.ttf");
define(fontCondensedBold,"/fonts/DejaVuSansCondensed-Bold.ttf");
define(fontVerdana,"/fonts/verdanab.ttf");
define(fontMonofont,"/fonts/monofont.ttf");
define(fontTimesNewRoman,"/fonts/times.ttf");
*/
class title2
//class printTitle
{    
    const fontCondensed = "fonts/DejaVuSansCondensed.ttf";
    const fontCondensedBold = "fonts/DejaVuSansCondensed-Bold.ttf";
    const fontVerdana = "fonts/verdanab.ttf";
    const fontMonofont = "fonts/monofont.ttf";
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

    public function getListFonts()
    {    
        $listfonts = array ("fontCondensed","fontCondensedBold","fontVerdana","fontMonofont","fontTimesNewRoman");
        //$fonts = array (fontCondensed,fontCondensedBold,fontVerdana,fontMonofont,fontTimesNewRoman);
        $fonts = array (self::fontCondensed,self::fontCondensedBold,self::fontVerdana,self::fontMonofont,self::fontTimesNewRoman);
        for($i=0;$i<sizeof($listfonts);$i++)
            echo $listfonts[$i]."<br>";
        return $fonts;
    }
    
    public function setText($text)
    {
        $this->text=$text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setFilaname($filaname)
    {
        $this->filaname=$filaname;
    }

    public function getFilaname()
    {
        return $this->filaname;
    }
                          
    public function title2()
    //public function __construct()
    {    
        $this->text = "class title";
        //$this->font = fontVerdana;
        //$this->font = title2::fontVerdana;
        $this->font = self::fontVerdana;
        $this->path = "images/";
        $this->shadowcolors = array ('sred'=>180,'sgreen'=>180,'sblue'=>180,'salpha'=>126);
        $this->colors = array ('red'=>204,'green'=>0,'blue'=>0);
        $this->fontsize = 15;
        $this->point = array ('x'=>10,'y'=>25);
        $this->pointFill = array ('x'=>0,'y'=>0);
        $this->imagesize = array ('x'=>NULL,'y'=>NULL);
        $this->backgroundcolor = array ('red'=>255,'green'=>255,'blue'=>255);
    }    

//    public function __destruct() {
//        unset($this->text);
//        unset($this->font);
//        unset($this->path);
//        unset($this->shadowcolors);
//        unset($this->colors);
//        unset($this->fontsize);
//        unset($this->point);
//        unset($this->pointFill);
//        unset($this->imagesize);
//        unset($this->backgroundcolor);
//        unset($this->filaname);
//    }
    
    public function setFont($font)
    {    
        $this->font = $font;
    }    

    public function getFont()
    {    
        return $this->font;
    }    

    public function setFontSize($size)
    {    
        $this->fontsize = $size;
    }

    public function getFontSize()
    {    
        return $this->fontsize;
    }

    public function setPath($path)
    {    
        $this->path=$path;
    }
    
    public function getPath()
    {    
        return $this->path;
    }
    
    private function setPointFill($x,$y)
    { 
        $this->pointFill = array ('x'=>$x,'y'=>$y);
    }

    private function setPointFillArray($point)
    { 
        $this->pointFill=$point;
    }

    private function getPointFill()
    { 
        return $this->pointFill;
    }

    private function setXFill($x)
    { 
        $this->pointFill["x"]=$x;
    }

    private function setYFill($y)
    { 
        $this->pointFill["y"]=$y;
    }

    private function getXFill()
    { 
        return $this->pointFill["x"];
    }

    private function getYFill()
    { 
        return $this->pointFill["y"];
    }

    public function setPoint($x,$y)
    { 
        $this->point = array ('x'=>$x,'y'=>$y);
    }

    public function setPointArray($point)
    { 
        $this->point=$point;
    }

    public function getPoint()
    { 
        return $this->point;
    }

    public function setX($x)
    { 
        $this->point["x"]=$x;
    }

    public function setY($y)
    { 
        $this->point["y"]=$y;
    }

    public function getX()
    { 
        return $this->point["x"];
    }

    public function getY()
    { 
        return $this->point["y"];
    }

    public function setColorTitle($r,$g,$b)
    {    
        $this->colors = array ('red'=>$r,'green'=>$g,'blue'=>$b);
    }

    public function setColorTitleArray($colors)
    {    
        $this->colors=$colors;
    }

    public function getColorTitle()
    {    
        return $this->colors;
    }

    public function setShadowColor($sr,$sg,$sb,$sa=126)
    {    
        $this->shadowcolors = array ('sred'=>$sr,'sgreen'=>$sg,'sblue'=>$sb,'salpha'=>$sa);
    }

    public function setShadowColorArray($shadows)
    { 
        $this->shadowcolors=$shadows;
    }

    public function getShadowColor()
    { 
        return $this->shadowcolors;
    }

    public function setBackGroundColor($r,$g,$b)
    {    
        $this->backgroundcolor = array ('red'=>$r,'green'=>$g,'blue'=>$b);
    }

    public function setBackGroundColorArray($colors)
    {    
        $this->backgroundcolor=$colors;
    }

    public function getBackGroundColor()
    {    
        return $this->backgroundcolor;
    }

    public function setColorRed($r)
    {
        $this->colors["red"]=$red;
    }

    public function setColorGreen($g)
    {
        $this->colors["green"]=$g;
    }

    public function setColorBlue($b)
    {
        $this->colors["blue"]=$b;
    }

    public function getColorRed()
    {
        return $this->colors["red"];
    }

    public function getColorGreen()
    {
        return $this->colors["green"];
    }

    public function getColorBlue()
    {
        return $this->colors["blue"];
    }

    public function setShadowColorRed($r)
    {
        $this->shadowcolors["sred"]=$red;
    }

    public function setShadowColorGreen($g)
    {                                       
        $this->shadowcolors["sgreen"]=$g;
    }

    public function setShadowColorBlue($b)
    {
        $this->shadowcolors["sblue"]=$b;
    }

    public function setShadowColorAlpha($a)
    {
        $this->shadowcolors["salpha"]=$a;
    }

    public function getShadowColorRed()
    {
        return $this->shadowcolors["sred"];
    }

    public function getShadowColorGreen()
    {
        return $this->shadowcolors["sgreen"];
    }

    public function getShadowColorBlue()
    {
        return $this->shadowcolors["sblue"];
    }

    public function getShadowColorAlpha()
    {
        return $this->shadowcolors["salpha"];
    }


    public function setBackGroundColorRed($r)
    {
        $this->backgroundcolor["red"]=$red;
    }

    public function setBackGroundColorGreen($g)
    {
        $this->backgroundcolor["green"]=$g;
    }

    public function setBackGroundColorBlue($b)
    {
        $this->backgroundcolor["blue"]=$b;
    }

    public function getBackGroundColorRed()
    {
        return $this->backgroundcolor["red"];
    }

    public function getBackGroundColorGreen()
    {
        return $this->backgroundcolor["green"];
    }

    public function getBackGroundColorBlue()
    {
        return $this->backgroundcolor["blue"];
    }

    public function setImageSize($x,$y)
    { 
        $this->imagesize = array ('x'=>$x,'y'=>$y);
    }

    public function setImageSizeArray($point)
    { 
        $this->imagesize=$point;
    }

    public function getImageSize()
    { 
        return $this->imagesize;
    }

    public function setImageSizeX($x)
    { 
        $this->imagesize["x"]=$x;
    }

    public function setImageSizeY($y)
    { 
        $this->imagesize["y"]=$y;
    }

    public function getImageSizeX()
    { 
        return $this->imagesize["x"];
    }

    public function getImageSizeY()
    { 
        return $this->imagesize["y"];
    }

    protected function printTitle($texto = "texto",$fileName = NULL,$replace = false,$create = true,$align = "CENTER",$valign = "CENTER")     
    //public function printTitle($texto = "texto",$fileName = NULL,$replace = false,$create = true,$align = "CENTER",$valign = "CENTER")     
    {    
        if(is_file($fileName))
        {    if($replace)
                unlink($fileName);
            else
                return;
        }
    
//        $this->text = "class title";
//        $this->font = "/fonts/verdanab.ttf";
//        $this->path = "images/";
//        $this->shadowcolors = array ('sred'=>180,'sgreen'=>180,'sblue'=>180,'salpha'=>126);
//        $this->colors = array ('red'=>204,'green'=>0,'blue'=>0);
//        $this->fontsize = 15;
//        $this->point = array ('x'=>10,'y'=>25);
//        $this->pointFill = array ('x'=>0,'y'=>0);
//        $this->imagesize = array ('x'=>10,'y'=>25);
//        $this->backgroundcolor = array ('red'=>255,'green'=>255,'blue'=>255);
        
        //$imagen = imagecreatetruecolor(strlen($texto)*18,40);
        $imagen = imagecreatetruecolor($this->getImageSizeX(),$this->getImageSizeY()) or die('Cannot initialize new GD image stream');
        //$imagen = imagecreate($this->getImageSizeX(),$this->getImageSizeY()) or die('Cannot initialize new GD image stream');
        
//        $this->imagesize["x"] = (!is_null($this->getImageSizeX()) && $this->getImageSizeX()!=0?$this->imagesize["x"]:strlen($texto)*$this->getFontSize());
//        $this->imagesize["y"] = (!is_null($this->getImageSizeY()) && $this->getImageSizeY()!=0?$this->imagesize["y"]:strlen($texto)*($this->getFontSize()/5));

        //$this->point["x"] = (!is_null($this->getX()) && $this->getX()!=0?$this->point["x"]:($this->getImageSizeX()-strlen($texto ))/2);
        
        //$this->point["y"] = (!is_null($this->getY()) && $this->getY()!=0?$this->point["y"]:imagesy($imagen)/2);
        //$imagewidth - ($textwidth)-2
        //imagesx($imagen)
        
        //$bg = imagecolorallocate($imagen,255,255,255);
        $bg = imagecolorallocate($imagen,$this->getBackGroundColorRed(),$this->getBackGroundColorGreen(),$this->getBackGroundColorBlue());
        //imagefill($imagen,10,10,$bg);
        imagefill($imagen,0,0,$bg);
        //imagefill($imagen,$this->getXFill(),$this->getYFill(),$bg);
        
//        $color = imagecolorallocate($imagen,$this->colors["red"],$this->colors["green"],$this->colors["blue"]);
//        $sombra = imagecolorallocatealpha($imagen,$this->shadowcolors["sred"],$this->shadowcolors["sgreen"],$this->shadowcolors["sblue"],$this->shadowcolors["salpha"]);
        $color = imagecolorallocate($imagen,$this->getColorRed(),$this->getColorGreen(),$this->getColorBlue());
        $sombra = imagecolorallocatealpha($imagen,$this->getShadowColorRed(),$this->getShadowColorGreen(),$this->getShadowColorBlue(),$this->getShadowColorAlpha());
        
        $fontangle=0;
        $bbox = @imageTTFBbox($this->getFontSize(),$fontangle,$this->getFont(),$texto);
        $bbox["left"] = 0- min($bbox[0],$bbox[2],$bbox[4],$bbox[6]);
        $bbox["top"] = 0- min($bbox[1],$bbox[3],$bbox[5],$bbox[7]);
        $bbox["width"] = max($bbox[0],$bbox[2],$bbox[4],$bbox[6]) - min($bbox[0],$bbox[2],$bbox[4],$bbox[6]);
        $bbox["height"] = max($bbox[1],$bbox[3],$bbox[5],$bbox[7]) - min($bbox[1],$bbox[3],$bbox[5],$bbox[7]); 
        $textleft = $bbox["left"];
        $texttop = $bbox["top"];
        $textwidth = $bbox["width"];
        $textheight = $bbox["height"];
        
        // top:
        //imagettftext($insert, $size, $angle, $width/2-$bb_width/2, $bb_top+$pad, $col, $font, $text);
        // left:
        //imagettftext($insert, $size, $angle, $bb_left+$pad, $height/2-$bb_height/2, $col, $font, $text);
        // bottom:
        //imagettftext($insert, $size, $angle, $width/2-$bb_width/2, $height-$bb_height-$pad, $col, $font, $text);
        // right:
        //imagettftext($insert, $size, $angle, $width-$bb_width-$pad, $height/2-$bb_height/2, $col, $font, $text); 
        // center:
        //imagettftext($insert, $size, $angle, $width/2-$bb_width/2, $height/2-$bb_height/2, $col, $font, $text); 

        
        if ($align != false){
            switch (strtoupper($align)){
                case "CENTER" : 
                            //$this->point["x"] = ($this->getImageSizeX() - $textwidth)/2;
                            $this->point["x"] = ($this->getImageSizeX()/2) - ($textwidth/2);
                            break;
                case "LEFT" : 
                            //$this->point["x"] = (($this->getImageSizeX() - $textwidth)/2)/2;
                            $this->point["x"] = $textwidth + $fontangle;
                            $this->point["x"] = $textleft + $fontangle;
                            break;
                case "RIGHT" : 
                            //$this->point["x"] = (($this->getImageSizeX() - $textwidth)/2) + ((($this->getImageSizeX() - $textwidth)/2)/2); 
                            $this->point["x"] = $this->getImageSizeX() - $textwidth - $fontangle - 3; 
                            break;
            }
        }else{
            $this->point["x"] = $this->getX();
        }

        if ($valign != false){
            switch (strtoupper($valign)){
                case "MIDDLE" : 
                            //$this->point["y"] = ($this->getImageSizeY() + $textheight)/2;
                            $this->point["y"] = ($this->getImageSizeY()/2) + ($textheight/2);
                            break;
                case "TOP" : 
                            //$this->point["y"] = (($this->getImageSizeY() + $textheight)/2)/2;
                            $this->point["y"] = $texttop + $fontangle;
                            break;
                case "BOTTOM" : 
                            //$this->point["y"] = $this->getImageSizeY() + $textheight - $fontangle;
                            $this->point["y"] = (($this->getImageSizeY() + $textheight)/2) + ((($this->getImageSizeY() + $textheight)/2)/2)-3;
                            //$this->point["y"] = (($this->getImageSizeY() + $textheight)/2) + ((($this->getImageSizeY() + $textheight)/2)/2) - ($texttop/2);
                            //$this->point["y"] = (($this->getImageSizeY() + $textheight)/2) + ((($this->getImageSizeY() + $textheight)/2)/2) - ($texttop/3);
                            break;
            }
        }else{
            $this->point["y"] = $this->getY();
        }
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
                     
        if($create){
            imagegif($imagen, $fileName); 
        }
        else{
            if (!headers_sent()) {
                header('Content-Type: image/gif');
            }
            imagegif($imagen); 
        }
        imagedestroy($imagen);
    }
    
    public function setTitle($titulo = NULL,$replace = false,$create = true,$align = false,$valign = false)
    {    
        //al leer codigo HTML se mandan los headers hay que tener cuidado con eso
        if($create){
            ?>
            <div align="left" class="title">        
            <? 
        }
        $titulo = (!is_null($titulo)?$titulo:$this->getText());
        $filaname = (is_null($this->getFilaname())?$titulo:$this->getFilaname());

        
        $fontangle=0;
        $bbox = @imageTTFBbox($this->getFontSize(),$fontangle,$this->getFont(),$titulo);
        $bbox["left"] = 0- min($bbox[0],$bbox[2],$bbox[4],$bbox[6]);
        $bbox["top"] = 0- min($bbox[1],$bbox[3],$bbox[5],$bbox[7]);
        $bbox["width"] = max($bbox[0],$bbox[2],$bbox[4],$bbox[6]) - min($bbox[0],$bbox[2],$bbox[4],$bbox[6]);
        $bbox["height"] = max($bbox[1],$bbox[3],$bbox[5],$bbox[7]) - min($bbox[1],$bbox[3],$bbox[5],$bbox[7]); 
        $textwidth = $bbox["width"];
        $textheight = $bbox["height"];
        //$textwidth = abs($box[4] - $box[0]);
        //$textheight = abs($box[5] - $box[1]);
        
        //$this->imagesize["x"] = (!is_null($this->getImageSizeX())?$this->imagesize["x"]:strlen($titulo));
        //$this->imagesize["y"] = (!is_null($this->getImageSizeY())?$this->imagesize["y"]:40);

        $this->imagesize["x"] = (!is_null($this->getImageSizeX())?$this->imagesize["x"]:$textwidth*1.1);
        $this->imagesize["y"] = (!is_null($this->getImageSizeY())?$this->imagesize["y"]:$textheight*1.8);

        //$this->imagesize["x"] = (!is_null($this->getImageSizeX())?$this->imagesize["x"]=($this->getImageSizeX()<$textwidth)?$textwidth:$this->getImageSizeX():$textwidth*1.1);
        //$this->imagesize["y"] = (!is_null($this->getImageSizeX())?$this->imagesize["y"]=($this->getImageSizeY()<$textheight)?$textheight:$this->getImageSizeY():textheight*1.8);

        //$this->imagesize["x"] = (!is_null($this->getImageSizeX())?$this->imagesize["x"]=($this->getImageSizeX()==$this->imagesize["x"] && $this->imagesize["x"]!=NULL)?$textwidth*1.1:$this->getImageSizeX():$textwidth*1.1);
        //$this->imagesize["y"] = (!is_null($this->getImageSizeY())?$this->imagesize["y"]=($this->getImageSizeY()==$this->imagesize["y"] && $this->imagesize["y"]!=NULL)?$textheight*1.8:$this->getImageSizeY():$textheight*1.8);
        
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
        $this->setFilaname($namefile);
        
        $imagen = $this->path.$namefile.".gif";
        $this->printTitle($titulo,$imagen,$replace,$create,$align,$valign); 
        //$this->__destruct();   
        //$this->__construct();   
        //unset($this->imagesize["x"]);
        //unset($this->imagesize["x"]);
        unset($this->imagesize);
        if($create){
        ?>
        <img src="<? echo $imagen?>" />
        </div>    
        <?
        }
    }    
}

if(isset($_GET["text"]) || isset($_GET["color"]) || isset($_GET["bgcolor"]) || isset($_GET["align"]) || isset($_GET["valign"]) ){
    $titulo = new title2();
    switch (strtoupper($_GET["bgcolor"])){
        case "WHITE" : $titulo->setBackGroundColor(255,255,255); break;
        case "RED" : $titulo->setBackGroundColor(255,0,0); break;
        case "GREEN" : $titulo->setBackGroundColor(0,255,0); break;
        case "BLUE" : $titulo->setBackGroundColor(0,0,255); break;
        case "YELLOW" : $titulo->setBackGroundColor(255,255,0); break;
        case "BLUEGREEN" : $titulo->setBackGroundColor(0,255,0); break;
        case "ORANGE" : $titulo->setBackGroundColor(255,127,0); break;
        case "GRAY" : $titulo->setBackGroundColor(200,200,200); break;
        case "BLACK" : $titulo->setBackGroundColor(0,0,0); break;
    }
    switch (strtoupper($_GET["color"])){
        case "WHITE" : $titulo->setColorTitle(255,255,255); break;
        case "RED" : $titulo->setColorTitle(255,0,0); break;
        case "GREEN" : $titulo->setColorTitle(0,255,0); break;
        case "BLUE" : $titulo->setColorTitle(0,0,255); break;
        case "YELLOW" : $titulo->setColorTitle(255,255,0); break;
        case "BLUEGREEN" : $titulo->setColorTitle(0,255,0); break;
        case "ORANGE" : $titulo->setColorTitle(255,127,0); break;
        case "GRAY" : $titulo->setColorTitle(200,200,200); break;
        case "BLACK" : $titulo->setColorTitle(0,0,0); break;
    }
    $titulo->setShadowColor(180,180,180);
    $titulo->setTitle($_GET["text"],false,false,$_GET["align"],$_GET["valign"]);
}
//Title.php?text=cesar&color=yellow&bgcolor=red&align=center&valign=top
?>