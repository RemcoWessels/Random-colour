# Random colour - Yeah Right! style

**this app shows a random colo(u)r every time the app is opend**

Find it at [randomcolour.yeahright.org](https://randomcolour.yeahright.org/)

## What it does

The script
1. generates 3 decimal color codes (for RGB)
2. creates 2 images with the RGB codes
3. place both images in their own directory (`favicons` and `ogimages`)
4. it generates the HTML with the RGB color as background color and with the 2 images serving as `favicon` and `og:image`

## Backstory 
The whole backstory is on [Yeah Right! Studio](https://studio.yeahright.org/_projects/faviconner/).

It was the lack of a dynamic favicon (the small website icon commonly showed in browsers) following the generated random color on [randomcolour.com](https://randomcolour.com) bothered us.

See [https://github.com/mattmalin/randomcolour](https://github.com/mattmalin/randomcolour) for the code from Matt Malin.

We rewrote it to a PHP script. And later on we also added a random `og:image` to the script. That was the moment to take it out of the studio and give it an own domain.