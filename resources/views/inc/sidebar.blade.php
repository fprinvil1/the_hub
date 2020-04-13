<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>
  
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      @foreach($archives as $archive)
        <li><a href="/posts/?month={{$archive->month_val}}&&year={{$archive->year}}">{{$archive->month}} {{$archive->year}}</a></li>
      @endforeach
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a target="_blank" href="https://github.com/fprinvil1/the_hub"><img style="height: 20%;width: 20%; " src="/storage/webpage_images/github.png"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ol>
  </div>
</div>