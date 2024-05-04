@extends("layouts.user")

@section("content")
<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Profil</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
						<li class="breadcrumb-item active">Profil</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<section class="content">
		<div class="container-fluid">
			<table class="table">
				<tbody>
					<tr>
						<td>Nama</td>
						<td>Rafli Al Musthofa Pambagio</td>
					</tr>
					<tr>
						<td>NIK</td>
						<td>213243234324</td>
					</tr>
					<tr>
						<td>TTL</td>
						<td>Depok, 01 Jan 2000</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>Laki-laki</td>
					</tr>
					<tr>
						<td>No. Hp</td>
						<td>08123123234</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>kowi@gmail.com</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>RT 003, RW.003, Jatimurni, Pondok Melati, Bekasi, West Java</td>
					</tr>
					<tr>
						<td>Ibu Kandung</td>
						<td>Aefes fesfes</td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>Teknik Elektro</td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>10</td>
					</tr>
					<tr>
						<td>Program Studi</td>
						<td>Sarjana Terapan Broadband Multimedia</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
</div>
@endsection