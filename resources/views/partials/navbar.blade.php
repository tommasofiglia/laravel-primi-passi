@php
  $navlinks = [
    [
      'text' => 'home',
      'link' => '/'
    ],
    [
      'text' => 'news',
      'link' => 'news'
    ],
    [
      'text' => 'about us',
      'link' => '/about_us'
    ],
    [
      'text' => 'contatti',
      'link' => '/contatti'
    ],
  ]
@endphp

<nav>

  <div class="container">
    <ul class="d-flex">
      @foreach ($navlinks as $navlink)

        <li>
          <a href="{{$navlink['link']}}">{{$navlink['text']}}</a>
        </li>

      @endforeach
    </ul>
  </div>

</nav>
