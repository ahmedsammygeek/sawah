@extends('board.layouts.master')

@section('page_content')
<div class="page-header d-print-none">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
			<div class="col">
				<!-- Page pre-title -->
				<div class="page-pretitle">
					تعديل
				</div>
				<h2 class="page-title">
					التقييمات
				</h2>
			</div>
			<!-- Page title actions -->
			<div class="col-auto ms-auto d-print-none">
				<div class="btn-list">
					<a href="{{ route('board.reviews.index') }}" class="btn btn-primary d-none d-sm-inline-block" >
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M9 15l6 -6"></path>
							<circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
							<circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
							<path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"></path>
						</svg>
						عرض كافه التقييمات
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page body -->
<div class="page-body">
	<div class="container-xl">
		<div class="row row-deck row-cards">
			<div class="col-md-12">
				<form class="card" method='POST' action='{{ route('board.reviews.update' , $review ) }}' enctype="multipart/form-data" >
					@csrf
					@method('PATCH')
					<div class="card-header bg-primary">
						<h3 class="card-title text-white"> تعديل التقييم </h3>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label required"> صوره المستخدم </label>
							<div>
								<input type="file" class="form-control @error('image') is-invalid @enderror " name='image'  >
								@error('image')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> تقييم المستخدم </label>
							<div>
								<select name="rate" class='form-control form-select' id="">
									<option value="1" {{ $review->rate == 1 ? 'selected="selected"' : '' }} >1</option>
									<option value="2" {{ $review->rate == 2 ? 'selected="selected"' : '' }} >2</option>
									<option value="3" {{ $review->rate == 3 ? 'selected="selected"' : '' }} >3</option>
									<option value="4" {{ $review->rate == 4 ? 'selected="selected"' : '' }} >4</option>
									<option value="5" {{ $review->rate == 5 ? 'selected="selected"' : '' }} >5</option>
								</select>
								@error('rate')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>


						<div class="mb-3">
							<label class="form-label required"> اسم المستخدم </label>
							<div>
								<input type="text" class="form-control @error('name') is-invalid @enderror " name='name' value="{{ $review->name }}" >
								@error('name')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>



						<div class="mb-3">
							<label class="form-label required"> التعليق بالعربيه </label>
							<div>
								<input type="text" class="form-control @error('content_ar') is-invalid @enderror " name='content_ar' value="{{ $review->getTranslation('comment' , 'ar' ) }}" >
								@error('content_ar')
								<small class="form-hint text-danger"> {{ $message }} </small>
								@enderror
							</div>
						</div>


						<div class="mb-3">
							<label class="form-label"> خصائص </label>
							<div>
								<label class="form-check">
									<input class="form-check-input" name='is_active' type="checkbox" {{ $review->is_active == 1 ? 'checked' : '' }}>
									<span class="form-check-label"> السماح بالعرض </span>
								</label>
							</div>
						</div>

						<div class="mb-3">
							<label class="form-label required"> الصوره الحاليه </label>
							<div>
								<img src="{{ Storage::url('reviews/'.$review->image) }}" alt="">
							</div>
						</div>
					</div>
					<div class="card-footer text-end">
						<div class='d-flex' >
							<a href="{{ route('board.reviews.index') }}" class="btn btn-link"> تراجع </a>
							<button type="submit" class="btn btn-primary ms-auto">تعديل</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection