
<script src="http://vjs.zencdn.net/4.0.4/video.js"></script>

  <video id="my_video_1" class="video-js vjs-default-skin" 
      controls preload="none" width="640px" height="357px" data-setup='{}'
      poster='http://video-js.zencoder.com/oceans-clip.jpg'>
    <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
    <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
  </video>

<style>
  /* Show the controls (hidden at the start by default) */
  .video-js .vjs-control-bar { 
    height: 30px; 
    display: block;
    }
  
    /* Make the CDN fonts accessible from the CSS */
  @font-face {
    font-family: 'VideoJS';
    src: url('http://vjs.zencdn.net/f/1/vjs.eot');
    src: url('http://vjs.zencdn.net/f/1/vjs.eot?#iefix') format('embedded-opentype'), 
      url('http://vjs.zencdn.net/f/1/vjs.woff') format('woff'),     
      url('http://vjs.zencdn.net/f/1/vjs.ttf') format('truetype');
  }

  /* Make the demo a little prettier */
  .video-js { margin: 20px auto; }

</style>