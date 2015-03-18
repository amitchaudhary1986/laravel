@extends('admin.layouts.default') {{-- Web site Title --}}
@section('title') {{{ $title }}} :: @parent @stop {{-- Content --}}
@section('content')
<!--<div class="page-header">
	<h2>{{$title}}</h2>
</div>-->

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
						<form method="POST" action="{{URL::to('admin/listing')}}"
	accept-charset="UTF-8"><input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="input-group custom-search-form">
								<input type="text" name="keyword" class="form-control" id="search_add_intq" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
							</form>
						</li>
						<li></li>
									</ul>
					
			<div id="shapeMenu">
			<table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Date</th>
                        
                      </tr>
                    </thead>
                    <tbody class="searchlist">
				   @foreach ($datas as $k => $listrecord)   
				   <tr>
                       <td>{{ $k+1 }}</td>
                        <td><a href="javascript:void(0);" onclick="loadsaveddata('{{$listrecord->data}}');">{{ $listrecord->title}}</a>
                        </td>
						<td>{{ date("d F Y",strtotime($listrecord->created_at)) }}
                        </td>
					
						</tr>
				     @endforeach
					  </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="3">  <p class="pull-left"><?php echo $datas->render(); ?></p>
                   </td>
                      </tr>
                    </tfoot>
                  </table>
			</div>
		</div>
<div id="main"  style="background:#000000;">
			<div id="mainWrapper">
				<div id="canvasWrapper">
					<div id="canvas3">
						<!--<div id="x">
							<hr id="one"></hr>
							<hr id="two"></hr>
						</div>-->
						<div id="details" style="position:relative;width:417px; height:400px;"><img src="" id="svg-console" style="display:none;"/></div>
						</div>
					
					<div class="center-align">
					<!-- <textarea id="svg-console" bind-value-to="consoleSVG" style="position:relative;" rows="6" cols="60">   </textarea>
						<a  class="btn red"  ng-click="loadSVGWithoutGrouping()" style="position:relative;">Load</a>-->
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
<script>

function loadsaveddata(data)
{
var xmldata=data;
//$('#svg-console').val('');
$('#svg-console').attr('src',data).show();


}


</script>
@stop
