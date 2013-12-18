@extends('frontend/layouts/default')

{{-- Page content --}}
@section('content')

<style>
    .slides{background-color: darkgray; height: 100%;position: absolute;width: 100%;
        left: 0;top: 0;z-index: -1;}
    #next{background-color: cornflowerblue;top: 100%}
</style>
<div id="home" class="slides">
    aaaaaaaa
</div>
<div id="next" class="slides">
    bbbbbbbb
</div>


@foreach ($posts as $post)
<div class="row">
	<div class="span8">
		<!-- Post Title -->
		<div class="row">
			<div class="span8">
				<h4><strong><a href="{{ $post->url() }}">{{ $post->title }}</a></strong></h4>
			</div>
		</div>

		<!-- Post Content -->
		<div class="row">
			<div class="span2">
				<a href="{{ $post->url() }}" class="thumbnail"><img src="{{ $post->thumbnail() }}" alt=""></a>
			</div>
			<div class="span6">
				<p>
					{{ Str::limit($post->content, 200) }}
				</p>
				<p><a class="btn btn-mini" href="{{ $post->url() }}">Read more...</a></p>
			</div>
		</div>

		<!-- Post Footer -->
		<div class="row">
			<div class="span8">
				<p></p>
				<p>
					<i class="icon-user"></i> by <span class="muted">{{ $post->author->first_name }}</span>
					| <i class="icon-calendar"></i> {{ $post->created_at->diffForHumans() }}
					| <i class="icon-comment"></i> <a href="{{ $post->url() }}#comments">{{ $post->comments()->count() }} Comments</a>
				</p>
			</div>
		</div>
	</div>
</div>

<hr />
@endforeach

{{ $posts->links() }}
@stop
