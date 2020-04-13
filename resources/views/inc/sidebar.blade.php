<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>What is the Hub?</h4>
      <p>The Hub is greate space for Studends, Professors and Advisors to post,like ,and share blogs that fosters creativity and the transfer of knowledge.</p>
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
      <li><a target="_blank" href="https://github.com/fprinvil1/the_hub">GitHub</a></li>
    </ol>
  </div>
</div>