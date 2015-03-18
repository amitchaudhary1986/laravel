@extends('admin.layouts.default') {{-- Web site Title --}}
@section('title') {{{ $title }}} :: @parent @stop {{-- Content --}}
@section('content')
<!--<div class="page-header">
	<h2>{{$title}}</h2>
</div>-->

<style>
#panel {
    padding: 10px;
    display: none;
}
</style>
<div id="sidebar">
<span class="hello"> {{ Lang::get('admin/admin.welcome') }}!</span>
							<span class="name"> {{{ Auth::user()->name }}}</span><span  style="float:right;"><a href="{{URL::to('admin/listing')}}"
							{{ (Request::is('admin/listing') ? ' class=active' : '') }}> <i
								class="glyphicon glyphicon-tasks"></i><span
								class="hidden-sm text"> Listing</span></a> || <a href="{{{ URL::to('auth/logout') }}}" class="name"> {{
								Lang::get('site/site.logout') }}</a></span>
			
			<span id="msg"></span>
			<ul class="nav" id="side-menu">
			<hr />
						<li class="sidebar-search">
							<div class="input-group custom-search-form">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</li>
						<li></li>
									</ul>
						<h2>Place the form on the canvas</h2>
			<div id="shapeMenu">
				<ul>
					<li><a href="#"  ng-click="addRect()"><img src="{{asset('assets/admin/images/square.jpg')}}" alt="Square"/></a></li>
					<li><a href="#" ng-click="addCircle()"><img src="{{asset('assets/admin/images/circle.jpg')}}" alt="Circle"/></li>
					<li><a href="#"  ng-click="addPolygon()"><img src="{{asset('assets/admin/images/poly.jpg')}}" alt="Poly"/></a></li>
					<li>
          <a class="btn red clear" ng-click="confirmClear()">Clear Area</a>
        </li>
           <li> <a class="btn red" id="remove-selected" ng-click="removeSelected()">
              Remove selected shape
            </a>
          </li>
	
				</ul>
			</div>
		</div>
		
<div id="main" style="background:#000000;">
			<div id="mainWrapper" >
				<div id="canvasWrapper">
					<div id="canvas3">
						<div id="x">
							<hr id="one"></hr>
							<hr id="two"></hr>
						</div>
						<div id="details" style="position:relative;width:417px;"><div class="canvas-container" style="width: 417px; height: 400px; position: relative; -webkit-user-select: none;"><canvas id="canvas" width="417" height="400" class="lower-canvas" style="position: absolute; width: 417px; height: 400px; left: 0px; top: 0px; -webkit-user-select: none;"></canvas><canvas class="upper-canvas " width="417" height="400" style="width: 417px; height: 400px; left: 0px; top: 0px; -webkit-user-select: none; cursor: default;"></canvas></div></div>
						<div id="panel" ><input type="text" name="title" id="title" class="form-control" placeholder="Please Enter The Title" style="position:relative;" required style="width:150px;" /><br /><div class="center-align">
					<a  class="btn red" id="rasterize" ng-click="rasterize()"  style="position:relative;">Export</a>
						
						
					</div></div>
					</div>
					<div class="center-align">
					<a  class="btn red" id="rasterize-jsons"  style="position:relative;">Export</a>
						
						
					</div>					
				</div>
			</div>
		</div>




<script>

  (function() {

    if (document.location.hash !== '#zoom') return;

    function renderVieportBorders() {
      var ctx = canvas.getContext();

      ctx.save();

      ctx.fillStyle = 'rgba(0,0,0,0.1)';

      ctx.fillRect(
        canvas.viewportTransform[4],
        canvas.viewportTransform[5],
        canvas.getWidth() * canvas.getZoom(),
        canvas.getHeight() * canvas.getZoom());

      ctx.setLineDash([5, 5]);

      ctx.strokeRect(
        canvas.viewportTransform[4],
        canvas.viewportTransform[5],
        canvas.getWidth() * canvas.getZoom(),
        canvas.getHeight() * canvas.getZoom());

      ctx.restore();
    }

    $(canvas.getElement().parentNode).on('mousewheel', function(e) {

      var newZoom = canvas.getZoom() + e.deltaY / 300;
      canvas.zoomToPoint({ x: e.offsetX, y: e.offsetY }, newZoom);

      renderVieportBorders();

      return false;
    });

    var viewportLeft = 0,
        viewportTop = 0,
        mouseLeft,
        mouseTop,
        _drawSelection = canvas._drawSelection,
        isDown = false;

    canvas.on('mouse:down', function(options) {
      isDown = true;

      viewportLeft = canvas.viewportTransform[4];
      viewportTop = canvas.viewportTransform[5];

      mouseLeft = options.e.x;
      mouseTop = options.e.y;

      if (options.e.altKey) {
        _drawSelection = canvas._drawSelection;
        canvas._drawSelection = function(){ };
      }

      renderVieportBorders();
    });

    canvas.on('mouse:move', function(options) {
      if (options.e.altKey && isDown) {
        var currentMouseLeft = options.e.x;
        var currentMouseTop = options.e.y;

        var deltaLeft = currentMouseLeft - mouseLeft,
            deltaTop = currentMouseTop - mouseTop;

        canvas.viewportTransform[4] = viewportLeft + deltaLeft;
        canvas.viewportTransform[5] = viewportTop + deltaTop;

        canvas.renderAll();
        renderVieportBorders();
      }
    });

    canvas.on('mouse:up', function() {
      canvas._drawSelection = _drawSelection;
      isDown = false;
    });
  })();

</script>
    <script>
      (function(){
        var mainScriptEl = document.getElementById('main');
        if (!mainScriptEl) return;
        var preEl = document.createElement('pre');
        var codeEl = document.createElement('code');
        codeEl.innerHTML = mainScriptEl.innerHTML;
        codeEl.className = 'language-javascript';
        preEl.appendChild(codeEl);
        document.getElementById('bd-wrapper').appendChild(preEl);
      })();
    </script>

    <script>
(function() {
  fabric.util.addListener(fabric.window, 'load', function() {
    var canvas = this.__canvas || this.canvas,
        canvases = this.__canvases || this.canvases;

    canvas && canvas.calcOffset && canvas.calcOffset();

    if (canvases && canvases.length) {
      for (var i = 0, len = canvases.length; i < len; i++) {
        canvases[i].calcOffset();
      }
    }
  });
})();
</script>
	
@stop
