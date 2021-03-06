<div class="comments">
  <div class="heading text-center">
    <p class="h5 heading-title">Comments</p>
    <div class="heading-line">
      <span class="short-line"></span>
      <span class="long-line"></span>
    </div>
  </div>
  @auth
    <div id="disqus_thread"></div>
    <script>
      /*
      * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE
      * SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
      * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT:
      * https://disqus.com/admin/universalcode/#configuration-variables */

      var disqus_config = function () {
        // Replace PAGE_URL with your page's canonical URL variable
        this.page.url = "{{route('feposts.show', ['slog'=>$post->slug])}}";
        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        this.page.identifier = "Post - {{$post->slug}}";
      };

      // DON'T EDIT BELOW THIS LINE
      (function() {
        var d = document, s = d.createElement('script');
        s.src = 'https://kf01-02-blog.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
      })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  @else
  <h6 style="text-align:center">Please login to the app and Disqus to comment.</h6>
  <br><br>
  @endauth
</div>