<?php /* #?ini charset="iso-8859-1"?

[ImageMagick]
IsEnabled=false

[AliasSettings]
AliasList[]
AliasList[]=tiny
AliasList[]=small
AliasList[]=medium
AliasList[]=large
AliasList[]=smallbanner
AliasList[]=largebanner
AliasList[]=listitem
AliasList[]=articleimage
AliasList[]=articlethumbnail
AliasList[]=gallerythumbnail
AliasList[]=galleryline
AliasList[]=imagelarge
AliasList[]=rss
AliasList[]=logo
AliasList[]=infoboximage
AliasList[]=billboard

[tiny]
Reference=original
Filters[]
Filters[]=geometry/scaledownonly=75;75

[small]
Reference=original
Filters[]
Filters[]=geometry/scaledownonly=100;100

[medium]
Reference=original
Filters[]
Filters[]=geometry/scaledownonly=150;150

[large]
Reference=original
Filters[]
#Filters[]=geometry/scaledownonly=600;600
Filters[]=geometry/scaledownonly=540;540

[smallbanner]
Reference=original
Filters[]
Filters[]=geometry/scalewidthdownonly=270;270

[largebanner]
Reference=original
Filters[]
Filters[]=geometry/scalewidthdownonly=540;540

[rss]
Reference=original
Filters[]
Filters[]=geometry/scale=88;31
# Width max 144 according to the RSS 1.0 specification
# Width max 400 according to the RSS 1.0 specification

[logo]
Reference=
Filters[]
Filters[]=geometry/scaleheight=36

[listitem]
Reference=
Filters[]
Filters[]=geometry/scaledownonly=130;190

[articleimage]
Reference=
Filters[]
Filters[]=geometry/scaledownonly=170;350

[articlethumbnail]
Reference=
Filters[]
Filters[]=geometry/scaledownonly=70;150

[gallerythumbnail]
Reference=
Filters[]
Filters[]=geometry/scaledownonly=105;100

[galleryline]
Reference=
Filters[]
Filters[]=geometry/scaledownonly=70;150

[imagelarge]
Reference=
Filters[]
Filters[]=geometry/scaledownonly=550;730

[infoboximage]
Reference=
Filters[]
Filters[]=geometry/scalewidth=150

[billboard]
Reference=
Filters[]
Filters[]=geometry/scalewidth=754
*/ ?>