 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/about">{{trans('navbar.watorvapor_about')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/xuniverse">{{trans('navbar.xuniverse')}}</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
 			<li>
			  <button type="button" class="btn btn-default navbar-btn language_button" value="en" >
			    <img src="{{ asset('/flags/us.svg') }}" alt="button" />
			  </button>
			</li>
 			<li>
			  <button type="button" class="btn btn-default navbar-btn language_button" value="zh" >
			    <img src="{{ asset('/flags/cn.svg') }}" alt="button" />
			  </button>
			</li>
 			<li>
			  <button type="button" class="btn btn-default navbar-btn language_button" value="ja" >
			    <img src="{{ asset('/flags/jp.svg') }}" alt="button" />
			  </button>
			</li>
			<li class="active"><a href="/">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	