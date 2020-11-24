<?php 
//checking if paramateres and file exists

if(isset($_GET["path"]) && $_GET["path"] != "")
{
    $path = $_GET["path"];
    //getting extension type (jpg, png, etc)
    $type = explode(".", $path);
    $ext = strtolower($type[sizeof($type)-1]);
    $ext = (!in_array($ext, array("jpeg","png","gif","webp"))) ? "jpeg" : $ext;
	
    //get image size
    $size = getimagesize($path);
    $width = $size[0];
    $height = $size[1];

    //get source image
    $func = "imagecreatefrom".$ext;
    $source = $func($path);
	
    //setting default values

    $new_width = $width;
    $new_height = $height;
    $k_w = 1;
    $k_h = 1;
    $dst_x =0;
    $dst_y =0;
    $src_x =0;
    $src_y =0;

    //selecting width and height
    if(!isset ($_GET["width"]) && !isset ($_GET["height"]))
    {
        $new_height = $height;
        $new_width = $width;
    }
    else if(!isset ($_GET["width"]))
    {
        $new_height = $_GET["height"];
        $new_width = ($width*$_GET["height"])/$height;
    }
    else if(!isset ($_GET["height"]))
    {
        $new_height = ($height*$_GET["width"])/$width;
        $new_width = $_GET["width"];
    }
    else
    {
        $new_width = $_GET["width"];
        $new_height = $_GET["height"];
    }

    //secelcting_offsets

        if($new_width>$width )//by width
        {
            $dst_x = ($new_width-$width)/2;
        }
        if($new_height>$height)//by height
        {
            $dst_y = ($new_height-$height)/2;
        }
        if( $new_width<$width || $new_height<$height )
        {
            $k_w = $new_width/$width;
            $k_h = $new_height/$height;

            if($new_height>$height)
            {
                $src_x  = ($width-$new_width)/2;
            }
            else if ($new_width>$width)
            {
                    $src_y  = ($height-$new_height)/2;
            }
            else
            {
                if($k_h>$k_w)
                {
                    $src_x = round(($width-($new_width/$k_h))/2);
                }
                else
                {
                    $src_y = round(($height-($new_height/$k_w))/2);
                }
            }
        }
    $output = imagecreatetruecolor( $new_width, $new_height);

    //to preserve PNG transparency
    if($ext == "png")
    {
        //saving all full alpha channel information
        imagesavealpha($output, true);
        //setting completely transparent color
        $transparent = imagecolorallocatealpha($output, 0, 0, 0, 127);
        //filling created image with transparent color
        imagefill($output, 0, 0, $transparent);
    }

		list($wid, $ht) = getimagesize($path);
		$r = $wid / $ht;	
		$ht = ceil($ht-($ht*abs($r-$wid/$ht)));
    // imagecopyresampled( $output, $source,  $dst_x, $dst_y, $src_x, $src_y, 
                        // $new_width-2*$dst_x, $new_height-2*$dst_y, 
                        // $width-2*$src_x, $height-2*$src_y);
			
	imagecopyresampled( $output, $source,  0, 0, 0, 0, 
                        $new_width-2*$dst_x, $new_height-2*$dst_y, 
                        $wid, $ht);
    //free resources
    ImageDestroy($source);

    //output image
    header('Content-Type: image/'.$ext);
    $func = "image".$ext;
    $func($output); 
    //free resources
    ImageDestroy($output);
} 
?>