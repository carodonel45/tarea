<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="banner_image">
                <div id="banner_description">
                    Reflections on my holiday in the United States...
                    <a href="#" class="red_button">See article <img src="images/small_arrow.png" alt="" /></a>
                </div>
            </div>

            <section>
                <article>

                    <p>Lorem ipsum dolor sit amet...</p>
                    <p>Vivamus sed libero nec mauris pulvinar facilisis ut non sem...</p>
                    <p>Phasellus ligula massa, congue ac vulputate non, dignissim at augue...</p>
                </article>
                <aside>
                    <h1>About the author</h1>
                    <img src="images/arrow.png.png" alt="" id="arrow" />

                    <p>Let me introduce myself: My name's Zozor. I was born on 23 November 2005.</p>
                    <p>A bit meager, is it not? This is why I've now decided to write my biography to let my readers know who I really am.</p>

                </aside>
            </section>


<style>
/* Definir fuentes personalizadas */

@font-face
{
    font-family: 'BallparkWeiner';
    src: url('polices/ballpark.eot');
    src: url('polices/ballpark.eot?#iefix') format('embedded-opentype'),
         url('polices/ballpark.woff') format('woff'),
         url('polices/ballpark.ttf') format('truetype'),
         url('polices/ballpark.svg#BallparkWeiner') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face
{
    font-family: 'Dayrom';
    src: url('polices/dayrom.eot');
    src: url('polices/dayrom.eot?#iefix') format('embedded-opentype'),
         url('polices/dayrom.woff') format('woff'),
         url('polices/dayrom.ttf') format('truetype'),
         url('polices/dayrom.svg#Dayrom') format('svg');
    font-weight: normal;
    font-style: normal;
}
/* Banner */

#banner_image
{
    margin-top: 15px;
    height: 200px;
    border-radius: 5px;
    background: url('images/sanfrancisco.jpg') no-repeat;
    position: relative;
    box-shadow: 0px 4px 4px #1c1a19;
    margin-bottom: 25px;
}

#banner_description
{
    position: absolute;
    bottom: 0;
    border-radius: 0px 0px 5px 5px;
    width: 99.5%;
    height: 33px;
    padding-top: 15px;
    padding-left: 4px;
    background-color: rgb(24,24,24); /* Los navegadores antiguos leerán esto */
    background-color: rgba(24,24,24,0.8); /* Los navegadores nuevos leerán esto */
    color: white;
    font-size: 0.8em;
}

.red_button
{
    display: inline-block;
    height: 25px;
    position: absolute;
    right: 5px;
    bottom: 5px;
    background: url('images/red_background.png') repeat-x;
    border: 1px solid #760001;
    border-radius: 5px;
    font-size: 1.2em;
    text-align: center;
    padding: 3px 8px 0px 8px;
    color: white;
    text-decoration: none;
}

.red_button img
{
    border: 0;
}
/* Cuerpo */

article, aside
{
    display: inline-block;
    vertical-align: top;
    text-align: justify;
}

article
{
    width: 625px;
    margin-right: 15px;
}

.cat_icon
{
    vertical-align: middle;
    margin-right: 8px;
}

article p
{
    font-size: 0.8em;
}

aside
{
    position: relative;
    width: 235px;
    background-color: #706b64;
    box-shadow: 0px 2px 5px #1c1a19;
    border-radius: 5px;
    padding: 10px;
    color: white;
    font-size: 0.9em;
}

#arrow
{
    position: absolute;
    top: 100px;
    left: -12px;
}

#zozor_picture
{
    text-align: center;
}

#zozor_picture img
{
    border: 1px solid #181818;
}

aside img
{
    margin-right: 5px;
}
footer
{
    background:  url('images/top.png') no-repeat top center, url('images/line.png') repeat-x top, url('images/shadow.png') repeat-x top;
    padding-top: 25px;
}

footer p, footer ul
{
    font-size: 0.8em;
}

footer h1
{
    font-size: 1.1em;
}

#tweet, #my_pictures, #my_friends
{
    display: inline-block;
    vertical-align: top;
}

#tweet
{
    width: 28%;
}

#my_pictures
{
    width: 35%;
}

#my_friends
{
    width: 31%;
}

#my_pictures img
{
    border: 1px solid #181818;
    margin-right: 2px;
}

#my_friends ul
{
    display: inline-block;
    vertical-align: top;
    margin-top: 0;
    width: 48%;
    list-style-image: url('images/external_link.png');
    padding-left: 2px;
}

#my_friends a
{
    text-decoration: none;
    color: #760001;
}
</style>
</html>
