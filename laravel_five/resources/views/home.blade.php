<h1> Home Laravel File</h1>

<!-- use a tag to open web pages  -->
<a href="/">welcome</a>
<a href="/about/mawra">About</a>

<!-- subview example -->
 <!-- this is main view  -->
  @include('subview.header')

  <!-- components example -->
   <x-Mycomponent msg = "user login succesfully"/>
      <x-Mycomponent msg = "user signup succesfully"/>

  
    