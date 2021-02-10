@php
  $footlinks = [
    [
      'text' => 'Termini e condizioni'
    ],
    [
      'text' => 'Social'
    ],
    [
      'text' => 'Scegli una lingua'
    ],
    [
      'text' => 'Termini e condizioni'
    ],
    [
      'text' => 'Developed by Tommaso Figlia'
    ],
  ]
@endphp

<style>
  footer{
    width: 100%;
    height: 100px;
    background-color: black;
    position: fixed;
    bottom: 0;
  }
  footer a{
    color: white;
  }
  footer ul{
    padding-top: 5px;
    margin-left: 30px;
  }
</style>

<footer>
<ul>
  @foreach ($footlinks as $footlink)
    <li>
      <a href="#">{{$footlink['text']}}</a>
    </li>
  @endforeach
</ul>
</footer>
