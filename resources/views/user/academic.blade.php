@extends("layouts.user")

@section("content")
<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Marksheet Per Semester</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
						<li class="breadcrumb-item active">Akademik</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-lg-3">
					<div class="small-box bg-info">
						<div class="inner">
							<h5>Rafli Al Musthofa Pambagio</h3>
							<p class="m-0">Teknik Elektro</p>
							<p class="m-0">Sarjana Terapan Broadband Multimedia</p>
							<p class="m-0">Semester : 10</p>
						</div>
						<a href="{{ route('user.profile') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-6 col-lg-3">
					<div class="form-group">
						<label for="filter-year">Tahun</label>
						<input type="date" class="form-control" id="filter-year"/>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="form-group">
						<label for="filter-semester">Semester</label>
						<select class="form-control" id="filter-semester">
							<option>Ganjil</option>
							<option>Genap</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection