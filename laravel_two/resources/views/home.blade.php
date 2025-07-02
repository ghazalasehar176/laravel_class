<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
     <h1>HOME PAGE</h1>
    {{ URL::current() }}
    <!-- or -->
    {{url()->current()}}
<!-- current url -->

<h4>
    {{URL::full()}}
     <!-- or-->
      {{url()->full()}}
</h4>
  <!-- current url with name -->
</div>
<a href="/about">about</a>
<a href="{{Route('hm')}}">OUR NAMED ROUTESS</a>