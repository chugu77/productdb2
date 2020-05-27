@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                
                
                <ul class="menu">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="caret">
                      <a href="javascript:void(0);"><i class="fa fa-graduation-cap"></i> Tutorial</a>
                      <ul class="nested">
                        <li class="caret">
                          <a href="javascript:void(0);"><i class="fa fa-chrome"></i> Web Development</a>
                          <ul class="nested">
                            <li><a href="#">Blog Project</a></li>
                            <li><a href="#">CMS Project</a></li>
                            <li><a href="#">Shop Project</a></li>
                            <li><a href="#">E-learning Project</a></li>
                            <li><a href="#">Automasion Project</a></li>
                          </ul>
                        </li>
                        <li class="caret">
                          <a href="javascript:void(0);"><i class="fa fa-server"></i> Network</a>
                          <ul class="nested">
                            <li><a href="#">Comptia</a></li>
                            <li><a href="#">Windows</a></li>
                            <li><a href="#">Linux</a></li>
                            <li><a href="#">CISCO</a></li>
                            <li><a href="#">MicroTik</a></li>
                            <li><a href="#">Virtualization</a></li>
                            <li><a href="#">Security</a></li>
                          </ul>
                        </li>
                        <li class="caret">
                          <a href="javascript:void(0);"><i class="fa fa-microchip"></i> IOT</a>
                          <ul class="nested">
                            <li><a href="#">Concept</a></li>
                            <li><a href="#">Electronic</a></li>
                            <li><a href="#">Sensor</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-archive"></i> Projects</a></li>
                    <li><a href="#"><i class="fa fa-info-circle"></i> Resume</a></li>
                    <li><a href="#"><i class="fa fa-envelope-open"></i> Contact me</a></li>


            </div>
            <div class="col">2</div>
        </div>
    </div>

@endsection

    
@push('scripts')
<script>
    console.log('1');
    var toggler = document.getElementsByClassName("caret");
    var i;
    console.log(toggler);
    console.log('2');
    for (i = 0; i < toggler.length; i++) {
        console.log(i);
        toggler[i].addEventListener("click", function() {
          this.parentElement.querySelector(".nested").classList.toggle("active");
          this.classList.toggle("caret-down");
        });
    }
    console.log('3');
</script>
@endpush
{{--  
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
  --}}
