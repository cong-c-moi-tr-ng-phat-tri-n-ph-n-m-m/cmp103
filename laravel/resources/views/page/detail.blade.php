@section('title')
	{{ $tintuc->TieuDe }}
@endsection

@extends('index')

@section('content')
<!-- Page Content -->
<div class="container">
	<div class="row">

		<!-- Blog Post Content Column -->
		<div class="col-lg-9">

			<!-- Blog Post -->

			<!-- Title -->
			<h1>{{ $tintuc->TieuDe }}</h1>

			<!-- Author -->
			<p class="lead">
				by <a href="#">Admin</a>
			</p>

			<!-- Preview Image -->
			<img class="img-responsive" src="upload/tintuc/{{ $tintuc->Hinh }}" alt="Hình ảnh của bài viết">

			<!-- Date/Time -->
			<p><span class="glyphicon glyphicon-time"></span>
				@if(!empty($tintuc->created_at))
					{{ dateTimeFormat($tintuc->created_at) }}
				@else
					{{ 'Không Xác Định' }}
				@endif
			</p>
			<hr>

			<!-- Post Content -->
			<p class="lead">
				{!! $tintuc->TomTat !!}
			</p>

			<p>
				{!! $tintuc->NoiDung !!}
			</p>

		</div>

		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-3">

			<div class="panel panel-default">
				<div class="panel-heading"><b>Tin liên quan</b></div>
				<div class="panel-body">
					@foreach($tinlienquan as $tlq)
						<!-- item -->
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-5">
								<a href="tin-tuc/{{ $tlq->TieuDeKhongDau }}.html">
									<img class="img-responsive" src="upload/tintuc/{{ $tlq->Hinh }}" alt="Hình ảnh của bài viết">
								</a>
							</div>
							<div class="col-md-7">
								<a href="tin-tuc/{{ $tlq->TieuDeKhongDau }}.html"><b>{{ $tlq->TieuDe }}</b></a>
							</div>
							<p class="sum-p">
								{!! $tlq->TomTat !!}
							</p>
							<div class="break"></div>
						</div>
						<!-- end item -->
					@endforeach
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"><b>Tin nổi bật</b></div>
				<div class="panel-body">
					@foreach($tinnoibat as $tnb)
						<!-- item -->
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-5">
								<a href="tin-tuc/{{ $tnb->TieuDeKhongDau }}.html">
									<img class="img-responsive" src="upload/tintuc/{{ $tnb->Hinh }}" alt="Hình ảnh của bài viết">
								</a>
							</div>
							<div class="col-md-7">
								<a href="tin-tuc/{{ $tnb->TieuDeKhongDau }}.html"><b>{{ $tnb->TieuDe }}</b></a>
							</div>
							<p class="sum-p">
								{!! $tnb->TomTat !!}
							</p>
							<div class="break"></div>
						</div>
						<!-- end item -->
					@endforeach
					
				</div>
			</div>

		</div>

	</div>
	<!-- /.row -->
</div>
<!-- end Page Content -->
@endsection